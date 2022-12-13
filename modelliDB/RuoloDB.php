<?php

class RuoloDB
{
    private $conn;

	public int $id;
    public string $descrizione;
    public bool $is_admin;
    public bool $gestione_cantiere;

    /**
     * Istanzia un oggetto RuoloDB, passando per parametro un PDO della connessione col Database
     * @param $db
     */
    public function __construct($db){
        $this->conn = $db;
    }


    /**
     * Lancia una query al DB e restituisce tutti i record della tabella Ruolo
     * @return mixed
     */
    public function read(){
        $query="SELECT * FROM ruolo";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function read_by_id(){
        $query="SELECT * FROM ruolo WHERE id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->descrizione = $row['descrizione'];
        $this->is_admin = $row['is_admin'];
        $this->gestione_cantieri = $row['gestione_cantieri'];


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