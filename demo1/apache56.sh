#!/bin/bash

docker run --rm -t -i -v $PWD:/var/www/html -p 8081:80 php:5.6-apache 
