create database cadastro_bd;
show databases;
use cadastro_bd;

drop table cadastro;

CREATE TABLE cadastro (
	id int(11) primary key auto_increment,
	nome varchar(20) NOT NULL,
    sobrenome varchar(30) NOT NULL,
    sexo varchar(50) NOT NULL,
	tipo_def varchar(10) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(20) NOT NULL,
    timestamp timestamp DEFAULT CURRENT_TIMESTAMP);

select * from cadastro;