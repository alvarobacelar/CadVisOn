-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `cadvision`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contato_nome` varchar(50) DEFAULT NULL,
  `contato_email` varchar(50) DEFAULT NULL,
  `contato_assunto` varchar(11) DEFAULT NULL,
  `contato_mensagem` text,
  `contato_data` date DEFAULT NULL,
  `contato_hora` time DEFAULT NULL,
  `contato_ip` varchar(45) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `rg` varchar(14) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `obs` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `rg`, `sexo`, `cpf`, `cidade`, `uf`, `telefone`, `endereco`, `cep`, `bairro`, `numero`, `email`, `obs`, `foto`) VALUES
(1, 'Ãlvaro Bacelar de Sousa', '2719183', 'M', '00859045382', 'Teresina', 'PI', '(86) 9981-60161', '', '', '', '', '', '    ', 'images/poza_1396282618.jpg'),
(2, 'Alexandre Bacelar', '213232332', 'M', '66500568478', 'Teresina', 'PI', '8688260746', 'Rua guaraci 6086', '64009800', '', '', 'alexandrebacelar1@gmail.com', ' ', 'images/poza_1396995068.jpg'),
(3, 'andre silva', '2323232', 'M', '61520154569', 'Teresina', 'CE', '8633010400', 'praÃ§a marechal floriando peixoto', '64010-270', '', '', 'alvarinhobacelar@gmail.com', '', 'images/poza_1396996353.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `nivel` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `login`, `senha`, `email`, `data`, `hora`, `ip`, `status`, `nivel`) VALUES
(3, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrador@gmail.com', '2014-03-14', '22:30:00', '::1', 1, 0),
(4, 'Supervisor', 'supervis', 'ab28c58491f42aaebe28f6ecb1d29c54', 'teste@email.com', '2014-03-14', '22:30:47', '::1', 1, 2),
(5, 'UsuÃ¡rio', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'teste@email.com', '2014-03-14', '22:31:30', '::1', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visita`
--

CREATE TABLE IF NOT EXISTS `visita` (
  `id_visita` int(11) NOT NULL AUTO_INCREMENT,
  `visitante_data` date DEFAULT NULL,
  `visitante_hora` time DEFAULT NULL,
  `visita_saida` time NOT NULL,
  `visitante_quem_vis` varchar(50) DEFAULT NULL,
  `visitante_obs` text,
  `id_pessoa` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `cracha` varchar(8) NOT NULL,
  PRIMARY KEY (`id_visita`,`id_pessoa`),
  KEY `fk_visita_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `visita`
--

INSERT INTO `visita` (`id_visita`, `visitante_data`, `visitante_hora`, `visita_saida`, `visitante_quem_vis`, `visitante_obs`, `id_pessoa`, `status`, `cracha`) VALUES
(1, '2014-03-26', '12:06:40', '12:08:05', 'Cb Fabio', 'SFPC', 1, 0, '8'),
(2, '2014-03-31', '16:18:07', '16:19:27', 'Sgt Alves', '', 1, 0, '23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitado`
--

CREATE TABLE IF NOT EXISTS `visitado` (
  `id_visitado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visitado_nome` varchar(100) NOT NULL,
  `visitado_secao` varchar(45) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_visitado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `visitado`
--

INSERT INTO `visitado` (`id_visitado`, `visitado_nome`, `visitado_secao`, `status`) VALUES
(2, 'Sgt Alves', 'CCAp', 1),
(3, 'Tc Figueiredo', 'Comandante', 1),
(4, 'Maj Dimas', 'Sub Comandante', 1),
(5, 'Cap Marcos Paulo', 'op pipa', 1),
(6, 'Maj Diniz', '4Âº SeÃ§Ã£o', 1),
(7, 'Sgt Policarpo', 'SeÃ§Ã£o de InformÃ¡tica', 1),
(9, 'Cap Gustavo Monteiro', '2Âº Cia Fuz', 1),
(10, 'Cb J Oliveira', 'Comandante', 1),
(11, 'Cap Fernandes Moura', '1Âº SecÃ£o', 1),
(12, 'Sgt Alcoba', 'OperaÃ§Ã£o Pipa', 1),
(14, 'Sgt Ribeiro', 'PelotÃ£o de ComunicaÃ§Ãµes', 1);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `visita`
--
ALTER TABLE `visita`
  ADD CONSTRAINT `visita_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
