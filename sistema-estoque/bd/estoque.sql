/* Criar tabelas no banco */
CREATE TABLE categoria(
    IdCategoria int(11) NOT NULL AUTO_INCREMENT,
    Nome varchar(150) NOT NULL,
    PRIMARY KEY(IdCategoria)
)
CREATE TABLE estoque(
    IdProduto int(11) NOT NULL AUTO_INCREMENT,
    Numero int(11) NOT NULL,
    Nome varchar(150) NOT NULL,
    Quantidade int(11) DEFAULT NULL,
    Categoria varchar(150) DEFAULT NULL,
    Fornecedor varchar(150) DEFAULT NULL,
    PRIMARY KEY(IdProduto)
)

CREATE TABLE fornecedor(
    IdFornecedor int(11) NOT NULL AUTO_INCREMENT,
    Nome varchar(150) NOT NULL,
    PRIMARY KEY (IdFornecedor)
)

CREATE TABLE usuario(
	IdUsuario int(11) NOT NULL AUTO_INCREMENT,
    Nome varchar(80) NOT NULL,
    Sobrenome varchar(90) NOT NULL,
    Email varchar(100) NOT NULL,
    Senha varchar(256) NOT NULL,
    NivelUsuario int(50) NOT NULL,
    PRIMARY KEY (IdUsuario)
)

/* INSERIR DADOS NAS TABELAS */
INSERT INTO categoria(Nome) 
VALUES ('Software'),('Hardware'),('Teste');

INSERT INTO estoque ('Numero','Nome', 'Quantidade', 'Categoria','Fornecedor')
VALUES(
    (1,'Caixa de Som', 5, 'Periférico', 'Fornecedor A'),
    (2, 'Teclado',25,'Periferico','Fornecedor B'),
    (2,'Teclado',30,'Periferico','Fornecedor A'),
    (3,'Monitor',15,'Periferico','Fornecedor C'),
    (4,'Office 365',100,'Software','Fornecedor D'),
    (5,'Zabbix'1,'Software','Forncedor E'),
)

INSERT INTO estoque(Numero,Nome,Quantidade,Categoria,Fornecedor)
VALUES(1,'Teclado',15,'Periferico','Fornecedor A');

INSERT INTO fornecedor (Nome) VALUE('Fornecedor 02');