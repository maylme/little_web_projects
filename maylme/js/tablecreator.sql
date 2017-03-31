-- faisage des tables
-- Table societe:
DROP TABLE IF EXISTS Societe;
CREATE TABLE Societe (PKS int NOT NULL, PRIMARY KEY (PKS));

--Table groupe:
DROP TABLE IF EXISTS Groupe;
CREATE TABLE Groupe (PKG int NOT NULL, PRIMARY KEY (PKG));

--Table pour mettre en relation societe et groupe:
DROP TABLE IF EXISTS SocieteGroupe;
 CREATE TABLE SocieteGroupe (
 	PKS int NOT NULL, 
 	PKG int NOT NULL, 
 	PRIMARY KEY (PKS, PKG),  
 	FOREIGN KEY (PKS) REFERENCES Societe(PKS),
 	FOREIGN KEY (PKG) REFERENCES Groupe(PKG),
 );
