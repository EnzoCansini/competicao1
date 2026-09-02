-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/09/2026 às 21:08
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
-- Banco de dados: `sistema1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `Rua` varchar(150) DEFAULT NULL,
  `Registro_Profissional` varchar(100) DEFAULT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nome`, `CPF`, `Email`, `Telefone`, `Estado`, `Cidade`, `Rua`, `Registro_Profissional`, `Senha`) VALUES
(1, 'testePro', 'cpfff', 'teste2', 'tetetet', 'esesese', 'cicicic', 'rurururu', 're', '$2y$10$diUb0wzt59NIOljxm66Z3OFTxtVJzN75QnxGYtAfWtuYA/wAVvX6K'),
(2, 'nomeee', 'c', 'teste0', 'tetet', 'tet', 'te', 'tet', 't', '$2y$10$T4KU3juGbRZhDELoQIik/e3Lz57m999LknG2b7RHC9dqAQ41K7wG2'),
(3, '1', '1', '1', '1', '1', '1', '1', '1', '$2y$10$rZ765Bb7GZLlTdzS7z/a2OwOUAXVRMdl12YEVxFRHfIcQZld9c1fa'),
(4, 'nomeee', 'cpfi', 'email', 'eee', 'eee', 'eee', 'eee', 'eee', '$2y$10$/R9Q/sQw9RocGHox0qazM.qBkeAo.Qmzdq1vJ3rDHCQuRuW6MXfCy');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
