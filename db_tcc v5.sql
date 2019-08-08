-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Ago-2019 às 12:32
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_tcc`
--
CREATE DATABASE IF NOT EXISTS `db_tcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adm`
--

CREATE TABLE IF NOT EXISTS `tb_adm` (
  `cd_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nm_adm` varchar(100) NOT NULL,
  `senha_adm` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `cd_rm` int(11) NOT NULL,
  `nm_aluno` varchar(100) NOT NULL,
  `ds_imagem` varchar(100) NOT NULL,
  `ds_email` varchar(100) NOT NULL,
  `ds_senha` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_rm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_armario`
--

CREATE TABLE IF NOT EXISTS `tb_armario` (
  `cd_armario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_armario` varchar(100) NOT NULL,
  `id_tipo_armario` int(11) NOT NULL,
  PRIMARY KEY (`cd_armario`),
  KEY `fk_tb_armario_tb_tipo_armario1_idx` (`id_tipo_armario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_armario_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_armario_aluno` (
  `cd_armario_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `id_armario` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  PRIMARY KEY (`cd_armario_aluno`),
  KEY `id_armario` (`id_armario`),
  KEY `id_aluno` (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE IF NOT EXISTS `tb_curso` (
  `cd_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nm_curso` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_duvidas`
--

CREATE TABLE IF NOT EXISTS `tb_duvidas` (
  `cd_duvidas` int(11) NOT NULL AUTO_INCREMENT,
  `ds_duvidas` varchar(100) NOT NULL,
  `dt_duvidas` date NOT NULL,
  `hr_duvidas` time NOT NULL,
  `id_aluno_duvidas` int(11) NOT NULL,
  `id_adm_duvidas` int(11) NOT NULL,
  PRIMARY KEY (`cd_duvidas`),
  KEY `id_aluno_duvidas` (`id_aluno_duvidas`),
  KEY `fk_tb_duvidas_tb_adm1_idx` (`id_adm_duvidas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro`
--

CREATE TABLE IF NOT EXISTS `tb_registro` (
  `cd_registro` int(11) NOT NULL AUTO_INCREMENT,
  `dt_registro` date NOT NULL,
  `hr_registro` time NOT NULL,
  `id_aluno_registro` int(11) NOT NULL,
  PRIMARY KEY (`cd_registro`),
  KEY `fk_tb_registro_tb_aluno1_idx` (`id_aluno_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro_adm`
--

CREATE TABLE IF NOT EXISTS `tb_registro_adm` (
  `cd_registro_adm` int(11) NOT NULL AUTO_INCREMENT,
  `dt_registro_adm` date NOT NULL,
  `hr_registro_adm` time NOT NULL,
  `id_adm` int(11) NOT NULL,
  PRIMARY KEY (`cd_registro_adm`),
  KEY `fk_tb_registro_adm_tb_adm1_idx` (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_reserva`
--

CREATE TABLE IF NOT EXISTS `tb_reserva` (
  `cd_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `nm_reserva` varchar(100) NOT NULL,
  `dt_reserva` date NOT NULL,
  `hr_reserva` time NOT NULL,
  `id_aluno1_reserva` int(11) NOT NULL,
  `id_aluno2_reserva` int(11) DEFAULT NULL,
  `id_adm_res` int(11) NOT NULL,
  `id_armario_reserva` int(11) NOT NULL,
  PRIMARY KEY (`cd_reserva`),
  KEY `fk_tb_reserva_tb_aluno1_idx` (`id_aluno1_reserva`),
  KEY `fk_tb_reserva_tb_aluno2_idx` (`id_aluno2_reserva`),
  KEY `fk_tb_reserva_tb_adm1_idx` (`id_adm_res`),
  KEY `fk_tb_reserva_tb_armario1_idx` (`id_armario_reserva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_armario`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_armario` (
  `cd_tipo_armario` int(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo` char(1) NOT NULL,
  PRIMARY KEY (`cd_tipo_armario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turmas`
--

CREATE TABLE IF NOT EXISTS `tb_turmas` (
  `cd_turmas` int(11) NOT NULL AUTO_INCREMENT,
  `nm_turmas` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `vl_reserva_g` double(3,2) DEFAULT NULL,
  `vl_reserva_p` double(3,2) DEFAULT NULL,
  PRIMARY KEY (`cd_turmas`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_turma_aluno` (
  `cd_turma_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `id_turmas` int(11) NOT NULL,
  `id_rm` int(11) NOT NULL,
  PRIMARY KEY (`cd_turma_aluno`),
  KEY `fk_tb_turma_aluno_tb_turmas1_idx` (`id_turmas`),
  KEY `fk_tb_turma_aluno_tb_aluno1_idx` (`id_rm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vl_reserva`
--

CREATE TABLE IF NOT EXISTS `tb_vl_reserva` (
  `cd_vl_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `tb_vl_reservacol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_vl_reserva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_armario`
--
ALTER TABLE `tb_armario`
  ADD CONSTRAINT `fk_tb_armario_tb_tipo_armario1` FOREIGN KEY (`id_tipo_armario`) REFERENCES `tb_tipo_armario` (`cd_tipo_armario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_armario_aluno`
--
ALTER TABLE `tb_armario_aluno`
  ADD CONSTRAINT `tb_armario_aluno_ibfk_1` FOREIGN KEY (`id_armario`) REFERENCES `tb_armario` (`cd_armario`),
  ADD CONSTRAINT `tb_armario_aluno_ibfk_2` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_rm`);

--
-- Limitadores para a tabela `tb_duvidas`
--
ALTER TABLE `tb_duvidas`
  ADD CONSTRAINT `tb_duvidas_ibfk_1` FOREIGN KEY (`id_aluno_duvidas`) REFERENCES `tb_aluno` (`cd_rm`),
  ADD CONSTRAINT `fk_tb_duvidas_tb_adm1` FOREIGN KEY (`id_adm_duvidas`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD CONSTRAINT `fk_tb_registro_tb_aluno1` FOREIGN KEY (`id_aluno_registro`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_registro_adm`
--
ALTER TABLE `tb_registro_adm`
  ADD CONSTRAINT `fk_tb_registro_adm_tb_adm1` FOREIGN KEY (`id_adm`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_reserva`
--
ALTER TABLE `tb_reserva`
  ADD CONSTRAINT `fk_tb_reserva_tb_aluno1` FOREIGN KEY (`id_aluno1_reserva`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_aluno2` FOREIGN KEY (`id_aluno2_reserva`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_adm1` FOREIGN KEY (`id_adm_res`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_armario1` FOREIGN KEY (`id_armario_reserva`) REFERENCES `tb_armario` (`cd_armario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  ADD CONSTRAINT `tb_turmas_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`cd_curso`);

--
-- Limitadores para a tabela `tb_turma_aluno`
--
ALTER TABLE `tb_turma_aluno`
  ADD CONSTRAINT `fk_tb_turma_aluno_tb_turmas1` FOREIGN KEY (`id_turmas`) REFERENCES `tb_turmas` (`cd_turmas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_turma_aluno_tb_aluno1` FOREIGN KEY (`id_rm`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
