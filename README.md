# How to use
Clone repository

`git clone https://gitlab.com/schooly-store/schooly-store.git`

Masuk ke folder yang baru dibuat (seharusnya namanya `schooly-store`) 

`cd schooly-store`


Duplicate File `.env.example` di Folder `schooly-store` dan ubah menjadi `.env` <br>
Kemudian Isi atau Edit File `.env` dengan Database Credential yang diperlukan

`APP_URL=http://schooly-store.test`

`DB_DATABASE=schooly-store`


Install the composer dependencies

`composer install`


Set application key

`php artisan key:generate`   


Buat Database baru dengan nama `schooly-store` <br>
(atau samakan dengan nama yang dibuat di `APP_URL` dan `DB_DATABASE` tadi)


And Migrate with

`php artisan migrate --seed` or `php artisan migrate:fresh --seed`


Link the Public Storage

`php artisan storage:link`


# Login Credentials for schooly-store<br>

## Admin
email       : admin@schooly.com<br>
password    : password

## User
email       : user1@schooly.com<br>
password    : password<br>
email       : user2@schooly.com<br>
password    : password

## Seller
email       : seller1@schooly.com<br>
password    : password<br>
email       : seller2@schooly.com<br>
password    : password
