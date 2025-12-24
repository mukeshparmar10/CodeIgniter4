<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $adminModel = new AdminModel();
        $admin = $adminModel->findAll();
        return view('header') . view('admin',['admin'=>$admin]) . view('footer');
    }

    public function addAdmin():string
    {
        return view('header') . view('admin-add') . view('footer');
    }

    public function saveAdmin()
    {
        $adminModel = new AdminModel();

        $rules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'password' => 'required|min_length[5]|max_length[30]',
        ];

        if($this->validate($rules))
        {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data['username'] = $this->request->getPost('username');
        $data['password'] = $this->request->getPost('password');

        if($adminModel->insert($data))
        {
            echo "Admin add successfully";
        }
        else
        {
            echo "Admin does not add. Please try again letter.";
        }

        return redirect()->to(base_url('admin'));
    }

    public function editAdmin($id)
    {
        $adminModel = new AdminModel();

        $admin = $adminModel->find($id);

        return view('header') . view('admin-edit',['admin'=>$admin]) . view('footer');
    }

    public function updateAdmin()
    {
        $adminModel = new AdminModel();

        $rules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'password' => 'required|min_length[5]|max_length[30]',
        ];

        if($this->validate($rules))
        {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $id = $this->request->getPost('id');
        $data['username'] = $this->request->getPost('username');
        $data['password'] = $this->request->getPost('password');

        if($adminModel->update($id,$data))
        {
            echo "Admin update successfully";
        }
        else
        {
            echo "Admin does not update. Please try again letter.";
        }

        return redirect()->to(base_url('admin'));
    }

    public function deleteAdmin($id)
    {
        $adminModel = new AdminModel();

        $adminModel->delete($id);

        return redirect()->to(base_url('admin'));
    }

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
            return redirect()->to('/student');
        }

        return redirect()->to(base_url('/'))->with('error', 'Invalid login credentials');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
