<?php namespace App\Controllers;

use App\Models\CategoriesModel;
use App\Models\ProductSizesModel;
use App\Models\EachOrderModel;
use App\Models\SizesModel;
use CodeIgniter\Controller;

class CategoriesController extends Controller
{
    private $CategoriesModel;
    private $ProductSizesModel;
    private $SizesModel;
    private $EachOrderModel;

    public function __construct() {
        $this->CategoriesModel = new CategoriesModel();
        $this->ProductSizesModel = new ProductSizesModel();
        $this->SizesModel = new SizesModel();
        $this->EachOrderModel = new EachOrderModel();

    }

    public function index() {
        $data['dokter'] = $this->CategoriesModel->findAll();
        return view('admin/viewCategories', $data);
    }
    public function dokter() {
        $data['dokter'] = $this->CategoriesModel->findAll();
        $data['testimoni'] = $this->ProductSizesModel->findAll();
        $data['diskon'] = $this->SizesModel->findAll();
        return view('user/user', $data);
    }

    public function store2() {
        $data = $this->request->getPost();
        $this->EachOrderModel->save($data);
        return redirect()->to('dokter');
    }

    public function edit($id_dokter) {
        $data['dokter'] = $this->CategoriesModel->find($id_dokter);  // SELECT * FROM berita WHERE id=$id
        return view('admin/editCategories', $data);
    }

    public function update($id_dokter){
        $data = $this->request->getPost();
        $this->CategoriesModel->update($id_dokter, $data);   // UPDATE berita SET judul=’sdasdada’, berita=’sdasda’  WHERE id=$id
        return redirect()->to('viewCategories');
    }

    public function delete($id_dokter) {
        $this->CategoriesModel->delete($id_dokter);
        return redirect()->to('viewCategories');
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
        $this->CategoriesModel->save($data);
    
        // Redirect ke halaman viewAllProducts
        return redirect()->to('viewCategories');
    }

}


