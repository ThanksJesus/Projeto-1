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

SELECT * FROM dados;

CREATE TABLE cadastro (
id int not null auto_increment,
nome varchar(30) not null,
email varchar(50) not null,
senha varchar(40) not null,
primary key (id) 
);

SELECT * FROM cadastro;

/* Parte que meche diretamente com os carrinhos */
CREATE TABLE produtos (
id int not null auto_increment,
nome varchar(100) not null,
valor decimal(10,2) not null,
imagem varchar(50) not null,
primary key (id)
);


SELECT * FROM produtos ;

/*DELETE FROM `carrinho`.`produtos` WHERE (`id` = '2');*/

INSERT INTO produtos (nome,valor,imagem) VALUES ('batata','12','image.png');
INSERT INTO produtos (nome,valor,imagem) VALUES ('POTATO','16','image.png');

