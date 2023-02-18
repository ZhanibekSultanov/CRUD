### Download

Установить PHP-7.4+

Установить MySQL

Установить Composer

cd /var/www/

git clone https://github.com/ZhanibekSultanov/CRUD.git folder

cd folder

composer install

define DataBase, APP_KEY in .env

php artisan migrate --seed

php artisan serve
