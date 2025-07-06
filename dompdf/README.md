# Laravel DOMPDF
composer self-update

Si hay problemas con la instalación de Laravel hay que ejecutar estos comandos:
```
composer global remove laravel/installer
composer global update
composer global require laravel/installer

// Instalando Laravel
laravel new laravel-12-pdf

// Instalando DOMPDF
composer require barryvdh/laravel-dompdf

// Publicar las configuraciones predeterminadas	
// Este comando permite copiar directorios y/o archivos desde la ubicación original de un paquete de un tercero (carpeta vendor) a nuestro proyecto, normalmente con uno, dos o tres fines:
- Configurar el paquete instalado.
- Personalizar/modificar el paquete instalado.
- Hacer que funcione correctamente el paquete (es posible que se instalen archivos en la carpeta public que no podrían ser leídos de otra forma).
Normalmente es el creador del paquete quien define qué es "publicable" o en otras palabras, qué se puede copiar a las carpetas del proyecto.

php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"

// Creando el controlador con Artisan
php artisan make:controller PdfGeneratorController

// Estableciendo ruta
Route::get('/resume', [PdfGeneratorController::class, 'index']);

```
