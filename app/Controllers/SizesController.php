<?php namespace App\Controllers;

use App\Models\SizesModel;
use CodeIgniter\Controller;

class SizesController extends Controller
{
    private $SizesModel;

    public function __construct() {
        $this->SizesModel = new SizesModel();

    }

    public function index() {
        $data['diskon'] = $this->SizesModel->findAll();   // SELECT * FROM BERITA
        return view('admin/viewSizes', $data);
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
        $this->SizesModel->save($data);
    
        // Redirect ke halaman viewAllProducts
        return redirect()->to('viewSizes');
    }
    
    public function delete($id_diskon) {
        $this->SizesModel->delete($id_diskon);
        return redirect()->to('viewSizes');
    }
}
