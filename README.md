<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Br4Bet Challenger

Challenge developed for the selection process, 
which consisted of creating a web application using the Laravel framework to integrate
with the Brazilian ZIP Code API, in addition to a simple authentication system.

## Requirements

Before you begin, ensure you have met the following requirements:

- PHP (version 8.2.4)
- Composer (version 2.5.7)
- Database (MySQL)


## Clone the project

``` bash
# Clone
git clone https://github.com/ppedroalves/desafio-br4bet.git

# Acess
cd your-project
```


## Config

``` bash
# Composer depedencies
composer install

# .env file
configure your .env file with your database settings

# Run database migrations
php artisan migrate

# Create a symbolic link storage/app/public to public/storage/
php artisan storage:link

```


## Run


``` bash
# Start the dev server
php artisan serve

```

