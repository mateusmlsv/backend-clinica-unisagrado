<?php

namespace App\Controller;

use App\Entity\PatientEntity;

class PatientController {
    public function get($id = null)
    {
        return (new PatientEntity)->list($id);
    }

    public function post()
    {
        $data = json_decode(file_get_contents('php://input'), true) ?? null;
        return (new PatientEntity)->register($data);
    }

    public function put($id = null)
    {
        $data = json_decode(file_get_contents('php://input'), true) ?? null;
        return (new PatientEntity)->update($id, $data);
    }

    public function delete($id = null)
    {
        return (new PatientEntity)->delete($id);
    }
}