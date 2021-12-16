-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Nov-2020 às 21:14
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
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adm_id` int(3) NOT NULL AUTO_INCREMENT,
  `adm_nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `adm_email` varchar(20) COLLATE utf8_bin NOT NULL,
  `adm_senha` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_nome`, `adm_email`, `adm_senha`) VALUES
(1, 'Silva', 'teste@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cli_id` int(3) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `cli_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `cli_senha` varchar(15) COLLATE utf8_bin NOT NULL,
  `cli_logradouro` varchar(15) COLLATE utf8_bin NOT NULL,
  `cli_rua` varchar(50) COLLATE utf8_bin NOT NULL,
  `cli_num_casa` varchar(5) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_id`, `cli_nome`, `cli_email`, `cli_senha`, `cli_logradouro`, `cli_rua`, `cli_num_casa`) VALUES
(6, 'Mopa', '123@123', '123', 'hhjhjh', '13', 'eefff');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
