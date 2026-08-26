-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/08/2026 às 20:24
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
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL,
  `Nome_Categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `ID` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  `ID_Paciente` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Motivo` varchar(255) DEFAULT NULL,
  `Motivo_Escrito` text DEFAULT NULL,
  `Dia` date NOT NULL,
  `Hora` time NOT NULL,
  `Status` varchar(50) DEFAULT 'Pendente',
  `Notas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disponibilidade`
--

CREATE TABLE `disponibilidade` (
  `ID` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Dias_Disponiveis` varchar(255) DEFAULT NULL,
  `Horas_Disponiveis` varchar(255) DEFAULT NULL,
  `Data_Update` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `indicadores`
--

CREATE TABLE `indicadores` (
  `ID` int(11) NOT NULL,
  `ID_Paciente` int(11) NOT NULL,
  `Data_Registro` date NOT NULL,
  `Hora_Registro` time NOT NULL,
  `Altura` decimal(5,2) DEFAULT NULL,
  `Peso` decimal(6,2) DEFAULT NULL,
  `Pressao` varchar(20) DEFAULT NULL,
  `Batimentos` int(11) DEFAULT NULL,
  `Campo_Livre` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `Rua` varchar(150) DEFAULT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`ID`, `Nome`, `CPF`, `Email`, `Telefone`, `Estado`, `Cidade`, `Rua`, `Senha`) VALUES
(1, 'teste123', 'testee', 'teste1', NULL, 'ee', 'eee', 'eeee', '$2y$10$GcsdxPw0X/HXGyILHfnkUuIu2XvV1dAI/x6qck.1IvDGmVyyENKze');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_categoria`
--

CREATE TABLE `usuario_categoria` (
  `ID` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_Usuario` (`ID_Usuario`);

--
-- Índices de tabela `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices de tabela `usuario_categoria`
--
ALTER TABLE `usuario_categoria`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_Categoria` (`ID_Categoria`,`ID_Usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario_categoria`
--
ALTER TABLE `usuario_categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
