<?php

namespace App\Controller;

use App\Entity\MedicalrecortEntity;

class MedicalrecortController {
    public function get($id = null)
    {
        return (new MedicalrecortEntity)->list($id);
    }

    public function post()
    {
        $data = json_decode(file_get_contents('php://input'), true) ?? null;
        return (new MedicalrecortEntity)->register($data);
    }

    public function put($id = null)
    {
        $data = json_decode(file_get_contents('php://input'), true) ?? null;
        return (new MedicalrecortEntity)->update($id, $data);
    }

    public function delete($id = null)
    {
        return (new MedicalrecortEntity)->delete($id);
    }
}