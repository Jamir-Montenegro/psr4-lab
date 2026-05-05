# 📦 Implementación de Autoload PSR-4 con Composer

## 🛠️ Guía de Instalación
1. Clona el repositorio: `git clone <URL_DEL_REPO>`
2. Entra al directorio: `cd psr4-lab`
3. Genera el autoloader: `composer install` *(o `composer dump-autoload` si solo modificas `composer.json`)*
4. Ejecuta el proyecto: `php index.php`

## 🗂️ Estructura de Archivos y Mapeo PSR-4
El prefijo de namespace `App\` está mapeado a la carpeta física `src/`.

| Namespace          | Ruta Física        | Clase de Ejemplo       |
|--------------------|--------------------|------------------------|
| `App\Models\`      | `src/Models/`      | `Student.php`          |
| `App\Services\`    | `src/Services/`    | `EnrollmentService.php`|

> ✅ Gracias a PSR-4, Composer resuelve automáticamente la ubicación de cada clase según su jerarquía de carpetas y nombre de archivo.

## 🧪 Pruebas de Ejecución
Al ejecutar `php index.php`, la consola mostrará:
```bash
$ php index.php
Estudiante: Carlos Méndez (ID: 2026001) - Carrera: Ingeniería en Sistemas
✅ Matrícula exitosa para Carlos Méndez.