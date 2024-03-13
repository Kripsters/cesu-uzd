-- CREATE DATABASE ckc_klavins

/*
CREATE TABLE events (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
date_and_time DATETIME NOT NULL, 
title VARCHAR(255) NOT NULL,
venue VARCHAR(255) NOT NULL
);
*/

/*
INSERT INTO events 
(date_and_time, title, venue)
VALUES
("2024-03-31 13:00", "Lieldienas Cēsīs", "Rožu laukums"),
("2024-04-04 18:00", "Leļļu teātra izrāde ''Gangsteromīte''", "Koncertzāle ''Cēsis''"),
("2024-07-19 08:00", "Cēsu pilsētas svētki 818", "Cēsis");
*/

/*
CREATE TABLE collectives (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(80) NOT NULL,
description VARCHAR(500) NOT NULL
);
*/

INSERT INTO collectives
(name, description)
VALUES
("Cēsis", "Pūtēju orķestris"),
("Raitais solis", "Tautu deju ansamblis"),
("Vidzeme", "Jauktais koris"),
("Dzieti", "Tautas vērtes kopa");