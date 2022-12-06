<?php

//    require_once '..\src\config.php';

    class Database {


        //Connessione
        private $conn;

        /**
         * Instaura una connessione col db per risolvere una richiesta
         * @return PDO|null
         */
        public function connect(): ?PDO
        {
            //credenziali per DB
            $host='localhost';
            $port=3306;
            $name='Cantieroni';
            $username='root';
            $password='';


            $this->conn = null;

            try {
//                $this->conn=new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATABASE_NAME,DB_USERNAME,DB_PASSWORD);
                $this->conn=new PDO("mysql:host=$host;port=$port;dbname=$name",$username,$password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $e) {
                echo "Errore di connessione: ".$e->getMessage();
            }

            return $this->conn;
        }

    }













































//    class Database{
//        protected $connection = null;
//
//        public function __construct(){
//            try {
//                $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
//
//                if ( mysqli_connect_errno()) {
//                    throw new Exception("Could not connect to database.");
//                }
//            } catch (Exception $e) {
//                throw new Exception($e->getMessage());
//            }
//        }
//
//        public function select($query = "" , $params = [])
//        {
//            try {
//                $stmt = $this->executeStatement( $query , $params );
//                $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
//                $stmt->close();
//
//                return $result;
//            } catch(Exception $e) {
//                throw New Exception( $e->getMessage() );
//            }
//            return false;
//        }
//
//        private function executeStatement($query = "" , $params = [])
//        {
//            try {
//                $stmt = $this->connection->prepare( $query );
//
//                if($stmt === false) {
//                    throw New Exception("Unable to do prepared statement: " . $query);
//                }
//
//                if( $params ) {
//                    $stmt->bind_param($params[0], $params[1]);
//                }
//
//                $stmt->execute();
//
//                return $stmt;
//            } catch(Exception $e) {
//                throw New Exception( $e->getMessage() );
//            }
//        }
//
//    }
?>