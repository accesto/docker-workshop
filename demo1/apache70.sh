#!/bin/bash

docker run --rm -t -i -v $PWD:/var/www/html -p 8082:80 php:7.0-apache 
