# MVC con DOCKER

* Creamos la imagen con el comando `docker build -t nombreTag <directorio del archivo Dockerfile>`
* Desde ahora en adelante se puede ejecutar la imagen con la etiqueta.
* Para sql server ejecuta el comando `docker pull alexk002/sqlserver2019_demo:1`
* Para ejecutar la imagen   `docker run -p 1433:1433 -d <id-img>`

* Antes comandos a ejecutar en docker file
    * apt update
    * apt install software-properties-common
* Mantener activamente el cambio de ficheros en docker 
* docker run -p 5000:80 -d -v $(pwd)/:/var/www/html/ app-mvc
    * En windows se debe copiar la ruta completa


# Docker compose
* Para ejecutarlo solo digitamos `docker-compose up -d` despues o cuando ya existe el contenedor `docker-compose up -d nombreConte`
