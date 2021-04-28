CREATE DATABASE dbtasklist;

USE dbtasklist;

CREATE TABLE tbl_tasks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(255) NOT NULL
);

SELECT * FROM tbl_tasks;

INSERT INTO tbl_tasks (descricao) VALUES ("Estudar JAVA");

INSERT tbl_tasks (descricao) VALUES ("Fazer exercícios PHP");

INSERT tbl_tasks (descricao) VALUES ("Ler o livro clean code");

INSERT tbl_tasks (descricao) VALUES ("Ter hábitos saudáveis");