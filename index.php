<?php
// D.2.3: Única llamada al autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Uso de la palabra reservada 'use'
use App\Models\Student;
use App\Services\EnrollmentService;

// D.3: Prueba de instanciación sin errores
$alumno = new Student('2026001', 'Carlos Méndez', 'Ingeniería en Sistemas');
echo $alumno->getSummary() . PHP_EOL;

$matricula = new EnrollmentService();
echo $matricula->register($alumno) . PHP_EOL;