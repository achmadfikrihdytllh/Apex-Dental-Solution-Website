<?php 
namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'id_dokter';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'deskripsi','foto', 'jadwal'];

}
