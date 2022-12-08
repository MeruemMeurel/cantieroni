<?php

class Attivita
{

	private int $id;
	private DateTime $inizio;
	private DateTime $fine;

	/**
	 * @param int $id
	 * @param DateTime $inizio
	 * @param DateTime $fine
	 */
	public function __construct(int $id, DateTime $inizio, DateTime $fine)
	{
		$this->id = $id;
		$this->inizio = $inizio;
		$this->fine = $fine;
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
	 * @return DateTime
	 */
	public function getInizio(): DateTime
	{
		return $this->inizio;
	}

	/**
	 * @param DateTime $inizio
	 */
	public function setInizio(DateTime $inizio): void
	{
		$this->inizio = $inizio;
	}

	/**
	 * @return DateTime
	 */
	public function getFine(): DateTime
	{
		return $this->fine;
	}

	/**
	 * @param DateTime $fine
	 */
	public function setFine(DateTime $fine): void
	{
		$this->fine = $fine;
	}


}