CREATE TABLE usuarios (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL UNIQUE, 
    senha VARCHAR(32) NOT NULL, 
    PRIMARY KEY(id_usuario)
);

-- SENHA DEFAULT: 123
INSERT INTO usuarios (nome, email, senha) VALUES ('root', 'root@teste.com.br', '202cb962ac59075b964b07152d234b70');