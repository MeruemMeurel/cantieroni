<?php

class CantiereDB
{
    private $conn;

	public int $id;
	public string $nome;
	public string $indirizzo;
	public string $citta;
	public string $provincia;
	public date $data_inizio;
	public date $data_fine;
	public string $descrizione;
	public int $id_capocantiere;

    /**
     * Istanzia un'oggetto CantiereDB, passando per parametro un PDO della connessione col Database
     * @param $db
     */
    public function __construct($db){
        $this->conn = $db;
    }

    /**
     * Lancia una query al DB e restituisce tutti i record della tabella Cantiere
     * @return mixed
     */
    public function read(){
        $query="SELECT * FROM cantiere";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    /**
     * NON IMPLEMENTATA
     * Restituisce un cantiere dato il suo id
     * @param int $id
     * @return mixed
     */

	public function read_by_id(){
		$query="SELECT * FROM cantiere WHERE id = ?";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(1, $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nome = $row['nome'];
		$this->indirizzo = $row['indirizzo'];
		$this->citta = $row['citta'];
		$this->provincia = $row['provincia'];
		$this->descrizione = $row['descrizione'];
		$this->id_capocantiere = $row['id_capocantiere'];

	}

	public function read_by_name() {
		$query = "SELECT * FROM cantiere WHERE nome LIKE ?";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(1, $this->nome);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
	 * @return date
	 */
	public function getDataInizio(): date
	{
		return $this->data_inizio;
	}

	/**
	 * @param date $data_inizio
	 */
	public function setDataInizio(date $data_inizio): void
	{
		$this->data_inizio = $data_inizio;
	}

	/**
	 * @return date
	 */
	public function getDataFine(): date
	{
		return $this->data_fine;
	}

	/**
	 * @param date $data_fine
	 */
	public function setDataFine(date $data_fine): void
	{
		$this->data_fine = $data_fine;
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
	 * @return int
	 */
	public function getIdCapocantiere(): int
	{
		return $this->id_capocantiere;
	}

	/**
	 * @param int $id_capocantiere
	 */
	public function setIdCapocantiere(int $id_capocantiere): void
	{
		$this->id_capocantiere = $id_capocantiere;
	}


}