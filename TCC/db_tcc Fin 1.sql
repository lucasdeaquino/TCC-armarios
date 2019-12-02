-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 25/11/2019 às 13h23min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_tcc`
--

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
  `id_bloco` int(11) NOT NULL,
  PRIMARY KEY (`cd_armario`),
  KEY `fk_tb_armario_tb_tipo_armario1_idx` (`id_tipo_armario`),
  KEY `id_status` (`id_status`),
  KEY `id_bloco` (`id_bloco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=325 ;

--
-- Extraindo dados da tabela `tb_armario`
--

INSERT INTO `tb_armario` (`cd_armario`, `nm_armario`, `id_tipo_armario`, `id_status`, `id_bloco`) VALUES
(1, '01', 2, 1, 1),
(2, '02', 2, 1, 1),
(3, '03', 2, 1, 1),
(4, '04', 2, 1, 1),
(5, '05', 2, 1, 1),
(6, '06', 2, 1, 1),
(7, '07', 2, 1, 1),
(8, '08', 2, 1, 1),
(9, '09', 2, 1, 1),
(10, '10', 2, 1, 1),
(11, '11', 2, 1, 1),
(12, '12', 2, 1, 1),
(13, '13', 2, 1, 1),
(14, '14', 2, 1, 1),
(15, '15', 2, 1, 1),
(16, '16', 2, 1, 1),
(17, '17', 2, 1, 1),
(18, '18', 2, 1, 1),
(19, '19', 2, 1, 1),
(20, '20', 2, 1, 1),
(21, '21', 1, 1, 2),
(22, '22', 1, 1, 2),
(23, '23', 1, 1, 2),
(24, '24', 1, 1, 2),
(25, '25', 1, 1, 2),
(26, '26', 1, 1, 2),
(27, '27', 1, 1, 2),
(28, '28', 1, 1, 2),
(29, '29', 2, 1, 3),
(30, '30', 2, 1, 3),
(31, '31', 2, 1, 3),
(32, '32', 2, 1, 3),
(33, '33', 2, 1, 3),
(34, '34', 2, 1, 3),
(35, '35', 2, 1, 3),
(36, '36', 2, 1, 3),
(37, '37', 2, 1, 3),
(38, '38', 2, 1, 3),
(39, '39', 2, 1, 3),
(40, '40', 2, 1, 3),
(41, '41', 2, 1, 3),
(42, '42', 2, 1, 3),
(43, '43', 2, 1, 3),
(44, '44', 2, 1, 3),
(45, '45', 2, 1, 3),
(46, '46', 2, 1, 3),
(47, '47', 2, 1, 3),
(48, '48', 2, 1, 3),
(49, '49', 2, 1, 4),
(50, '50', 2, 1, 4),
(51, '51', 2, 1, 4),
(52, '52', 2, 1, 4),
(53, '53', 2, 1, 4),
(54, '54', 2, 1, 4),
(55, '55', 2, 1, 4),
(56, '56', 2, 1, 4),
(57, '57', 2, 1, 4),
(58, '58', 2, 1, 4),
(59, '59', 2, 1, 4),
(60, '60', 2, 1, 4),
(61, '61', 2, 1, 4),
(62, '62', 2, 1, 4),
(63, '63', 2, 1, 4),
(64, '64', 2, 1, 4),
(65, '65', 2, 1, 4),
(66, '66', 2, 1, 4),
(67, '67', 2, 1, 4),
(68, '68', 2, 1, 4),
(69, '69', 2, 1, 5),
(70, '70', 2, 1, 5),
(71, '71', 2, 1, 5),
(72, '72', 2, 1, 5),
(73, '73', 2, 1, 5),
(74, '74', 2, 1, 5),
(75, '75', 2, 1, 5),
(76, '76', 2, 1, 5),
(77, '77', 2, 1, 5),
(78, '78', 2, 1, 5),
(79, '79', 2, 1, 5),
(80, '80', 2, 1, 5),
(81, '81', 2, 1, 5),
(82, '82', 2, 1, 5),
(83, '83', 2, 1, 5),
(84, '84', 2, 1, 5),
(85, '85', 2, 1, 5),
(86, '86', 2, 1, 5),
(87, '87', 2, 1, 5),
(88, '88', 2, 1, 5),
(89, '89', 2, 1, 6),
(90, '90', 2, 1, 6),
(91, '91', 2, 1, 6),
(92, '92', 2, 1, 6),
(93, '93', 2, 1, 6),
(94, '94', 2, 1, 6),
(95, '95', 2, 1, 6),
(96, '96', 2, 1, 6),
(97, '97', 2, 1, 6),
(98, '98', 2, 1, 6),
(99, '99', 2, 1, 6),
(100, '100', 2, 1, 6),
(101, '101', 2, 1, 6),
(102, '102', 2, 1, 6),
(103, '103', 2, 1, 6),
(104, '104', 2, 1, 6),
(105, '105', 2, 1, 6),
(106, '106', 2, 1, 6),
(107, '107', 2, 1, 6),
(108, '108', 2, 1, 6),
(109, '109', 2, 1, 7),
(110, '110', 2, 1, 7),
(111, '111', 2, 1, 7),
(112, '112', 2, 1, 7),
(113, '113', 2, 1, 7),
(114, '114', 2, 1, 7),
(115, '115', 2, 1, 7),
(116, '116', 2, 1, 7),
(117, '117', 2, 1, 7),
(118, '118', 2, 1, 7),
(119, '119', 2, 1, 7),
(120, '120', 2, 1, 7),
(121, '121', 2, 1, 7),
(122, '122', 2, 1, 7),
(123, '123', 2, 1, 7),
(124, '124', 2, 1, 7),
(125, '125', 2, 1, 7),
(126, '126', 2, 1, 7),
(127, '127', 2, 1, 7),
(128, '128', 2, 1, 7),
(129, '129', 1, 1, 8),
(130, '130', 1, 1, 8),
(131, '131', 1, 1, 8),
(132, '132', 1, 1, 8),
(133, '133', 1, 1, 8),
(134, '134', 1, 1, 8),
(135, '135', 1, 1, 8),
(136, '136', 1, 1, 8),
(137, '137', 1, 1, 9),
(138, '138', 1, 1, 9),
(139, '139', 1, 1, 9),
(140, '140', 1, 1, 9),
(141, '141', 1, 1, 9),
(142, '142', 1, 1, 9),
(143, '143', 1, 1, 9),
(144, '144', 1, 1, 9),
(145, '145', 1, 1, 9),
(146, '146', 1, 1, 9),
(147, '147', 1, 1, 9),
(148, '148', 1, 1, 9),
(149, '149', 1, 1, 9),
(150, '150', 1, 1, 9),
(151, '151', 1, 1, 9),
(152, '152', 1, 1, 9),
(153, '153', 1, 1, 9),
(154, '154', 1, 1, 9),
(155, '155', 1, 1, 9),
(156, '156', 1, 1, 9),
(157, '157', 1, 1, 10),
(158, '138', 1, 1, 10),
(159, '159', 1, 1, 10),
(160, '160', 1, 1, 10),
(161, '161', 1, 1, 10),
(162, '162', 1, 1, 10),
(163, '163', 1, 1, 10),
(164, '164', 1, 1, 10),
(165, '165', 1, 1, 10),
(166, '166', 1, 1, 10),
(167, '167', 1, 1, 10),
(168, '168', 1, 1, 10),
(169, '169', 1, 1, 10),
(170, '170', 1, 1, 10),
(171, '171', 1, 1, 10),
(172, '172', 1, 1, 10),
(173, '173', 1, 1, 10),
(174, '174', 1, 1, 10),
(175, '175', 1, 1, 10),
(176, '176', 1, 1, 10),
(177, '177', 1, 1, 11),
(178, '178', 1, 1, 11),
(179, '179', 1, 1, 11),
(180, '180', 1, 1, 11),
(181, '181', 1, 1, 11),
(182, '182', 1, 1, 11),
(183, '183', 1, 1, 11),
(184, '184', 1, 1, 11),
(185, '185', 1, 1, 11),
(186, '186', 1, 1, 11),
(187, '187', 1, 1, 11),
(188, '188', 1, 1, 11),
(189, '189', 1, 1, 11),
(190, '190', 1, 1, 11),
(191, '191', 1, 1, 11),
(192, '192', 1, 1, 11),
(193, '193', 1, 1, 11),
(194, '194', 1, 1, 11),
(195, '195', 1, 1, 11),
(196, '196', 1, 1, 11),
(197, '197', 1, 1, 12),
(198, '198', 1, 1, 12),
(199, '199', 1, 1, 12),
(200, '200', 1, 1, 12),
(201, '201', 1, 1, 12),
(202, '202', 1, 1, 12),
(203, '203', 1, 1, 12),
(204, '204', 1, 1, 12),
(205, '205', 1, 1, 12),
(206, '206', 1, 1, 12),
(207, '207', 1, 1, 12),
(208, '208', 1, 1, 12),
(209, '209', 1, 1, 12),
(210, '210', 1, 1, 12),
(211, '211', 1, 1, 12),
(212, '212', 1, 1, 12),
(213, '213', 1, 1, 12),
(214, '214', 1, 1, 12),
(215, '215', 1, 1, 12),
(216, '216', 1, 1, 12),
(217, '217', 1, 1, 13),
(218, '218', 1, 1, 13),
(219, '219', 1, 1, 13),
(220, '220', 1, 1, 13),
(221, '221', 1, 1, 13),
(222, '222', 1, 1, 13),
(223, '223', 1, 1, 13),
(224, '224', 1, 1, 13),
(225, '225', 1, 1, 14),
(226, '226', 1, 1, 14),
(227, '227', 1, 1, 14),
(228, '228', 1, 1, 14),
(229, '229', 1, 1, 14),
(230, '230', 1, 1, 14),
(231, '231', 1, 1, 14),
(232, '232', 1, 1, 14),
(233, '233', 1, 1, 14),
(234, '234', 1, 1, 14),
(235, '235', 1, 1, 14),
(236, '236', 1, 1, 14),
(237, '237', 1, 1, 14),
(238, '238', 1, 1, 14),
(239, '239', 1, 1, 14),
(240, '240', 1, 1, 14),
(241, '241', 1, 1, 14),
(242, '242', 1, 1, 14),
(243, '243', 1, 1, 14),
(244, '244', 1, 1, 14),
(245, '245', 1, 1, 15),
(246, '246', 1, 1, 15),
(247, '247', 1, 1, 15),
(248, '248', 1, 1, 15),
(249, '249', 1, 1, 15),
(250, '250', 1, 1, 15),
(251, '251', 1, 1, 15),
(252, '252', 1, 1, 15),
(253, '253', 1, 1, 15),
(254, '254', 1, 1, 15),
(255, '255', 1, 1, 15),
(256, '256', 1, 1, 15),
(257, '257', 1, 1, 15),
(258, '258', 1, 1, 15),
(259, '259', 1, 1, 15),
(260, '260', 1, 1, 15),
(261, '261', 1, 1, 15),
(262, '262', 1, 1, 15),
(263, '263', 1, 1, 15),
(264, '264', 1, 1, 15),
(265, '265', 1, 1, 16),
(266, '266', 1, 1, 16),
(267, '267', 1, 1, 16),
(268, '268', 1, 1, 16),
(269, '269', 1, 1, 16),
(270, '270', 1, 1, 16),
(271, '271', 1, 1, 16),
(272, '272', 1, 1, 16),
(273, '273', 1, 1, 16),
(274, '274', 1, 1, 16),
(275, '275', 1, 1, 16),
(276, '276', 1, 1, 16),
(277, '277', 1, 1, 16),
(278, '278', 1, 1, 16),
(279, '279', 1, 1, 16),
(280, '280', 1, 1, 16),
(281, '281', 1, 1, 16),
(282, '282', 1, 1, 16),
(283, '283', 1, 1, 16),
(284, '284', 1, 1, 16),
(285, '285', 1, 1, 17),
(286, '286', 1, 1, 17),
(287, '287', 1, 1, 17),
(288, '288', 1, 1, 17),
(289, '289', 1, 1, 17),
(290, '290', 1, 1, 17),
(291, '291', 1, 1, 17),
(292, '292', 1, 1, 17),
(293, '293', 1, 1, 17),
(294, '294', 1, 1, 17),
(295, '295', 1, 1, 17),
(296, '296', 1, 1, 17),
(297, '297', 1, 1, 17),
(298, '298', 1, 1, 17),
(299, '299', 1, 1, 17),
(300, '300', 1, 1, 17),
(301, '301', 1, 1, 17),
(302, '302', 1, 1, 17),
(303, '303', 1, 1, 17),
(304, '304', 1, 1, 17),
(305, '305', 2, 1, 18),
(306, '306', 2, 1, 18),
(307, '307', 2, 1, 18),
(308, '308', 2, 1, 18),
(309, '309', 2, 1, 18),
(311, '311', 2, 1, 18),
(312, '312', 2, 1, 18),
(313, '313', 2, 1, 18),
(314, '314', 2, 1, 18),
(315, '315', 2, 1, 18),
(316, '316', 2, 1, 18),
(317, '317', 2, 1, 18),
(318, '318', 2, 1, 18),
(319, '319', 2, 1, 18),
(320, '320', 2, 1, 18),
(321, '321', 2, 1, 18),
(322, '322', 2, 1, 18),
(323, '323', 2, 1, 18),
(324, '324', 2, 1, 18);

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
-- Estrutura da tabela `tb_bloco`
--

