<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function __construct()
    {
        if(session()->get('user_name')!="admin")
        {            
            echo '<script>history.back();</script>';
        }        
    }

    public function index(): string
    {
        $adminModel = new AdminModel();
        $admin = $adminModel->findAll();
            return view('header',['page'=>'admin']) . view('admin',['admin'=>$admin]) . view('footer');
    }

    public function addAdmin():string
    {
        return view('header',['page'=>'admin']) . view('admin-add') . view('footer');
    }

    public function saveAdmin()
    {
        $adminModel = new AdminModel();

        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[admin.username]',
            'password' => 'required|min_length[5]|max_length[30]',
        ];

        if(!$this->validate($rules))
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

        return view('header',['page'=>'admin']) . view('admin-edit',['admin'=>$admin]) . view('footer');
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
}
