<?php
namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model {
  public function obtenerInformacion($data){
    $gmodel = $this->db->table('persona');
    $gModel->where($data);
    return $gModel->get()->getResultArray();
  }
  public funtion listarTodo(){
    $gModel = $this->db->query('SELECT * FROM persona');
    return $this->db_>insertID();
  }
  public funtion insertar($data){
    $gModel= $this->db->table('persona');
    $gModel->insert($data);
    return $this->db->insertID();
  }
  public funtion actualizar($data,$id){
    $gModel = $this->db->table('persona');
    $gModel->set($data);
    $gModel->where($id);
    return $gModel->update();
  }
  
 public funtion eliminar($id){
    $gModel = $this->db->table('persona');
    $gModel->where($id);
    return $gModel->delete();
 }
}
