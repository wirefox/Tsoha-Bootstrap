INSERT INTO RECIPE_USER (username, password) VALUES ('kokki3', '333');

INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('vehnäjauho', 'http://www.fineli.fi/food.php?foodid=110&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('kevytmaito', 'http://www.fineli.fi/food.php?foodid=684&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('vesi', 'http://www.fineli.fi/food.php?foodid=922&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('kananmuna', 'http://www.fineli.fi/food.php?foodid=858&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('sokeri', 'http://www.fineli.fi/food.php?foodid=1&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('hiiva', 'http://www.fineli.fi/food.php?foodid=26&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('suola', 'http://www.fineli.fi/food.php?foodid=30&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('margariini', 'http://www.fineli.fi/food.php?foodid=593&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('juusto', 'http://www.fineli.fi/food.php?foodid=29239&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('kerma', 'http://www.fineli.fi/food.php?foodid=29066&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('voi', 'http://www.fineli.fi/food.php?foodid=500&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('kardemumma', 'http://www.fineli.fi/food.php?foodid=500&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('mansikka', 'http://www.fineli.fi/food.php?foodid=447&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('vadelma', 'http://www.fineli.fi/food.php?foodid=448&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('mustikka', 'http://www.fineli.fi/food.php?foodid=442&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('porkkana', 'http://www.fineli.fi/food.php?foodid=300&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('sipuli', 'http://www.fineli.fi/food.php?foodid=335&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('peruna', 'http://www.fineli.fi/food.php?foodid=11680&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('omena', 'http://www.fineli.fi/food.php?foodid=11060&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('inkivääri', 'http://www.fineli.fi/food.php?foodid=33023&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('sitruuna', 'http://www.fineli.fi/food.php?foodid=11048&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('chili', 'http://www.fineli.fi/food.php?foodid=31557&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('mustapippuri', 'http://www.fineli.fi/food.php?foodid=31557&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('kurkku', 'http://www.fineli.fi/food.php?foodid=346');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('vaniljasokeri', 'http://www.fineli.fi/food.php?foodid=1&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('leivinjauhe', 'http://www.fineli.fi/food.php?foodid=74&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('kana', 'http://www.fineli.fi/food.php?foodid=750&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('jauheliha', 'http://www.fineli.fi/food.php?foodid=11562&lang=fi');

INSERT INTO CATEGORY (category_name, information) VALUES ('Makeat leivonnaiset', 'Hyviä pullia ja muuta makeaa');
INSERT INTO CATEGORY (category_name, information) VALUES ('Suolaiset leivonnaiset', 'Suolaisia piiraita ja kaikkea muuta pientä purtavaa');
INSERT INTO CATEGORY (category_name, information) VALUES ('Jälkiruuat', 'Suussasulavia jälkiruokia hyvän aterian kruunaajiksi');
INSERT INTO CATEGORY (category_name, information) VALUES ('Pääruuat', 'Nämä ruuat vievät varmasti nälkäsi pois');
INSERT INTO CATEGORY (category_name, information) VALUES ('Salaatit', 'Vihreä on terveellistä. Valmista myös pääruokien oheen pienempiä määriä.');
INSERT INTO CATEGORY (category_name, information) VALUES ('Keitot', 'Keitot ovat hyvää toimistotyöläisen ruokaa.');
INSERT INTO CATEGORY (category_name, information) VALUES ('Alkuruuat', 'Alkuruokia, kuten tapaksia ja muuta pientä ruokahalua nostattavaa');

INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Pulla', 'Makeat leivonnaiset', '25', 'Liuota hiiva kädenlämpöiseen maitoon. Sekoita joukkoon suola, sokeri, kardemumma ja muna. Lisää jauhot vähitellen, aluksi vatkaten, jotta ilmaa sitoutuu taikinaan. Alusta taikina hyvin vaivaten. Lisää pehmeä rasva alustamisen loppupuolella. Laita taikina peitettynä kohoamaan lämpimään, vedottomaan paikkaan. Kun taikina on kohonnut kaksinkertaiseksi, ota se leivinpöydälle ja vaivaa taikinasta ilmakuplat pois. Leivo taikinasta haluamasi muotoisia pullia. Kohota pullat kaksinkertaisiksi, voitele ne munalla ja koristele raesokerilla ennen paistamista. Paista pikkupullat ja pienet leivonnaiset n. 225-asteisen uunin keskitasolla 5-10 min. Paista pitkot ja muut isommat vehnäleivät n. 200-asteisen uunin alatasolla 20-25 min.', 'http://www.myllynparas.fi/files/images/300_reseptikuvat/makeat_leivonnaiset/pulla-myllyn-paras-300.jpg', 'http://www.myllynparas.fi/suomi/reseptit/makeat_leivonnaiset/pullat_ja_wienerit/pulla/', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Juustopiirakka', 'Suolaiset leivonnaiset', '8', 'Tee pohja. Mittaa jauhot, voi ja suola monitoimikoneen kulhoon. Sekoita tasaiseksi ja murumaiseksi. Voit tehdä taikinan myös käsin nyppimällä. Kun seos on tasaista, lisää sekaan pieni määrä kylmää vettä, jotta saat sopivan taikinapallon. Pingota leivinpaperi (n. 26 cm) irtopohjavuoan pohjalle ja voitele reunat. Kauli tai levitä taikina leivinpaperilla vuoratun irtopohjavuoan pohjalle ja reunoille jauhoja apuna käyttäen. Pane vuoka jääkaappiin noin 15 minuutiksi. Sekoita täytteen ainekset kevyesti keskenään. Ota taikinapohja kylmästä ja levitä sen päälle leivinpaperi. Kaada päälle paistokuulat tai kuivattuja herneitä ja esipaista pohjaa 225 asteessa noin 10 minuuttia. Nosta herneet leivinpapereineen pois pohjan päältä.Kaada täyte pohjalle ja jatka paistamista 200 asteisessa uunissa noin 40 minuuttia. Seuraa paistopintaa, jotta se ei paistu liikaa. Tarjoa piirakka jäähtyneenä smetanan, paistetun pekonin ja punasipulin kera. Koristele vuonankaalilla. ', 'http://is13.snstatic.fi/img/658/1443764586032.jpg', 'http://www.iltasanomat.fi/ruokala/resepti/art-1443764597334.html', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Itämainen kana-pastasalaatti', 'Salaatit', '4', '1. Ruskista broilerinfileet nopeasti voi-öljyseoksessa molemmin puolin kauniin ruskeiksi. Mausta suolalla ja mustapippurilla. Sammuta liesi ja anna vetäytyä kannen alla kypsiksi salaatin teon ajan. 2. Keitä riisipastaa pakkauksen ohjeen mukaan ja huuhtele lopuksi kylmällä vedellä. Viipaloi kevätsipulit ja kurkut ohuiksi viipaleiksi. Suikaloi paprika. Valuta pastat ja sekoita muiden ainesten kanssa. 3. Leikkaa broilerit kuutioksi. Sekoita mangochutney, soijakastike ja chilitahna keskenään ja kääntele broilerit kastikkeessa. Nosta palat salaattiin.','http://kotiliesi.fi/wp-content/uploads/reseptit/186948-kanasalaatti-630x400.jpg','http://kotiliesi.fi/ruoka/reseptit/itamainen-kana-pastasalaatti', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Paistettu kurkku', 'Alkuruuat', '4', 'Viipaloi kurkku. Laita pannulle ja paista. Lisää suola ja pippuri.', 'http://www.biolan.fi/image/tuotekuvat/kurkku.jpg', 'http://www.biolan.fi/image/tuotekuvat/kurkku.jpg', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Paistettu kananmuna', 'Pääruuat', '1', 'Riko kananmuna pannulle. Paista ja mausta suolalla ja pippurilla', 'http://dunkel.fi/ranch/maatiaiskana/kuvat/paistettumuna.jpg', 'http://dunkel.fi/ranch/maatiaiskana/kuvat/paistettumuna.jpg', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Kettuterrierin herkku', 'Alkuruuat', '1', 'Kuori omena. Poista siemenkota. Anna foxille ja katso kuinka nopeasti häviää.', 'http://puheenvuoro.uusisuomi.fi/sites/default/files/imagecache/content-img-thumb/domain-8086/kuvat/vanha_kettari.jpg', 'http://puheenvuoro.uusisuomi.fi/sites/default/files/imagecache/content-img-thumb/domain-8086/kuvat/vanha_kettari.jpg', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Pannukakku', 'Makeat leivonnaiset', '10', 'Riko kananmunien rakenne isossa kulhossa. Sekoita joukkoon puolet maidosta. Yhdistä leivinjauhe vehnäjauhoihin. Lisää jauhot kulhoon sekoittaen. Kaada joukkoon loput maidosta, mausta suolalla ja sokereilla. Anna jauhojen turvota nesteessä vähintään puoli tuntia. Sulata voi. Anna hetki jäähtyä, sekoita sitten voi muiden ainesten joukkoon. Vuoraa 30 cm x 40 cm:n kokoinen korkealaitainen uunipelti leivinpaperilla. Kaada taikina leivinpaperin päälle ja paista 225-asteisessa uunissa 25–30 minuuttia. Anna jäähtyä ja "kiinteytyä" hetken ajan. Tarjoa esimerkiksi kermavaahdon ja hillon kanssa.', 'http://hs13.snstatic.fi/webkuva/taysi/700/1361374264686?ts=1027', 'http://www.hs.fi/ruoka/reseptit/a1361374259677', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Punainen curry', 'Pääruuat', '4', 'Thaimaassa currytahnat tehdään isossa mortterissa jauhaen. Jos et satu omistamaan pientäkään, voit laittaa ainekset silppuriin ja painaa nappia. Wokki lämpenemään ritisevän kuumaksi. Rypsiöljyä reilusti pohjalle. Huuhtaise ja kuivaa broilerinrinta talouspaperilla. Leikkaa wok-suikaleeksi. (Miksei ostaisi suoraan broilerinsuikaleita kaupasta? Ne ovat yksinkertaisesti surkeita jämäpaloja.) Pese paprika ja kirsikkatomaatit. Lohko tomaatit puoliksi ja paloittele paprika suikaleeksi. Kevätsipuli myös pikku pätkäksi. Tässä kohtaa alkaa tapahtua asioita nopeasti. Heitä siivu broileria wokkiin. Jos alkaa ratisemaan niin on tarpeeksi kuuma. Laita loputkin kyytiin – muussa tapauksessa odottele hetki. Paista broilerisuikaleisiin ruskea pinta nopeasti. Ei tarvitse läpikypsyä. Lisää 1 tl punaista currytahnaa, 1 tl kookosta (valkoista osaa), 1 rkl sokeria ja kalakastiketta broilerille ja pyörittele nopeasti ”karamellisointi” broilerille. Lisää heti perään valmistellut kasvikset, freesaa minuutti, jonka jälkeen lisää loput currytahnat (maun mukaan), sokerit ja kookosmaidot. Anna kiehahtaa ja punainen curry on valmis.', 'http://reseptitaivas.fi/hallinta/wp-content/uploads/2014/05/punainen_curry2-702x336.jpg', 'http://reseptitaivas.fi/reseptit/punainen-curry/', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Italialainen risotto', 'Pääruuat', '4', 'Hienonna sipuli riisinjyväkokoon. Lurauta suht kylmälle pannulle oliiviöljy ja sipulisilppu. Nosta lämpöä hiljalleen niin että sipuli alkaa kuullottumaan eli noin viisi minuuttia, sekoittele kokoajan. Kun sipuli alkaa olla nätin keltaista, lisää myös riisi ja kuullota koko komeutta pari minuuttia. Lorauta viini riisin sekaan. Pyöritä hellästi niin kauan että viini on imeytynyt puoleen. Lisää lientä aina vähän kerrallaan ja pyörittele niin että riisi paksuuntuu. Risotto ei saa kuivua ja ottaa pohjaan kiinni missään vaiheessa. Kun riisi on viittä vailla valmis (vielä kova ydin), lisää risottoon parmesaanilastut tai muut haluamasi lisukkeet. Hauduta hetki ja pyörittele sitten risotto mehukkaaksi. Lisää lientä jos tarvitaan. Ideana on saada risottoon valuva koostumus. Kuivahtanut risotto kuuluu koulun ruokalaan.', 'http://reseptitaivas.fi/hallinta/wp-content/uploads/2014/05/italialainen_risotto-702x336.jpg', 'http://reseptitaivas.fi/reseptit/italialainen-risotto/', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Lohi-kookoskeitto', 'Keitot', '4', 'Aluksi kannattaa ensin paloitella, pilkkoa ja kuoria kaikki valmiiksi, niin voi sitten lisätä niitä oikeassa tahdissa. Itsellä tuppaa menemään helposti siihen, että vihannekset tahtoo olla aina hieman ylikypsiä, kun joutuvat "odottamaan" liian pitkään. Riisin olen keittänyt aina etukäteen ja määrä on yleensä riisipaketin kahden hengen verran keitetty määrä TAI se mitä on jäänyt edellisestä päivästä. Kuumenna kasvisliemi kiehuvaksi ja lisää sinne currytahna sekä pilkottu porkkana ja parsa. Lisää myös valkosipuli. Raasta limen kuoret, lisää keittoon kookosmaitojen kanssa ja myös molempien limen mehut. Lisää keitetty riisi. Lopuksi lisää pilkottu lohi ja pilkottu korianteri. Anna olla vielä hetki, jotta kala kypsyy ja saa makua. Lisää vielä suolaa, jos tuntuu kaipaavan.', 'http://www.kotikokki.net/media/cache/large_1024/recipeimage/large_1024/5478d602112a06fc7c000000/_DSC1922.jpg', 'http://www.kotikokki.net/reseptit/nayta/595549/Lohikookoskeitto/', NOW());

INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Tomaattinen porkkanasosekeitto', 'Keitot', '4', 'Tee näin, niin hyvää tulee...', 'http://www.k-ruoka.fi/contentassets/2f74854af38242349529411f028890ab/flat.jpg?preset=650x371at1', 'http://www.k-ruoka.fi/reseptit/tomaattinen-porkkanasosekeitto/', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Halloumiburgerit', 'Pääruuat', '4', 'Tee näin, niin hyvää tulee...', 'http://www.k-ruoka.fi/contentassets/a4c653d512704066a7260034f550a875/flat.jpg?preset=650x371at1', 'http://www.k-ruoka.fi/reseptit/halloumiburgerit/', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Japanilainen seesamilohi', 'Pääruuat', '4', 'Tee näin, niin hyvää tulee...', 'http://i0.wp.com/www.gurmee.net/wp-content/uploads/2012/04/Screen-shot-2012-04-08-at-8.05.33-PM.png?resize=580%2C394', 'http://www.gurmee.net/2012/04/13/japanilainen-seesamilohi/', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Kimchi', 'Pääruuat', '4', 'Tee näin, niin hyvää tulee...', 'http://ruoka.fi/wp-content/uploads/s/f/ruokaohje/727214-kimchi-630x630.jpg', 'http://ruoka.fi/reseptit/kimchi-eli-korealainen-kiinankaali', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Pekonikupit', 'Pääruuat', '4', 'Tee näin, niin hyvää tulee...', 'http://www.kotivinkki.fi/sites/kotivinkki.fi/files/styles/node_default/public/main_media_story/pekonikupit.jpg?itok=KUV9OE__', 'http://www.kotivinkki.fi/ruoka/pekonikupit', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Punajuuri-spelttipaistos', 'Pääruuat', '4', 'Tee näin, niin hyvää tulee...', 'http://is13.snstatic.fi/img/658/1443811776593.jpg', 'http://www.iltasanomat.fi/ruokala/resepti/art-1443811792390.html', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Viikuna-vuohenjuustopizza', 'Pääruuat', '4', 'Tee näin, niin hyvää tulee...', 'http://is13.snstatic.fi/img/658/1443770722316.jpg', 'http://www.iltasanomat.fi/ruokala/resepti/art-1443770739146.html', NOW());

INSERT INTO UNIT (unit_name, information)
    VALUES ('ml', 'millilitra');
INSERT INTO UNIT (unit_name, information)
    VALUES ('cl', 'senttilitra');
INSERT INTO UNIT (unit_name, information)
    VALUES ('dl', 'desilitra');
INSERT INTO UNIT (unit_name, information)
    VALUES ('l', 'litra');
INSERT INTO UNIT (unit_name, information)
    VALUES ('g', 'gramma');
INSERT INTO UNIT (unit_name, information)
    VALUES ('kg', 'kilo');
INSERT INTO UNIT (unit_name, information)
    VALUES ('ripaus', 'vähäsen');
INSERT INTO UNIT (unit_name, information)
    VALUES ('tl', 'teelusikka');
INSERT INTO UNIT (unit_name, information)
    VALUES ('rkl', 'ruokalusikka');
INSERT INTO UNIT (unit_name, information)
    VALUES ('kpl', 'kappale');

INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','5', 'dl', 'kevytmaito');
INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','50', 'g', 'hiiva');
INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','2', 'tl', 'suola');
INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','1', 'dl', 'sokeri');
INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','1', 'rkl', 'kardemumma');
INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','1', 'kpl', 'kananmuna');
INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','15', 'dl', 'vehnäjauho');
INSERT INTO RECIPE_INGREDIENT (recipe_id, amount, unit, ingredient) 
    VALUES ('1','150', 'g', 'margariini');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '3', 'dl', 'vehnäjauho');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '125', 'g', 'voi');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '0.25', 'tl', 'suola');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '1', 'rkl', 'vesi');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '3', 'dl', 'kerma');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '3', 'dl', 'kevytmaito');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '6', 'kpl', 'kananmuna');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '350', 'g', 'juusto');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('2', '1', 'ripaus', 'mustapippuri');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('4', '1', 'ripaus', 'suola');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('4', '1', 'ripaus', 'mustapippuri');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('4', '3', 'kpl', 'kurkku');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('5', '1', 'kpl', 'kananmuna');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('5', '1', 'ripaus', 'suola');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('5', '1', 'ripaus', 'mustapippuri');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('6', '1', 'kpl', 'omena');

INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '3', 'kpl', 'kananmuna');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '8', 'dl', 'kevytmaito');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '4', 'dl', 'vehnäjauho');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '1', 'tl', 'leivinjauhe');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '0.5', 'tl', 'suola');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '1', 'dl', 'sokeri');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '2', 'tl', 'vaniljasokeri');
INSERT INTO RECIPE_INGREDIENT  (recipe_id, amount, unit, ingredient) 
    VALUES ('7', '100', 'g', 'voi');