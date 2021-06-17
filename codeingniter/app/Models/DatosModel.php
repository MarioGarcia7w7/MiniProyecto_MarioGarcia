<?php 
namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model {
     public function obtenerInformacion($data){
          $model = $this ->db->table('persona');
          $model-> where($data);
          return $model->getResult();
     }
     
    
     public function listarTodo() {
       $model = $this->db->query("SELECT * from persona");
         return $model->getResult();
     }
     
     public function insertar($data){
          $model = $this ->db->table('persona');
          $model-> insert($data);
          return $this->db->insertID();
     }
     
     public function actualizar($data, $id){
          $model = $this ->db->table('persona');
          $model->set($data);
          $model->where($id);
          return $model->update();
     }
     
     public function eliminar($id){
          $model = $this->db->table('persona');
          $model -> where($id);
          return $model -> delete();
     }
     
}
