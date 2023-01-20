<?php


class CantiereDB
{
    private $conn;

	public int $id;
	public string $nome;
	public string $indirizzo;
	public string $citta;
	public string $provincia;
	public date $data_inizio;
	public date $data_fine;
	public string $descrizione;
	public int $id_capocantiere;

    /**
     * Istanzia un'oggetto CantiereDB, passando per parametro un PDO della connessione col Database
     * @param $db
     */
    public function __construct($db){
        $this->conn = $db;
    }

    /**
     * Lancia una query al DB e restituisce tutti i record della tabella Cantiere
     * @return mixed
     */
    public function read(){
        $query="SELECT * FROM cantiere";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }



    public function read_in_corso(){

        $query="SELECT * FROM cantiere WHERE COALESCE(data_fine,'3000-12-31')>NOW()";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function read_conclusi(){

        $query="SELECT * FROM cantiere WHERE data_fine<NOW()";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;

    }

    public function read_da_iniziare(){

        $query="SELECT * FROM cantiere WHERE data_inizio>NOW()";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;

    }


    /**
     * IMPLEMENTATA, mancano le date
     * Restituisce un cantiere dato il suo id
     * @return mixed
     */

	public function read_by_id(){
		$query="SELECT * FROM cantiere WHERE id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nome = $row['nome'];
		$this->indirizzo = $row['indirizzo'];
		$this->citta = $row['citta'];
		$this->provincia = $row['provincia'];
		$this->descrizione = $row['descrizione'];
		$this->id_capocantiere = $row['id_capocantiere'];

	}

	/**
	 * IMPLEMENTATA, mancano le date
	 * Restituisce un cantiere dato il suo nome
	 * @return mixed
	 */

	public function read_by_name() {
		$this->nome = str_replace("-", " ", $this->nome);

		$query = "SELECT * FROM cantiere WHERE nome LIKE :nome";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nome', $this->nome);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $row['id'];
		$this->indirizzo = $row['indirizzo'];
		$this->citta = $row['citta'];
		$this->provincia = $row['provincia'];
		$this->descrizione = $row['descrizione'];
		$this->id_capocantiere = $row['id_capocantiere'];
	}

	/**
	 * IMPLEMENTATA, mancano le date
	 * Crea un cantiere con tutti gli attributi
	 * @return mixed
	 */
	public function create() {
		$query = 'INSERT INTO cantiere
			SET
			    nome = :nome,
				indirizzo = :indirizzo,
				citta = :citta,
				provincia = :provincia,
				data_inizio = :data_inizio,
				data_fine = :data_fine,
				descrizione = :descrizione,
				id_capocantiere = :id_capocantiere';

		$stmt = $this->conn->prepare($query);

		$this->nome = htmlspecialchars(strip_tags($this->nome));
		$this->indirizzo = htmlspecialchars(strip_tags($this->indirizzo));
		$this->citta = htmlspecialchars(strip_tags($this->citta));
		$this->provincia = htmlspecialchars(strip_tags($this->provincia));
        $this->data_inizio = htmlspecialchars(strip_tags($this->data_inizio));
        $this->data_fine = htmlspecialchars(strip_tags($this->data_fine));
		$this->descrizione = htmlspecialchars(strip_tags($this->descrizione));
		$this->id_capocantiere = htmlspecialchars(strip_tags($this->id_capocantiere));

		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':indirizzo', $this->indirizzo);
		$stmt->bindParam(':citta', $this->citta);
		$stmt->bindParam(':provincia', $this->provincia);
        $stmt->bindParam(':data_inizio', $this->data_inizio);
        $stmt->bindParam(':data_fine', $this->data_fine);
        $stmt->bindParam(':descrizione', $this->descrizione);
		$stmt->bindParam(':id_capocantiere', $this->id_capocantiere);

		if($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @param mixed $conn
     */
    public function setConn($conn): void
    {
        $this->conn = $conn;
    }

}