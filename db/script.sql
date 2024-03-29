create database portal-chamados;
use portal-chamados;

CREATE TABLE usuario (
    idUsuario INTEGER PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(255),
    senha VARCHAR(255),
    nomeCompleto VARCHAR(255),
    email VARCHAR(256),
    setor VARCHAR(255),
    criadoDataHora DATETIME,
    alteradoDataHora DATETIME,
    ramal VARCHAR(255),
    codAnydesk VARCHAR(255)
);

CREATE TABLE chamado (
    idChamado INTEGER PRIMARY KEY AUTO_INCREMENT,
    prioridade VARCHAR(15),
    tipo VARRCHAR(15),
    titulo VARCHAR(255),
    descricao VARCHAR(255),
    status VARCHAR(15),
    alteradoDataHora DATETIME,
    criadoDataHora DATETIME,
    concluidoDataHora DATETIME,
    atendente VARCHAR(255),
    categoria VARCHAR(255),
    fkUsuario INTEGER
);

CREATE TABLE categoria (
    idCategoria INTEGER PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(255),
    categoria VARCHAR(255)
);

CREATE TABLE respostaChamado (
    fkUsuario INTEGER,
    fkChamado INTEGER,
    dataHora DATETIME,
    resposta VARCHAR(255)
);
 
ALTER TABLE chamado ADD CONSTRAINT FK_chamado_2
    FOREIGN KEY (fkUsuario)
    REFERENCES usuario (idUsuario)
    ON DELETE CASCADE;
 
ALTER TABLE responde ADD CONSTRAINT FK_responde_1
    FOREIGN KEY (fkUsuario)
    REFERENCES usuario (idUsuario)
    ON DELETE RESTRICT;
 
ALTER TABLE responde ADD CONSTRAINT FK_responde_2
    FOREIGN KEY (fkChamado)
    REFERENCES chamado (idChamado)
    ON DELETE RESTRICT;