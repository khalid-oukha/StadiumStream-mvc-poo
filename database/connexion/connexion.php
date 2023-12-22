<?php

namespace app\connexion;

use PDO;
use PDOException;

class connexion {

    protected PDO $pdo;
    public function __construct() {

        $this->getConnection();

    }
    public function getConnection():PDO {
        try {
            $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

}