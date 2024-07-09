<?php 

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;

class AuthController extends Controller {
    protected $authModel;
    protected $db; 

    public function __construct() {
        $this->db = \Config\Database::connect(); 
        $this->authModel = new AuthModel();
    }

    public function reset_password()
    {
        return view('viewResetPassword');
    }

    public function resetPasswordProcess()
    {
        // Proses reset password
        // Misalnya, validasi email atau username
        $username = $this->request->getPost('username'); // Mengambil nilai username dari formulir
    
        // Periksa apakah username ada dalam database
        $user = $this->authModel->where('username', $username)->first();
    
        if (!$user) {
            // Tampilkan pesan error jika username tidak ditemukan
            return redirect()->to('/reset-password')->with('error', 'Username tidak ditemukan.');
        }
    
        // Generate password baru
        $newPassword = bin2hex(random_bytes(8)); // Misalnya, password acak 8 karakter
    
        // Update password baru ke database
        $this->authModel->update($user['id'], ['password' => password_hash($newPassword, PASSWORD_DEFAULT)]);
    
        // Kirim pesan ke pengguna tentang perubahan password
        $message = "Password Anda telah direset. Password baru Anda adalah: $newPassword. Silakan login dan segera ganti password Anda.";
    
        // Simpan pesan ke dalam session untuk ditampilkan setelah pengguna login
        session()->setFlashdata('password_message', $message);
    
        // Redirect pengguna ke halaman login atau halaman lain yang sesuai
        return redirect()->to('/login')->with('success', 'Password berhasil direset.');
    }
}
