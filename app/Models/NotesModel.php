<?php

namespace App\Models;

use CodeIgniter\Model;

class NotesModel extends Model
{
  protected $table = 'notes';
  protected $allowedFields = ['title', 'content', 'uid', 'created'];
  protected $returnType = 'App\Entities\Notes';

  public function load_all($uid)
  {
    $query = $this->db->query('select * from ' . $this->table . " WHERE uid='$uid'");
    $result = $query->getResult();
    return empty($result) ? FALSE : $result;
  }

  public function load($id)
  {
    $query = $this->db->query('select * from ' . $this->table . " WHERE id='$id'");
    $result = $query->getResult();
    return empty($result) ? FALSE : reset($result);
  }

}
