INSERT INTO RECIPE_USER (username, password, user_role) VALUES ('kokki3', '333', '0');
INSERT INTO RECIPE_USER (username, password, user_role) VALUES ('mrchef', '101010', '0');

INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('vehnäjauho', 'http://www.fineli.fi/food.php?foodid=110&lang=fi');
INSERT INTO INGREDIENT (ingredient_name, nutrition) VALUES ('kevytmaito', 'http://www.fineli.fi/food.php?foodid=684&lang=fi');

INSERT INTO CATEGORY (category_name) VALUES ('Makeat leivonnaiset');
INSERT INTO CATEGORY (category_name) VALUES ('Suolaiset leivonnaiset');
INSERT INTO CATEGORY (category_name) VALUES ('Jälkiruuat');
INSERT INTO CATEGORY (category_name) VALUES ('Pääruuat');
INSERT INTO CATEGORY (category_name) VALUES ('Salaatit');
INSERT INTO CATEGORY (category_name) VALUES ('Keitot');
INSERT INTO CATEGORY (category_name) VALUES ('Alkuruuat');

INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Pulla', 'Makeat leivonnaiset', '25', 'Liuota hiiva kädenlämpöiseen maitoon. Sekoita joukkoon suola, sokeri, kardemumma ja muna. Lisää jauhot vähitellen, aluksi vatkaten, jotta ilmaa sitoutuu taikinaan. Alusta taikina hyvin vaivaten. Lisää pehmeä rasva alustamisen loppupuolella. Laita taikina peitettynä kohoamaan lämpimään, vedottomaan paikkaan. Kun taikina on kohonnut kaksinkertaiseksi, ota se leivinpöydälle ja vaivaa taikinasta ilmakuplat pois. Leivo taikinasta haluamasi muotoisia pullia. Kohota pullat kaksinkertaisiksi, voitele ne munalla ja koristele raesokerilla ennen paistamista. Paista pikkupullat ja pienet leivonnaiset n. 225-asteisen uunin keskitasolla 5-10 min. Paista pitkot ja muut isommat vehnäleivät n. 200-asteisen uunin alatasolla 20-25 min.', 'http://www.myllynparas.fi/files/images/300_reseptikuvat/makeat_leivonnaiset/pulla-myllyn-paras-300.jpg', 'http://www.myllynparas.fi/suomi/reseptit/makeat_leivonnaiset/pullat_ja_wienerit/pulla/', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Juustopiirakka', 'Suolaiset leivonnaiset', '8', 'Tee pohja. Mittaa jauhot, voi ja suola monitoimikoneen kulhoon. Sekoita tasaiseksi ja murumaiseksi. Voit tehdä taikinan myös käsin nyppimällä. Kun seos on tasaista, lisää sekaan pieni määrä kylmää vettä, jotta saat sopivan taikinapallon. Pingota leivinpaperi (n. 26 cm) irtopohjavuoan pohjalle ja voitele reunat. Kauli tai levitä taikina leivinpaperilla vuoratun irtopohjavuoan pohjalle ja reunoille jauhoja apuna käyttäen. Pane vuoka jääkaappiin noin 15 minuutiksi. Sekoita täytteen ainekset kevyesti keskenään. Ota taikinapohja kylmästä ja levitä sen päälle leivinpaperi. Kaada päälle paistokuulat tai kuivattuja herneitä ja esipaista pohjaa 225 asteessa noin 10 minuuttia. Nosta herneet leivinpapereineen pois pohjan päältä.Kaada täyte pohjalle ja jatka paistamista 200 asteisessa uunissa noin 40 minuuttia. Seuraa paistopintaa, jotta se ei paistu liikaa. Tarjoa piirakka jäähtyneenä smetanan, paistetun pekonin ja punasipulin kera. Koristele vuonankaalilla. ', 'http://is13.snstatic.fi/img/658/1443764586032.jpg', 'http://www.iltasanomat.fi/ruokala/resepti/art-1443764597334.html', NOW());
INSERT INTO RECIPE (recipe_name, category, portion_amount, instruction, picture, recipe_source, added) 
    VALUES ('Itämainen kana-pastasalaatti', 'Salaatit', '4', '1. Ruskista broilerinfileet nopeasti voi-öljyseoksessa molemmin puolin kauniin ruskeiksi. Mausta suolalla ja mustapippurilla. Sammuta liesi ja anna vetäytyä kannen alla kypsiksi salaatin teon ajan. 2. Keitä riisipastaa pakkauksen ohjeen mukaan ja huuhtele lopuksi kylmällä vedellä. Viipaloi kevätsipulit ja kurkut ohuiksi viipaleiksi. Suikaloi paprika. Valuta pastat ja sekoita muiden ainesten kanssa. 3. Leikkaa broilerit kuutioksi. Sekoita mangochutney, soijakastike ja chilitahna keskenään ja kääntele broilerit kastikkeessa. Nosta palat salaattiin.','http://kotiliesi.fi/wp-content/uploads/reseptit/186948-kanasalaatti-630x400.jpg','http://kotiliesi.fi/ruoka/reseptit/itamainen-kana-pastasalaatti', NOW());

INSERT INTO RECIPE_INGREDIENT (recipe_id, ingredient_id, amount, unit) 
    VALUES ('1', '1', '10', 'dl');
INSERT INTO RECIPE_INGREDIENT (recipe_id, ingredient_id, amount, unit)
    VALUES ('2', '2', '5', 'dl');