<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Student extends BaseController
{
    public function index(): string
    {
        $studentModel = new StudentModel();
        $student = $studentModel->findAll();
        return view('header') . view('student',['student'=>$student]) . view('footer');
    }

    public function addStudent():string
    {
        return view('header') . view('student-add') . view('footer');
    }

    public function saveStudent()
    {
        $studentModel = new StudentModel();

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

        if($studentModel->insert($data))
        {
            echo "Student add successfully";
        }
        else
        {
            echo "Student does not add. Please try again letter.";
        }

        return redirect('/student');
    }

    public function editStudent($id)
    {
        $studentModel = new StudentModel();

        $student = $studentModel->find($id);

        return view('header') . view('student-edit',['student'=>$student]) . view('footer');
    }

    public function updateStudent()
    {
        $studentModel = new StudentModel();

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

        if($studentModel->update($id,$data))
        {
            echo "Student update successfully";
        }
        else
        {
            echo "Student does not update. Please try again letter.";
        }

        return redirect('/student');
    }

    public function deleteStudent($id)
    {
        $studentModel = new StudentModel();

        $studentModel->delete($id);

        return redirect('/student');
    }

    public function email()
    {
        $email = \Config\Services::email();
        
        $email->setTo('mukeshparmar12345@gmail.com');
        $email->setSubject('Test');
        $email->setMessage('This is test email! Please ignore it!');

        if ($email->send()) {
            echo 'Email sent successfully';
        } else {
            print_r($email->printDebugger());
        }
    }
    
}
