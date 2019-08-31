#!/bin/bash 

while [ 0 -le 1 ]
do
	cd ~/code/weibo
	php artisan db:seed
	echo 123;
done
