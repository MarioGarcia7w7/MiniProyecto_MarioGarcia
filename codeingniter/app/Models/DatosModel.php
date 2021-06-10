<?
namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model{
    Public fuction listar(){
      $m = $this->db->query("SELECT * from persona");
      retunr $m->getResult();
    }
}
