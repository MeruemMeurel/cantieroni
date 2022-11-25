<?php

class Personale
{
    private string $nome;
    private string $cognome;
    private string $email;
    private string $telefono;
    private string $posizione;
    private int $idPersonale;
    private Ruolo $ruolo;
    private Azienda $azienda;

    /**
     * @param string $nome
     * @param string $cognome
     * @param string $email
     * @param string $telefono
     * @param string $posizione
     * @param int $idPersonale
     * @param Ruolo $ruolo
     * @param Azienda $azienda
     */
    public function __construct(string $nome, string $cognome, string $email, string $telefono, string $posizione, int $idPersonale, Ruolo $ruolo, Azienda $azienda)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->posizione = $posizione;
        $this->idPersonale = $idPersonale;
        $this->ruolo = $ruolo;
        $this->azienda = $azienda;
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
    public function getCognome(): string
    {
        return $this->cognome;
    }

    /**
     * @param string $cognome
     */
    public function setCognome(string $cognome): void
    {
        $this->cognome = $cognome;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelefono(): string
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return string
     */
    public function getPosizione(): string
    {
        return $this->posizione;
    }

    /**
     * @param string $posizione
     */
    public function setPosizione(string $posizione): void
    {
        $this->posizione = $posizione;
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
     * @return Ruolo
     */
    public function getRuolo(): Ruolo
    {
        return $this->ruolo;
    }

    /**
     * @param Ruolo $ruolo
     */
    public function setRuolo(Ruolo $ruolo): void
    {
        $this->ruolo = $ruolo;
    }

    /**
     * @return Azienda
     */
    public function getAzienda(): Azienda
    {
        return $this->azienda;
    }

    /**
     * @param Azienda $azienda
     */
    public function setAzienda(Azienda $azienda): void
    {
        $this->azienda = $azienda;
    }


}