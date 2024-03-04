<?php

namespace App\Vistas;

class Views{
    function view($template, $data=[]) {
        extract($data);
        include __DIR__."/{$template}.php";
    }
}