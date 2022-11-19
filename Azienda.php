<?php

class Azienda
{

    public int $idAzienda;
    public String $nome;
    public String $indirizzo;
    public String $citta;
    public String $provincia;
    public int $idTitolare;

    /**
     * @param int $idAzienda
     * @param String $nome
     * @param String $indirizzo
     * @param String $citta
     * @param String $provincia
     * @param int $idTitolare
     */
    public function __construct(int $idAzienda, string $nome, string $indirizzo, string $citta, string $provincia, int $idTitolare)
    {
        $this->idAzienda = $idAzienda;
        $this->nome = $nome;
        $this->indirizzo = $indirizzo;
        $this->citta = $citta;
        $this->provincia = $provincia;
        $this->idTitolare = $idTitolare;
    }

    /**
     * @return int
     */
    public function getIdAzienda(): int
    {
        return $this->idAzienda;
    }

    /**
     * @param int $idAzienda
     */
    public function setIdAzienda(int $idAzienda): void
    {
        $this->idAzienda = $idAzienda;
    }

    /**
     * @return String
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param String $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return String
     */
    public function getIndirizzo(): string
    {
        return $this->indirizzo;
    }

    /**
     * @param String $indirizzo
     */
    public function setIndirizzo(string $indirizzo): void
    {
        $this->indirizzo = $indirizzo;
    }

    /**
     * @return String
     */
    public function getCitta(): string
    {
        return $this->citta;
    }

    /**
     * @param String $citta
     */
    public function setCitta(string $citta): void
    {
        $this->citta = $citta;
    }

    /**
     * @return String
     */
    public function getProvincia(): string
    {
        return $this->provincia;
    }

    /**
     * @param String $provincia
     */
    public function setProvincia(string $provincia): void
    {
        $this->provincia = $provincia;
    }

    /**
     * @return int
     */
    public function getIdTitolare(): int
    {
        return $this->idTitolare;
    }

    /**
     * @param int $idTitolare
     */
    public function setIdTitolare(int $idTitolare): void
    {
        $this->idTitolare = $idTitolare;
    }




}