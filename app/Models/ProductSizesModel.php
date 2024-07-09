<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductSizesModel extends Model
{
    protected $table = 'testimoni';
    protected $primaryKey = 'id_testi';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['foto', 'deskripsi', 'nama_testi'];

}
