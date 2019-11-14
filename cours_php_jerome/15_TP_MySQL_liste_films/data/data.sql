CREATE DATABASE tp_films CHARACTER SET UTF8 collate utf8_general_ci;
use tp_films;

CREATE TABLE IF NOT EXISTS user(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(255) NOT NULL,
				lastname VARCHAR(255) NOT NULL,
				email VARCHAR(255) NOT NULL,
				password VARCHAR(60) NOT NULL,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS film(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				title VARCHAR(255) NOT NULL,
				description VARCHAR(255) NOT NULL,
				image VARCHAR(255) NOT NULL,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO user(firstname, lastname, email, password) 
		VALUES ('Jon', 'Snow', 'js@winterfell.com', 'youknownothingjonsnow');