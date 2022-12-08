<?php

class PostDB
{

	private $conn;

	private int $id;
	private int $id_utente;
	private Timestamp $ora_post;
	private int $id_cantiere;
    private string $descrizione;

	/**
	 * Istanzia un'oggetto PostDB, passando per parametro un PDO della connessione col Database
	 * @param $db
	 */
	public function __construct($db)
	{
		$this->conn = $db;
	}

	/**
	 * Lancia una query al DB e restituisce tutti i record della tabella Post
	 * @return mixed
	 */
	public function read(){
		$query="SELECT * FROM post";

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
     * @return Timestamp
     */
    public function getOraPost(): Timestamp
    {
        return $this->ora_post;
    }

    /**
     * @param Timestamp $ora_post
     */
    public function setOraPost(Timestamp $ora_post): void
    {
        $this->ora_post = $ora_post;
    }

    /**
     * @return int
     */
    public function getIdCantiere(): int
    {
        return $this->id_cantiere;
    }

    /**
     * @param int $id_cantiere
     */
    public function setIdCantiere(int $id_cantiere): void
    {
        $this->id_cantiere = $id_cantiere;
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


}