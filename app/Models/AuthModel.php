<?php namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model {
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'username', 'password', 'status', 'image'];

}
