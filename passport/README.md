## Laravel Passport

composer self-update

composer global remove laravel/installer
composer global update
composer global require laravel/installer

laravel new laravel-12-passport

php artisan make:controller Api/AuthenticationController

php artisan install:api --passport

php artisan passport:install

php artisan passport:client --personal
