<?php namespace App\Controllers;

use App\Models\EachOrderModel;
use CodeIgniter\Controller;

class EachOrderController extends Controller
{
    private $EachOrderModel;

    public function __construct() {
        $this->EachOrderModel = new EachOrderModel();

    }

    public function index() {
        $data['appointment'] = $this->EachOrderModel->findAll();
        return view('admin/viewEachOrder', $data);
    }

    public function store() {
        $data = $this->request->getPost();
        $this->EachOrderModel->save($data);
        return redirect()->to('/viewEachOrder');
    }

    public function edit($id_app) {
        $data['appointment'] = $this->EachOrderModel->find($id_app);  // SELECT * FROM berita WHERE id=$id
        return view('admin/editEachOrder', $data);
    }

    public function update($id_app){
        $data = $this->request->getPost();
        $this->EachOrderModel->update($id_app, $data);
        return redirect()->to('viewEachOrder');
    }

    public function delete($id_app) {
        $this->EachOrderModel->delete($id_app);
        return redirect()->to('viewEachOrder');
    }
  
}

