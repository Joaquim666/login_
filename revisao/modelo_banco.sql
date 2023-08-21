-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Jul-2023 às 11:22
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `modelo_banco`
--
CREATE DATABASE IF NOT EXISTS `modelo_banco` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `modelo_banco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_login`
--

DROP TABLE IF EXISTS `tabela_login`;
CREATE TABLE IF NOT EXISTS `tabela_login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(300) NOT NULL,
  `senha` varchar(300) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_login`
--

INSERT INTO `tabela_login` (`id_login`, `login`, `senha`) VALUES
(1, 'Dieimes Nunes 2023', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
