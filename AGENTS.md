# AGENTS.md

## Proyecto
- Backend Laravel 8 (`app/`, `routes/`, `database/`).
- Entorno local típico: XAMPP en Windows (PowerShell).
- Este repo incluye `vendor/`; evita modificar dependencias salvo que se pida explícitamente.

## Flujo recomendado
- Lee y edita principalmente en `app/`, `routes/`, `resources/`, `database/`, `config/`.
- Evita tocar `vendor/`, `storage/`, `bootstrap/cache/` a menos que sea necesario.
- Mantén cambios mínimos y coherentes con Laravel 8.

## Comandos útiles
- Instalar dependencias PHP: `composer install`
- Generar clave: `php artisan key:generate`
- Migraciones: `php artisan migrate`
- Migraciones con seed: `php artisan migrate --seed`
- Limpiar cachés: `php artisan optimize:clear`
- Ejecutar tests: `vendor/bin/phpunit`
- Assets (si aplica):
  - Dev: `npm run dev`
  - Prod: `npm run prod`

## Base de datos
- Variables en `.env` (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
- Si hay un dump, prioriza restaurarlo antes de correr migraciones si el usuario lo indica.
- Verifica que el driver (`DB_CONNECTION`) coincida con el dump (p. ej. `mysql`).

## Documentación rápida
- Rutas web: `routes/web.php`
- Rutas API: `routes/api.php`
- Configuración: `config/`

