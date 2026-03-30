# AGENTS.md

## Proyecto
- Backend Laravel 8 (`app/`, `routes/`, `database/`).
- Entorno local tipico: Windows + PowerShell + Docker.
- Este repo incluye `vendor/`; evita modificar dependencias salvo que se pida explicitamente.
- Produccion se sirve en `https://clickguau.com`.

## Flujo recomendado
- Lee y edita principalmente en `app/`, `routes/`, `resources/`, `database/`, `config/`.
- Evita tocar `vendor/`, `storage/`, `bootstrap/cache/` a menos que sea necesario.
- Manten cambios minimos y coherentes con Laravel 8.
- Si el objetivo es producir despliegue real en Dokploy, toma como referencia la rama local `dokploy-main`.
- Este clon tiene `origin` apuntando a `digitalbitsolutions/clickguauback`, pero Dokploy despliega desde `sttildeveloper/clickguauback`.
- Para publicar cambios productivos del backend, empuja `dokploy-main` a `sttildeveloper/clickguauback:main`.

## Comandos utiles
- Instalar dependencias PHP: `composer install`
- Generar clave: `php artisan key:generate`
- Migraciones: `php artisan migrate`
- Migraciones con seed: `php artisan migrate --seed`
- Limpiar caches: `php artisan optimize:clear`
- Ejecutar tests: `vendor/bin/phpunit`
- Assets (si aplica):
  - Dev: `npm run dev`
  - Prod: `npm run prod`

## Base de datos
- Variables en `.env` (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
- Si hay un dump, prioriza restaurarlo antes de correr migraciones si el usuario lo indica.
- Verifica que el driver (`DB_CONNECTION`) coincida con el dump (por ejemplo `mysql`).

## Documentacion rapida
- Rutas web: `routes/web.php`
- Rutas API: `routes/api.php`
- Configuracion: `config/`

## Notas operativas actuales
- Account deletion:
  - `GET /account-deletion`
  - `POST /account-deletion/request`
- La pagina publica de borrado y el formulario ya estan activos en produccion.
- SMTP funcional para este flujo:
  - proveedor: IONOS
  - host valido comprobado: `smtp.ionos.es`
  - correo de soporte: `info@clickguau.com`
- Seguimiento pendiente:
  - mejorar el contenido de `GET /privacypolicy` para que sea una politica de privacidad completa y no una pagina que parece politica de cookies.
