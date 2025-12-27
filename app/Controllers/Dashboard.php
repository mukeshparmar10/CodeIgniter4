<?php

namespace App\Controllers;
use App\Models\StudentModel;
use App\Models\AdminModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $studentModel = new StudentModel();
        $student = $studentModel->findAll();

        $adminModel = new AdminModel();
        $admin = $adminModel->findAll();

        $username = session()->get('user_name');

        return view('header') . view('dashboard',['student'=>count($student),'admin'=>count($admin),'username'=>$username]) . view('footer');
    }
}
