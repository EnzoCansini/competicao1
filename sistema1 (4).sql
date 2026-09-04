-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/09/2026 às 21:14
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
  `dia_semana` varchar(255) DEFAULT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `Data_Update` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `disponibilidade`
--

INSERT INTO `disponibilidade` (`ID`, `ID_Usuario`, `dia_semana`, `horario`, `Data_Update`) VALUES
(1, 4, '', '', '2026-09-01 14:46:14'),
(6, 13, 'segunda', '06:00', '2026-09-02 16:12:41'),
(7, 13, 'segunda', '08:00', '2026-09-02 16:12:41'),
(8, 13, 'segunda', '10:00', '2026-09-02 16:12:41'),
(9, 13, 'segunda', '13:00', '2026-09-02 16:12:41'),
(10, 13, 'segunda', '15:00', '2026-09-02 16:12:41'),
(11, 13, 'segunda', '17:00', '2026-09-02 16:12:41'),
(12, 13, 'segunda', '19:00', '2026-09-02 16:12:41'),
(13, 13, 'segunda', '21:00', '2026-09-02 16:12:41'),
(14, 13, 'quarta', '06:00', '2026-09-02 16:12:41'),
(15, 13, 'quarta', '08:00', '2026-09-02 16:12:41'),
(16, 13, 'quarta', '10:00', '2026-09-02 16:12:41'),
(17, 13, 'quarta', '13:00', '2026-09-02 16:12:41'),
(18, 13, 'quarta', '15:00', '2026-09-02 16:12:41'),
(19, 13, 'quarta', '17:00', '2026-09-02 16:12:41'),
(20, 13, 'quarta', '19:00', '2026-09-02 16:12:41'),
(21, 13, 'quarta', '21:00', '2026-09-02 16:12:41'),
(22, 13, 'sexta', '06:00', '2026-09-02 16:12:41'),
(23, 13, 'sexta', '08:00', '2026-09-02 16:12:41'),
(24, 13, 'sexta', '10:00', '2026-09-02 16:12:41'),
(25, 13, 'sexta', '13:00', '2026-09-02 16:12:41'),
(26, 13, 'sexta', '15:00', '2026-09-02 16:12:41'),
(27, 13, 'sexta', '17:00', '2026-09-02 16:12:41'),
(28, 13, 'sexta', '19:00', '2026-09-02 16:12:41'),
(29, 13, 'sexta', '21:00', '2026-09-02 16:12:41');

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

--
-- Despejando dados para a tabela `indicadores`
--

INSERT INTO `indicadores` (`ID`, `ID_Paciente`, `Data_Registro`, `Hora_Registro`, `Altura`, `Peso`, `Pressao`, `Batimentos`, `Campo_Livre`) VALUES
(1, 1, '2026-08-26', '15:30:18', 12.00, 12.00, '12', 12, '111');

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
(1, 'teste123', 'testee', 'teste1', NULL, 'ee', 'eee', 'eeee', '$2y$10$GcsdxPw0X/HXGyILHfnkUuIu2XvV1dAI/x6qck.1IvDGmVyyENKze'),
(2, 'Absolute Nome', '123', 'a', NULL, '6789', '789', '7890', '$2y$10$0WUYMUe1NAyjZbN6QQ.tGuU0GSxufeByPwS7tOrdKbRQUskL2cQey');

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
  `Categoria` text NOT NULL,
  `Rua` varchar(150) DEFAULT NULL,
  `Registro_Profissional` varchar(100) DEFAULT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nome`, `CPF`, `Email`, `Telefone`, `Estado`, `Cidade`, `Categoria`, `Rua`, `Registro_Profissional`, `Senha`) VALUES
(1, 'testePro', 'cpfff', 'teste2', 'tetetet', 'esesese', 'cicicic', '', 'rurururu', 're', '$2y$10$diUb0wzt59NIOljxm66Z3OFTxtVJzN75QnxGYtAfWtuYA/wAVvX6K'),
(2, 'nomeee', 'c', 'teste0', 'tetet', 'tet', 'te', '', 'tet', 't', '$2y$10$T4KU3juGbRZhDELoQIik/e3Lz57m999LknG2b7RHC9dqAQ41K7wG2'),
(3, '1', '1', '1', '1', '1', '1', '', '1', '1', '$2y$10$rZ765Bb7GZLlTdzS7z/a2OwOUAXVRMdl12YEVxFRHfIcQZld9c1fa'),
(4, 'nomeee', 'cpfi', 'email', 'eee', 'eee', 'eee', '', 'eee', 'eee', '$2y$10$/R9Q/sQw9RocGHox0qazM.qBkeAo.Qmzdq1vJ3rDHCQuRuW6MXfCy'),
(13, '12312321', '1231231236', 'abc@gmail.com', 'sdfghj', 'fghj', 'ghj', '', 'ghjghj', 'fghj', '$2y$10$cAp3PkNHhKOIkCaEMYa27e25fyZmPonMpDJmvCNAnbpsxil4ITdYS');

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
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  ADD PRIMARY KEY (`ID`);

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
  ADD PRIMARY KEY (`ID_Usuario`),
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
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuario_categoria`
--
ALTER TABLE `usuario_categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
