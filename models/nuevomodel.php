<?php 

class NuevoModel  extends Model{

    public function __construct(){
        parent::__construct();
    }


    public function insert($data){
        //insertar datos a la bases de datos
        
        try {
            $sql = $this->db->connect()->prepare('INSERT INTO usuarios(matricula,nombre,apellido) VALUES(:matricula,:nombre,:apellido)');
            $sql->execute(['matricula'=>$data['matricula'],'nombre'=>$data['nombre'],'apellido'=> $data['apellido']]);
            return true;
        } catch (PDOException $e) {
            // echo "Ya existe Ese Registro";
            return false;
        }
        
        // echo "Insertando datos";
    }
}

?>