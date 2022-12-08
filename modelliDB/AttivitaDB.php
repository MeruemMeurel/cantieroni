<?php

	class AttivitaDB
	{

		private $conn;

		public int $idPersonale;
		public int $idCantiere;
		public DateTime $inizio;
		public DateTime $fine;
		public string $note;
		public int $idAttivita;

		/**
		 * Istanzia un'oggetto AttivitaDB, passando per parametro un PDO della connessione col Database
		 * @param $db
		 */
		public function __construct($db){
			$this->conn = $db;
		}

		/**
		 * Lancia una query al DB e restituisce tutti i record della tabella Attivita
		 * @return mixed
		 */
		public function read(){
			$query="SELECT * FROM attivita";

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
		 * @return int
		 */
		public function getIdCantiere(): int
		{
			return $this->idCantiere;
		}

		/**
		 * @param int $idCantiere
		 */
		public function setIdCantiere(int $idCantiere): void
		{
			$this->idCantiere = $idCantiere;
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

		/**
		 * @return string
		 */
		public function getNote(): string
		{
			return $this->note;
		}

		/**
		 * @param string $note
		 */
		public function setNote(string $note): void
		{
			$this->note = $note;
		}

		/**
		 * @return int
		 */
		public function getIdAttivita(): int
		{
			return $this->idAttivita;
		}

		/**
		 * @param int $idAttivita
		 */
		public function setIdAttivita(int $idAttivita): void
		{
			$this->idAttivita = $idAttivita;
		}


	}