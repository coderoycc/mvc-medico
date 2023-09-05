# MVC con DOCKER

* Creamos la imagen con el comando `docker build -t nombreTag <directorio del archivo Dockerfile>`
* Desde ahora en adelante se puede ejecutar la imagen con la etiqueta.
* La base de datos se ejecuta con el docker-compose.yml
* Para ejecutar la imagen   `docker run -p 1433:1433 -d <id-img>`

* Mantener activamente el cambio de ficheros en docker 
* docker run -p 5000:80 -d -v $(pwd)/:/var/www/html/ app-mvc
    * En windows se debe copiar la ruta completa
    * Mejor si se ejecuta el comando desde cmd      

# Docker compose
* Para ejecutarlo solo digitamos `docker-compose up -d` despues o cuando ya existe el contenedor `docker-compose up -d nombreConte`


# NOTAS.
* Los contenedores no son visibles entre si en el mismo entorno DOCKER.
* Para que se puedan ver necesitan estar en una misma red.
