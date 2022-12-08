<?php
class Cantiere
{
    private int $id;
    private string $nome;
    private string $indirizzo;
    private string $citta;
    private string $provincia;
    private date $data_inizio;
    private date $data_fine;
    private string $descrizione;
	private int $id_capocantiere;

    /**
     * @param int $id
     * @param string $nome
     * @param string $indirizzo
     * @param string $citta
     * @param string $provincia
     * @param date $data_inizio
     * @param date $data_fine
     * @param string $descrizione
     * @param int $id_capocantiere
     */
    public function __construct(int $id, string $nome, string $indirizzo, string $citta, string $provincia, date $data_inizio, date $data_fine, string $descrizione, int $id_capocantiere)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->indirizzo = $indirizzo;
        $this->citta = $citta;
        $this->provincia = $provincia;
        $this->data_inizio = $data_inizio;
        $this->data_fine = $data_fine;
        $this->descrizione = $descrizione;
		$this->id_capocantiere = $id_capocantiere;
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
     * @return date
     */
    public function getDataInizio(): date
    {
        return $this->data_inizio;
    }

    /**
     * @param date $data_inizio
     */
    public function setDataInizio(date $data_inizio): void
    {
        $this->data_inizio = $data_inizio;
    }

    /**
     * @return date
     */
    public function getDataFine(): date
    {
        return $this->data_fine;
    }

    /**
     * @param date $data_fine
     */
    public function setDataFine(date $data_fine): void
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

	/**
	 * @return int
	 */
	public function getIdCapocantiere(): int
	{
		return $this->id_capocantiere;
	}

	/**
	 * @param int $id_capocantiere
	 */
	public function setIdCapocantiere(int $id_capocantiere): void
	{
		$this->id_capocantiere = $id_capocantiere;
	}


}