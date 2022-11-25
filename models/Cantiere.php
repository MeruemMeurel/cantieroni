<?php

use Cassandra\Date;

class Cantiere
{
    private $conn;

    private int $idCantiere;
    private string $nome;
    private Localita $localita;
    private date $dataInizio;
    private date $dataFine;

//    /**
//     * @param int $idCantiere
//     * @param string $nome
//     * @param Localita $localita
//     * @param date $dataInizio
//     * @param date $dataFine
//     */
//    public function __construct(int $idCantiere, string $nome, Localita $localita, Date $dataInizio, Date $dataFine)
//    {
//        $this->idCantiere = $idCantiere;
//        $this->nome = $nome;
//        $this->localita = $localita;
//        $this->dataInizio = $dataInizio;
//        $this->dataFine = $dataFine;
//    }

    public function __construct($db){
        $this->conn = $db;
    }


    public function read(){
        $query="SELECT * FROM dbo.Cantiere";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
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
     * @return Localita
     */
    public function getLocalita(): Localita
    {
        return $this->localita;
    }

    /**
     * @param Localita $localita
     */
    public function setLocalita(Localita $localita): void
    {
        $this->localita = $localita;
    }

    /**
     * @return Date
     */
    public function getDataInizio(): Date
    {
        return $this->dataInizio;
    }

    /**
     * @param Date $dataInizio
     */
    public function setDataInizio(Date $dataInizio): void
    {
        $this->dataInizio = $dataInizio;
    }

    /**
     * @return Date
     */
    public function getDataFine(): Date
    {
        return $this->dataFine;
    }

    /**
     * @param Date $dataFine
     */
    public function setDataFine(Date $dataFine): void
    {
        $this->dataFine = $dataFine;
    }

}