<?php

class Attivita
{

    public int $idPersonale;
    public int $idCantiere;
    public DateTime $inizio;
    public DateTime $fine;
    public String $note;
    public int $idAttivita;

    /**
     * @param int $idPersonale
     * @param int $idCantiere
     * @param DateTime $inizio
     * @param DateTime $fine
     * @param String $note
     * @param int $idAttivita
     */
    public function __construct(int $idPersonale, int $idCantiere, DateTime $inizio, DateTime $fine, string $note, int $idAttivita)
    {
        $this->idPersonale = $idPersonale;
        $this->idCantiere = $idCantiere;
        $this->inizio = $inizio;
        $this->fine = $fine;
        $this->note = $note;
        $this->idAttivita = $idAttivita;
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

    /**
     * @return String
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param String $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    /**
     * @return int
     */
    public function getIdAttivita(): int
    {
        return $this->idAttivita;
    }

    /**
     * @param int $idAttivita
     */
    public function setIdAttivita(int $idAttivita): void
    {
        $this->idAttivita = $idAttivita;
    }
}