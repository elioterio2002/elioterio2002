-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Dez-2019 às 02:48
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `registro`
--
CREATE DATABASE IF NOT EXISTS `registro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `registro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `serie` int(50) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `serie`, `login`, `senha`) VALUES
(1, 'celso1', 5, 'celso', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `materia` varchar(45) NOT NULL,
  `nota1` varchar(11) NOT NULL,
  `nota2` varchar(11) NOT NULL,
  `nota3` varchar(11) NOT NULL,
  `nota4` varchar(11) NOT NULL,
  `aluno_id` int(10) UNSIGNED DEFAULT NULL,
  `professor_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `materia`, `nota1`, `nota2`, `nota3`, `nota4`, `aluno_id`, `professor_id`) VALUES
(1, 'portugues', '10', '10', '10', '10', 1, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `nome1` varchar(40) NOT NULL,
  `cpf1` int(40) NOT NULL,
  `login1` varchar(40) NOT NULL,
  `senha1` varchar(40) NOT NULL,
  `materia1` varchar(30) NOT NULL,
  `materia2` varchar(30) NOT NULL,
  `materia3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `teacher`
--

INSERT INTO `teacher` (`id`, `nome1`, `cpf1`, `login1`, `senha1`, `materia1`, `materia2`, `materia3`) VALUES
(1, 'anderson', 0, 'ander', '123456', '', '', ''),
(2, 'levi', 415, 'levi1', 'qwerty', '', '', ''),
(3, 'anderson', 12345, 'ander', '12345', '', '', ''),
(4, 'anderson', 12345, 'ander', '12345', '', '', ''),
(5, 'neguinho', 123456, 'isaias', '123', '', '', ''),
(6, 'celso', 123456, 'celso1', '123', '', '', ''),
(7, 'pedro', 456, 'pedrinho', '123', '', '', ''),
(8, 'isaias', 15, 'isaias1', '13', 'portugues', 'matematica', ''),
(9, 'anderson', 124, 'andersinho', '123', 'geografia', 'historia', ''),
(10, 'bruno', 152, 'bruninho', '123', 'geografia', 'historia', 'ed. fisica'),
(11, 'mÃ£e', 123, 'mae', '123', 'portugues', 'matematica', 'matematica');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `aluno_id` FOREIGN KEY (`id`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `professor_id` FOREIGN KEY (`id`) REFERENCES `teacher` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
