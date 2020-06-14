-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13-Jun-2020 às 21:18
-- Versão do servidor: 8.0.20-0ubuntu0.20.04.1
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caravan`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `login` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `login`, `senha`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `california`
--

CREATE TABLE `california` (
  `id` int NOT NULL,
  `data` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `evento` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `local` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `california`
--

INSERT INTO `california` (`id`, `data`, `evento`, `local`) VALUES
(69, '18:07', 'california 18:07', 'california 18:07'),
(72, '14/06', 'Cachorrada', 'Casa Dhayllin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dublin`
--

CREATE TABLE `dublin` (
  `id` int NOT NULL,
  `data` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `evento` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `local` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dublin`
--

INSERT INTO `dublin` (`id`, `data`, `evento`, `local`) VALUES
(12, 'dub01', 'dublin01', 'dublin01'),
(13, '07/06', 'Obrigado', 'dhayllin'),
(14, '18:08', 'dublin 18:08', 'dublin 18:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paris`
--

CREATE TABLE `paris` (
  `id` int NOT NULL,
  `data` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `evento` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `local` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `paris`
--

INSERT INTO `paris` (`id`, `data`, `evento`, `local`) VALUES
(15, 'par02', 'paris02', 'paris02'),
(16, '12345', 'Digital Brasilia', 'Paranoá DF'),
(17, '15:55', '15:55', '15:55'),
(18, '18:08', 'paris 18:08', 'paris 18:08');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `california`
--
ALTER TABLE `california`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dublin`
--
ALTER TABLE `dublin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paris`
--
ALTER TABLE `paris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `california`
--
ALTER TABLE `california`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `dublin`
--
ALTER TABLE `dublin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `paris`
--
ALTER TABLE `paris`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
