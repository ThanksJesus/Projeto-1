CREATE DATABASE contato;

USE contato; 

CREATE TABLE dados (
id int not null auto_increment,
nome varchar(30) not null,
email varchar(50) not null,
telefone bigint(15) not null,
mensagem text not null,
primary key (id) 
);

DELETE FROM `contato`.`dados` WHERE (`id` = '');

SELECT * FROM dados;

CREATE TABLE cadastro (
id int not null auto_increment,
nome varchar(30) not null,
email varchar(50) not null,
senha varchar(40) not null,
primary key (id) 
);

DELETE FROM `contato`.`cadastro` WHERE (`id` = '');

SELECT * FROM cadastro;



