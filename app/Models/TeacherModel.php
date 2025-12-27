<?php
namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teacher';
    protected $primaryKey = 'id';

    protected $allowedFields = ['full_name', 'address'];

}