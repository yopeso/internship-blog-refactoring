<?php 
/*
$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pseudo = "admin";
$pass = "root";
// Hachage du mot de passe
$pass_hache = password_hash($pass, PASSWORD_DEFAULT);

// Insertion
$req = $db->prepare('INSERT INTO users(pseudo, pass) VALUES(:pseudo, :pass)');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));
   
   
   
 */