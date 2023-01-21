<?php

class PostDB
{

	private $conn;

	public int $id;
	public int $id_utente;
	public string $ora_post;
	public int $id_cantiere;
	public string $descrizione;

	/**
	 * Istanzia un'oggetto PostDB, passando per parametro un PDO della connessione col Database
	 * @param $db
	 */
	public function __construct($db)
	{
		$this->conn = $db;
	}

	/**
	 * Lancia una query al DB e restituisce tutti i record della tabella Post
	 * @return mixed
	 */
	public function read(){
		$query="SELECT * FROM post";

		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		return $stmt;
	}

    public function create(){
        $query = 'INSERT INTO post
			SET
			    id_utente = :id_utente,
			    ora_post = :ora_post,
			    id_cantiere = :id_cantiere,
			    descrizione = :descrizione
			    ';

        $stmt = $this->conn->prepare($query);

        $this->id_utente = htmlspecialchars(strip_tags($this->id_utente));
        $this->ora_post = htmlspecialchars(strip_tags($this->ora_post));
        $this->id_cantiere = htmlspecialchars(strip_tags($this->id_cantiere));
        $this->descrizione = htmlspecialchars(strip_tags($this->descrizione));

        $stmt->bindParam(':id_utente', $this->id_utente);
        $stmt->bindParam(':ora_post', $this->ora_post);
        $stmt->bindParam(':id_cantiere', $this->id_cantiere);
        $stmt->bindParam(':descrizione', $this->descrizione);

        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

	/**
	 * Restituisce un post in base all'id
	 * @return mixed
	 */
	public function read_by_id(){
		$query="SELECT * FROM post WHERE id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id_utente = $row['id_utente'];
		//$this->ora_post = $row['ora_post'];
		$this->descrizione = $row['descrizione'];
		$this->id_cantiere = $row['id_cantiere'];
	}

	/**
	 * Restituisce l'id dell'autore dall'id del post
	 * @return mixed
	 */

	public function read_author() {
		$query="SELECT id_utente FROM post WHERE id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row['id_utente'];
	}

	/**
	 * Restituisce l'user dell'autore di un post dall'id
	 * @return mixed
	 */

	public function read_author_user() {
		$query="SELECT u.username FROM post p INNER JOIN utente u ON p.id_utente WHERE p.id_utente = u.id AND p.id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row['username'];
	}

	/**
	 * Restituisce l'id del cantiere dall'id del post
	 * @return mixed
	 */
	public function read_cantiere() {
		$query="SELECT id_cantiere FROM post WHERE id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row['id_cantiere'];
	}

    public function read_from_cantiere_date() {
        $query="SELECT * FROM post WHERE id_cantiere = :id_cantiere AND DAY(ora_post) = DAY(:ora_post)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_cantiere', $this->id_cantiere);
        $stmt->bindParam(':ora_post', $this->ora_post);

        $stmt->execute();

        /*$row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id_utente = $row['id_utente'];
        $this->ora_post = $row['ora_post'];
        $this->descrizione = $row['descrizione'];
        $this->id_cantiere = $row['id_cantiere'];*/
        return $stmt;
    }


    public function read_from_cantiere() {
        $query="SELECT * FROM post as P
			JOIN utente as U ON U.id = P.id_utente
			WHERE 
				id_cantiere = :id_cantiere
			ORDER BY ora_post DESC
			";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_cantiere', $this->id_cantiere);
        
		$stmt->execute();

        /*$row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id_utente = $row['id_utente'];
        $this->ora_post = $row['ora_post'];
        $this->descrizione = $row['descrizione'];
        $this->id_cantiere = $row['id_cantiere'];*/
        return $stmt;
    }


	/**
	 * Restituisce il nome del cantiere dall'id del post
	 * @return mixed
	 */

	public function read_cantiere_nome() {
		$query="SELECT c.nome FROM post p INNER JOIN cantiere c ON p.id_cantiere WHERE p.id_cantiere = c.id AND p.id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row['nome'];
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