<?php
// session_start();
// $_SESSION['name'] = 'Tanvir';
// echo $_SESSION['name'];
// session_destroy();

// session_start();
// $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
// $_SESSION['counter']++;
// echo $_SESSION['counter'];

// set session life time
session_name('myapp');
session_start([
    'cookie_lifetime'=>60
]);
 $_SESSION['name'] = 'Ruby';
echo $_SESSION['name'];

// 9 session done without 9.6-9.8






/* 
<!-- cd 9-session -->
<!-- php -S localhost:3030 -->
<!-- http://localhost:3030/9-session/session1.php -->
*/