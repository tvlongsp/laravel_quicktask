# laravel_quicktask

## Clone code

    git clone git@github.com:tvlongsp/laravel_quicktask.git quickstart

## Install

    cd quickstart

    composer install

## Create and setup database connection
###### Create a database, ex: laravel_quicktask
###### Open .env and edit configuration for connection, for example:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_DATABASE=laravel_quicktask
    DB_USERNAME=root
    DB_PASSWORD=
    ```
###### Exceute command: 

    php artisan migrate
