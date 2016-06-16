install mysqld:
  pkg.installed:
    - pkgs: 
      - mysql-server
      - MySQL-python

configure listen:
  ini.options_present:
    - name: /etc/my.cnf
    - sections: 
        mysqld:
          bind-address: 127.0.0.1

start mysqld:
  service.running:
    - name: mysqld
    - enable: True

create mysql user:
  mysql_user.present:
    - name: sqladmin
    - password: samplepass

grant mysql user privileges:
  mysql_grants.present:
    - user: sqladmin
    - grant: all privileges
    - database: '*.*'
    - host: localhost
