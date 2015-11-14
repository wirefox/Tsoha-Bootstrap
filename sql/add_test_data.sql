-- Lisää INSERT INTO lauseet tähän tiedostoon

INSERT INTO KAYTTAJA (etunimi, sukunimi, kayttajatunnus, salasana, rooli) 
    VALUES ('Arttu', 'Testinen', '12345888', '55555', '0');
INSERT INTO KAYTTAJA (etunimi, sukunimi, kayttajatunnus, salasana, rooli) 
    VALUES ('Elina', 'Testaaja', '1234699', '55556', '1');

INSERT INTO RAAKA_AINE (nimi, ravintoarvo) VALUES ('vehnäjauho', 'http://www.fineli.fi/food.php?foodid=110&lang=fi');
INSERT INTO RAAKA_AINE (nimi, ravintoarvo) VALUES ('kevytmaito', 'http://www.fineli.fi/food.php?foodid=684&lang=fi');

INSERT INTO KATEGORIA (nimi) VALUES ('makea leivonnainen');
INSERT INTO KATEGORIA (nimi) VALUES ('suolainen leivonnainen');

INSERT INTO RESEPTI (nimi, kategoria, annoksia, valmistusohje, kuva, lahde, lisayspvm, muokkauspvm) 
    VALUES ('pulla', '1', '4', 'leivo pullaa', 'kuva pullasta', 'pullareseptin lähde', NOW(), NOW());
INSERT INTO RESEPTI (nimi, kategoria, annoksia, valmistusohje, kuva, lahde, lisayspvm, muokkauspvm) 
    VALUES ('juustopiiras', '2', '4', 'leivo piirakkaa', 'kuva piiraasta', 'piirasreseptin lähde', NOW(), NOW());

INSERT INTO RESEPTIN_RAAKAAINE (resepti_id, raakaAine_id, maara, yksikko) 
    VALUES ('1', '1', '10', 'dl');
INSERT INTO RESEPTIN_RAAKAAINE (resepti_id, raakaAine_id, maara, yksikko) 
    VALUES ('2', '1', '5', 'dl');