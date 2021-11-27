<?php  
# laravel new api
# cd api
# composer require laravel/ui |=> for laravel authentication tutorial
# php artisan ui vue --auth |=> get auth

# => setting dtabase in .env file 
# => ===>> config/database.php <<=== and change the charset and collation from utf8mb4 to utf8

// 'charset' => 'utf8',
// 'collation' => 'utf8_unicode_ci',


# npm install && npm run dev
# npm install vue-loader@^15.9.7 --save-dev --legacy-peer-deps ||==> if saject that 
# npm run development |=> then run this
# composer require doctrine/dbal
# php artisan serve |=> for check login & Registation



/*
(0) composer require doctrine/dbal |=>  Changing columns for table "status" requires Doctrine DBAL. Please install the
 doctrine/dbal package.

(1) A temporary solution would be going to your ===>> config/database.php <<=== and change the charset and collation from utf8mb4 to utf8

'charset' => 'utf8',
'collation' => 'utf8_unicode_ci',

(2) php artisan config:cache  |=> Run  to reconfigure laravel.

(3) Delete the existing tables in your database and then run 
(4) php artisan migrate |=>  again.

*/


### ==>> Now Start Laravel API  <<== ###

# php artisan make:model Article -mc
# php artisan make:migration add_api_token_to_users_table ||=> create for a new table
# php artisan make:controller UserController ||=> create for a new table

# php artisan migrate


