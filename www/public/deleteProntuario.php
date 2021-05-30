<?php

use App\Entity\MedicalrecortEntity;

require __DIR__.'/vendor/autoload.php';

if(!isset($_GET['prontuario']) or !is_numeric($_GET['prontuario'])){
  header('location: index.php');
  exit;
}

$medicalrecortEntity = new MedicalrecortEntity();
$prontuario = $medicalrecortEntity->list($_GET['prontuario']);

if(!$prontuario){
  header('location: index.php');
  exit;
}


if(isset($_POST['excluir'])){

  $medicalrecortEntity->delete($_GET['prontuario']);

  header('location: prontuario.php?patient='. $prontuario['patient_id']);
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';