<?php
    class IndexController extends Controller{
        public function __construct(){

        }

        public function index(){
            $this->view('index.tpl');
        }

        public function about(){

        }
    }

?>