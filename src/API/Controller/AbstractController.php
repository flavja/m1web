<?php

namespace App\API\Controller;

abstract class AbstractController{

    protected function render(string $view, array $uriVars = []){
        extract($uriVars);
        require_once __DIR__ . "/../../../templates/$view.php";
    }
}
