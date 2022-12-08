<?php

class Ruolo
{
    private int $id;
	private string $descrizione;
    private bool $is_admin;
    private bool $gestione_cantiere;

	/**
	 * @param int $id
	 * @param string $descrizione
	 * @param bool $is_admin
	 * @param bool $gestione_cantiere
	 */
	public function __construct(int $id, string $descrizione, bool $is_admin, bool $gestione_cantiere)
	{
		$this->id = $id;
		$this->descrizione = $descrizione;
		$this->is_admin = $is_admin;
		$this->gestione_cantiere = $gestione_cantiere;
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
	public function getDescrizione(): string
	{
		return $this->descrizione;
	}

	/**
	 * @param string $descrizione
	 */
	public function setDescrizione(string $descrizione): void
	{
		$this->descrizione = $descrizione;
	}

	/**
	 * @return bool
	 */
	public function isIsAdmin(): bool
	{
		return $this->is_admin;
	}

	/**
	 * @param bool $is_admin
	 */
	public function setIsAdmin(bool $is_admin): void
	{
		$this->is_admin = $is_admin;
	}

	/**
	 * @return bool
	 */
	public function isGestioneCantiere(): bool
	{
		return $this->gestione_cantiere;
	}

	/**
	 * @param bool $gestione_cantiere
	 */
	public function setGestioneCantiere(bool $gestione_cantiere): void
	{
		$this->gestione_cantiere = $gestione_cantiere;
	}
}