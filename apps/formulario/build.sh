#!/bin/bash

# REGISTRY="192.168.5.3:5000"
IMG_NAME="ggmartinez/test:reporte-form"

docker login 
docker build . -t $IMG_NAME
docker push $IMG_NAME 
docker logout

