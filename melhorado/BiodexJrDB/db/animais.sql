-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/04/2024 às 07:02
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
  `reino` varchar(13) NOT NULL,
  `cat` char(13) DEFAULT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `animais`
--

INSERT INTO `animais` (`id`, `nome`, `reino`, `cat`, `descricao`) VALUES
(1, 'Leão', 'Animalia', 'Mamífero', 'O leão é um grande felino do gênero Panthera e uma espécie de predador.'),
(2, 'Águia', 'Animalia', 'Ave', 'A águia é uma ave de rapina que também é o símbolo de força e liberdade.'),
(3, 'Tubarão', 'Animalia', 'Peixe', 'O tubarão é um peixe cartilaginoso e um superpredador temido no oceano.'),
(4, 'Elefante', 'Animalia', 'Mamífero', 'O elefante é o maior animal terrestre existente.'),
(5, 'Falcão', 'Animalia', 'Ave', 'O falcão é uma ave de rapina conhecida por sua velocidade.'),
(6, 'Salmão', 'Animalia', 'Peixe', 'O salmão é um peixe conhecido por sua migração rio acima.'),
(7, 'Urso', 'Animalia', 'Mamífero', 'O urso é um mamífero carnívoro com um corpo pesado e peludo.'),
(8, 'Coruja', 'Animalia', 'Ave', 'A coruja é uma ave noturna com olhos grandes e um pescoço giratório.'),
(9, 'Baleia', 'Animalia', 'Mamífero', 'A baleia é um mamífero marinho de grande porte.'),
(10, 'Pinguim', 'Animalia', 'Ave', 'O pinguim é uma ave que não voa e é adaptada à vida no mar.'),
(11, 'Atum', 'Animalia', 'Peixe', 'O atum é um peixe pelágico conhecido por sua velocidade.'),
(12, 'Carpa', 'Animalia', 'Peixe', 'A carpa é um peixe de água doce popular em pesca esportiva.'),
(13, 'Bagre', 'Animalia', 'Peixe', 'O bagre é um peixe de fundo conhecido por seus bigodes.'),
(14, 'Dourado', 'Animalia', 'Peixe', 'O dourado é um peixe de água doce conhecido por sua cor dourada.'),
(15, 'Pacu', 'Animalia', 'Peixe', 'O pacu é um peixe de água doce conhecido por seus dentes parecidos com os humanos.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
