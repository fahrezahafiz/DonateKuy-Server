/*create user table*/

CREATE TABLE users_seq(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);
CREATE TABLE users(
	user_id VARCHAR(5) NOT NULL PRIMARY KEY DEFAULT '0',
	name VARCHAR(30) NOT NULL,
	email varchar(20) NOT NULL,
	password varchar(20) NOT NULL,
	phone INT NOT NULL,
	loc_prov VARCHAR(255) NOT NULL,
	loc_reg VARCHAR(255) NOT NULL
);

DELIMITER $$
CREATE TRIGGER tg_user_insert
BEFORE INSERT ON users
FOR EACH ROW
BEGIN
  INSERT INTO users_seq VALUES (NULL);
  SET NEW.user_id = CONCAT('U', LPAD(LAST_INSERT_ID(), 4, '0'));
END$$
DELIMITER ;

/*create item table*/

CREATE TABLE item_seq(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);
CREATE TABLE item(
	item_id VARCHAR(5) NOT NULL PRIMARY KEY DEFAULT '0',
	user_id VARCHAR(5) NOT NULL,
	name VARCHAR(30) NOT NULL,
	added_at TIMESTAMP NOT NULL,
	item_condition varchar(10) NOT NULL,
	quantity INT NOT NULL,
	description varchar(300) NOT NULL,
	deliv_method varchar(10) NOT NULL,
	CONSTRAINT item_user_id_foreign FOREIGN KEY(user_id) REFERENCES users(user_id)
);
DELIMITER $$
CREATE TRIGGER tg_item_insert
BEFORE INSERT ON item
FOR EACH ROW
BEGIN
  INSERT INTO item_seq VALUES (NULL);
  SET NEW.item_id = CONCAT('I', LPAD(LAST_INSERT_ID(), 4, '0'));
END$$
DELIMITER ;