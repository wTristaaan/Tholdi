CREATE DATABASE tholdi;


CREATE TABLE pays(
CodePays char(2) not null,
nomPays char (30),
constraint pk_codeP primary key (CodePays)
)
engine = innodb;


CREATE TABLE utilisateur (
code smallint(6) not null AUTO_INCREMENT,
role varchar (10) not null,
raisonSociale char(50),
adresse char(80),
cp char (5),
ville char (40),
adrMel char (100),
telephone char (15),
contact  char (50),
login char (10),
mdp char (10),
codePays char (2),
constraint pk_code primary key (code),
constraint fk_codeP foreign key (codePays) references pays (codePays)
)
engine = innodb;


CREATE TABLE ville(
codeVille INT(6) AUTO_INCREMENT,
nomVille char (30) NOT NULL,
codePays char (4) not null,
constraint pk_codeV primary key (codeVille),
constraint fk_codePa foreign key (codePays) references pays (codePays)
)
engine = innodb;


CREATE TABLE duree (
codeD varchar (20) NOT NULL,
nbJours int (6),
Constraint pk_Dure primary key(codeD)
)
engine = innodb;


CREATE TABLE typeContainer(
numTypeContainer INT(6) NOT NULL AUTO_INCREMENT,
codeTypeContainer char (4) NOT NULL,
libelleTypeContainer char (50) NOT NULL,
longueurCont decimal (5) NOT NULL,
largeurCont decimal (5) NOT NULL,
hauteurCont decimal (4) NOT NULL,
poidsCont decimal (5),
tare decimal (4),
capaciteDeCharge decimal (8,2),
Constraint pk_Type primary key(numTypeContainer)
)
engine = innodb;


CREATE TABLE tarificationContainer (
codeDuree varchar (20) NOT NULL,
numTypeContainer int(6) NOT NULL,
tarif decimal (10,2),
Constraint pk_Reserv primary key(codeDuree, numTypeContainer),
Constraint fk_Type foreign key(numTypeContainer)REFERENCES typeContainer (numTypeContainer),
Constraint fk_Dure foreign key (codeDuree)REFERENCES duree(codeD)
)
engine = innodb;


CREATE TABLE devis(
codeDevis int(9) NOT NULL AUTO_INCREMENT ,
dateDevis bigint(20),
montantDevis decimal (6,2),
volume int (4),
nbcontainers int (11),
valider smallint (1) NOT NULL ,
Constraint pk_Devi primary key(codeDevis)
)
engine = innodb;


CREATE TABLE reservation(
codeReservation int (15) NOT NULL AUTO_INCREMENT,
dateDebutReservation varchar (10),
datefinReservation varchar(10),
dateReservation date,
volumeEstime decimal (4),
codeDevis int (9),
codeVilleMiseDisposition int (6) not null,
codeVilleRendre int (6) not null,
codeUtilisateur smallint (6) not null,
numeroDeReservation int (11),
etat char (10),
Constraint pk_Rese primary key(codeReservation),
Constraint fk_Devi FOREIGN KEY(codeDevis)REFERENCES devis (codeDevis),
Constraint fk_Vill FOREIGN KEY(codeVilleMiseDisposition)REFERENCES ville (codeVille),
Constraint fk_Vill1 FOREIGN KEY(codeVilleRendre)REFERENCES ville(CodeVille),
Constraint fk_codeU FOREIGN KEY(codeUtilisateur)REFERENCES utilisateur (code)
)
engine = innodb;


create table reserver(
codeReservation int (15) NOT NULL,
numTypeContainer int(6) NOT NULL,
qteReserver int (10),
Constraint pk_Reserv primary key(codeReservation, numTypeContainer),
Constraint fk_Rese FOREIGN KEY(codeReservation)REFERENCES reservation (codeReservation),
Constraint fk_Typei FOREIGN KEY(numTypeContainer)REFERENCES typeContainer(numTypeContainer)
)
engine = innodb;

ALTER TABLE `reservation` 
CHANGE COLUMN `dateReservation` `dateReservation` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ;
