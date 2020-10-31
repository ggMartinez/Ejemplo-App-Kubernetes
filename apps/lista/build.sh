#!/bin/bash

IMG_NAME="ggmartinez/test:lista"

docker login
docker build . -t $IMG_NAME
docker push $IMG_NAME 
docker logout
