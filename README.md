[![SymfonyInsight](https://insight.symfony.com/projects/73b79d08-0db1-45c2-af8d-5f360ffdb83b/mini.svg)](https://insight.symfony.com/projects/73b79d08-0db1-45c2-af8d-5f360ffdb83b) <img src="https://scrutinizer-ci.com/g/jucarre/blog/badges/quality-score.png?b=branche-V2" alt="Scrutinizer Code Quality" />  <img src="https://scrutinizer-ci.com/g/jucarre/blog/badges/code-intelligence.svg?b=branche-V2" alt="Code Intelligence Status" /> <img src="https://scrutinizer-ci.com/g/jucarre/blog/badges/build.png?b=branche-V2" alt="Build Status" />
# Blog

## Description :

Techno utiliser:
* PHP 7 en MVC (PSR1-2)
* MySQL
* Composer
* Twig Moteur de templating
* Routing Grafikart
* Template Bootstrap (porposer par openclassroom)

## Pré-requis : 

* PHP 7, MySQL, Apache.

## Instalation:

* Télécharger twig avec composer.phar, exemple sur Mac à la racine du dossier: "php composer.phar install".
* Copier le contenu du fichier "/BDD.sql" vers votre base créé auparavant (dbname:"Blog" chez moi).
* Configurer la connexion à la base de donnée dans le fichier "/src/Model/Manager.php".
* L'adresse du serveur doit pointer à la racine du dossier.
