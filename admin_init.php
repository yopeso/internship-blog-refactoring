<?php 
/*
$bdd= new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pseudo = "admin";
$pass = "root";
// Hachage du mot de passe
$pass_hache = password_hash($pass, PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO users(pseudo, pass) VALUES(:pseudo, :pass)');
$req->execute(array(
    'username' => $pseudo,
    'password' => $pass_hache));
   
   
   
 */