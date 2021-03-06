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

INSERT INTO PercorsoHaAttrazione VALUES (98,1);
INSERT INTO PercorsoHaAttrazione VALUES (98,2);
INSERT INTO PercorsoHaAttrazione VALUES (98,3);
INSERT INTO PercorsoHaAttrazione VALUES (98,4);
INSERT INTO PercorsoHaAttrazione VALUES (98,5);
INSERT INTO PercorsoHaAttrazione VALUES (98,6);


INSERT INTO PercorsoHaAttrazione VALUES (99,11); 
INSERT INTO PercorsoHaAttrazione VALUES (99,10);
INSERT INTO PercorsoHaAttrazione VALUES (99,9);

INSERT INTO PercorsoHaAttrazione VALUES (97,24);
INSERT INTO PercorsoHaAttrazione VALUES (97,25);




INSERT INTO Attrazione VALUES (id,'Cattedrale di Santa Maria del Fiore','Duomo del 200 noto per la cupola di tegole rosse, la facciata in marmo colorato e il campanile di Giotto.','43.773333, 11.256261','CattedralediSantaMariadelFiore.jpg');
INSERT INTO Attrazione VALUES (id,'Basilica di Santa Croce di Firenze','Chiesa francescana neogotica, nota per gli affreschi di Giotto e le tombe di Michelangelo e Galileo.','43.768613, 11.262143','basilicadisantacroce.jpg');
INSERT INTO Attrazione VALUES (id,'Campanile di Giotto','Torre gotica in marmo rosso, verde e bianco, con scale che portano alla terrazza affacciata sulla citt??.','43.772722, 11.255678','campanileGiotto.jpg');
INSERT INTO Attrazione VALUES (id,'Ponte vecchio','Pittoresco ponte ad archi sul fiume, di origine romana, costeggiato da gioiellerie e negozi di souvenir.','43.768027, 11.253169','PonteVecchio.jpg');
INSERT INTO Attrazione VALUES (id,'Palazzo Pitti','Gallerie in palazzo reale rinascimentale, sedi di vaste collezioni artistiche di maestri italiani ed europei.','43.765302, 11.249910','palazzopitti.jpg');
INSERT INTO Attrazione VALUES (id,'Galleria degli Uffizi','Edificio del 500 con una vasta collezione di dipinti e capolavori dell"arte dei Primitivi e del Rinascimento.','43.7677894,11.2508261','galleriadegliuffizi.jpg');

INSERT INTO Attrazione VALUES (id,'Parco di Serravalle','Parco in zona facilmente raggiungibile, pulito, ordinato, ottimo per fare una corsetta e una passeggiata in compagnia!','43.728965, 10.962536','parcodiserravalle.jpg');
INSERT INTO Attrazione VALUES (id,'Piazza Farinata degli Uberti','Piazza centrale del nucleo medioevale di Empoli, su cui si affacciano il polo religioso, rappresentato dalla Collegiata di Sant"Andrea, e quello politico, che aveva sede dapprima nel palazzo appartenuto ai conti Guidi, oggi noto come Palazzo Ghibellino, e poi nel Palazzo Pretorio di Empoli.','43.719663, 10.945747','piazzafarinadegliuberti.jpg');

INSERT INTO Attrazione VALUES (id,'Torre di Pisa','Famosa torre pendente del XIV secolo con decorazioni elaborate, alta 56 metri.','43.723022, 10.396642','torredipisa.jpg');
INSERT INTO Attrazione VALUES (id,'Piazza dei Miracoli','Grande distesa erbosa che ospita la famosa torre pendente e l"imponente duomo di Pisa in marmo bicolore.','43.723339, 10.394659','piazzadeimiracoli.jpg');
INSERT INTO Attrazione VALUES (id,'Cattedrale di Pisa','Imponente cattedrale in marmo bicolore famosa per le porte in bronzo romaniche e il pulpito scolpito del 1300.','43.723293, 10.395036','CattedralediPisa.jpg');

INSERT INTO Attrazione VALUES(id,'Piazza del Campo','Piazza medievale lastricata in mattoni, circondata da eleganti edifici e famosa per ospitare il Palio.','43.318272, 11.331799','piazzadelcampo.jpg');
INSERT INTO Attrazione VALUES(id,'Duomo di Siena','Edificio del XIII secolo noto per la sua facciata e le sue celebri fasce di marmo bianche e nere.','43.317611, 11.328730','duomodisiena.jpg');

INSERT INTO Attrazione VALUES(id,'Terrazza Mascagni','Elegante terrazza sul mare con gazebo e panchine, pi?? vista panoramica sul mare e sul tramonto.','43.534771, 10.298903','terrazzamascagni.jpg');
INSERT INTO Attrazione VALUES(id,'Acquario Livorno','Specie marine del Mediterraneo e non solo, tra cui squali pinna nera e coralli.','43.535429, 10.299466','acquariolivorno.jpg');
INSERT INTO Attrazione VALUES(id,'Fortezza Vecchia','Imponente fortezza medievale a margine del Porto Mediceo con rovine della torre e mostre su appuntamento.','43.551974, 10.302347','fortezzavecchia.jpg');

