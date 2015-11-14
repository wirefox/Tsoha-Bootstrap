-- Lisää CREATE TABLE lauseet tähän tiedostoon

CREATE TABLE Kayttaja
(
    id SERIAL PRIMARY KEY,                          -- yksikäsitteinen käyttäjän tunnus, generoituu automaattisesti
    etunimi varchar(30) NOT NULL,               
    sukunimi varchar(30) NOT NULL,
    kayttajatunnus varchar(8) NOT NULL UNIQUE,
    salasana varchar(30) NOT NULL,
    rooli INTEGER NOT NULL                          -- käyttäjän rooli, 0=normaali käyttäjä 1=ylläpitäjä
);

CREATE TABLE Raaka_aine
(
    id SERIAL PRIMARY KEY,
    nimi varchar(30) NOT NULL,
    ravintoarvo varchar(300)                       -- linkki fineli.fi, esim. http://www.fineli.fi/food.php?foodid=110&lang=fi
);

CREATE TABLE Kategoria
(
    id SERIAL PRIMARY KEY,
    nimi varchar(30) NOT NULL
);

CREATE TABLE Resepti
(
    id SERIAL PRIMARY KEY,
    nimi varchar(30) NOT NULL,
    kategoria INTEGER REFERENCES Kategoria(id),
    annoksia INTEGER,
    valmistusohje varchar(3000),
    kuva varchar(300),
    lahde varchar(300),
    lisayspvm DATE,
    muokkauspvm DATE,
    CONSTRAINT fk_kategoria FOREIGN KEY (kategoria) REFERENCES Kategoria(id)
);

CREATE TABLE Reseptin_raakaAine
(
    resepti_id INTEGER REFERENCES Resepti(id) ON UPDATE CASCADE ON DELETE CASCADE,
    raakaAine_id INTEGER REFERENCES Raaka_aine(id) ON UPDATE CASCADE,
    maara INTEGER NOT NULL,
    yksikko varchar(10) NOT NULL,
    CONSTRAINT pk_Reseptin_raakaAine PRIMARY KEY (resepti_id, raakaAine_id)
);