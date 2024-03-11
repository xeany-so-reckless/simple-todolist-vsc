<!-- Menghubungkan ke Database -->

<?php 
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "kegiatan";
    public $connection;

    //KONEKSI KE DATABASE

    public function getConnection(){
        try{
            $this->connection = new mysqli($this->host, $this->username, $this->password);
        } catch(mysqli_sql_exception $exception){
            echo "KONEKSI GAGAL:"  . $exception->getMessage();
        }

        $createDB = "CREATE DATABASE IF NOT EXISTS $this->database";
        $this->connection->query($createDB);
        $this->connection->select_db($this->database);

        $users = "CREATE TABLE IF NOT EXISTS users (
            username VARCHAR(50) PRIMARY KEY,
            password VARCHAR(255)
            )";
        $this->connection->query($users);


        return $this->connection;
    }
}