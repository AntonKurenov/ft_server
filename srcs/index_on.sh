#!/bin/bash

cp /server_srcs/default_index_on /etc/nginx/sites-available/default 

service nginx restart
