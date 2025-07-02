# Utilise une image PHP avec Apache
FROM php:8.2-apache

# Copie tous les fichiers du dossier dans /var/www/html (dossier web d’Apache)
COPY . /var/www/html/

# Active le module rewrite (utile si tu as .htaccess ou routes)
RUN a2enmod rewrite

# Port exposé
EXPOSE 80
