<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $model->get_by_email($email);

        if ($user) {
            $verify_pass = password_verify($password, $user->password);

            if ($verify_pass) {
                $ses_data['user'] = [
                    'uid' => $user->uid,
                    'name' => $user->name,
                    'email' => $user->email,
                    'logged_in' => TRUE,
                ];
                $session->set($ses_data);
                return redirect()->to('/notes');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
