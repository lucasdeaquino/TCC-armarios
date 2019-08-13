create database db_tcc;
use db_tcc;
create table tb_curso
(
cd_curso int primary key auto_increment,
nm_curso varchar(100) not null
);
create table tb_registro_adm
(
cd_registro_adm int primary key auto_increment,
dt_registro_adm date not null,
hr_registro_adm time not null
);
create table tb_adm
(
cd_adm int primary key auto_increment,
nm_adm varchar(100) not null,
senha_adm varchar(100) not null,
id_registro_adm int not null,
foreign key(id_registro_adm) references tb_registro_adm(cd_registro_adm)
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
id_curso int not null,
foreign key(id_curso) references tb_curso(cd_curso)
);
create table tb_registro
(
cd_registro int primary key auto_increment,
dt_registro date not null,
hr_registro time not null
);
create table tb_rm
(
cd_rm int primary key auto_increment,
nm_rm char(5) not null
);

create table tb_reserva
( 
cd_reserva int primary key auto_increment,
nm_reserva varchar(100) not null,
dt_reserva date not null,
hr_reserva time not null
);

create table tb_aluno
(
cd_aluno int primary key auto_increment,
nm_aluno varchar(100) not null,
ds_imagem varchar(100) not null,
ds_email varchar(100) not null,
id_turmas int not null,
foreign key(id_turmas) references tb_turmas(cd_turmas),
ds_senha varchar(100) not null,
id_rm int not null,
foreign key(id_rm) references tb_rm(cd_rm),
id_reserva int not null,
foreign key(id_reserva) references tb_reserva(cd_reserva),
id_registro int not null,
foreign key(id_registro) references tb_registro(cd_registro)

);
create table tb_armario_aluno
(
cd_armario_aluno int primary key auto_increment,
id_armario int not null,
foreign key(id_armario) references tb_armario(cd_armario),
id_aluno int not null,
foreign key(id_aluno) references tb_aluno(cd_aluno)
);
create table tb_duvidas
(
cd_duvidas int primary key auto_increment,
ds_duvidas varchar(100) not null,
dt_duvidas date not null,
hr_duvidas time not null,
id_aluno_duvidas int not null,
foreign key(id_aluno_duvidas) references tb_aluno(cd_aluno)
);