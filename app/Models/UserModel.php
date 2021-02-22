<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model
{
  protected $table = 'users';
  protected $allowedFields = ['name', 'email', 'password', 'created'];
  protected $returnType = 'App\Entities\User';

  public function __construct()
  {
    parent::__construct();
    $this->db = Database::connect();
  }

  public function get_by_email($email)
  {
    $query = $this->db->query('select * from ' . $this->table . " WHERE email='$email'");
    $result = $query->getResult();
    return empty($result) ? FALSE : reset($result);
  }

}
