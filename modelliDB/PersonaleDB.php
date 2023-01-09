<?php

class PersonaleDB
{
	private $conn;

	public int $id;
	public string $nome;
	public string $cognome;
	public string $email;
	public string $telefono;
	public string $indirizzo;
	public string $citta;
	public string $provincia;
	public int $id_ruolo;
	public int $id_azienda;

	/**
	 * Istanzia un'oggetto PersonaleDB, passando per parametro un PDO della connessione col Database
	 * @param $db
	 */
	public function __construct($db)
	{
		$this->conn = $db;
	}

	/**
	 * Lancia una query al DB e restituisce tutti i record della tabella Personale
	 * @return mixed
	 */
	public function read(){
		$query="SELECT * FROM personale";

		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		return $stmt;
	}

	/**
	 *
	 * Restituisce un membro del personale dato il suo id
	 * @return mixed
	 */
	public function read_by_id(){
		$query="SELECT * FROM personale WHERE id LIKE :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nome = $row['nome'];
		$this->cognome = $row['cognome'];
		$this->email = $row['email'];
		$this->telefono = $row['telefono'];
		$this->indirizzo = $row['indirizzo'];
		$this->citta = $row['citta'];
		$this->provincia = $row['provincia'];
		$this->id_ruolo = $row['id_ruolo'];
		$this->id_azienda = $row['id_azienda'];
	}

	/**
	 * @return mixed
	 */
	public function getConn()
	{
		return $this->conn;
	}

	/**
	 * @param mixed $conn
	 */
	public function setConn($conn): void
	{
		$this->conn = $conn;
	}

}