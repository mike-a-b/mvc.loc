<?php
namespace App;

class View
{
    public function render($template, array $data = null)
    {
        require_once __DIR__ . "/../views/".$template.'.php';
    }
}

