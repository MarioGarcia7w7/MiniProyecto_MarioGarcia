<?php
namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model{
    Public function listar(){
      $m = $this->db->query("SELECT * from persona");
      retunr $m->getResult();
    }
}
