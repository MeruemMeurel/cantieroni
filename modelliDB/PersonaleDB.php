<?php

class PersonaleDB
{
	private $conn;

	private int $id;
	private string $nome;
	private string $cognome;
	private string $email;
	private string $telefono;
	private string $indirizzo;
	private string $citta;
	private string $provincia;
	private int $id_ruolo;
	private int $id_azienda;

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
	 * @return string
	 */
	public function getNome(): string
	{
		return $this->nome;
	}

	/**
	 * @param string $nome
	 */
	public function setNome(string $nome): void
	{
		$this->nome = $nome;
	}

	/**
	 * @return string
	 */
	public function getCognome(): string
	{
		return $this->cognome;
	}

	/**
	 * @param string $cognome
	 */
	public function setCognome(string $cognome): void
	{
		$this->cognome = $cognome;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getTelefono(): string
	{
		return $this->telefono;
	}

	/**
	 * @param string $telefono
	 */
	public function setTelefono(string $telefono): void
	{
		$this->telefono = $telefono;
	}

	/**
	 * @return string
	 */
	public function getIndirizzo(): string
	{
		return $this->indirizzo;
	}

	/**
	 * @param string $indirizzo
	 */
	public function setIndirizzo(string $indirizzo): void
	{
		$this->indirizzo = $indirizzo;
	}

	/**
	 * @return string
	 */
	public function getCitta(): string
	{
		return $this->citta;
	}

	/**
	 * @param string $citta
	 */
	public function setCitta(string $citta): void
	{
		$this->citta = $citta;
	}

	/**
	 * @return string
	 */
	public function getProvincia(): string
	{
		return $this->provincia;
	}

	/**
	 * @param string $provincia
	 */
	public function setProvincia(string $provincia): void
	{
		$this->provincia = $provincia;
	}

	/**
	 * @return int
	 */
	public function getIdRuolo(): int
	{
		return $this->id_ruolo;
	}

	/**
	 * @param int $id_ruolo
	 */
	public function setIdRuolo(int $id_ruolo): void
	{
		$this->id_ruolo = $id_ruolo;
	}

	/**
	 * @return int
	 */
	public function getIdAzienda(): int
	{
		return $this->id_azienda;
	}

	/**
	 * @param int $id_azienda
	 */
	public function setIdAzienda(int $id_azienda): void
	{
		$this->id_azienda = $id_azienda;
	}


}