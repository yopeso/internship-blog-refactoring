<?php
require 'vendor/autoload.php';
if (session_status() == PHP_SESSION_NONE) {session_start();}
if (empty($_GET['url'])) {$_GET['url'] = '/';}

$router = new App\Router\Router($_GET['url']);
try {
//prati FRONT ->>>>
    $router->get('/cv', "Frontend#cvjuju");
    $router->get('/article-:id', "Frontend#post")->with('id', '[0-9]+');
    $router->get('/blog', "Frontend#listPosts");
    $router->get('/login', "Frontend#loginView");
    $router->post('/login', "Frontend#connect");
    $router->post('/register', "Frontend#register");
    $router->post('/contactform', "Frontend#contactForm");

// Parti USER ->>>>
    $router->post('/user-addComment-:id', "Compte#addComment")->with('id', '[0-9]+');
    $router->post('/user-editComment-:id', "Compte#editComment")->with('id', '[0-9]+');
    $router->get('/user-comment-:id', "Compte#comment")->with('id', '[0-9]+');
    $router->get('/user', "Compte#interfaceCompte");

// Parti ADMIN ->>>>
    $router->get('/admin-deleteComment-:id', "Backend#removeCommentManager")->with('id', '[0-9]+');
    $router->post('/admin-editComment-:id', "Backend#editComment")->with('id', '[0-9]+');
    $router->get('/admin-comment-:id', "Backend#comment")->with('id', '[0-9]+');
    $router->post('/admin-editPost-:id', "Backend#editPostManager")->with('id', '[0-9]+');
    $router->post('/admin-addPost', "Backend#addPostManager");
    $router->post('/admin-delete', "Backend#removePostManager");
    $router->get('/admin-previewPost-:id', "Backend#post")->with('id', '[0-9]+');
    $router->get('/admin-post', "Backend#viewAddPost");
    $router->post('/admin-commentsValid', "Backend#commentsValid");
    $router->get('/admin', "Backend#interfaceAdmin");

    $router->get('/deco', "Frontend#deco");
    $router->get('/', "Frontend#homeView");

    $router->get('/404', "Frontend#erroView");
    //$router->get('/article/:slug-:id',"Frontend#listPosts" )->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');
    //$router->post('/posts/:id', function($id){echo'Poster pour l\'article ' . $id;});

    $router->run();

} catch (\Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
    $_SESSION['errorMessage'] = $errorMessage;
    header("HTTP/1.1 404 Not Found");
    header("Location: /404");
}
