CREATE TABLE client (
  pseudo STRING PRIMARY KEY,
  nom STRING,
  prenom STRING,
  email STRING,
  mdp STRING
);

CREATE TABLE produit (
  id INTEGER PRIMARY KEY,
  intitule STRING,
  photographie STRING,
  description STRING,
  categorie INTEGER,
  prix FLOAT,
  FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE panier (
  idClient INTEGER,
  idProduit INTEGER,
  quantite INTEGER
);

CREATE TABLE categorie (
  id INTEGER PRIMARY KEY,
  nom TEXT,
  pere INTEGER,
  FOREIGN KEY(pere) REFERENCES categorie(id)
);
