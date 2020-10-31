# Ejemplo de aplicaciones en Kubernetes

## Introduccion
Este repo tiene un ejemplo de 2 aplicaciones en PHP, de las cuales se construye una imagen de docker para cada uno, se pushea a un registry de imagenes, y luego se puede despegar en un cluster de Kubernetes.

Las aplicaciones son muy basicas, una es un formulario de carga de personas, y la otra es una lista de las personas cargadas. No contempla tener una base de datos en Kubernetes, sino que este en un servidor externo.

Las aplicaciones son muy basicas, y el codigo mejorable, pero el foco de este repo es mostrar los deployments en Kubernetes, y no la complejidad o buenas practicas de las aplicaciones en si.

Tiene la mayor cantidad de comentarios posibles en cada manifest de Kubernetes para mas entendimiento.

## Detalles

- El repositorio de imagenes usado es 192.168.5.3:5000 (uno instalado en la escuela). Obviamente si se quiere utilizar en otro caso, este valor se debe cambiar en los scripts build.sh dentro de las aplicaciones, y en los manifest de deployments de Kubernetes.

- Las credenciales de la base de datos estan definidas en los ConfigMaps. Si se quiere conectar a una base de Datos, se deben cambiar los valores en los ConfigMaps.

