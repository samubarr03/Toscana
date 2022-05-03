
CREATE TABLE Citta(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255) NOT NULL,
descrizione varchar(255) NOT NULL
);


CREATE TABLE Tipologia(
nome varchar(255) PRIMARY KEY
);


CREATE TABLE Attrazione(
id int AUTO_INCREMENT PRIMARY KEY,
descrizione varchar(255) NOT NULL,
immagine varchar(255) NOT NULL,
qr_code varchar(255) UNIQUE,
nome_tipologia varchar(255) REFERENCES Tipologia(nome),
idCitta int REFERENCES Citta(id)
);


CREATE TABLE CartaDiCredito(
n_carta char(16) PRIMARY KEY,
cvv varchar(4) UNIQUE NOT NULL,
nome_proprietario varchar(255) NOT NULL,
cognome_proprietario varchar(255) NOT NULL,
data_scadenza date NOT NULL
);


CREATE TABLE Utente(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255) NOT NULL,
cognome varchar(255) NOT NULL,
tel char(10) UNIQUE NOT NULL,
email varchar(255) UNIQUE NOT NULL,
password varchar(255) NOT NULL
);


CREATE TABLE Percorso(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255) NOT NULL,
descrizione varchar(255) NOT NULL
);


CREATE TABLE UtenteHaCartaDiCredito(
idUtente int REFERENCES Utente(id),
n_carta char(16) REFERENCES CartaDiCredito(n_carta),
PRIMARY KEY(idUtente, n_carta)
);


CREATE TABLE UtenteVisitaAttrazione(
idUtente int REFERENCES Utente(id),
idAttrazione int REFERENCES Attrazione(id),
PRIMARY KEY(idUtente, idAttrazione)
);


CREATE TABLE UtentefaPercorso(
idUtente int REFERENCES Utente(id),
idPercorso int REFERENCES Percorso(id),
PRIMARY KEY(idUtente, idPercorso)
);


CREATE TABLE PercorsoHaAttrazione(
idPercorso int REFERENCES Percorso(id),
idAttrazione int REFERENCES Attrazione(id),
PRIMARY KEY(idPercorso, idAttrazione)
);
 
INSERT INTO Citta VALUES (id, 'Firenze', 'bella città' );