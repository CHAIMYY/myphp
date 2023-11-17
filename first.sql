-- Création de la base de données
CREATE DATABASE DataWareDB;

-- Utilisation de la base de données
USE DataWareDB;

-- Création de la table Équipe
CREATE TABLE Equipe (
    ID_Equipe INT PRIMARY KEY,
    Nom_Equipe VARCHAR(255),
    Date_Creation DATE
);

-- Création de la table Membre_du_Personnel
CREATE TABLE Membre_du_Personnel (
    ID_Membre INT PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    Email VARCHAR(255),
    Telephone VARCHAR(15),
    Role VARCHAR(50),
    Equipe INT,
    Statut VARCHAR(50),
    FOREIGN KEY (Equipe) REFERENCES Equipe(ID_Equipe)
);

-- Ajout de données initiales
INSERT INTO Equipe (ID_Equipe, Nom_Equipe, Date_Creation) VALUES
(1, 'Équipe A', '2023-01-01'),
(2, 'Équipe B', '2023-02-01');

INSERT INTO Membre_du_Personnel (ID_Membre, Nom, Prenom, Email, Telephone, Role, Equipe, Statut) VALUES
(1, 'Nom1', 'Prenom1', 'nom1@email.com', '123456789', 'Role1', 1, 'Actif'),
(2, 'Nom2', 'Prenom2', 'nom2@email.com', '987654321', 'Role2', 2, 'Inactif');
