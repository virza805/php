<?php
// পিডিওতে প্রিপেয়ার্ড স্টেটমেন্ট
$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=school;charset=UTF8;", 'root','');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT * FROM student WHERE SCLASS=? AND SSEC=?");

$SCLASS = 1; $SSECE='a';
$stmt->bindParam(1, $SCLASS,PDO::PARAM_INT);
$stmt->bindParam(2, $SSECE,PDO::PARAM_STR);

$stmt->execute();
print_r($stmt->fetchAll());

