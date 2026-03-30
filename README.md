# ClickGuau Backend

Backend Laravel 8 para ClickGuau.

## Estado actual

- La URL publica de borrado de cuenta esta activa en:
  - `https://clickguau.com/account-deletion`
- La pagina publica ya incluye:
  - pasos de borrado dentro de la app
  - explicacion de los datos eliminados
  - correo de soporte visible
  - formulario publico de solicitud de ayuda o borrado
- El flujo publico fue validado en produccion el `2026-03-30`.

## Rutas relevantes

- `GET /account-deletion`
- `POST /account-deletion/request`
- `GET /privacypolicy`
- `GET /termsOfUse`

## Despliegue

- Produccion se despliega desde Dokploy.
- El repo que consume Dokploy es `sttildeveloper/clickguauback`.
- En este clon local se trabaja sobre la rama `dokploy-main` y luego se empuja a `sttildeveloper/clickguauback:main` para que Dokploy despliegue.

## Correo de soporte

- Correo visible para account deletion:
  - `info@clickguau.com`
- El envio SMTP de produccion quedo operativo usando IONOS con host:
  - `smtp.ionos.es`

Variables relevantes:

```env
ACCOUNT_DELETION_SUPPORT_EMAIL=info@clickguau.com
MAIL_MAILER=smtp
MAIL_HOST=smtp.ionos.es
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=info@clickguau.com
MAIL_FROM_NAME=CLICKGUAU
```

## Seguimiento recomendado

- Revisar y mejorar el contenido real de `GET /privacypolicy`, porque hoy Google Play acepta la URL pero el contenido se parece mas a una politica de cookies que a una politica de privacidad completa.
- Mantener probado despues de cada cambio:
  - `https://clickguau.com/account-deletion`
  - formulario publico `POST /account-deletion/request`
