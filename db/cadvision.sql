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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `rg`, `sexo`, `cpf`, `cidade`, `uf`, `telefone`, `endereco`, `cep`, `bairro`, `numero`, `email`, `obs`, `foto`) VALUES
(13, 'Ãlvaro bacelar de sousa', '2113232', 'M', '00859045382', 'TERESINA', 'PI', '8688052444', 'QUADRA 6 CASA 21 SETOR C MOCAMBINHO', '64010270', 'Mocambinho', '21', 'alvarinho_bacelar@hotmail.com', 'Teste de ObservaÃ§Ã£o', 'images/poza_1394842259.jpg'),
(14, 'Antonio de Lopes Melo', '12123323', 'M', '12345678900', 'Teresina', 'PI', '23232323232', 'quadra 6 casa 21 setor', '64000000', 'teste', '12', 'cbalvaro25bc@gmail.com', 'teste', 'images/poza_1395173824.jpg'),
(15, 'Luiz Felipe Sousa', '232323', 'M', '34343343434', 'Teresina', 'PI', '23223232', 'Rua alameida', '640102000', 'mocambinho', '32', '', '', 'images/poza_1395173914.jpg'),
(16, 'Alexandre Bacelar', '1212121', 'M', '23232323232', 'Teresina', '', '8688260746', 'Rua guaraci 6086', '64009800', 'Mocambinho', '3223', 'alexandrebacelar1@gmail.com', '', 'images/poza_1395181165.jpg'),
(18, 'ALVARO BACELAR DE SOUSA', '', '', '23323243434', 'TERESINA', '', '8688052444', 'QUADRA 6 CASA 21 SETOR C MOCAMBINHO', '64010270', 'mocambinho''', '232', 'alvarinho_bacelar@hotmail.com', '', 'images/poza_1395181165.jpg'),
(21, 'ALVARO BACELAR DE SOUSA', '233232', 'M', '90923203232', 'TERESINA', 'PI', '8688052444', 'QUADRA 6 CASA 21 SETOR C MOCAMBINHO', '64010270', '', '', 'alvarinho_bacelar@hotmail.com', '', 'images/poza_1395181968.jpg'),
(22, 'Nova Pessoa Teste Com Foto', '1222323', 'M', '24343434344', 'TERESINA', 'PE', '8688052444', 'QUADRA 6 CASA 21 SETOR C MOCAMBINHO', '64010270', '', '', 'alvarinho_bacelar@hotmail.com', '', 'images/poza_1395182105.jpg'),
(23, 'Teste', '23343443', 'M', '35423435344', 'Teresina', 'PI', '2332323232', '', '', '', '', '', '', 'images/poza_1395187549.jpg');

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
  PRIMARY KEY (`id_visita`,`id_pessoa`),
  KEY `fk_visita_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `visita`
--

INSERT INTO `visita` (`id_visita`, `visitante_data`, `visitante_hora`, `visita_saida`, `visitante_quem_vis`, `visitante_obs`, `id_pessoa`, `status`) VALUES
(5, '2014-03-15', '00:11:50', '00:19:41', 'Maj Dimas', 'teste de visita', 13, 0),
(6, '2014-03-15', '11:16:11', '11:24:35', 'Maj Diniz', 'Acompanha uma crianÃ§a', 13, 0),
(7, '2014-03-18', '17:32:17', '17:33:09', 'Tc Figueiredo', 'comando', 13, 0),
(8, '2014-03-18', '20:18:16', '20:30:15', 'Sgt Policarpo', 'SeÃ§Ã£o de InformÃ¡tica', 14, 0),
(9, '2014-03-18', '20:19:34', '20:30:20', 'Cap Marcos Paulo', 'OperaÃ§Ã£o Pipa', 15, 0),
(10, '2014-03-18', '22:20:10', '22:38:06', 'Sgt Alves', 'CCAp', 16, 0),
(11, '2014-03-18', '22:37:44', '22:58:16', 'Fulano de sousa', 'Secao teste', 22, 0),
(12, '2014-03-19', '00:03:41', '00:06:46', 'Sgt Wellignton', 'SeÃ§Ã£o de informÃ¡tica', 13, 0),
(13, '2014-03-19', '00:06:39', '00:14:15', 'Tc Figueiredo', 'teste', 23, 0),
(14, '2014-03-19', '16:57:24', '17:14:38', 'Sgt Wellignton', 'Setor de Pagamento', 15, 0),
(15, '2014-03-19', '17:14:48', '17:52:20', 'Tc Figueiredo', 'Comando', 13, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `visitado`
--

INSERT INTO `visitado` (`id_visitado`, `visitado_nome`, `visitado_secao`, `status`) VALUES
(1, 'Fulano de sousa', '4 seÃ§Ã£o', 1),
(2, 'Sgt Alves', 'ccap', 1),
(3, 'Tc Figueiredo', 'comandante', 1),
(4, 'Maj Dimas', 'sub comandante', 1),
(5, 'Cap Marcos Paulo', 'op pipa', 1),
(6, 'Maj Diniz', '4sec', 1),
(7, 'Sgt Policarpo', 'sec infor', 1),
(8, 'Sgt Wellignton', '4sec', 1);

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
