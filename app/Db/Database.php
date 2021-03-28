<?php

class Database {
    const HOST = 'localhost';
    const NAME = 'sempre';
    const USER = 'root';
    const PASS = 'joiodotrigo';

    private $table;
    private $connection;

    public function __construct($table = null) {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection (){
        try {
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR'.$e->getMessage());
        }
    }

    public function execute($query,$params = []) {
        try {
            $statement =$this->connection->prepare($query);
            $statement->execute($params);
            return $statement;

        } catch (PDOException $e) {
            die('ERROR'.$e->getMessage());
        }
    }

    public function insert($values) {

        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        $query = 'INSERT INTO '.$this->table.' ( '.implode(',', $fields) .' ) VALUES ( '.implode(',', $binds).')';
        
        $this->execute($query,array_values($values));

        return $this->connection->lastInsertId();
    }

    public function select($fields = null, $where = null, $join = null, $order = null, $limit = null){

        $where = strlen($where) ? 'WHERE '.$where : '';
        $join = strlen($join) ? ' '.$join : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$join. ' '.$order.' '.$limit;
        
        return $this->execute($query);
    }

    public function update($where, $values) {

        $fields = array_keys($values);

        $query = 'UPDATE '.$this->table.' SET '.implode('=?,', $fields).'=? WHERE '.$where;
        
        $this->execute($query, array_values($values));

        return true;
    }

    public function delete($where) {

        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
    
        $this->execute($query);

        return true;
    }
}