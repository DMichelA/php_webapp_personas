# php_webapp_personas
Insert y View con PHP y Sqlite3 

## Docker Image
docker build -t php_sqlite:v1 . 

## Container
docker run -it -v /workspace/gitpod_php/webapp:/webapp -p 8080 --name php -h php php_sqlite:v1

## Database
* Crear base de datos
sqlite3 agenda.db
* Crear esquema dentro de la base de datos
sqlite>.read schema.sql
* Visualizar tablas en la base de datos 
sqlite>.table
* Habilitar cabecera en una consulta
sqlite> .header on
sqlite> select * from personas;

## Correr PHP server
$cd /webapp
$php -S 0.0.0.0:8080

## Docker Hub
docker tag php_sqlite:v1 michiduran/php_sqlite:v1
docker push michiduran/php_sqlite:v1