<?php

class Post
{

	private int $id;
	private int $id_utente;
	private string $ora_post;
    private string $descrizione;

    /**
     * @param int $id
     * @param int $id_utente
     * @param string $ora_post
     * @param int $id_attivita
     * @param string $descrizione
     */
    public function __construct(int $id, int $id_utente, string $ora_post, string $descrizione)
    {
        $this->id = $id;
        $this->id_utente = $id_utente;
        $this->ora_post = $ora_post;        
        $this->descrizione = $descrizione;
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
     * @return DateTime
     */
    public function getOraPost(): string
    {
        return $this->ora_post;
    }

    /**
     * @param DateTime $ora_post
     */
    public function setOraPost(string $ora_post): void
    {
        $this->ora_post = $ora_post;
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