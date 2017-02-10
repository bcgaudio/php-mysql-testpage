/*
Create DB (pets), table (per) and user (petsadmin). Then populate the table with one sample row 
*/

CREATE DATABASE pets;
USE pets;
CREATE USER 'petsadmin'@'localhost' IDENTIFIED BY 'password';
GRANT USAGE ON *.* TO 'pets'@'localhost' IDENTIFIED BY 'petsadmin';
GRANT ALL PRIVILEGES ON `pets`.* TO 'petsadmin'@'localhost';
FLUSH PRIVILEGES;
CREATE TABLE pet (name VARCHAR(20), owner VARCHAR(20),species VARCHAR(20), sex CHAR(1), birth DATE, death DATE);
INSERT INTO pet (name,owner,species,sex,birth,death) VALUES ('Romeo','Marco','Cat','M','2004-04-15',NULL);
