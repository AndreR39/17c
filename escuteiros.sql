-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 28-Fev-2019 às 12:26
-- Versão do servidor: 5.6.11-log
-- versão do PHP: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `escuteiros`
--
CREATE DATABASE IF NOT EXISTS `escuteiros` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `escuteiros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat_priv`
--

CREATE TABLE IF NOT EXISTS `chat_priv` (
  `id_priv` int(9) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `enviou` varchar(60) NOT NULL,
  `recebeu` varchar(60) NOT NULL,
  PRIMARY KEY (`id_priv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat_pub`
--

CREATE TABLE IF NOT EXISTS `chat_pub` (
  `id_pub` int(9) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `enviou` varchar(60) NOT NULL,
  PRIMARY KEY (`id_pub`),
  UNIQUE KEY `id` (`id_pub`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(9) NOT NULL AUTO_INCREMENT,
  `data_nascimento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `pw` varchar(60) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
