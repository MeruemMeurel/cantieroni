<?php

class Localita
{
    //indirizzo citta provincia
    private string $indirizzo;
    private string $citta;
    private string $provincia;

    /**
     * @param string $indirizzo
     * @param string $citta
     * @param string $provincia
     */
    public function __construct(string $indirizzo, string $citta, string $provincia)
    {
        $this->indirizzo = $indirizzo;
        $this->citta = $citta;
        $this->provincia = $provincia;
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
}