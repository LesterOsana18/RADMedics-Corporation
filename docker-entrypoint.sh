#!/usr/bin/env sh
set -e

# Adjust nginx listen port dynamically for Render (uses $PORT)
if [ -n "${PORT}" ]; then
  sed -i "s/listen 80;/listen ${PORT};/" /etc/nginx/conf.d/default.conf || true
fi

# Run pending migrations if database is reachable (optional, ignore errors)
if [ "${RUN_MIGRATIONS}" = "true" ]; then
  php artisan migrate --force || echo "Migrations skipped"
fi

# Start PHP-FPM in background then nginx in foreground
php-fpm -D
exec nginx -g 'daemon off;'
