CREATE database if not exists noticias char set utf8;
USE noticias;
CREATE table posts(
    id int(11) primary key auto_increment,
    usuario_id int(11),
    titulo varchar(255),
	texto varchar(255), 
    criado_em timestamp DEFAULT CURRENT_TIMESTAMP
    
);
CREATE table usuarios(
    id int(11) primary key auto_increment,
    nome varchar(255),
    email varchar(255),
	senha varchar(255), 
    criado_em timestamp DEFAULT CURRENT_TIMESTAMP
);