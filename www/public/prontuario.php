<?php

use App\Entity\MedicalrecortEntity;
use App\Entity\PatientEntity;

require __DIR__.'/vendor/autoload.php';

if(!isset($_GET['patient']) or !is_numeric($_GET['patient'])){
    header('location: index.php');
    exit;
}

$patientEntity = new PatientEntity;
$medicalrecortEntity = new MedicalrecortEntity;
$prontuarios = $medicalrecortEntity->listByPatientId($_GET['patient']);
$patient = $patientEntity->list($_GET['patient'])[0];


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listProntuario.php';
include __DIR__.'/includes/footer.php';
