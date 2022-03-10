<?php 
namespace application\views;

class View {
    private $model;
    private $controller;
    public $template = 'default';

    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    public function output(){
        $content = $this->model->string;
		require_once(TEMPLATES.DS.$this->template.'.php');
    }
}

?>