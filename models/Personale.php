<?php

class Personale
{
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
	 * @param int $id
	 * @param string $nome
	 * @param string $cognome
	 * @param string $email
	 * @param string $telefono
	 * @param string $indirizzo
	 * @param string $citta
	 * @param string $provincia
	 * @param int $id_ruolo
	 * @param int $id_azienda
	 */
	public function __construct(int $id, string $nome, string $cognome, string $email, string $telefono, string $indirizzo, string $citta, string $provincia, int $id_ruolo, int $id_azienda)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->cognome = $cognome;
		$this->email = $email;
		$this->telefono = $telefono;
		$this->indirizzo = $indirizzo;
		$this->citta = $citta;
		$this->provincia = $provincia;
		$this->id_ruolo = $id_ruolo;
		$this->id_azienda = $id_azienda;
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