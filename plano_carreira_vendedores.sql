-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 30-Dez-2019 às 00:24
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `plano_carreira_vendedores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
CREATE TABLE IF NOT EXISTS `vendedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `pt` int(11) NOT NULL DEFAULT '500',
  `perna_esquerda` json NOT NULL,
  `perna_direita` json NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id`, `nome`, `pt`, `perna_esquerda`, `perna_direita`) VALUES
(1, 'vendedor 1', 0, '{\"id\": 2, \"nome\": \"vendedor 2\"}', '{\"id\": 3, \"nome\": \"vendedor 3\"}'),
(2, 'vendedor 2', 0, '{\"id\": 4, \"nome\": \"vendedor 4\"}', 'null'),
(3, 'vendedor 3', 0, '{\"id\": 5, \"nome\": \"vendedor 5\"}', '{\"id\": 6, \"nome\": \"vendedor 6\"}'),
(2, 'vendedor 2', 0, '{\"id\": 4, \"nome\": \"vendedor 4\"}', 'null'),
(3, 'vendedor 3', 0, '{\"id\": 5, \"nome\": \"vendedor 5\"}', '{\"id\": 6, \"nome\": \"vendedor 6\"}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
