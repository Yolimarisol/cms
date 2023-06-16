First clone this repository, install the dependencies, and setup your .env file.

git clone https://github.com/Yolimarisol/cms.git)
composer install
cp .env.example .env
Then create the necessary database.

php artisan db
create database blog
And run the initial migrations and seeders.

php artisan migrate --seed
