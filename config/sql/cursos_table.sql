CREATE TABLE db.Cursos (
	id_Curso int auto_increment NOT NULL,
	titulo_Curso varchar(100) NULL,
	imagem_Curso varchar(100) NULL,
	descricao_Curso varchar(100) NULL,
	link_botao_Curso varchar(100) NULL,
	CONSTRAINT Cursos_PK PRIMARY KEY (id_Curso)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci
COMMENT='';
