create table todos
(
	id int primary key auto_increment,
	titulo varchar(60) not null,
	descricao varchar(255) not null,
	prioridade enum('1', '2', '3') not null,
	previsao datetime not null,
	concluido tinyint default 0
);