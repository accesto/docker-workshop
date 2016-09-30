#!/bin/bash

docker run --rm -t -i -v $PWD:/app -p 8082:80 webdevops/php-apache:alpine-3-php7
