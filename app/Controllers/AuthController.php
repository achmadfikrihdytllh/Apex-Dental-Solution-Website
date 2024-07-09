<?php 

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;

class AuthController extends Controller {

    protected $db; 
    protected $authModel; // Add this property

    public function __construct() {
        $this->db = \Config\Database::connect(); 
        $this->authModel = new AuthModel(); // Instantiate the AuthModel

    }
    
    public function login(){
        if(session('id_user')){
            return redirect()->to(site_url('dashboard'));
        }
        return view('viewLogin');
    }

    public function loginProcess(){
        $post = $this->request->getPost();
        $query = $this->db->table('user')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();

        if($user){
            if(password_verify($post['password'], $user->password)){
                $params = ['id_user'=> $user->id_user];
                session()->set($params);
                if($user->status === 'dokter') {
                    return redirect()->to(site_url('dashboard'));
                } else {
                    return redirect()->to(site_url('dokter'));
                }
            } else {
                echo "Password salah";
            }
        } else {
            echo "Username tidak ditemukan";
        }
    }

    public function logout(){
        session()->remove('id_user');
        return redirect()->to(site_url('viewLogin'));
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
            return redirect()->to('/resetpassword')->with('error', 'Username tidak ditemukan.');
        }
    
        // Generate password baru
        $newPassword = bin2hex(random_bytes(8)); // Misalnya, password acak 8 karakter
    
        // Hash password baru
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    
        // Update password baru ke database
        $this->authModel->update($user['id_user'], ['password' => $hashedPassword]);
    
        // Kirim pesan ke pengguna tentang perubahan password
        $message = "Password Anda telah direset. Password baru Anda adalah: $newPassword. Silakan login dan segera ganti password Anda.";
    
        // Simpan pesan ke dalam session untuk ditampilkan setelah pengguna login
        session()->setFlashdata('password_message', $message);
    
        // Redirect pengguna ke halaman login atau halaman lain yang sesuai
        return redirect()->to('viewLogin')->with('success', 'Password berhasil direset.');
    }
    
    public function profile(){
        // Pastikan pengguna sudah login
        if(!session('id_user')){
            return redirect()->to(site_url('profil'));
        }
        
        // Ambil data profil pengguna dari database berdasarkan session id_user
        $userId = session('id_user');
        $query = $this->db->table('user')->getWhere(['id_user' => $userId]);
        $user = $query->getRow();
    
        // Kirim data profil pengguna ke view
        return view('profil', ['user' => $user]); // Mengirimkan data user ke view
    }
    
    

    public function updateProfile(){
        // Pastikan pengguna sudah login
        if(!session('user_id')){
            return redirect()->to(site_url('login'));
        }
        
        // Ambil data yang dikirim dari form
        $postData = $this->request->getPost();
    
        // Validasi data yang diterima dari form
    
        // Proses pembaruan data profil pengguna
        $userId = session('user_id');
        $data = [
            'name' => $postData['name'],
            'username' => $postData['username'],
            'email' => $postData['email'],
            'contact_no' => $postData['contact_no'],
            'user_address' => $postData['user_address']
        ];
    
        $this->db->table('user')->where('user_id', $userId)->update($data);
    
        // Redirect kembali ke halaman profil
        return redirect()->to(site_url('profile'))->with('success', 'Profile berhasil diperbarui.');
    }

    public function changePassword(){
        // Pastikan pengguna sudah login
        if(!session('id_user')){
            return redirect()->to(site_url('login'));
        }
        
        // Ambil data yang dikirim dari form
        $postData = $this->request->getPost();
    
        // Validasi data yang diterima dari form
    
        // Ambil data pengguna dari database berdasarkan session user_id
        $userId = session('id_user');
        $query = $this->db->table('user')->getWhere(['id_user' => $userId]);
        $user = $query->getRow();
    
        // Periksa apakah password lama sesuai
        if(!password_verify($postData['currentPassword'], $user->password)){
            return redirect()->back()->with('error', 'Password lama salah.');
        }
    
        // Periksa apakah password baru dan konfirmasi password sama
        if($postData['newPassword'] !== $postData['confirmPassword']){
            return redirect()->back()->with('error', 'Password baru dan konfirmasi password tidak cocok.');
        }
    
        // Update password pengguna
        $newPasswordHash = password_hash($postData['newPassword'], PASSWORD_DEFAULT);
        $this->db->table('user')->where('id_user', $userId)->update(['password' => $newPasswordHash]);
    
        // Redirect kembali ke halaman profil
        return redirect()->to(site_url('profil'))->with('success', 'Password berhasil diubah.');
    }
    public function store() {
        $data = $this->request->getPost();
    
        // Mengatur upload gambar
        $file = $this->request->getFile('image');
    
        // Memeriksa apakah file telah diunggah
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Pastikan tipe file yang diunggah adalah jpeg/jpg/png
            $mimeType = $file->getClientMimeType();
            if ($mimeType === 'image/jpeg' || $mimeType === 'image/jpg' || $mimeType === 'image/png') {
                // Generasi nama unik untuk file gambar
                $imageName = $file->getRandomName();
    
                // Pindahkan file gambar ke direktori public/images
                if ($file->move(ROOTPATH . 'public/img', $imageName)) {
                    // Simpan nama file gambar ke dalam data sebelum disimpan ke database
                    $data['image'] = $imageName;
    
                    // Simpan data produk ke database
                    $this->authModel->save($data);
    
                    // Redirect ke halaman profil
                    return redirect()->to('profil');
                } else {
                    // Menangani jika pemindahan file gagal
                    return redirect()->back()->with('error', 'Gagal memindahkan file.');
                }
            } else {
                // Menangani jika tipe file tidak valid
                return redirect()->back()->with('error', 'Tipe file yang diunggah tidak valid.');
            }
        } else {
            // Menangani jika file tidak ada atau tidak valid
            return redirect()->back()->with('error', 'File yang diunggah tidak valid.');
        }
    }
    
    
    
}

