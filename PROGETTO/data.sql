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


 


 CREATE TABLE Attrazione(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255)NOT NULL,
descrizione varchar(255) NOT NULL,
posizione varchar(32) NOT NULL,
img varchar(255)
);
CREATE TABLE PercorsoHaAttrazione(
idPercorso int REFERENCES Percorso(id),
idAttrazione int REFERENCES Attrazione(id),
PRIMARY KEY(idPercorso, idAttrazione)
);

INSERT INTO PercorsoHaAttrazione VALUES (0,1);
INSERT INTO PercorsoHaAttrazione VALUES (0,2);
-----------------------
INSERT INTO PercorsoHaAttrazione VALUES (0,3);
INSERT INTO PercorsoHaAttrazione VALUES (0,4);
INSERT INTO Attrazione VALUES (id,'Cattedrale di Santa Maria del Fiore','Duomo del 200 noto per la cupola di tegole rosse, la facciata in marmo colorato e il campanile di Giotto.','43.773333, 11.256261','CattedralediSantaMariadelFiore.jpg');
INSERT INTO Attrazione VALUES (id,'Basilica di Santa Croce di Firenze','Chiesa francescana neogotica, nota per gli affreschi di Giotto e le tombe di Michelangelo e Galileo.','43.768613, 11.262143','BasilicadiSantaCrocediFirenze.jpg');
------------------------




INSERT INTO Attrazione VALUES (id,'Campanile di Giotto','Torre gotica in marmo rosso, verde e bianco, con scale che portano alla terrazza affacciata sulla città.','43.772722, 11.255678','Campanile di Giotto.jpg');
INSERT INTO Attrazione VALUES (id,'Ponte vecchio','Pittoresco ponte ad archi sul fiume, di origine romana, costeggiato da gioiellerie e negozi di souvenir.','43.768027, 11.253169','pontevecchio.jpg');
INSERT INTO Percorso VALUES (id, 'Percorso Barrago', 'Il percorso si svolge dentro barrago','collagetoscana.jpg' );
INSERT INTO Percorso VALUES (id, 'Percorso Pisa', 'Il percorso si svolge entro i confini della città di Firenze,mostrando le sue bellezze','zeb89.jpg' );


INSERT INTO Utente VALUES (id, 'Admin','Admin', ' 333 333 333', 'admin@gmail.com','e6fe636511f4e52b3d29fe549355fb71e76fa0ec3d394d3dd5b15303dfbf53c0')