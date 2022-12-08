<?php

class Post
{

	private int $id;
	private int $id_utente;
	private DateTime $ora_post;
	private int $id_attivita;

	/**
	 * @param int $id
	 * @param int $id_utente
	 * @param DateTime $ora_post
	 * @param int $id_attivita
	 */
	public function __construct(int $id, int $id_utente, DateTime $ora_post, int $id_attivita)
	{
		$this->id = $id;
		$this->id_utente = $id_utente;
		$this->ora_post = $ora_post;
		$this->id_attivita = $id_attivita;
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
	 * @return int
	 */
	public function getIdUtente(): int
	{
		return $this->id_utente;
	}

	/**
	 * @param int $id_utente
	 */
	public function setIdUtente(int $id_utente): void
	{
		$this->id_utente = $id_utente;
	}

	/**
	 * @return DateTime
	 */
	public function getOraPost(): DateTime
	{
		return $this->ora_post;
	}

	/**
	 * @param DateTime $ora_post
	 */
	public function setOraPost(DateTime $ora_post): void
	{
		$this->ora_post = $ora_post;
	}

	/**
	 * @return int
	 */
	public function getIdAttivita(): int
	{
		return $this->id_attivita;
	}

	/**
	 * @param int $id_attivita
	 */
	public function setIdAttivita(int $id_attivita): void
	{
		$this->id_attivita = $id_attivita;
	}


}