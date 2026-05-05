<?php
namespace App\Models;

class Student 
{
    public function __construct(
        public string $id,
        public string $name,
        public string $career
    ) {}

    public function getSummary(): string 
    {
        return "Estudiante: {$this->name} (ID: {$this->id}) - Carrera: {$this->career}";
    }
}