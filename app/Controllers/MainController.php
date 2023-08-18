<?php

namespace App\Controllers;

class MainController {
    protected string $view;
    protected $data;

    public function getView(){
        return $this->view;
    }

    public function setView($view){
        $this->view = $view;
    }

    public function render(){
        require(__DIR__."/../Views/layout/header.phtml");
        require(__DIR__."/../Views/partials/$this->view.phtml");
        require(__DIR__."/../Views/layout/footer.phtml");
    }   
}