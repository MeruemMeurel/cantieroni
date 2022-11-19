<?php

class Cantiere
{
    private int $idCantiere;
    private string $nome;
    private Localita $localita;
    private \Cassandra\Date $dataInizio;
    private \Cassandra\Date $dataFine;

    /**
     * @param int $idCantiere
     * @param string $nome
     * @param Localita $localita
     * @param \Cassandra\Date $dataInizio
     * @param \Cassandra\Date $dataFine
     */
    public function __construct(int $idCantiere, string $nome, Localita $localita, \Cassandra\Date $dataInizio, \Cassandra\Date $dataFine)
    {
        $this->idCantiere = $idCantiere;
        $this->nome = $nome;
        $this->localita = $localita;
        $this->dataInizio = $dataInizio;
        $this->dataFine = $dataFine;
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
     * @return \Cassandra\Date
     */
    public function getDataInizio(): \Cassandra\Date
    {
        return $this->dataInizio;
    }

    /**
     * @param \Cassandra\Date $dataInizio
     */
    public function setDataInizio(\Cassandra\Date $dataInizio): void
    {
        $this->dataInizio = $dataInizio;
    }

    /**
     * @return \Cassandra\Date
     */
    public function getDataFine(): \Cassandra\Date
    {
        return $this->dataFine;
    }

    /**
     * @param \Cassandra\Date $dataFine
     */
    public function setDataFine(\Cassandra\Date $dataFine): void
    {
        $this->dataFine = $dataFine;
    }

}