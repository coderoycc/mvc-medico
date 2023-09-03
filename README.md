# MVC con DOCKER
* Creamos la imagen con el comando `docker build -t nombreTag <directorio del archivo Dockerfile>`
* Desde ahora en adelante se puede ejecutar la imagen con la etiqueta.

* Mantener activamente el cambio de ficheros en docker 
* docker run -p 5000:80 -d -v $(pwd)/:/var/www/html/ app-mvc
