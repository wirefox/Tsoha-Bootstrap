# Tietokantasovelluksen esittelysivu

Yleisiä linkkejä:

* [Linkki sovellukseeni](http://ehaverin.users.cs.helsinki.fi/reseptipankki/)
 * [Linkki login-sivulle](http://ehaverin.users.cs.helsinki.fi/reseptipankki/login)
 * [Linkki reseptien listaussivulle](http://ehaverin.users.cs.helsinki.fi/reseptipankki/recipe)
 * [Linkki resepti-sivulle](http://ehaverin.users.cs.helsinki.fi/reseptipankki/recipe/1)
 * [Linkki tietokannan tauluihin ja niiden sisältöihin] (http://ehaverin.users.cs.helsinki.fi/reseptipankki/tietokantayhteys)
* [Linkki dokumentaatiooni](https://github.com/wirefox/reseptipankki/blob/master/doc/dokumentaatio.pdf)

## Käyttäjätunnukset sovellukseen:
* Ns. normaalikäyttäjä voi käyttää sovellusta ilman sisäänkirjautumista.
* Ylläpitäjän tunnukset ovat:
 * käyttäjätunnus: kokki3
 * salasana: 333

## Työn aihe:

Reseptipankki

Reseptipankki sisältää reseptejä. Jokainen resepti kuuluu yhteen kategoriaan (alkuruoka, keitto, salaatti, pääruoka, jälkiruoka, suolainen leivonnainen ja makea leivonnainen). Resepteissä esitetään raaka-aineet ja niiden määrät sekä valmistusohje. Ohjeita voi hakea ruokalajin nimen, raaka-aineen tai ruokalajikategorian perusteella. Resepteissä on  kuva valmiista ruoka-annoksesta.

Toimintoja:

* raaka-aineen syöttö ja muutos
* raaka-aineen poisto (vain mikäli sitä ei käytetä)
* ruokalajikategorian lisääminen ja muutos
* ruokalajikategorian poisto (vain mikäli sitä ei käytetä)
* reseptin lisäys
* reseptin muokkaus ja poisto
* reseptin haku
* reseptien katselu

Ongelmia/keskeneräisiä asioita tällä hetkellä:
* Raaka-aineen, kategorian ja mittayksikön poistamisessa on ongelmaa (reittiongelma ilmeisesti)
* Raaka-aineita ei pysty lisäämään montaa kerralla reseptille. Suunnitelmissa on, jos aika ja taidot riittävät, toteuttaa lomakkeeseen dynaaminen add row -tyylinen toteutus, jossa ylläpitäjä voi syöttää juuri niin monta raaka-ainetta reseptille kuin on tarvis.
* Raaka-aineita ei pysty muokkaamaan reseptillä.
* Hakutoiminnallisuutta ei ole aloitettu
