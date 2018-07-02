-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2018 às 06:28
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmsenhas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_envioemail`
--

CREATE TABLE `cadastro_envioemail` (
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `Data_Expiracao` datetime NOT NULL,
  `frequencia` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_envioemail`
--

INSERT INTO `cadastro_envioemail` (`nome`, `email`, `Data_Expiracao`, `frequencia`) VALUES
('Raimundo', 'raimundo@gmail.com', '2018-07-11 00:00:00', 1),
('Ronara', 'ronara@gmail.com', '2018-07-12 00:00:00', 0),
('Romeu', 'Ro@gmail.com', '2018-07-03 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_usuario`
--

CREATE TABLE `mensagem_usuario` (
  `Nome` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Assunto` varchar(80) NOT NULL,
  `Mensagem` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem_usuario`
--

INSERT INTO `mensagem_usuario` (`Nome`, `Email`, `Assunto`, `Mensagem`) VALUES
('JoÃ£o', 'jhonManolo@gmail.com', 'Teste', 'Opa, fala aÃ­ chegado!! ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
