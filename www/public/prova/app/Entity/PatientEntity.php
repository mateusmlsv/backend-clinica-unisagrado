<?php

namespace App\Entity;

use App\Db\Database;
use Exception;
use \PDO;

class PatientEntity {
    private $table = 'patients';

    public function list($id)
    {
        $where = $id ? "id = $id" : null;
        if (empty($patients = (new Database($this->table))->select($where)->fetchAll(PDO::FETCH_ASSOC))) {
            throw new Exception('Nenhum registro encontrado', 400);
        }
        return $patients;
    }

    public function register($data)
    {
        $id = (new Database($this->table))->insert($data);
        return $this->list($id);
    }

    public function update($id, $data)
    {
        if (!$id || !$data) {
            throw new Exception('Falta de informações', 400);
        }
        (new Database($this->table))->update("id = $id", $data);
        return $this->list($id);
    }

    public function delete($id)
    {
        if (!$id) {
            throw new Exception('ID do paciente é obrigatório', 400);
        }
        (new Database($this->table))->delete("id = $id");
        return http_response_code(204);
    }
}