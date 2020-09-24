<?php 

require_once 'models/usuario.php';

class ConsultaModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function get(){
        
        $items = [];

        try {
            $query = $this->db->connect()->query('SELECT * FROM usuarios');

            while ($row = $query->fetch()) {
                $item = new Usuario();
                $item->matricula = $row['matricula'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
                array_push($items,$item);
            }

            return $items;

        } catch (PDOException $e) {
            return $items = [];
        }
        
    }


    function getById($id){
        $item = new Usuario();
        
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        try {
            $query->execute(['matricula' => $id]);
            while ($row = $query->fetch()) {
                $item->matricula = $row['matricula'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
            }
            return $item;

        } catch (PDOExeption $e) {
            return null; 
        }
    }

    function update($item){

        $query = $this->db->connect()->prepare('UPDATE usuarios SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula');

        try {
            $query->execute([
                'matricula' => $item['matricula'],
                'nombre'    => $item['nombre'],
                'apellido'  => $item['apellido']
            ]);
            return true;
        } catch (PDOExeption $e) {
            
            return false;
        }

    }


    function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM usuarios WHERE matricula = :id');
        try{
            $query->execute([
                'id' => $id
            ]);
            return true;
        }catch(PDOExeption $e){
            return false;
        }
    }
}


?>