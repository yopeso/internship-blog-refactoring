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
    public function check($data)
    {
        if (isset($data) && ($data != '')) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        } else {
            return $data = flase;
            $_SESSION['flash']['danger'] = 'Les champs ne sont pas remplis';
            header('Location: /admin');
        }
    }
}
