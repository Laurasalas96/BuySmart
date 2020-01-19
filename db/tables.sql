CREATE TABLE IF NOT EXISTS administration (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    visibility ENUM("0", "1", "2", "3") NOT NULL,

    CONSTRAINT pk_admin_username PRIMARY KEY(id, username)
) ENGINE = innoDB;

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    visibility ENUM("0", "1", "2", "3") NOT NULL,

    CONSTRAINT pk_users_username PRIMARY KEY(id, username)
) ENGINE = innoDB;

CREATE TABLE IF NOT EXISTS products(
    id INT NOT NULL AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    type varchar(20) NOT NULL,
    unityType varchar(20) NOT NULL,
    weight decimal(8,2) NOT NULL,
    carbonPrint decimal(12,4) NOT NULL, 
    waterPrint decimal(12,3),
    ecoTrace int(3),
    CONSTRAINT pk_id_list PRIMARY KEY(id)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Apple','Fruit', 'Unit', '150.00', '0.0108', '0.045');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Organic Apple','Fruit', 'Unit', '150.0', '0.0174', '0.045');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Tomato', 'Fruit','Unit', '155.92', '0.03424', '28.689');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Oganic Tomato', 'Fruit', 'Unit', '155.92', '0,0327', '28.689');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Corncob', 'Vegetable', 'Unit', '275', '0.0327', '0.092');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Avocado', 'Fruit', 'Unit', '200', '0.42318', '320');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Small eggs(12)', 'Animal Product', 'Fix', '636', '2500', '206.7');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Medium eggs(12)', 'Animal Product', 'Fix', '696', '2500', '226.2');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Large eggs(12)', 'Animal Product', 'Fix', '816', '2500', '265.2');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('XL eggs(12)', 'Animal Product', 'Fix', '876', '2500', '284.7');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Boeuf', 'Animal Product', 'Weight', '1000', '46000', '13500');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Porc', 'Animal Product', 'Weight', '1000', '41600', '5988');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Chicken', 'Animal Product', 'Weight', '1000', '6900', '4325');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Lamb', 'Animal Product', 'Weight', '1000', '17500', '10400');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Cheese', 'Animal Product', 'Weight', '1000', '13500', '5000');
INSERT INTO products (name, type, unityType, weight, carbonPrint, waterPrint) VALUES ('Milk', 'Animal Product', 'Weight', '1000', '1350', '1020');
INSERT INTO products (name, type, unityType, weight, carbonPrint) VALUES ('Tuna', 'Animal Product', 'Weight', '1000', '6100');
INSERT INTO products (name, type, unityType, weight, carbonPrint) VALUES ('Salmon', 'Animal Product', 'Weight', '1000', '3000');
 

INSERT INTO administration(username, password, visibility) VALUES("admin", "$2y$10$i3ceaS0ir6FcscYhPu2BYOhFAEy2hEMU0d0iDsRm6BcMzY9TceH4i", "3");
