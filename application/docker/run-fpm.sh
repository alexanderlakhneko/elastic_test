#!/bin/sh
php-fpm -D | touch /app/storage/logs/laravel.log | tail -f /app/storage/logs/laravel.log
