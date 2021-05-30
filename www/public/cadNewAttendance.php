<?php

use App\Entity\MedicalrecortEntity;

require __DIR__.'/vendor/autoload.php';
error_reporting(E_ALL ^ E_NOTICE);

if(!isset($_GET['patient_id']) or !is_numeric($_GET['patient_id'])){
    header('location: index.php');
    exit;
}

$medicalrecortEntity = new MedicalrecortEntity();

if (isset($_GET['hemorragia'])) {
    $medicalrecortEntity->register($_GET);

    header('location: prontuario.php?patient=' . $_GET['patient_id']);
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-ficha-avaliacao.php';
include __DIR__.'/includes/footer.php';
