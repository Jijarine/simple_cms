<?php 
namespace application\controllers;

class Controller {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}

?>