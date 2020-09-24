<?php 

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje ="Seccion de Consulta";
        $this->view->usuarios = [];
        
    }

    function render(){
        $usuarios  = $this->model->get();
        $this->view->usuarios = $usuarios;
        $this->view->render('consulta/index');
    }

    function verUsuario($param = null ){
        $idUsuario = $param[0];
        $usuario = $this->model->getById($idUsuario);

        session_start();
        $_SESSION['id_verUsuario'] = $usuario->matricula;
        $this->view->usuario = $usuario;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }

    function actualizarUsuario(){
        session_start();
        $matricula = $_SESSION['id_verUsuario'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];

        unset($_SESSION['id_verUsuario']);
        if ($this->model->update(['matricula'=>$matricula,'nombre'=>$nombre,'apellido'=>$apellido])) {
            $usuario = new Usuario();
            $usuario->matricula = $matricula;
            $usuario->nombre    = $nombre;
            $usuario->apellido  = $apellido;

            $this->view->usuario = $usuario;
            $this->view->mensaje = "El usuario se actualizo correctamente";
        }else{
            $this->view->mensaje = "El usuario no se actualizo";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarUsuario($param = null){
        $matricula = $param[0];
        if ($this->model->delete($matricula)) {
            $mensaje = "Usuario eliminado correctamente";
            
        }else{
            $mensaje = "El usuario no se pudo eliminar";
        }

        //$this->render();
         echo $mensaje;
       
    }
}


?>