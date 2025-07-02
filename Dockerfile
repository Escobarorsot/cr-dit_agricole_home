# Utilise PHP avec Apache
FROM php:8.2-apache

# Active mod_rewrite
RUN a2enmod rewrite

# Copie tous les fichiers dans le dossier web du serveur
COPY . /var/www/html/

# Donne les bons droits d'accès
RUN chown -R www-data:www-data /var/www/html

# Expose le port
EXPOSE 80
