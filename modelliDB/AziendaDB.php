<?php

class AziendaDB
{

	private $conn;

	public int $id;
	public String $nome;
	public String $indirizzo;
	public String $citta;
	public String $provincia;
	public String $partita_iva;

	/**
	 * Istanzia un'oggetto AziendaDB, passando per parametro un PDO della connessione col Database
	 * @param $db
	 */
	public function __construct($db)
	{
		$this->conn = $db;
	}

	/**
	 * Lancia una query al DB e restituisce tutti i record della tabella Azienda
	 * @return mixed
	 */
	public function read(){
		$query="SELECT * FROM azienda";

		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		return $stmt;
	}

	/**
	 * Restituisce un'azienda in base all'id
	 * @return mixed
	 */
	public function read_by_id(){
		$query="SELECT * FROM azienda WHERE id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nome = $row['nome'];
		$this->indirizzo = $row['indirizzo'];
		$this->citta = $row['citta'];
		$this->provincia = $row['provincia'];
		$this->partita_iva = $row['partita_iva'];
	}

	/**
	 * Restituisce un'azienda in base alla partita iva
	 * @return mixed
	 */
	public function read_by_iva(){
		$query = "SELECT * FROM azienda WHERE partita_iva LIKE :partita_iva";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':partita_iva', $this->partita_iva);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $row['id'];
		$this->nome = $row['nome'];
		$this->indirizzo = $row['indirizzo'];
		$this->citta = $row['citta'];
		$this->provincia = $row['provincia'];
	}

	/**
	 * Restituisce aziende in base al nome
	 * @return mixed
	 */
	public function  read_by_nome(){
		$this->nome = str_replace("-", " ", $this->nome);

		$query="SELECT * FROM azienda WHERE nome LIKE :nome";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nome', $this->nome);

		$stmt->execute();

		return $stmt;
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