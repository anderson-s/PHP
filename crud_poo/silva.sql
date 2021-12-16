-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Dez-2019 às 19:19
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cli_id` int(5) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(50) NOT NULL,
  `cli_email` varchar(45) NOT NULL,
  `cli_senha` varchar(15) NOT NULL,
  `cli_logradouro` varchar(45) NOT NULL,
  `cli_num_casa` int(8) NOT NULL,
  `cli_rua` varchar(45) NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `est_id` int(5) NOT NULL AUTO_INCREMENT,
  `est_quantidade` int(5) DEFAULT NULL,
  PRIMARY KEY (`est_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_has_produtos`
--

DROP TABLE IF EXISTS `estoque_has_produtos`;
CREATE TABLE IF NOT EXISTS `estoque_has_produtos` (
  `estoque_est_id` int(5) NOT NULL,
  `produtos_pro_id` int(5) NOT NULL,
  `est_pro_id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`est_pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `fun_id` int(3) NOT NULL AUTO_INCREMENT,
  `fun_nome` varchar(45) NOT NULL,
  `fun_email` varchar(45) NOT NULL,
  `fun_senha` varchar(45) NOT NULL,
  PRIMARY KEY (`fun_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `mar_id` int(5) NOT NULL,
  `mar_nome` varchar(45) NOT NULL,
  PRIMARY KEY (`mar_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `pro_id` int(5) NOT NULL AUTO_INCREMENT,
  `pro_preco` float(5,2) NOT NULL,
  `pro_nome` varchar(45) NOT NULL,
  `marcas_mar_id` int(5) NOT NULL,
  `estoque_est_id` int(5) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `ven_id` int(5) NOT NULL AUTO_INCREMENT,
  `clientes_cli_id` int(5) NOT NULL,
  `produtos_pro_id` int(5) NOT NULL,
  `funcionarios_fun_id` int(3) NOT NULL,
  PRIMARY KEY (`ven_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
