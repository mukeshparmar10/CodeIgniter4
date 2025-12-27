<?php

namespace App\Controllers;
use App\Models\TeacherModel;

class Teacher extends BaseController
{
    public function index(): string
    {
        $tacherModel = new TeacherModel();
        $teacher = $tacherModel->findAll();
        
        return view('header',['page'=>'teacher']) . view('teacher',['teacher'=>$teacher]) . view('footer');
    }

    public function addTeacher():string
    {
        return view('header',['page'=>'teacher']) . view('teacher-add') . view('footer');
    }

    public function saveTeacher()
    {
        $teacherModel = new TeacherModel();

        $rules = [
            'full_name' => 'required|min_length[3]|max_length[50]',
            'address' => 'required|min_length[5]|max_length[100]',
        ];

        if($this->validate($rules))
        {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data['full_name'] = $this->request->getPost('name');
        $data['address'] = $this->request->getPost('address');

        if($teacherModel->insert($data))
        {
            echo "Teacher add successfully";
        }
        else
        {
            echo "Teacher does not add. Please try again letter.";
        }

        return redirect()->to(base_url('/teacher'));
    }

    public function editTeacher($id)
    {
        $teacherModel = new TeacherModel();

        $teacher = $teacherModel->find($id);

        return view('header',['page'=>'teacher']) . view('teacher-edit',['teacher'=>$teacher]) . view('footer');
    }

    public function updateTeacher()
    {
        $teacherModel = new TeacherModel();

        $rules = [
            'full_name' => 'required|min_length[3]|max_length[50]',
            'address' => 'required|min_length[5]|max_length[100]',
        ];

        if($this->validate($rules))
        {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $id = $this->request->getPost('id');
        $data['full_name'] = $this->request->getPost('name');
        $data['address'] = $this->request->getPost('address');

        if($teacherModel->update($id,$data))
        {
            echo "Teacher update successfully";
        }
        else
        {
            echo "Teacher does not update. Please try again letter.";
        }

        return redirect()->to(base_url('/teacher'));
    }

    public function deleteTeacher($id)
    {
        $teacherModel = new TeacherModel();

        $teacherModel->delete($id);

        return redirect()->to(base_url('/teacher'));
    }      
}
