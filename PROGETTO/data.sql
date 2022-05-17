


CREATE TABLE Attrazione(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255)NOT NULL,
descrizione varchar(255) NOT NULL,
img varchar(255),
qr_code varchar(255) UNIQUE,


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
descrizione varchar(255) NOT NULL, 
map varchar(255)
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
 


 

INSERT INTO Percorso VALUES (id, 'Percorso Pisa', 'Il percorso si svolge entro i confini della città di Firenze,mostrando le sue bellezze','zeb89.jpg' );
INSERT INTO Attrazione VALUES (id, 'Percorso Pisa', 'Il percorso si svolge entro i confini della città di Firenze,mostrando le sue bellezze','zeb89.jpg' );
INSERT INTO Attrazione VALUES (id, 'Percorso Pisa', 'Il percorso si svolge entro i confini della città di Firenze,mostrando le sue bellezze','zeb89.jpg' );
INSERT INTO Attrazione VALUES (id, 'Percorso Pisa', 'Il percorso si svolge entro i confini della città di Firenze,mostrando le sue bellezze','zeb89.jpg' );


INSERT INTO Utente VALUES (id, 'Admin','Admin', ' 333 333 333', 'admin@gmail.com','e6fe636511f4e52b3d29fe549355fb71e76fa0ec3d394d3dd5b15303dfbf53c0')