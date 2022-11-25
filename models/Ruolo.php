<?php

class Ruolo
{
    private int $idRuolo;
    private bool $admin;
    private bool $gestioneCantiere;

    /**
     * @param int $idRuolo
     * @param bool $admin
     * @param bool $gestioneCantiere
     */
    public function __construct(int $idRuolo, bool $admin, bool $gestioneCantiere)
    {
        $this->idRuolo = $idRuolo;
        $this->admin = $admin;
        $this->gestioneCantiere = $gestioneCantiere;
    }

    /**
     * @return int
     */
    public function getIdRuolo(): int
    {
        return $this->idRuolo;
    }

    /**
     * @param int $idRuolo
     */
    public function setIdRuolo(int $idRuolo): void
    {
        $this->idRuolo = $idRuolo;
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->admin;
    }

    /**
     * @param bool $admin
     */
    public function setAdmin(bool $admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @return bool
     */
    public function isGestioneCantiere(): bool
    {
        return $this->gestioneCantiere;
    }

    /**
     * @param bool $gestioneCantiere
     */
    public function setGestioneCantiere(bool $gestioneCantiere): void
    {
        $this->gestioneCantiere = $gestioneCantiere;
    }


}