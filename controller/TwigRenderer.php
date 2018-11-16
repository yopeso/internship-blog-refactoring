<?php
class TwigRenderer {

    private $twig;
    private $loader;

    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem('./view');
        $this->twig = new Twig_Environment($this->loader, [
            'cache' => false, // __DIR__ . /tmp',
        ]);
        $this->twig->addGlobal('_session', $_SESSION);
        $this->twig->addGlobal('_post', $_POST);
        $this->twig->addGlobal('_get', $_GET);
    }

    protected function render($view, array $prams=[])
    {
        echo $this->twig->render($view.'.twig', $prams);
    }

    public function logged_only(){

        if(session_status() == PHP_SESSION_NONE){
            
              session_start();
              
        }
    
        if(!isset($_SESSION['auth'])){
            $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
            header('Location: ?action=loginView');
            exit();
        }
    }
}