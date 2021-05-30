<?php

use App\Entity\PatientEntity;

require __DIR__.'/vendor/autoload.php';

$patientEntity = new PatientEntity;

if (isset($_POST['name'], $_POST['CPF'])) {
    $patientEntity->register($_POST);

    header('location: index.php');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-new-patient.php';
include __DIR__.'/includes/footer.php';
