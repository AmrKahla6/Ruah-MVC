<?php
    class Controller extends Applocation {
        protected $_controller , $_action;
        public $view;

        public function __construct($controller , $action)
        {
            parent::__construct();
            $this->_controller = $controller;
            $this->_action     = $action;
            $this->view        = new View();
        }
    }
