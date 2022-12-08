<?php

class Azienda
{

	private int $id;
	private String $nome;
	private String $indirizzo;
	private String $citta;
	private String $provincia;
	private String $partita_iva;

	/**
	 * @param int $id
	 * @param String $nome
	 * @param String $indirizzo
	 * @param String $citta
	 * @param String $provincia
	 * @param String $partita_iva
	 */
	public function __construct(int $id, string $nome, string $indirizzo, string $citta, string $provincia, string $partita_iva)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->indirizzo = $indirizzo;
		$this->citta = $citta;
		$this->provincia = $provincia;
		$this->partita_iva = $partita_iva;
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