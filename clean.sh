sudo chown -R www-data:www-data /var/www/
sudo chmod -R 777 /var/www/
rm -rf /var/www/site/etc/cache
rm -rf /var/www/site/etc/view_c
rm -f /var/www/site/cache.manifest
