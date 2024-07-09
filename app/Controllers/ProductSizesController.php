<?php namespace App\Controllers;

use App\Models\ProductSizesModel;
use CodeIgniter\Controller;

class ProductSizesController extends Controller
{
    private $ProductSizesModel;

    public function __construct() {
        $this->ProductSizesModel = new ProductSizesModel();

    }

    public function index() {
        $data['testimoni'] = $this->ProductSizesModel->findAll();   // SELECT * FROM BERITA
        return view('admin/viewProductSizes', $data);
    }
    public function store() {
        $data = $this->request->getPost();
    
        // Mengatur upload gambar
        $imageName = null;
        if ($this->request->getFile('foto')->isValid() && !$this->request->getFile('foto')->hasMoved()) {
            $image = $this->request->getFile('foto');
            
            // Pastikan tipe file yang diunggah adalah jpeg/jpg
            if ($image->getClientMimeType() === 'image/jpeg' || $image->getClientMimeType() === 'image/jpg' || $image->getClientMimeType() === 'image/png') {
                // Generasi nama unik untuk file gambar
                $imageName = $image->getRandomName();
    
                // Pindahkan file gambar ke direktori public/images
                $image->move(ROOTPATH . 'public/img', $imageName);
            } else {
                return redirect()->back();
            }
        }
    
        // Simpan nama file gambar ke dalam data sebelum disimpan ke database
        $data['foto'] = $imageName;
    
        // Simpan data produk ke database
        $this->ProductSizesModel->save($data);
    
        // Redirect ke halaman viewAllProducts
        return redirect()->to('viewProductSizes');
    }
    public function delete($id_testi) {
        $this->ProductSizesModel->delete($id_testi);
        return redirect()->to('viewProductSizes');
    }
  
}
