sql
create database patients;

USE users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL
);


