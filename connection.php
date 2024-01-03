<?php

class Connection {


   public $servername = "localhost";
   public $username = "root";
    public $password = "";
    public $conn;
    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);

        // Check connection
if (!$this->conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    
    }

    public function createDatabase($databaseName){

        // Create database
$sql = "CREATE DATABASE $databaseName";
if (mysqli_query($this->conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($this->conn);
}

    }

    public function selectDatabase($dbname){

        mysqli_select_db($this->conn,$dbname);
    }

    public function createTable($query){

        if (mysqli_query($this->conn, $query)) {
            echo "Table  created successfully";
            } else {
            echo "Error creating table: " . mysqli_error($this->conn);
            }
            
    }


    
}
?>