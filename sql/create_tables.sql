CREATE TABLE Recipe_user
(
    id SERIAL PRIMARY KEY,                          -- yksikäsitteinen käyttäjän tunnus, generoituu automaattisesti
    username varchar(10) NOT NULL,
    password varchar(10) NOT NULL
--     user_role INTEGER NOT NULL                          -- käyttäjän rooli, toteutettaneen kun sovellukseen lisätään käyttäjän rekisteröitymismahdollisuus.
);

CREATE TABLE Ingredient
(
    ingredient_name varchar(50) PRIMARY KEY,
    nutrition varchar(300)                       -- linkki fineli.fi, esim. http://www.fineli.fi/food.php?foodid=110&lang=fi
);

CREATE TABLE Category
(
    category_name varchar(30) PRIMARY KEY,
    information varchar(300)
);

CREATE TABLE Recipe
(
    id SERIAL PRIMARY KEY,
    recipe_name varchar(40) NOT NULL,
    category varchar(30) REFERENCES Category(category_name),
    portion_amount INTEGER,
    instruction varchar(3000),
    picture varchar(1000),
    recipe_source varchar(1000),
    added DATE
);

CREATE TABLE Unit
(
    unit_name varchar(50) PRIMARY KEY,
    information varchar(300)
);

CREATE TABLE Recipe_ingredient
(
    recipe_id SERIAL REFERENCES Recipe(id) ON DELETE CASCADE,
    amount DECIMAL(6,2),
    unit varchar(30),
    ingredient varchar(50) REFERENCES Ingredient(ingredient_name) ON DELETE CASCADE
--     CONSTRAINT pk_Recipe_ingredient PRIMARY KEY (recipe_id, ingredient)
);