#!/bin/bash

cp /server_srcs/default_index_off /etc/nginx/sites-available/default 

service nginx restart
