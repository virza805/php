<?php
// SQLite = 
$pdo = new PDO("sqlite:db.sqlite");
// $stmt = $pdo->query("SELECT * FROM users");
$stmt = $pdo->query("select * from users");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

$users = [
    ['name'=>'Jane', 'email'=>'jane@doe.com'],
    ['name'=>'Onamica', 'email'=>'onamicatanvir@gmail.com'],
    ['name'=>'virza', 'email'=>'virza.bd@gmail.com'],
];
foreach($users as $user){
    $pdo->query("INSERT INTO users(name, email) VALUES('{$user['name']}', '{$user['email']}')");
}

$stmt = $pdo->query("SELECT * FROM users");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

