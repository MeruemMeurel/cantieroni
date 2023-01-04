<?php
    class UtenteDB
    {
        private $conn;

        public int $id;
        public string $username;
        public string $password;
        public string $email;
        public string $telefono;
        public int $id_personale;

        public function __construct($db){
            $this->conn = $db;
        }

        public function read(){
            $query="SELECT * FROM utente";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }


        public function read_single() {
            //create query
            $query = 'SELECT * FROM utente u WHERE u.id = ? LIMIT 0,1';

            $stmt = $this->conn->prepare($query);

            //BIND id
            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->email = $row['email'];
            $this->telefono = $row['telefono'];
            $this->id_personale = $row['id_personale'];

        }




    }



?>