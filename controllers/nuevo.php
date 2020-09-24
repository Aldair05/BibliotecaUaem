<?php 

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }


    function render(){
        $this->view->render('nuevo/index');
    }


    public function registrarAlumno(){
        
        $matricula = $_POST['matricula'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        
        $mensaje = "";


        $data = array (
            'matricula' => $matricula,
            'nombre'    => $nombre,
            'apellido'  => $apellido
        );

        if ($this->model->insert($data)) {
            $mensaje = "Nuevo usuario creado";
        }else{
            $mensaje = "La matricula ya existe";
        }

        $this->view->mensaje= $mensaje;
        $this->render();

        // $this->model->insert();
    }
}

?>