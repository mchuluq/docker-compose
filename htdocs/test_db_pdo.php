<?php

$DBuser = 'root';
$DBpass = 'Dr34m-Th34tr3-8l4ck-cl0ud5-&-51lv3r-l1nn1n65';
$pdo = null;

try{
    $database = 'mysql:host=mysql:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Looking good, php connect to mysql successfully.";    
} catch(PDOException $e) {
    echo "php connect to mysql failed with:\n $e";
}

$pdo = null;