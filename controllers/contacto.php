<?php 

    class Contacto extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->mensaje = "Contactanos";
            
        }

        function render(){
            $this->view->render('contacto/index');
        }

    }


?>