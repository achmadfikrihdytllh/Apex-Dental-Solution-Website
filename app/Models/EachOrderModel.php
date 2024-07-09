<?php 
namespace App\Models;

use CodeIgniter\Model;

class EachOrderModel extends Model
{
    protected $table = 'appointment';
    protected $primaryKey = 'id_app';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'email', 'telepon', 'keluhan', 'waktu'];

}
