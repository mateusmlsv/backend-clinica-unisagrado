<?php

namespace App\Db;

use Exception;
use \PDO;
use PDOException;

class Database {

    const HOST = 'mysql-srv';
    const NAME = 'clinica_unisagrado';
    const USER = 'root';
    const PASS = 'root';
    const PORT = '3306';

    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        $dsn = 'mysql:host='.self::HOST.';dbname='.self::NAME;
        try {
            $this->connection = new PDO($dsn, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception('Internal server error', 500);
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), 404);
        }
    }

    public function insert($values)
    {
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        $query = 'INSERT INTO ' . $this->table . '('.implode(',', $fields).') values ('.implode(',', $binds).')';
        
        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();
    }

    public function select($where = null, $fields = '*')
    {
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $query = 'SELECT '.$fields.' FROM '. $this->table . ' '. $where;

        return $this->execute($query);
    }

    public function update($where, $values)
    {
        $fields = array_keys($values);

        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

        $this->execute($query, array_values($values));

        return true;
    }

    public function delete($where)
    {
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

        $this->execute($query);

        return true;
    }
}