git pull

docker exec -it theanderenone_wordpress-piani_1 rm -r /var/www/html/wp-content/themes/piani
docker cp ./piani/piani_theme theanderenone_wordpress-piani_1:/var/www/html/wp-content/themes/piani
docker cp ./bibmundo/bibmundo_theme theanderenone_wordpress-bibmundo_1:/var/www/html/wp-content/themes/bibmundo
docker cp ./pogrom/pogrom_theme theanderenone_wordpress-pogrom_1:/var/www/html/wp-content/themes/pogrom
