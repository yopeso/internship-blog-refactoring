<?php

namespace App\Validator;

class FunctionValidator
{
    /**
     * Vérifi si la variable n'est pas vide.
     *
     * @param mixed $param
     *
     * @return mixed $param
     */
    public function check($param)
    {
        if (isset($param) && ($param != '')) {
            return $param;
        } else {
            $_SESSION['flash']['danger'] = 'Les champs ne sont pas remplis';
            header('Location: /admin');
            die;
        }
    }
}
