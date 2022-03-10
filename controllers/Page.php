<?php 
namespace application\controllers;

class Page extends Controller {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}

?>