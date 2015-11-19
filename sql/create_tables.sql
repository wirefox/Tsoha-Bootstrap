CREATE TABLE Recipe_user
(
    id SERIAL PRIMARY KEY,                          -- yksikäsitteinen käyttäjän tunnus, generoituu automaattisesti
    username varchar(8) NOT NULL UNIQUE,
    password varchar(30) NOT NULL,
    user_role INTEGER NOT NULL                          -- käyttäjän rooli, 0=normaali käyttäjä 1=ylläpitäjä
);

CREATE TABLE Ingredient
(
    id SERIAL PRIMARY KEY,
    ingredient_name varchar(30) NOT NULL,
    nutrition varchar(300)                       -- linkki fineli.fi, esim. http://www.fineli.fi/food.php?foodid=110&lang=fi
);

CREATE TABLE Category
(
    category_name varchar(30) PRIMARY KEY
);

CREATE TABLE Recipe
(
    id SERIAL PRIMARY KEY,
    recipe_name varchar(40) NOT NULL,
    category varchar(30),
    portion_amount INTEGER,
    instruction varchar(3000),
    picture varchar(1000),
    recipe_source varchar(1000),
    added DATE,
    CONSTRAINT fk_category FOREIGN KEY (category) REFERENCES Category(category_name)
);

CREATE TABLE Recipe_ingredient
(
    recipe_id INTEGER,
    ingredient_id INTEGER,
    amount INTEGER NOT NULL,
    unit varchar(10) NOT NULL,
    CONSTRAINT pk_Recipe_ingredient PRIMARY KEY (recipe_id, ingredient_id)
);

-- CREATE TABLE Recipe_ingredient
-- (
--     recipe_id INTEGER REFERENCES Recipe(id) ON UPDATE CASCADE ON DELETE CASCADE,
--     ingredient_id INTEGER REFERENCES Ingredient(id) ON UPDATE CASCADE,
--     amount INTEGER NOT NULL,
--     unit varchar(10) NOT NULL,
--     CONSTRAINT pk_Recipe_ingredient PRIMARY KEY (recipe_id, ingredient_id)
-- );