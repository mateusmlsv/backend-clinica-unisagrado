<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\PatientEntity;

if(!isset($_GET['patient']) or !is_numeric($_GET['patient'])){
    header('location: index.php');
    exit;
}

$patientEntity = new PatientEntity;
$patients = $patientEntity->list($_GET['patient'])[0];

if (!$patient) {
    header('location: index.php');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';
