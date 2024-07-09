<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function logout()
    {
        // Hapus sesi user
        session()->destroy();

        // Redirect ke halaman login atau halaman lain
        return redirect()->to('/viewlogin');
    }
}
