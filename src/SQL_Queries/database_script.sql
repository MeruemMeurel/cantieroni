DROP DATABASE IF EXISTS cantieroni;
CREATE DATABASE IF NOT EXISTS cantieroni;
USE cantieroni;

CREATE TABLE ruolo(
                      id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,

                      descrizione varchar(32) NOT NULL,
                      is_admin TINYINT NOT NULL,
                      gestione_cantieri TINYINT NOT NULL
);

CREATE TABLE azienda(
                        id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                        nome VARCHAR(50) NOT NULL,
                        indirizzo VARCHAR(50),
                        citta VARCHAR(50),
                        provincia CHAR(2),
                        partita_iva CHAR(11)
);

CREATE TABLE personale(
                          id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                          nome VARCHAR(50) NOT NULL,
                          cognome VARCHAR(50) NOT NULL,
                          email VARCHAR(75),
                          telefono VARCHAR(10),
                          indirizzo VARCHAR(50),
                          citta VARCHAR(50),
                          provincia CHAR(2),
                          id_ruolo INT UNSIGNED NOT NULL,
                          id_azienda INT UNSIGNED NOT NULL,
                          img_path varchar(256),

                          FOREIGN KEY (id_ruolo) REFERENCES ruolo(id),
                          FOREIGN KEY (id_azienda) REFERENCES azienda(id)
);

CREATE TABLE cantiere(
                         id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                         nome VARCHAR(50) NOT NULL,
                         indirizzo VARCHAR(50),
                         citta VARCHAR(50),
                         provincia CHAR(2),
                         data_inizio DATE,
                         data_fine DATE,
                         descrizione VARCHAR(200),
                         
);

CREATE TABLE attivita(
                         id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                         inizio datetime,
                         fine datetime
);

CREATE TABLE utente(
                       id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                       username VARCHAR(40) UNIQUE NOT NULL,
                       password VARCHAR(30) NOT NULL,
                       email VARCHAR(320) NOT NULL UNIQUE,
                       telefono CHAR(10),
                       id_personale INT UNSIGNED NOT NULL,

                       FOREIGN KEY (id_personale) REFERENCES personale(id)

);

CREATE TABLE post(
                     id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                     id_utente INT UNSIGNED NOT NULL,
                     ora_post TIMESTAMP,
                     descrizione VARCHAR(512),
                     id_cantiere INT UNSIGNED NOT NULL,

                     FOREIGN KEY (id_utente) REFERENCES utente(id),
                     FOREIGN KEY (id_cantiere) REFERENCES cantiere(id)
);

CREATE TABLE allegato(
                         path varchar(150) NOT NULL PRIMARY KEY,
                         id_post INT UNSIGNED NOT NULL,
                         FOREIGN KEY (id_post) REFERENCES post(id)
);