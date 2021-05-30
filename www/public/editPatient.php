<?php

use App\Entity\PatientEntity;

require __DIR__.'/vendor/autoload.php';

if(!isset($_GET['patient']) or !is_numeric($_GET['patient'])){
    header('location: index.php');
    exit;
}

$patientEntity = new PatientEntity;
$patient = $patientEntity->list($_GET['patient'])[0];
$patient['dt_birthday'] = explode(' ', $patient['dt_birthday'])[0];

if (isset($_POST['name'], $_POST['CPF'])) {
    $patientEntity->update($_GET['patient'], $_POST);

    header('location: index.php');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-new-patient.php';
include __DIR__.'/includes/footer.php';
