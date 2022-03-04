<?php

namespace Database;
use PDO;
class DBConnection {

    private $dbName;
    private $host;
    private $userName;
    private $password;
    private $pdo;

    public function __construct(string $dbName, string $host, string $userName, string $password) {
        $this->dbName = $dbName;
        $this->host = $host;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function getPDO() : PDO {
        return $this->pdo ?? new PDO("mysql:dbname={$this->dbName}; host={$this->host}", $this->userName, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8']);
    }
}