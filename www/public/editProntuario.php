<?php

use App\Entity\MedicalrecortEntity;

require __DIR__.'/vendor/autoload.php';

if(!isset($_GET['prontuario']) or !is_numeric($_GET['prontuario'])){
    header('location: index.php');
    exit;
}

$medicalrecortEntity = new MedicalrecortEntity;
$prontuario = $medicalrecortEntity->list($_GET['prontuario'])[0] ?? null;

if (isset($_POST['name'], $_POST['CPF'])) {
    $medicalrecortEntity->update($_GET['prontuario'], $_POST);

    header('location: index.php');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-ficha-avaliacao.php';
include __DIR__.'/includes/footer.php';
