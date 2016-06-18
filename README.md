# Maquina virtual con Wordpress

El objetivo es crear una maquina virtual con wordpress de tal forma que cumpla los siguientes requisitos:

1. Sistema Operativo CentOS 6.7
2. Se debe crear un usuario "monitoring" con una clave SSH definida en "salt pillar".
3. Proveer de servicio de base de datos mediante MySQL, escuchando (solo) en localhost (tcp + unix sockets), y con un usuario con role administrador "sqladmin" con password "samplepass".
    La versión de mysql a emplear es indiferente.
4. Publicar un wordpress, escuchando en 0.0.0.0, con un sitio/blog de ejemplo, diferente al por defecto (puede ser un blog con un mero articulo "hello world").
    La versión de wordpress a emplear es indiferente.
5. Desplegar phpmyadmin, configurado para ser accesible en 0.0.0.0, con credenciales iniciales desplegadas a partir de datos en salt pillar.
   La versión de wordpress a emplear es indiferente.
6. En la medida de lo posible, el software a instalar en la maquina virtual deberá ser mediante paquetes RPM, obtenidos/instalados a partir de repositorios oficiales, como EPEL.
    Todos los requisitos anteriores, deberán ser implementados/provisionados mediante salt.

## Comenzando

Simplemente levantar vagrant y esperar
```
vagrant up
```

## Servicios

La maquina se expone en una red privada con ip 192.168.33.10. Y expone los siguientes servicios:

* wordpress: http://192.168.33.10/wordpress
* phpMyAdmin: http://192.168.33.10/phpMyAdmin
