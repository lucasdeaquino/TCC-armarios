-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Out-2019 às 12:27
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
CREATE DATABASE IF NOT EXISTS `db_tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_adm`
--

INSERT INTO `tb_adm` (`cd_adm`, `nm_adm`, `senha_adm`) VALUES
(1, 'admin', '123');

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

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`cd_rm`, `nm_aluno`, `ds_imagem`, `ds_email`, `ds_senha`) VALUES
(11111, 'teste', 'a.png', 'teste@teste.com', '123'),
(12345, 'golias', 'a.png', 'golias@gg.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_armario`
--

CREATE TABLE IF NOT EXISTS `tb_armario` (
  `cd_armario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_armario` varchar(100) NOT NULL,
  `id_tipo_armario` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  PRIMARY KEY (`cd_armario`),
  KEY `fk_tb_armario_tb_tipo_armario1_idx` (`id_tipo_armario`),
  KEY `id_status` (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tb_armario`
--

INSERT INTO `tb_armario` (`cd_armario`, `nm_armario`, `id_tipo_armario`, `id_status`) VALUES
(1, '01', 2, 1),
(2, '02', 2, 1),
(3, '03', 2, 1),
(4, '04', 2, 1),
(5, '05', 2, 1),
(6, '06', 2, 1),
(7, '07', 2, 1),
(8, '08', 2, 1),
(9, '09', 2, 1),
(10, '10', 2, 1),
(11, '11', 2, 1),
(12, '12', 2, 1),
(13, '13', 2, 1),
(14, '14', 2, 1),
(15, '15', 2, 1),
(16, '16', 2, 1),
(17, '17', 2, 1),
(18, '18', 2, 1),
(19, '19', 2, 1),
(20, '20', 2, 1),
(21, '21', 1, 1),
(22, '22', 1, 1),
(22, '22', 1, 1),
(23, '23', 1, 1),
(24, '24', 1, 1),
(25, '25', 1, 1),
(26, '26', 1, 1),
(27, '27', 1, 1),
(28, '28', 1, 1),
(29, '29', 2, 1),
(30, '30', 2, 1),
(31, '31', 2, 1),
(32, '32', 2, 1),
(33, '33', 2, 1),
(34, '34', 2, 1),
(35, '35', 2, 1),
(36, '36', 2, 1),
(37, '37', 2, 1),
(38, '38', 2, 1),
(39, '39', 2, 1),
(40, '40', 2, 1),
(41, '41', 2, 1),
(42, '42', 2, 1),
(43, '43', 2, 1),
(44, '44', 2, 1),
(45, '45', 2, 1),
(46, '46', 2, 1),
(47, '47', 2, 1),
(48, '48', 2, 1),
(49, '49', 2, 1),
(50, '50', 2, 1),
(51, '51', 2, 1),
(52, '52', 2, 1),
(53, '53', 2, 1),
(54, '54', 2, 1),
(55, '55', 2, 1),
(56, '56', 2, 1),
(57, '57', 2, 1),
(58, '58', 2, 1),
(59, '59', 2, 1),
(60, '60', 2, 1),
(61, '61', 2, 1),
(62, '62', 2, 1),
(63, '63', 2, 1),
(64, '64', 2, 1),
(65, '65', 2, 1),
(66, '66', 2, 1),
(67, '67', 2, 1),
(68, '68', 2, 1),
(69, '69', 2, 1),
(70, '70', 2, 1),
(71, '71', 2, 1),
(72, '72', 2, 1),
(73, '73', 2, 1),
(74, '74', 2, 1),
(75, '75', 2, 1),
(76, '76', 2, 1),
(77, '77', 2, 1),
(78, '78', 2, 1),
(79, '79', 2, 1),
(80, '80', 2, 1),
(81, '81', 2, 1),
(82, '82', 2, 1),
(83, '83', 2, 1),
(84, '84', 2, 1),
(85, '85', 2, 1),
(86, '86', 2, 1),
(87, '87', 2, 1),
(88, '88', 2, 1),
(89, '89', 2, 1),
(90, '90', 2, 1),
(91, '91', 2, 1),
(92, '92', 2, 1),
(93, '93', 2, 1),
(94, '94', 2, 1),
(95, '95', 2, 1),
(96, '96', 2, 1),
(97, '97', 2, 1),
(98, '98', 2, 1),
(99, '99', 2, 1),
(100, '100', 2, 1),
(101, '101', 2, 1),
(102, '102', 2, 1),
(103, '103', 2, 1),
(104, '104', 2, 1),
(105, '105', 2, 1),
(106, '106', 2, 1),
(107, '107', 2, 1),
(108, '108', 2, 1),
(109, '109', 2, 1),
(110, '110', 2, 1),
(111, '111', 2, 1),
(112, '112', 2, 1),
(113, '113', 2, 1),
(114, '114', 2, 1),
(115, '115', 2, 1),
(116, '116', 2, 1),
(117, '117', 2, 1),
(118, '118', 2, 1),
(119, '119', 2, 1),
(120, '120', 2, 1),
(121, '121', 2, 1),
(122, '122', 2, 1),
(123, '123', 2, 1),
(124, '124', 2, 1),
(125, '125', 2, 1),
(126, '126', 2, 1),
(127, '127', 2, 1),
(128, '128', 2, 1),
(129, '129', 1, 1),
(130, '130', 1, 1),
(131, '131', 1, 1),
(132, '132', 1, 1),
(133, '133', 1, 1),
(134, '134', 1, 1),
(135, '135', 1, 1),
(136, '136', 1, 1),
(137, '137', 1, 1),
(138, '138', 1, 1),
(139, '139', 1, 1),
(140, '140', 1, 1),
(141, '141', 1, 1),
(142, '142', 1, 1),
(143, '143', 1, 1),
(144, '144', 1, 1),
(145, '145', 1, 1),
(146, '146', 1, 1),
(147, '147', 1, 1),
(148, '148', 1, 1),
(149, '149', 1, 1),
(150, '150', 1, 1),
(151, '151', 1, 1),
(152, '152', 1, 1),
(153, '153', 1, 1),
(154, '154', 1, 1),
(155, '155', 1, 1),
(156, '156', 1, 1),
(157, '157', 1, 1),
(158, '138', 1, 1),
(159, '159', 1, 1),
(160, '160', 1, 1),
(161, '161', 1, 1),
(162, '162', 1, 1),
(163, '163', 1, 1),
(164, '164', 1, 1),
(165, '165', 1, 1),
(166, '166', 1, 1),
(167, '167', 1, 1),
(168, '168', 1, 1),
(169, '169', 1, 1),
(170, '170', 1, 1),
(171, '171', 1, 1),
(172, '172', 1, 1),
(173, '173', 1, 1),
(174, '174', 1, 1),
(175, '175', 1, 1),
(176, '176', 1, 1),
(177, '177', 1, 1),
(178, '178', 1, 1),
(179, '179', 1, 1),
(180, '180', 1, 1),
(181, '181', 1, 1),
(182, '182', 1, 1),
(183, '183', 1, 1),
(184, '184', 1, 1),
(185, '185', 1, 1),
(186, '186', 1, 1),
(187, '187', 1, 1),
(188, '188', 1, 1),
(189, '189', 1, 1),
(190, '190', 1, 1),
(191, '191', 1, 1),
(192, '192', 1, 1),
(193, '193', 1, 1),
(194, '194', 1, 1),
(195, '195', 1, 1),
(196, '196', 1, 1),
(197, '197', 1, 1),
(198, '198', 1, 1),
(199, '199', 1, 1),
(200, '200', 1, 1),
(201, '201', 1, 1),
(202, '202', 1, 1),
(203, '203', 1, 1),
(204, '204', 1, 1),
(205, '205', 1, 1),
(206, '206', 1, 1),
(207, '207', 1, 1),
(208, '208', 1, 1),
(209, '209', 1, 1),
(210, '210', 1, 1),
(211, '211', 1, 1),
(212, '212', 1, 1),
(213, '213', 1, 1),
(214, '214', 1, 1),
(215, '215', 1, 1),
(216, '216', 1, 1),
(217, '217', 1, 1),
(218, '218', 1, 1),
(219, '219', 1, 1),
(220, '220', 1, 1),
(221, '221', 1, 1),
(222, '222', 1, 1),
(223, '223', 1, 1),
(224, '224', 1, 1),
(225, '225', 1, 1),
(226, '226', 1, 1),
(227, '227', 1, 1),
(228, '228', 1, 1),
(179, '229', 1, 1),
(230, '230', 1, 1),
(231, '231', 1, 1),
(232, '232', 1, 1),
(233, '233', 1, 1),
(234, '234', 1, 1),
(235, '235', 1, 1),
(236, '236', 1, 1),
(237, '237', 1, 1),
(238, '238', 1, 1),
(239, '239', 1, 1),
(240, '240', 1, 1),
(241, '241', 1, 1),
(242, '242', 1, 1),
(243, '243', 1, 1),
(244, '244', 1, 1),
(245, '245', 1, 1),
(246, '246', 1, 1),
(247, '247', 1, 1),
(248, '248', 1, 1),
(249, '249', 1, 1),
(250, '250', 1, 1),
(251, '251', 1, 1),
(252, '252', 1, 1),
(253, '253', 1, 1),
(254, '254', 1, 1),
(255, '255', 1, 1),
(256, '256', 1, 1),
(257, '257', 1, 1),
(258, '258', 1, 1),
(259, '259', 1, 1),
(260, '260', 1, 1),
(261, '261', 1, 1),
(262, '262', 1, 1),
(263, '263', 1, 1),
(164, '264', 1, 1),
(265, '265', 1, 1),
(266, '266', 1, 1),
(267, '267', 1, 1),
(268, '268', 1, 1),
(269, '269', 1, 1),
(270, '270', 1, 1),
(271, '271', 1, 1),
(272, '272', 1, 1),
(273, '273', 1, 1),
(274, '274', 1, 1),
(275, '275', 1, 1),
(276, '276', 1, 1),
(277, '277', 1, 1),
(278, '278', 1, 1),
(279, '279', 1, 1),
(280, '280', 1, 1),
(281, '281', 1, 1),
(282, '282', 1, 1),
(283, '283', 1, 1),
(284, '284', 1, 1),
(285, '285', 1, 1),
(286, '286', 1, 1),
(287, '287', 1, 1),
(288, '288', 1, 1),
(289, '289', 1, 1),
(290, '290', 1, 1),
(291, '291', 1, 1),
(292, '292', 1, 1),
(293, '293', 1, 1),
(294, '294', 1, 1),
(295, '295', 1, 1),
(296, '296', 1, 1),
(297, '297', 1, 1),
(298, '298', 1, 1),
(199, '299', 1, 1),
(300, '300', 1, 1),
(301, '301', 1, 1),
(302, '302', 1, 1),
(303, '303', 1, 1),
(304, '304', 1, 1),
(305, '305', 2, 1),
(306, '306', 2, 1),
(307, '307', 2, 1),
(307, '308', 2, 1),
(308, '309', 2, 1),
(309, '309', 2, 1),
(311, '311', 2, 1),
(312, '312', 2, 1),
(313, '313', 2, 1),
(314, '314', 2, 1),
(315, '315', 2, 1),
(316, '316', 2, 1),
(317, '317', 2, 1),
(318, '318', 2, 1),
(319, '319', 2, 1),
(320, '320', 2, 1),
(321, '321', 2, 1),
(322, '322', 2, 1),
(323, '323', 2, 1),
(324, '324', 2, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`cd_curso`, `nm_curso`) VALUES
(1, 'Administração'),
(2, 'Informática'),
(3, 'Meio Ambiente');

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
  `ds_registro` varchar(100) NOT NULL,
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
  `ds_registro` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_registro_adm`),
  KEY `fk_tb_registro_adm_tb_adm1_idx` (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_reserva`
--

CREATE TABLE IF NOT EXISTS `tb_reserva` (
  `cd_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `dt_reserva` date NOT NULL,
  `hr_reserva` time NOT NULL,
  `id_aluno1_reserva` int(11) NOT NULL,
  `id_aluno2_reserva` int(11) DEFAULT NULL,
  `id_adm_res` int(11) DEFAULT NULL,
  `id_armario_reserva` int(11) NOT NULL,
  PRIMARY KEY (`cd_reserva`),
  KEY `fk_tb_reserva_tb_aluno1_idx` (`id_aluno1_reserva`),
  KEY `fk_tb_reserva_tb_aluno2_idx` (`id_aluno2_reserva`),
  KEY `fk_tb_reserva_tb_adm1_idx` (`id_adm_res`),
  KEY `fk_tb_reserva_tb_armario1_idx` (`id_armario_reserva`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_reserva`
--

INSERT INTO `tb_reserva` (`cd_reserva`, `dt_reserva`, `hr_reserva`, `id_aluno1_reserva`, `id_aluno2_reserva`, `id_adm_res`, `id_armario_reserva`) VALUES
(2, '2004-09-19', '09:20:04', 12345, NULL, NULL, 2),
(3, '2009-09-19', '08:28:39', 11111, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

CREATE TABLE IF NOT EXISTS `tb_status` (
  `cd_status` int(11) NOT NULL AUTO_INCREMENT,
  `ds_status` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_status`
--

INSERT INTO `tb_status` (`cd_status`, `ds_status`) VALUES
(1, 'disponível'),
(2, 'indisponível'),
(3, 'reservado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_armario`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_armario` (
  `cd_tipo_armario` int(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo` char(1) NOT NULL,
  `vl_armario` double NOT NULL,
  PRIMARY KEY (`cd_tipo_armario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_tipo_armario`
--

INSERT INTO `tb_tipo_armario` (`cd_tipo_armario`, `ds_tipo`, `vl_armario`) VALUES
(1, 'G', 50),
(2, 'P', 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turmas`
--

CREATE TABLE IF NOT EXISTS `tb_turmas` (
  `cd_turmas` int(11) NOT NULL AUTO_INCREMENT,
  `nm_turmas` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`cd_turmas`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_turmas`
--

INSERT INTO `tb_turmas` (`cd_turmas`, `nm_turmas`, `id_curso`) VALUES
(1, '1MAD1', 1),
(2, '2MAD1', 1),
(3, '3MAD1', 1),
(4, '1MIN1', 2),
(5, '2MIN1', 2),
(6, '3MIN1', 2),
(7, '1MAM1', 3),
(8, '2MAM1', 3),
(9, '3MAM1', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_turma_aluno`
--

INSERT INTO `tb_turma_aluno` (`cd_turma_aluno`, `id_turmas`, `id_rm`) VALUES
(1, 1, 12345),
(2, 3, 11111);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_armario`
--
ALTER TABLE `tb_armario`
  ADD CONSTRAINT `tb_armario_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`cd_status`),
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
  ADD CONSTRAINT `fk_tb_duvidas_tb_adm1` FOREIGN KEY (`id_adm_duvidas`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_duvidas_ibfk_1` FOREIGN KEY (`id_aluno_duvidas`) REFERENCES `tb_aluno` (`cd_rm`);

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
  ADD CONSTRAINT `fk_tb_reserva_tb_adm1` FOREIGN KEY (`id_adm_res`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_aluno1` FOREIGN KEY (`id_aluno1_reserva`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_aluno2` FOREIGN KEY (`id_aluno2_reserva`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
  ADD CONSTRAINT `fk_tb_turma_aluno_tb_aluno1` FOREIGN KEY (`id_rm`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_turma_aluno_tb_turmas1` FOREIGN KEY (`id_turmas`) REFERENCES `tb_turmas` (`cd_turmas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
