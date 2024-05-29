<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth\index.php');
    }

    public function proses_login()
    {
        $auth_model = new AuthModel();
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('katasandi');
        $user = $auth_model->getUser($username, $password);
        
        if ($user) {
            $data = [
                'user-id' => $user->id_user,
                'username' => $user->username,
            ];
           session()->set($data);
           session()->setFlashdata('error', 'Password yang anda masukkan salah');
           return redirect()->to('/home');
        } else {
            session()->setFlashdata('error', 'Akun Tidak Ditemukan');
            return redirect()->back()->withInput();
        }
    }
    
}
