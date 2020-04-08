### Instalación
- [Descargar e instalar el Xampp con php 7.2 en adelante](https://www.apachefriends.org/download.html "Descargar el Xampp con php 7.2 en adelante")
- Una vez finalizada la instalación, nos dirigimos a la carpeta seleccionada. 
	Dentro de */xampp/php/ext/ copiamos los archivos que se encuentran dentro del repositorio en la carpeta ./instalacion/  php_mongodb.dll
- Abrir el Xampp, antes de iniciar el servicio de Apache, debemos modificar el php.ini ,agregamos la linea 
> extension=php_mongodb.dll
- Guardamos los cambios e iniciamos Apache
- El siguiente paso es correr un dump de la base de datos en localhost/phpmyadmin
1. creamos una base de datos llamada "foro" 
2. Corremos el dump "script-inicial.sql" que se encuentra en la carpeta del repositorio
3. La base de datos tiene un usuario admin registrado 
> usuario: admin
> contraseña: admin

- Instalación de Mongodb
1. [Antes de descargar mongoDB hay que registrarse](https://www.mongodb.com/ "Antes de descargar mongoDB hay que registrarse")
2. Una vez descargado e instalado hay que agregar la ruta a mongo al path del sistema.
3. Levantamos el servicio ejecutando "mongod" en una consola
4.  En otra consola ejecutamos
> - mongo 
> - use "foro"
> - db.createCollection("publicaciones")

- Finalmente clonamos el repositorio en la carpeta donde instalamos el Xampp/htdocs

**Importante: en caso de querer crear la base de datos con otro nombre o si tenemos otras credenciales para acceder a la base de datos, hay que cambiar el archivo que se encuentra en c:/xampp/htdocs/foro/application/config/database.php con los datos correspondientes**




Observaciones:
1. El sistema está desarrollado en php 7.2, mariadb y mongodb. En el frontend se utilizó bootstrap (popper) + jquery

2. El js debería estar separado en archivos individuales y usualmente los "comprimo" para mayor eficiencia y seguridad en [esta página](https://obfuscator.io/ "esta página"). En este caso para una mayor facilidad de lectura de codigo el JS está incluido en el HTML.

3. Debería existir un páginador en el caso de que el foro escale, a fines practicos tampoco fue considerado
