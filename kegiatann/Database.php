<!-- Menghubungkan ke Database -->

<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $DbName = "kegiatan";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->DbName);
        
        if ($this->conn->connect_error) {
                die("KONEKSI GAGAL: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {

        return $this->conn;
    }
}