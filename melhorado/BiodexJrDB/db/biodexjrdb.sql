-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/09/2024 às 23:09
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
-- Estrutura para tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(5) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cat` char(13) DEFAULT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `animais`
--

INSERT INTO `animais` (`id`, `nome`, `cat`, `descricao`) VALUES
(1, 'Leão', 'Mamífero', 'Reino: Animaila Filo: Chordata Classe: Mammalia'),
(2, 'Águia', 'Ave', 'Reino: Animaila Filo: Chordata Classe: Aves'),
(3, 'Tubarão', 'Peixe', 'Reino: Animaila Filo: Chordata Classe: Chondrichthyes'),
(4, 'Elefante', 'Mamífero', 'Reino: Animaila Filo: Chordata Classe: Mammalia'),
(5, 'Falcão', 'Ave', 'Reino: Animaila Filo: Chordata Classe: Aves'),
(6, 'Salmão', 'Peixe', 'Reino: Animaila Filo: Chordata Classe: Actinopterygii'),
(7, 'Urso', 'Mamífero', 'Reino: Animaila Filo: Chordata Classe: Mammalia'),
(8, 'Coruja', 'Ave', 'Reino: Animaila Filo: Chordata Classe: Aves'),
(9, 'Baleia', 'Mamífero', 'Reino: Animaila Filo: Chordata Classe: Mammalia'),
(10, 'Pinguim', 'Ave', 'Reino: Animaila Filo: Chordata Classe: Aves'),
(11, 'Atum', 'Peixe', 'Reino: Animaila Filo: Chordata Classe: Actinopterygii'),
(12, 'Carpa', 'Peixe', 'Reino: Animaila Filo: Chordata Classe: Actinopterygii'),
(13, 'Bagre', 'Peixe', 'Reino: Animaila Filo: Chordata Classe: Actinopterygii'),
(14, 'Dourado', 'Peixe', 'Reino: Animaila Filo: Chordata Classe: Actinopterygii'),
(15, 'Pacu', 'Peixe', 'Reino: Animaila Filo: Chordata Classe: Actinopterygii');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fungi`
--

CREATE TABLE `fungi` (
  `id` int(5) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cat` char(13) DEFAULT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fungi`
--

INSERT INTO `fungi` (`id`, `nome`, `cat`, `descricao`) VALUES
(1, 'Cogumelo', 'Fungo', 'Reino: Fungi Filo: Basidiomycota Classe: Agaricomycetes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `monera`
--

CREATE TABLE `monera` (
  `id` int(5) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cat` char(13) DEFAULT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `monera`
--

INSERT INTO `monera` (`id`, `nome`, `cat`, `descricao`) VALUES
(1, 'Bactéria', 'Monera', 'Reino: Monera Filo: Proteobacteria Classe: Gammaproteobacteria');

-- --------------------------------------------------------

--
-- Estrutura para tabela `plantas`
--

CREATE TABLE `plantas` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `descricao` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `plantas`
--

INSERT INTO `plantas` (`id`, `nome`, `grupo`, `tipo`, `descricao`) VALUES
(1, 'Vitória-régia', 'Angiospermas', 'Hidrófita', 'Maior ninfeia do mundo, com folhas circulares'),
(2, 'Bromélia', 'Angiospermas', 'Epífita', 'Planta tropical com folhas em roseta'),
(3, 'Orquídea', 'Angiospermas', 'Epífita', 'Planta com flores exóticas e variadas'),
(4, 'Samambaia-de-pedra', 'Pteridófitas', 'Litófita', 'Feto que cresce em fendas de rochas'),
(5, 'Lótus', 'Angiospermas', 'Hidrófita', 'Planta aquática com flores belas'),
(6, 'Musgo', 'Briófitas', 'Epífita/Litófit', 'Planta pequena e sem vasos condutores'),
(7, 'Cacto', 'Angiospermas', 'Xerófita/Litófi', 'Planta suculenta adaptada a climas secos'),
(8, 'Mangue', 'Angiospermas', 'Hidrófita', 'Árvore adaptada a ambientes salinos'),
(9, 'Pinheiro', 'Gimnospermas', 'Árvore', 'Conífera de folhas aciculares'),
(10, 'Rosa', 'Angiospermas', 'Arbusto', 'Planta florífera com espinhos'),
(11, 'Bonsai', 'Várias espécies', 'Árvore/Arbusto/', 'Planta cultivada em vasos, com o crescimento controlado para adquirir formas ornamentais.'),
(12, 'Capim-grama', 'Angiospermas', 'Erva', 'Planta tropical com tronco único'),
(13, 'Palmeira', 'Angiospermas', 'Árvore', 'Planta tropical com tronco único'),
(14, 'Babosa', 'Angiospermas', 'Suculenta', 'Planta medicinal com folhas suculentas'),
(15, 'Avenca', 'Pteridófitas', 'Erva', 'Feto delicado, cultivado em ambientes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `protista`
--

CREATE TABLE `protista` (
  `id` int(5) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cat` char(13) DEFAULT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `protista`
--

INSERT INTO `protista` (`id`, `nome`, `cat`, `descricao`) VALUES
(1, 'Ameba', 'Protista', 'Reino: Protista Filo: Amoebozoa Classe: Tubulinea');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'adm@gmail.com', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fungi`
--
ALTER TABLE `fungi`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `monera`
--
ALTER TABLE `monera`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `plantas`
--
ALTER TABLE `plantas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `protista`
--
ALTER TABLE `protista`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `fungi`
--
ALTER TABLE `fungi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `monera`
--
ALTER TABLE `monera`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `plantas`
--
ALTER TABLE `plantas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `protista`
--
ALTER TABLE `protista`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
