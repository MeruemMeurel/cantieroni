<?php

class AziendaDB
{

	private $conn;

	public int $idAzienda;
	public String $nome;
	public String $indirizzo;
	public String $citta;
	public String $provincia;
	public int $idTitolare;

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

	/**
	 * @return int
	 */
	public function getIdAzienda(): int
	{
		return $this->idAzienda;
	}

	/**
	 * @param int $idAzienda
	 */
	public function setIdAzienda(int $idAzienda): void
	{
		$this->idAzienda = $idAzienda;
	}

	/**
	 * @return String
	 */
	public function getNome(): string
	{
		return $this->nome;
	}

	/**
	 * @param String $nome
	 */
	public function setNome(string $nome): void
	{
		$this->nome = $nome;
	}

	/**
	 * @return String
	 */
	public function getIndirizzo(): string
	{
		return $this->indirizzo;
	}

	/**
	 * @param String $indirizzo
	 */
	public function setIndirizzo(string $indirizzo): void
	{
		$this->indirizzo = $indirizzo;
	}

	/**
	 * @return String
	 */
	public function getCitta(): string
	{
		return $this->citta;
	}

	/**
	 * @param String $citta
	 */
	public function setCitta(string $citta): void
	{
		$this->citta = $citta;
	}

	/**
	 * @return String
	 */
	public function getProvincia(): string
	{
		return $this->provincia;
	}

	/**
	 * @param String $provincia
	 */
	public function setProvincia(string $provincia): void
	{
		$this->provincia = $provincia;
	}

	/**
	 * @return int
	 */
	public function getIdTitolare(): int
	{
		return $this->idTitolare;
	}

	/**
	 * @param int $idTitolare
	 */
	public function setIdTitolare(int $idTitolare): void
	{
		$this->idTitolare = $idTitolare;
	}


}