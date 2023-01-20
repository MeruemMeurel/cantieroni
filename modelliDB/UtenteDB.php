<?php
    class UtenteDB
    {
        private $conn;

        public int $id;
        public string $username;
        public string $password;
        public string $email;
        public string $telefono;

        public function __construct($db){
            $this->conn = $db;
        }

	    /**
	     * Restituisce tutti gli utenti
	     * @return mixed
	     */
        public function read(){
            $query="SELECT * FROM utente";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }

	    /**
	     * Restituisce un utente in base all'id
	     * @return mixed
	     */
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

        }

	    /**
	     * Restituisce un utente in base alla mail
	     * @return mixed
	     */
		public function read_by_email(){
			$query = 'SELECT * FROM utente WHERE email LIKE :email';

			$stmt = $this->conn->prepare($query);

			$stmt->bindParam(':email', $this->email);

			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			$this->id = $row['id'];
			$this->username = $row['username'];
			$this->password = $row['password'];
			$this->telefono = $row['telefono'];
		}

	    /**
	     * Restituisce un utente in base all'user
	     * @return mixed
	     */
	    public function read_by_username(){
		    $query = 'SELECT * FROM utente WHERE username = :username';

		    $stmt = $this->conn->prepare($query);

		    $stmt->bindParam(':username', $this->username);

		    $stmt->execute();

		    $row = $stmt->fetch(PDO::FETCH_ASSOC);			
			if(!$row) {
				$this->id=0;
				return false;
			}

		    $this->id = $row['id'];
		    $this->password = $row['password'];
		    $this->email = $row['email'];
		    $this->telefono = $row['telefono'];

			return true;
	    }

	    /**
	     * Restituisce un utente in base al numero di telefono
	     * @return mixed
	     */
	    public function read_by_phone(){
		    $query = 'SELECT * FROM utente WHERE telefono LIKE :telefono';

		    $stmt = $this->conn->prepare($query);

		    $stmt->bindParam(':telefono', $this->telefono);

		    $stmt->execute();

		    $row = $stmt->fetch(PDO::FETCH_ASSOC);

		    $this->id = $row['id'];
		    $this->username = $row['username'];
		    $this->password = $row['password'];
		    $this->email = $row['email'];
	    }

	    /**
	     * Crea un utente con tutti gli attributi
	     * @return mixed
	     */
		public function create() {
			$query = 'INSERT INTO utente
				SET
				    username = :username,
					password = :password,
					email = :email,
					telefono = :telefono,
				';

			$stmt = $this->conn->prepare($query);

			$this->username = htmlspecialchars(strip_tags($this->username));
			$this->password = htmlspecialchars(strip_tags($this->password));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->telefono = htmlspecialchars(strip_tags($this->telefono));

			$stmt->bindParam(':username', $this->username);
			$stmt->bindParam(':password', $this->password);
			$stmt->bindParam(':email', $this->email);
			$stmt->bindParam(':telefono', $this->telefono);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
    }

?>