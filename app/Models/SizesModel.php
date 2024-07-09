<?php 
namespace App\Models;

use CodeIgniter\Model;

class SizesModel extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id_diskon';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['foto'];

}