<?php
namespace App;

class Main
{
    private $view;
    
    public function __construct()
    {
        $this->view = new View();
    }
    
    public function index()
    {
        $this->view->render('index');
    }
}
