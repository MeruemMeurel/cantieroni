<?php

	class AttivitaDB
	{

		private $conn;

		private int $id;
		private DateTime $inizio;
		private DateTime $fine;

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