<?php 

# laravel new authdemo |=> 1st run this for install Laravel
# cd authdemo |=> 1st run this for change dericatory 
# composer require laravel/ui |=> 1st run this 
# php artisan ui vue --auth  |=> 2nd run this
# npm install && npm run dev  |=> 2nd run this
// php artisan config:cache
// php artisan cache:clear 
// php artisan migrate
// database name = laravelbasic





// composer require laravel/ui |=> for laravel authentication tutorial

// php artisan ui vue --auth |=> get auth

// npm install && npm run dev

// npm install vue-loader@^15.9.7 --save-dev --legacy-peer-deps ||==> if saject that 

// npm run development |=> then run this

// php artisan serve |=> for check login & Registation
# and close serve and connect database then run this commond 

/*

  Illuminate\Database\QueryException

  SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too
long; max key length is 767 bytes (SQL: alter table `users` add unique `users_em
ail_unique`(`email`))

  at E:\0namica\htdocs\sphp\38-cms\cmsproje\vendor\laravel\framework\src\Illumin
ate\Database\Connection.php:703
    699▕         // If an exception occurs when attempting to run a query, we'll
 format the error
    700▕         // message to include the bindings with SQL, which will make th
is exception a
    701▕         // lot more helpful to the developer instead of just the databa
se's errors.
    702▕         catch (Exception $e) {
  ➜ 703▕             throw new QueryException(
    704▕                 $query, $this->prepareBindings($bindings), $e
    705▕             );
    706▕         }
    707▕     }

  1   E:\0namica\htdocs\sphp\38-cms\cmsproje\vendor\laravel\framework\src\Illumi
nate\Database\Connection.php:492
      PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 Sp
ecified key was too long; max key length is 767 bytes")

  2   E:\0namica\htdocs\sphp\38-cms\cmsproje\vendor\laravel\framework\src\Illumi
nate\Database\Connection.php:492
      PDOStatement::execute()


if show this error Massage you can flow 3 step 
(0) composer require doctrine/dbal |=>  Changing columns for table "status" requires Doctrine DBAL. Please install the
 doctrine/dbal package.

(1) A temporary solution would be going to your ===>> config/database.php <<=== and change the charset and collation from utf8mb4 to utf8

'charset' => 'utf8',
'collation' => 'utf8_unicode_ci',

(2) php artisan config:cache  |=> Run  to reconfigure laravel.

(3) Delete the existing tables in your database and then run 
(4) php artisan migrate |=>  again.

*/



// php artisan migrate

