<img src="https://scrutinizer-ci.com/g/jucarre/blog/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality" />  <img src="https://scrutinizer-ci.com/g/jucarre/blog/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status" />  <img src="https://scrutinizer-ci.com/g/jucarre/blog/badges/build.png?b=master" alt="Build Status" />
# Blog

## Description :

Techno utiliser:
* PHP 7 en MVC
* MySQL
* Twig Moteur de templating
* Routing Grafikart (<a href="https://youtu.be/I-DN2C7Gs7A">youtube</a>)

## Pré-requis : 

* PHP 7, MySQL, Apache.

## Instalation:

* Télécharger twig avec composer.phar, exemple sur Mac à la racine du dossier: "php composer.phar install".
* Copier le contenu du fichier "/BDD.sql" vers votre base créé auparavant (dbname:"Blog" chez moi).
* Configurer la connexion à la base de donnée dans le fichier "/src/Model/Manager.php".
* L'adresse du serveur doit pointer à la racine du dossier.
