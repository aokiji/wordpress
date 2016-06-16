install apache:
  pkg.installed:
    - pkgs:
      - httpd
      - php
      - php-mysql

create wordpress db:
  mysql_database.present:
    - name: wordpress

download wordpress source:
  archive.extracted:
    - name: /var/www/html/
    - archive_format: tar
    - if_missing: /var/www/html/wordpress
    - source: https://wordpress.org/wordpress-4.5.2.tar.gz
    - source_hash: "sha1=bab94003a5d2285f6ae76407e7b1bbb75382c36e"

configure wordpress:
  file.managed:
    - name: /var/www/html/wordpress/wp-config.php
    - source: salt://wordpress/wp-config.php

configure apache:
  file.managed:
    - name: /etc/httpd/conf.d/wordpress.conf
    - source: salt://wordpress/apache.conf

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
