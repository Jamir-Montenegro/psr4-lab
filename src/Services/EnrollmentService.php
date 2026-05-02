<?php
namespace App\Services;

use App\Models\Student;

class EnrollmentService 
{
    public function register(Student $student): string 
    {
        return " Matrícula exitosa para {$student->name}.";
    }
}