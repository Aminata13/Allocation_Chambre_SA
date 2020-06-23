#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: departement
#------------------------------------------------------------

CREATE TABLE departement(
        id  Int  Auto_increment  NOT NULL ,
        nom Varchar (50) NOT NULL
	,CONSTRAINT departement_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: batiment
#------------------------------------------------------------

CREATE TABLE batiment(
        id     Int  Auto_increment  NOT NULL ,
        numero Varchar (50) NOT NULL
	,CONSTRAINT batiment_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: chambre
#------------------------------------------------------------

CREATE TABLE chambre(
        id          Int  Auto_increment  NOT NULL ,
        numero      Varchar (50) NOT NULL ,
        type        Varchar (50) NOT NULL ,
        id_batiment Int NOT NULL
	,CONSTRAINT chambre_PK PRIMARY KEY (id)

	,CONSTRAINT chambre_batiment_FK FOREIGN KEY (id_batiment) REFERENCES batiment(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: etudiant
#------------------------------------------------------------

CREATE TABLE etudiant(
        id             Int  Auto_increment  NOT NULL ,
        nom            Varchar (50) NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        email          Varchar (50) NOT NULL ,
        telephone      Varchar (50) NOT NULL ,
        dateNaissance  Date NOT NULL ,
        regimeBourse   Varchar (50) NOT NULL ,
        id_chambre     Int NOT NULL ,
        id_departement Int NOT NULL
	,CONSTRAINT etudiant_PK PRIMARY KEY (id)

	,CONSTRAINT etudiant_chambre_FK FOREIGN KEY (id_chambre) REFERENCES chambre(id)
	,CONSTRAINT etudiant_departement0_FK FOREIGN KEY (id_departement) REFERENCES departement(id)
)ENGINE=InnoDB;

