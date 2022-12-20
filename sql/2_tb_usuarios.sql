CREATE TABLE usuarios (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL UNIQUE, 
    senha VARCHAR(32) NOT NULL, 
    PRIMARY KEY(id_usuario)
);