install apache:
  pkg.installed:
    - pkgs:
      - httpd
      - php
      - php-mysql
      - wordpress

create wordpress db:
  mysql_database.present:
    - name: wordpress

configure wordpress:
  file.managed:
    - name: /etc/wordpress/wp-config.php
    - source: salt://wordpress/wp-config.php
    - user: apache
    - group: apache

configure apache:
  file.managed:
    - name: /etc/httpd/conf.d/wordpress.conf
    - source: salt://wordpress/apache.conf
    - watch_in:
      - service: httpd

change wordpress permissions:
  file.directory:
    - name: /usr/share/wordpress
    - user: apache
    - group: apache
    - recurse:
      - user
      - group

start httpd service:
  service.running:
    - name: httpd
    - enable: True

configure wordpress admin account:
  http.query:
    - name: 'http://localhost/wordpress/wp-admin/install.php?step=2'
    - method: POST
    - status: 200
    - data: {
      weblog_title: 'admin',
      user_name: 'admin',
      pass1-text: 'admin',
      pw_weak: 'on',
      admin_email: 'admin@local.net',
      admin_password: 'admin',
      admin_password2: 'admin',
    }

modify default page:
  mysql_query.run:
    - database: wordpress
    - query: "UPDATE wp_posts SET post_content = 'This is running in Vagrant!!!' WHERE post_title = 'Hello world!'"
