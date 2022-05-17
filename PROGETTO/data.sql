


CREATE TABLE Attrazione(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255)NOT NULL,
descrizione varchar(255) NOT NULL,
img varchar(255),



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
INSERT INTO Attrazione VALUES (id, 'Torre di Pisa', 'Viene chiamata Torre Pendente o Torre di Pisa, ma in realtà non è mai servita per la difesa della città; è solo una parte del complesso religioso della Piazza del Duomo e, in particolare ne è il campanile. Svolgeva una funzione attiva nella scansione del tempo, umano e divino, per mezzo delle sue sette campane – tante quante sono le note musicali – la più grande delle quali, fusa nel 1655, pesa ben tre tonnellate e mezzo! È conosciuta in tutto il mondo per la bellezza della sua struttura architettonica, per la singolare pendenza che ne fa un vero miracolo di statica e per il fatto che si trovi nel contesto della celeberrima Piazza dei Miracoli, di cui è sicuramente il gioiello.','torre_di_Pisa.jpg' );
INSERT INTO Attrazione VALUES (id, 'Piazza dei miracoli', 'La piazza accoglie, su un ampia distesa di prato verde, quattro bianchissimi capolavori di arte monumentale medievale: il celeberrimo Campanile o Torre Pendente, il Camposanto, il Battistero e il Duomo.','zeb89.jpg' );
INSERT INTO Attrazione VALUES (id, 'Cattedrale di Pisa', 'La basilica ha una pianta a croce latina, caratterizzata da cinque navate, con abside e transetto a tre navate. La navata centrale è composta da colonne monolitiche in granito con capitelli scolpiti di XI-XII secolo. Al di sopra vi sono i matronei, scanditi da trifore che corrono anche lungo il transetto.','zeb89.jpg' );


INSERT INTO Utente VALUES (id, 'Admin','Admin', ' 333 333 333', 'admin@gmail.com','e6fe636511f4e52b3d29fe549355fb71e76fa0ec3d394d3dd5b15303dfbf53c0')