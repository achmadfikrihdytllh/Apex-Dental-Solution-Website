<?php namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Controller;

class CustomerController extends Controller
{
    private $CustomerModel;

    public function __construct() {
        $this->CustomerModel = new CustomerModel();

    }
    public function index() {
        $data['user'] = $this->CustomerModel->findAll();   // SELECT * FROM BERITA
        return view('admin/viewCustomers', $data);
    }

    public function store() {
        $data = $this->request->getPost();
        $this->CustomerModel->save($data);
        return redirect()->to('/viewCustomers');
    }
    public function edit($id_user) {
        $data['user'] = $this->CustomerModel->find($id_user);  // SELECT * FROM berita WHERE id=$id
        return view('admin/editCustomers', $data);
    }

    public function update($id_user){
        $data = $this->request->getPost();
        $this->CustomerModel->update($id_user, $data);
        return redirect()->to('viewCustomers');
    }
    public function delete($id_user) {
        $this->CustomerModel->delete($id_user);
        return redirect()->to('viewCustomers');
    }


}


