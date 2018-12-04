<?php
namespace App\Controller;


class FilterManager
{

    protected function int_filter($var_int)
    {
        $var_int_filtre = strip_tags($var_int);
        $int_clean = filter_var($var_int_filtre, FILTER_SANITIZE_NUMBER_INT);

        return $int_clean;
    }

    protected function email_filter($var_email)
    {
        $var_email_filtre = strip_tags($var_email);
        $email_clean = filter_var($var_email_filtre, FILTER_SANITIZE_EMAIL);
        $email_ok = filter_var($var_email_filtre, FILTER_VALIDATE_EMAIL);


        return $email_ok;
    }

    protected function string_filter($var_string)
    {
        $string_clean = filter_var($var_string, FILTER_SANITIZE_STRING);

        return $string_clean;
    }

}
