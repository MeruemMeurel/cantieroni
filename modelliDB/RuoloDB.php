<?php

class RuoloDB
{
    private $conn;

	public int $id;
    public string $descrizione;
    public bool $is_admin;
    public bool $gestione_cantieri;

    /**
     * Istanzia un oggetto RuoloDB, passando per parametro un PDO della connessione col Database
     * @param $db
     */
    public function __construct($db){
        $this->conn = $db;
    }


    /**
     * Lancia una query al DB e restituisce tutti i record della tabella Ruolo
     * @return mixed
     */
    public function read(){
        $query="SELECT * FROM ruolo";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function read_by_id(){
        $query="SELECT * FROM ruolo WHERE id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->descrizione = $row['descrizione'];
        $this->is_admin = $row['is_admin'];
        $this->gestione_cantieri = $row['gestione_cantieri'];
    }

	/**
	 * Restituisce tutti i ruoli admin
	 * @return mixed
	 */
	public function read_if_admin(){
		$query="SELECT * FROM ruolo WHERE is_admin = 1";

		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		return $stmt;
	}

	/**
	 * Restituisce tutti i ruoli che gestiscono cantieri
	 * @return mixed
	 */
	public function read_if_gestione(){
		$query="SELECT * FROM ruolo WHERE gestione_cantieri = 1";

		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		return $stmt;
	}
}