INSERT INTO Attrazione VALUES(id,'Il Giardino Dei Tarrochi','Grandi e stravaganti installazioni artistiche ispirate ai tarocchi che attirano i visitatori in un parco coperto e scoperto.','42.424759, 11.468054','ilGiardinoDeiTarrochi.jpg');
INSERT INTO Attrazione VALUES(id,'Abbazia di San Bruzio','Il monastero di San Bruzio ?? un monastero in rovina nella campagna a sud-est di Magliano in Toscana, lungo la strada che conduce a Sant"Andrea, a circa due chilometri dal capoluogo.','42.587902, 11.301551','abbaziadisanbruzio.jpg');

INSERT INTO Attrazione VALUES(id,'Cattedrale di Santo Stefano','Cattedrale romanica con affreschi rinascimentali e un pulpito esterno di Donatello e Michelozzo.','43.881779, 11.097786','cattedraledisantostefano.jpg');
INSERT INTO Attrazione VALUES(id,'Castello dell"Imperatore','Imponente castello in pietra del 200 con torri, bastioni e passerelle affacciate sulla citt??.','43.878942, 11.098527','Castellodellimperatore.jpg');

INSERT INTO Attrazione VALUES(id,'Marmi di Carrara','Il marmo di Carrara (per i Romani marmor lunensis, "marmo di Luni") ?? un tipo di marmo che ?? estratto dalle cave delle Alpi Apuane in territorio di Carrara, universalmente noto come uno dei marmi pi?? pregiati. Con questo marmo sono state realizzate alcune delle pi?? importanti opere architettoniche e scultoree del mondo.','44.090760, 10.133162','marmidicarrara.jpg');

INSERT INTO Attrazione VALUES(id,'Museo della Geotermia','La centrale geotermoelettrica Volterra produce energia elettrica utilizzando come fonte di energia primaria il calore proveniente dalle profondit?? della Terra.','43.237538, 10.884893','centraligeotermiche.jpg');

INSERT INTO Attrazione VALUES(id,'Passegiata di Viareggio','Lungomare di Viareggio,dove prende vita il carnevale tra hotel liberty ,shopping,ristoranti alberghi,?? di una bellezza unica.','43.888990, 10.230123','PasseggiataDiViareggio.jpg');

INSERT INTO Attrazione VALUES(id,'Chiesa di San Michele in Foro','Suggestiva chiesa del 1100 con facciata scolpita a pi?? ordini di logge, famosa per la pala di Filippino Lippi.','43.843214, 10.502351','ChiesadiSanMicheleinForo.jpg');
INSERT INTO Attrazione VALUES(id,'Lucca Comics & Games','Lucca Comics & Games ?? una fiera internazionale dedicata al fumetto, all'animazione, ai giochi (di ruolo, da tavolo, di carte), ai videogiochi e all'immaginario fantasy e fantascientifico, che si svolge a Lucca in Toscana, nei giorni tra fine ottobre e inizio novembre. ?? considerata la pi?? importante rassegna italiana del settore, prima d'Europa e seconda al mondo, dopo il Comiket di Tokyo.','43.842906, 10.503803','LuccaComics.jpg');

INSERT INTO Attrazione VALUES(id,'Piazza Grande','Vivace piazza medievale in pendenza, fiancheggiata da edifici cinquecenteschi in pietra, con caff?? e negozi d"antiquariato.','43.464702, 11.884271','PiazzaGrandeArezzo.jpg');
INSERT INTO Attrazione VALUES(id,'Piazza del Duomo','Il cuore storico e artistico di Pistoia, che racchiude gli edifici pi?? emblematici della citt??.','43.933705, 10.917439','piazzadelduomo.jpg');

INSERT INTO Attrazione VALUES(id,'Stadio Artemio Franchi','Stadio di cemento degli anni 30 progettato da Nervi, con una capienza di circa 50.000 spettatori.','43.780590, 11.282558','fiorentina.jpg');



INSERT INTO Percorso VALUES (99, 'Percorso Pisa', 'Il percorso si svolge entro i confini della citt?? di Pisa,mostrando le sue bellezze','collagetoscana.jpg' );
INSERT INTO Percorso VALUES (97, 'Percorso Lucca', 'Il percorso si svolge entro i confini della citt?? di Lucca,mostrando le sue bellezze','collagetoscana.jpg' );
INSERT INTO Percorso VALUES (98, 'Percorso Firenze', 'Il percorso si svolge entro i confini della citt?? di Firenze,mostrando le sue bellezze','collagetoscana.jpg' );


INSERT INTO Utente VALUES (id, ' - ',' - ', ' - ', 'admin@gmail.com','e6fe636511f4e52b3d29fe549355fb71e76fa0ec3d394d3dd5b15303dfbf53c0');
