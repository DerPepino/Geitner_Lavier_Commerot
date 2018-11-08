CREATE TABLE client (
  pseudo STRING,
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
  categorie STRING,
  prix FLOAT
);

CREATE TABLE panier (
  idClient INTEGER,
  idProduit INTEGER,
  quantite INTEGER
);

CREATE TABLE categorie (
  id INTEGER PRIMARY KEY,
  nom TEXT
)
