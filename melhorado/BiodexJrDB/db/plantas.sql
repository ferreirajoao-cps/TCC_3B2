-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/07/2024 às 20:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biodexjrdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `plantas`
--

CREATE TABLE `plantas` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `reino` varchar(15) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `descricao` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `plantas`
--

INSERT INTO `plantas` (`id`, `nome`, `reino`, `grupo`, `tipo`, `descricao`) VALUES
(1, 'Vitória-régia', 'Plantae', 'Angiospermas', 'Hidrófita', 'Maior ninfeia do mundo, com folhas circulares'),
(2, 'Bromélia', 'Plantae', 'Angiospermas', 'Epífita', 'Planta tropical com folhas em roseta'),
(3, 'Orquídea', 'Plantae', 'Angiospermas', 'Epífita', 'Planta com flores exóticas e variadas'),
(4, 'Samambaia-de-pedra', 'Plantae', 'Pteridófitas', 'Litófita', 'Feto que cresce em fendas de rochas'),
(5, 'Lótus', 'Plantae', 'Angiospermas', 'Hidrófita', 'Planta aquática com flores belas'),
(6, 'Musgo', 'Plantae', 'Briófitas', 'Epífita/Litófit', 'Planta pequena e sem vasos condutores'),
(7, 'Cacto', 'Plantae', 'Angiospermas', 'Xerófita/Litófi', 'Planta suculenta adaptada a climas secos'),
(8, 'Mangue', 'Plantae', 'Angiospermas', 'Hidrófita', 'Árvore adaptada a ambientes salinos'),
(9, 'Pinheiro', 'Plantae', 'Gimnospermas', 'Árvore', 'Conífera de folhas aciculares'),
(10, 'Rosa', 'Plantae', 'Angiospermas', 'Arbusto', 'Planta florífera com espinhos'),
(11, 'Bonsai', 'Várias espécies', 'Várias', 'Árvore/Arbusto/', 'Planta cultivada em vasos, com o crescimento controlado para adquirir formas ornamentais.'),
(12, 'Capim-grama', 'Plantae', 'Angiospermas', 'Erva', 'Planta tropical com tronco único'),
(13, 'Palmeira', 'Plantae', 'Angiospermas', 'Árvore', 'Planta tropical com tronco único'),
(14, 'Babosa', 'Plantae', 'Angiospermas', 'Suculenta', 'Planta medicinal com folhas suculentas'),
(15, 'Avenca', 'Plantae', 'Pteridófitas', 'Erva', 'Feto delicado, cultivado em ambientes');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `plantas`
--
ALTER TABLE `plantas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
