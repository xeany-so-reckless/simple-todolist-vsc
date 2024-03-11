<?php
class User{
    public $connection;
    private $table_name = "users";

    //OBJEK PROPERTIES
    public $id;
    public $username;
    public $password;


    public function ___construct($connection){
        $this->connection = $connection;
    }

    //FUNGSI REGISTER USER
    public function register(){
        $query = "INSERT INTO " . $this->table_name . "(username, password) VALUES (?, ?)" ;
        $stmt = $this->connection->prepare($query);

        //BIND VALUES
        $stmt->bind_param("ss", $this->username, $this->password);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    //FUNGSI LOGIN USER
    public function login(){
        $query = "SELECT * FROM " . $this->table_name . " WHERE username = ? AND password = ?";
        $stmt = $this->connection->prepare($query);

        //BIND VALUES
        $stmt->bind_param("ss" , $this->username, $this->password);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows >0){
            return true;
        }
        return false;
    }
}