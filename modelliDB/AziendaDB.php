<?php

class AziendaDB
{

	private $conn;

	private int $id;
	private String $nome;
	private String $indirizzo;
	private String $citta;
	private String $provincia;
	private String $partita_iva;

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
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
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
	 * @return String
	 */
	public function getPartitaIva(): string
	{
		return $this->partita_iva;
	}

	/**
	 * @param String $partita_iva
	 */
	public function setPartitaIva(string $partita_iva): void
	{
		$this->partita_iva = $partita_iva;
	}
}