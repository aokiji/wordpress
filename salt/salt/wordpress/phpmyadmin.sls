install phpmyadmin:
  pkg.installed:
    - pkgs:
      - phpMyAdmin 

configure apache phpMyAdmin:
  file.managed:
    - name: /etc/httpd/conf.d/phpMyAdmin.conf
    - source: salt://wordpress/phpMyAdmin.conf
    - watch_in:
      - service: httpd

configure phpMyAdmin:
  file.managed:
    - name: /etc/phpMyAdmin/config.inc.php
    - template: jinja
    - source: salt://wordpress/phpMyAdmin.config.inc 
    - defaults:
      username: {{ pillar['phpMyAdmin']['username'] }}
      password: {{ pillar['phpMyAdmin']['password'] }}
