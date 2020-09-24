<?php 

    class Contacto extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->mensaje = "Este es el apartado de Contacto";
            
        }

        function render(){
            $this->view->render('contacto/index');
        }

    }


?>