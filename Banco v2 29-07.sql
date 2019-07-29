create database db_tcc;
use db_tcc;
create table tb_curso
(
cd_curso int primary key auto_increment,
nm_curso varchar(100) not null
);

create table tb_adm
(
cd_adm int primary key auto_increment,
nm_adm varchar(100) not null,
senha_adm varchar(100) not null
);

create table tb_duvidas
(
cd_duvidas int primary key auto_increment,
ds_duvidas varchar(100) not null
);

create table tb_armario
(
cd_armario int primary key auto_increment,
nm_armario varchar(100) not null
);



create table tb_turmas
(
cd_turmas int primary key auto_increment,
nm_turmas varchar(100) not null,
id_curso int,
foreign key(id_curso) references tb_curso(cd_curso)
);

create table tb_aluno
(
cd_aluno int primary key auto_increment,
nm_aluno varchar(100) not null,
ds_imagem varchar(100) not null,
ds_rm varchar(100) not null,
ds_email varchar(100) not null,
id_turmas int,
foreign key(id_turmas) references tb_turmas(cd_turmas),
id_armario int,
foreign key(id_armario) references tb_armario(cd_armario),
ds_senha varchar(100) not null
);