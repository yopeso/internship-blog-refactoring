<?php

namespace App\Controller;

use Twig_Environment;
use Twig_Loader_Filesystem;

/**
 * TwigRenderer >> Twig symfony moteur de template.
 */
class TwigRenderer
{
    private $twig;
    private $loader;

    /**
     * Affiche le vue demander.
     *
     * @param string $view  lien de la vue
     * @param array  $prams données envoyer dans la vue
     */
    protected function render($view, array $prams = [])
    {
        $this->loader = new Twig_Loader_Filesystem('public/view');
        $this->twig = new Twig_Environment($this->loader, [
            'cache' => false, // __DIR__ . /tmp',
        ]);

        echo $this->twig->render($view.'.twig', $prams);
    }
}
