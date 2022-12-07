<?php

class CantiereDB
{
    private $conn;

    private int $id;
    private string $nome;
    private string $indirizzo;
    private string $citta;
    private string $provincia;
    private date $data_inizio;
    private date $data_fine;
    private string $descrizione;

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
    public function find_by_id(int $id){
        $query="SELECT * FROM cantiere WHERE id = $id";

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
     * @return Date
     */
    public function getDataInizio(): Date
    {
        return $this->data_inizio;
    }

    /**
     * @param Date $data_inizio
     */
    public function setDataInizio(Date $data_inizio): void
    {
        $this->data_inizio = $data_inizio;
    }

    /**
     * @return Date
     */
    public function getDataFine(): Date
    {
        return $this->data_fine;
    }

    /**
     * @param Date $data_fine
     */
    public function setDataFine(Date $data_fine): void
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

}