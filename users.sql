DROP DATABASE IF EXISTS PSW_DB;

CREATE DATABASE PSW_DB;

USE PSW_DB;

CREATE TABLE users
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Login varchar(30),
   Password varchar(30),
   LastName varchar(30),
   FirstName varchar(30),
   Email varchar(64),
   Phone varchar(14)
);


