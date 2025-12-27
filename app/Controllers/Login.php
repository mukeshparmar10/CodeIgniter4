<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Login extends BaseController
{
    public function login()
    {
        return view('index');
    }
    
    public function loginProcess()
    {
        $session = session();
        $model   = new AdminModel();

        $data = array(
            'username'=> $this->request->getPost('username'),
            'password' => $this->request->getPost('password')
        );

        $admin = $model->where($data)->first();

        if ($admin) {
            $session->set([
                'user_id'   => $admin['id'],
                'user_name' => $admin['username'],
                'logged_in' => true,
            ]);
            return redirect()->to(base_url('/dashboard'));
        }

        return redirect()->to(base_url('/'))->with('error', 'Invalid login credentials');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
