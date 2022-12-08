<?php

class PersonaleDB
{
	private $conn;

	private string $nome;
	private string $cognome;
	private string $email;
	private string $telefono;
	private string $posizione;
	private int $idPersonale;
	private Ruolo $ruolo;
	private AziendaDB $azienda;

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
	public function getPosizione(): string
	{
		return $this->posizione;
	}

	/**
	 * @param string $posizione
	 */
	public function setPosizione(string $posizione): void
	{
		$this->posizione = $posizione;
	}

	/**
	 * @return int
	 */
	public function getIdPersonale(): int
	{
		return $this->idPersonale;
	}

	/**
	 * @param int $idPersonale
	 */
	public function setIdPersonale(int $idPersonale): void
	{
		$this->idPersonale = $idPersonale;
	}

	/**
	 * @return Ruolo
	 */
	public function getRuolo(): Ruolo
	{
		return $this->ruolo;
	}

	/**
	 * @param Ruolo $ruolo
	 */
	public function setRuolo(Ruolo $ruolo): void
	{
		$this->ruolo = $ruolo;
	}

	/**
	 * @return AziendaDB
	 */
	public function getAzienda(): AziendaDB
	{
		return $this->azienda;
	}

	/**
	 * @param AziendaDB $azienda
	 */
	public function setAzienda(AziendaDB $azienda): void
	{
		$this->azienda = $azienda;
	}


}