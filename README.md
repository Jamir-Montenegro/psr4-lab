#  Implementación de Autoload PSR-4 con Composer

Proyecto desarrollado para el curso de **Desarrollo de Software VII** - Universidad Tecnológica, Facultad de Ingeniería en Sistemas Computacionales.

## 📋 Descripción

Este laboratorio demuestra la implementación del estándar **PSR-4** para la carga automática de clases en PHP utilizando **Composer Autoload**, eliminando la necesidad de sentencias `include` o `require` manuales.

---

## 🛠️ Guía de Instalación

Sigue estos pasos para ejecutar el proyecto en tu entorno local:

### Requisitos Previos
- PHP 7.4 o superior
- Composer instalado globalmente

### Pasos de Instalación

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/TU_USUARIO/psr4-lab.git

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

<img width="1258" height="225" alt="image" src="https://github.com/user-attachments/assets/7e501c1b-4f06-4766-b905-e423ed0b49f7" />


##  Pruebas de Ejecución
Al ejecutar `php index.php`, la consola mostrará:
```bash
$ php index.php
Estudiante: Carlos Méndez (ID: 2026001) - Carrera: Ingeniería en Sistemas
✅ Matrícula exitosa para Carlos Méndez.

    Conclusiones Técnicas
Mantenibilidad: Al eliminar include o require manuales, agregar nuevas clases solo requiere crear el archivo en la carpeta correcta. No es necesario modificar un archivo de configuración global ni actualizar rutas manualmente.
Eficiencia de Memoria (Lazy Loading): Composer utiliza carga bajo demanda. Las clases solo se leen en memoria cuando se instancian o se referencian con use, lo que reduce significativamente el consumo de RAM y mejora el tiempo de carga inicial del servidor.
Estandarización (PSR-4): Seguir este estándar garantiza que el código sea legible y compatible con cualquier desarrollador o equipo. Además, facilita la integración futura con frameworks modernos y herramientas de testing automatizado.
🛡️ Higiene del Repositorio
Se incluye .gitignore para excluir la carpeta vendor/, asegurando que cada clon del proyecto genere su propio autoloader local mediante Composer.
