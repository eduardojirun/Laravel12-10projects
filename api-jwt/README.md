# Laravel API JWT

## ¿Que es JWT?

JWT significa JSON Web Token y es un estándar abierto (RFC 7519) que define una forma compacta y autónoma de transmitir información de forma segura entre partes como un objeto JSON. JWT se usa comúnmente para autorización, intercambio de información, etc. Ahora que tenemos una idea general del tema, procederemos a crear la aplicación.

## Requisitos

- PHP >= 8.2
- Node >= 18.18.2
- NPM >= 9.8.1
- Composer >= 2.8.6
- Laravel Installer >= 5.12.2

## Flujo de instalación
```
// Instalando Laravel
laravel new laravel-12-jwt

// Habilitando API
php artisan install:api
```

Actualizando la excepción de autenticación de nuestro middleware de API para que no redirija al inicio de sesión, sino que genere una excepción en:

```
- bootstrap/app.php

// Instalando la última versión del paquete JWT
composer require php-open-source-saver/jwt-auth

// Publicar el paquete dde configuración
php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"

// añadir los valores de configuración JWT al archivo .env
php artisan jwt:secret

// Actualizando las guards
update auth guard en:
config/auth.php

```