CREATE TABLE IF NOT EXISTS `tb_bloco` (
  `cd_bloco` int(11) NOT NULL AUTO_INCREMENT,
  `nm_bloco` varchar(10) NOT NULL,
  PRIMARY KEY (`cd_bloco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `tb_bloco`
--

INSERT INTO `tb_bloco` (`cd_bloco`, `nm_bloco`) VALUES
(1, 'Bloco A'),
(2, 'Bloco B'),
(3, 'Bloco C'),
(4, 'Bloco D'),
(5, 'Bloco E'),
(6, 'Bloco F'),
(7, 'Bloco G'),
(8, 'Bloco H'),
(9, 'Bloco I'),
(10, 'Bloco J'),
(11, 'Bloco K'),
(12, 'Bloco L'),
(13, 'Bloco M'),
(14, 'Bloco N'),
(15, 'Bloco O'),
(16, 'Bloco P'),
(17, 'Bloco Q'),
(18, 'Bloco R');

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
  PRIMARY KEY (`cd_tipo_armario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_tipo_armario`
--

INSERT INTO `tb_tipo_armario` (`cd_tipo_armario`, `ds_tipo`) VALUES
(1, 'G'),
(2, 'P');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turmas`
--

CREATE TABLE IF NOT EXISTS `tb_turmas` (
  `cd_turmas` int(11) NOT NULL AUTO_INCREMENT,
  `nm_turmas` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `vl_reserva_g` double DEFAULT NULL,
  `vl_reserva_p` double DEFAULT NULL,
  PRIMARY KEY (`cd_turmas`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_turmas`
--

INSERT INTO `tb_turmas` (`cd_turmas`, `nm_turmas`, `id_curso`, `vl_reserva_g`, `vl_reserva_p`) VALUES
(1, '1MAD1', 1, 100, 50),
(2, '2MAD1', 1, 65, 35),
(3, '3MAD1', 1, 30, 10),
(4, '1MIN1', 2, 100, 50),
(5, '2MIN1', 2, 65, 35),
(6, '3MIN1', 2, 30, 10),
(7, '1MAM1', 3, 100, 50),
(8, '2MAM1', 3, 65, 35),
(9, '3MAM1', 3, 30, 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_turma_aluno`
--

INSERT INTO `tb_turma_aluno` (`cd_turma_aluno`, `id_turmas`, `id_rm`) VALUES
(1, 4, 12345);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `tb_armario`
--
ALTER TABLE `tb_armario`
  ADD CONSTRAINT `tb_armario_ibfk_2` FOREIGN KEY (`id_bloco`) REFERENCES `tb_bloco` (`cd_bloco`),
  ADD CONSTRAINT `fk_tb_armario_tb_tipo_armario1` FOREIGN KEY (`id_tipo_armario`) REFERENCES `tb_tipo_armario` (`cd_tipo_armario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_armario_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`cd_status`);

--
-- Restrições para a tabela `tb_armario_aluno`
--
ALTER TABLE `tb_armario_aluno`
  ADD CONSTRAINT `tb_armario_aluno_ibfk_1` FOREIGN KEY (`id_armario`) REFERENCES `tb_armario` (`cd_armario`),
  ADD CONSTRAINT `tb_armario_aluno_ibfk_2` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_rm`);

--
-- Restrições para a tabela `tb_duvidas`
--
ALTER TABLE `tb_duvidas`
  ADD CONSTRAINT `fk_tb_duvidas_tb_adm1` FOREIGN KEY (`id_adm_duvidas`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_duvidas_ibfk_1` FOREIGN KEY (`id_aluno_duvidas`) REFERENCES `tb_aluno` (`cd_rm`);

--
-- Restrições para a tabela `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD CONSTRAINT `fk_tb_registro_tb_aluno1` FOREIGN KEY (`id_aluno_registro`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `tb_registro_adm`
--
ALTER TABLE `tb_registro_adm`
  ADD CONSTRAINT `fk_tb_registro_adm_tb_adm1` FOREIGN KEY (`id_adm`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `tb_reserva`
--
ALTER TABLE `tb_reserva`
  ADD CONSTRAINT `fk_tb_reserva_tb_adm1` FOREIGN KEY (`id_adm_res`) REFERENCES `tb_adm` (`cd_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_aluno1` FOREIGN KEY (`id_aluno1_reserva`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_aluno2` FOREIGN KEY (`id_aluno2_reserva`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reserva_tb_armario1` FOREIGN KEY (`id_armario_reserva`) REFERENCES `tb_armario` (`cd_armario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  ADD CONSTRAINT `tb_turmas_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`cd_curso`);

--
-- Restrições para a tabela `tb_turma_aluno`
--
ALTER TABLE `tb_turma_aluno`
  ADD CONSTRAINT `fk_tb_turma_aluno_tb_aluno1` FOREIGN KEY (`id_rm`) REFERENCES `tb_aluno` (`cd_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_turma_aluno_tb_turmas1` FOREIGN KEY (`id_turmas`) REFERENCES `tb_turmas` (`cd_turmas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
