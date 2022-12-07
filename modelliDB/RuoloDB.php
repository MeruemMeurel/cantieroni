<?php

class Ruolo
{
    private $conn;

    private int $id;
    private bool $is_admin;
    private bool $gestione_cantiere;

    /**
     * Istanzia un'oggetto RuoloDB, passando per parametro un PDO della connessione col Database
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