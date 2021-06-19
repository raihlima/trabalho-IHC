/*Criação da database e das tabelas*/
DROP SCHEMA IF EXISTS trabalho_ihc;
CREATE SCHEMA trabalho_ihc;

CREATE TABLE IF NOT EXISTS trabalho_ihc.usuario (
    id INTEGER NOT NULL AUTO_INCREMENT,
    matricula VARCHAR (20) NOT NULL,
    senha VARCHAR (255) NOT NULL,
    nome VARCHAR (100) NOT NULL,
    PRIMARY KEY (id, matricula),
    UNIQUE (matricula)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.estudante(
    id_usuario INTEGER NOT NULL,
    curso VARCHAR (5),
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.professor(
    id_usuario INTEGER NOT NULL,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

/*
CREATE TABLE IF NOT EXISTS trabalho_ihc.coordenador(
    id_usuario INTEGER NOT NULL,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.chefe_departamento(
    id_usuario INTEGER NOT NULL,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.mcaep(
    id_usuario INTEGER NOT NULL,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.progepe(
    id_usuario INTEGER NOT NULL,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);
*/
CREATE TABLE IF NOT EXISTS trabalho_ihc.disciplina (
    id INTEGER NOT NULL AUTO_INCREMENT,
    codigo VARCHAR (6) NOT NULL,
    nome VARCHAR (100) NOT NULL,
    UNIQUE (codigo),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.turma(
    id INTEGER NOT NULL AUTO_INCREMENT,
    id_disciplina INTEGER NOT NULL,
    id_professor INTEGER NOT NULL,
    codigo VARCHAR (2) NOT NULL,
    data_inicio TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_disciplina) REFERENCES disciplina(id),
    FOREIGN KEY (id_professor) REFERENCES professor(id_usuario)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.turma_estudante(
    id INTEGER NOT NULL AUTO_INCREMENT,
    id_turma INTEGER NOT NULL,
    id_estudante INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_turma) REFERENCES turma(id),
    FOREIGN KEY (id_estudante) REFERENCES estudante(id_usuario)
);

CREATE TABLE IF NOT EXISTS trabalho_ihc.avaliacao (
    id INTEGER NOT NULL AUTO_INCREMENT,
    id_turma_estudante INTEGER NOT NULL,
    p1 BOOLEAN NOT NULL,
    p2 INTEGER NOT NULL,
    p3 INTEGER NOT NULL,
    p4 INTEGER NOT NULL,
    p5 INTEGER NOT NULL,
    p6 INTEGER NOT NULL,
    p7 INTEGER NOT NULL,
    p8 INTEGER NOT NULL,
    p9 INTEGER NOT NULL,
    p10 INTEGER NOT NULL,
    p11 INTEGER NOT NULL,
    p12 INTEGER NOT NULL,
    p13 INTEGER NOT NULL,
    a1 INTEGER NOT NULL,
    a2 INTEGER NOT NULL,
    a3 INTEGER NOT NULL,
    a4 INTEGER NOT NULL,
    a5 INTEGER NOT NULL,
    a6 INTEGER NOT NULL,
    a7 INTEGER NOT NULL,
    a8 INTEGER NOT NULL,
    a9 INTEGER NOT NULL,
    a10 INTEGER NOT NULL,
    data_resposta TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_turma_estudante) REFERENCES turma_estudante(id)
);
