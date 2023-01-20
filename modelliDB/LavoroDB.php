<?php

class LavoroDB
{
	private  $conn;

	public int $id;
	public int $id_cantiere;
	public int $id_personale;
	public $inizio;
	public $fine;

	/**
	 * Istanzia un'oggetto LavoroDB, passando per parametro un PDO della connessione col Database
	 * @param $db
	 */
	public function __construct($db)
	{
		$this->conn = $db;
	}

	public function read() {

		$query="SELECT * FROM lavoro";

		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		return $stmt;
	}

	public function read_cant_date() {

		$this->inizio = $this->inizio.'%';

		$query = "SELECT * FROM lavoro WHERE id_cantiere = :id_cantiere AND DAY(inizio) LIKE DAY(:inizio)";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id_cantiere', $this->id_cantiere);
		$stmt->bindParam(':inizio', $this->inizio);

		$stmt->execute();

		return $stmt;
	}

    public function read_not_presenti() {
        $this->inizio = $this->inizio.'%';

        $query = "SELECT personale.*
FROM personale
 
EXCEPT

	SELECT personale.*
    FROM personale
    LEFT JOIN lavoro
    ON personale.id = lavoro.id_personale 
    WHERE lavoro.id_cantiere = :id_cantiere AND DAY(lavoro.inizio) = DAY(':inizio')
";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_cantiere', $this->id_cantiere);
        $stmt->bindParam(':inizio', $this->inizio);

        $stmt->execute();

        return $stmt;
    }

	public function create(){
		$query = 'INSERT INTO lavoro
			SET
			    id_cantiere = :id_cantiere,
			    id_personale = :id_personale,
			    inizio = :inizio,
			    fine = :fine
			    ';

		$stmt = $this->conn->prepare($query);

		$this->id_cantiere = htmlspecialchars(strip_tags($this->id_cantiere));
		$this->id_personale = htmlspecialchars(strip_tags($this->id_personale));
		$this->inizio = htmlspecialchars(strip_tags($this->inizio));
		$this->fine = htmlspecialchars(strip_tags($this->fine));

		$stmt->bindParam(':id_cantiere', $this->id_cantiere);
		$stmt->bindParam(':id_personale', $this->id_personale);
		$stmt->bindParam(':inizio', $this->inizio);
		$stmt->bindParam(':fine', $this->fine);

		if($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
}