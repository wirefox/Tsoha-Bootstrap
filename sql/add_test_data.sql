INSERT INTO RECIPE_USER (username, password, user_role) VALUES ('kokki3', '333', '0');
INSERT INTO RECIPE_USER (username, password, user_role) VALUES ('mrchef', '101010', '0');

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