<?php
namespace MVC\Model;
use database\connexion\connexion;
use PDO;

class Crud extends connexion
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(string $table,array $data)
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "insert into $table($columns) values ($values)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_values($data));
    }
    
    public function select(string $table,int $id = 0)
    {

        $param = [];
        $sql = "SELECT * FROM $table ";
        if ($id != 0) {
            $sql .= "WHERE id = ?";
            $param = [$id];
        }

        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute($param);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(string $table,int $id,array $data)
    {
        $setClause = implode(' = ?, ', array_keys($data)) . ' = ?';
        $sql = "UPDATE $table SET $setClause WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount();
    }

    public function delete(string $table,int $id)
    {
        $sql = "DELETE FROM $table WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
}