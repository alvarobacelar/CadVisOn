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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `contato_nome`, `contato_email`, `contato_assunto`, `contato_mensagem`, `contato_data`, `contato_hora`, `contato_ip`, `status`) VALUES
(1, 'Alvaro', 'alvarinho@outlook.com', '', 'Teste de mensagem', '2013-05-26', '18:35:08', '127.0.0.1', 0),
(2, 'Alvaro', 'alvarinho@outlook.com', '', 'Teste de mensagem', '2013-05-26', '18:35:31', '127.0.0.1', 0),
(3, 'Fulano beltrano', 'fulano@hotmail.com', '', 'teste de envido de contato', '2013-05-26', '18:37:15', '127.0.0.1', 0),
(5, 'Nome pessoa', 'alvarinho@outlook.com', 'sugestÃ£o', 'Eu estou apenas testando o envio de mensagem', '2013-05-26', '18:41:37', '127.0.0.1', 0),
(6, 'Nome Fulano', 'teste@email.com', 'outros', 'teste de envio de mensagem', '2013-05-26', '18:44:22', '127.0.0.1', 0),
(7, 'Alvaro', 'alvarinho@outlook.com', 'duvida', 'teste de mensagem', '2013-05-26', '18:45:30', '127.0.0.1', 0),
(8, 'Francisco Das Chagas', 'daschagas@gmail.com', 'sugestÃ£o', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum sem id nisi venenatis dapibus. Aenean tellus lectus, pellentesque nec egestas vitae, convallis sed risus. Vivamus sit amet eleifend nisl. ', '2013-05-28', '02:00:58', '127.0.0.1', 0),
(9, 'Carol Sousa', 'carol@gmail.com', 'outros', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis sem risus, ut congue erat. Integer commodo, ante id varius malesuada, libero tellus dignissim risus, a convallis odio justo eu eros. Integer ac diam purus. Nulla cursus leo interdum leo varius tincidunt. Mauris ac lectus elit, non malesuada orci. Fusce facilisis, libero et bibendum blandit, eros turpis ornare magna, ut fermentum nulla lectus non nunc. Maecenas porta congue scelerisque. Nullam vitae dui et enim ullamcorper tristique.', '2013-05-28', '02:20:00', '127.0.0.1', 0),
(10, 'Teste', 'email@teste.com', 'sugestÃ£o', 'teste...Digite sua mensagem...', '2013-05-28', '22:21:04', '127.0.0.1', 0),
(11, 'Teste nome', 'alvarinho@outlook.com', 'outros', 'teste', '2013-05-29', '02:19:13', '127.0.0.1', 0),
(12, 'Teste', 'email@teste.com', 'sugestÃ£o', 'texte grande\r\n', '2013-05-30', '14:34:48', '127.0.0.1', 0),
(13, 'nome teste', 'alvarinho@outlook.com', 'sugestÃ£o', 'texto', '2013-05-30', '14:43:17', '127.0.0.1', 0),
(14, 'Alberto Silva', 'alvarinho@outlook.com', 'sugestÃ£o', 'Nossa duvida. ', '2013-06-05', '02:47:18', '127.0.0.1', 0),
(15, 'Francisco Antonio Sousa', 'francisco@hotmail.com', 'sugestÃ£o', 'Teste de mensagem de sugestÃ£o.', '2013-06-10', '01:50:20', '127.0.0.1', 0),
(16, 'teste', 'email@teste.com', 'reclamaÃ§Ã£', 'texto teste', '2013-06-11', '23:33:24', '127.0.0.1', 0);

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
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `rg`, `sexo`, `cpf`, `cidade`, `uf`, `telefone`, `endereco`, `cep`, `bairro`, `numero`, `email`) VALUES
(1, 'Alvaro Bacelar de Sousa', '1234567', 'M', '00859045382', 'Teresina', 'PI', '(86) 8805-2444', 'Quadra 6 Casa 21 Setor C', '64010270', 'mocambinho', '21', 'alvarobacelar@hotmail.com'),
(2, 'Antonio Francisco', '3233212121', 'M', '12345678908', 'Teresina', 'PI', '(86) 8805-2444', 'Quadra 6 Casa 21 Setor C', '64010270', 'mocambinho', '21', 'alexandrebacelar1@gmail.com'),
(3, 'Raimundo Carvalho', '1212323232', 'M', '12345678909', 'Teresina', 'PI', '(86) 8805-2444', 'teste endereÃ§o', '64010270', 'mocambinho', '23', 'teste_email@teste.com'),
(4, 'Antonia Fernanda Sousa', '342343434', 'F', '42104181372', 'Teresina', 'PI', '(86) 9981-6016', 'endereÃ§o', '64010270', 'Cristo rei', '4332', 'teste_email@teste.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `login`, `senha`, `email`, `data`, `hora`, `ip`, `status`, `nivel`) VALUES
(1, 'Administrador do sistema', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'alvarobacelar@outlook.com', '2013-05-01', '23:43:21', '127.0.0.1', 0, 0),
(2, 'Alvaro Bacelar de Sousa', 'alvaro', '19012fd78ddbf2d5144701e73abebddc', 'alvarobacelar@outlook.com', '2013-05-25', '23:13:55', '127.0.0.1', 1, 0),
(3, 'Antonio Francisco', 'antonio', 'e10adc3949ba59abbe56e057f20f883e', 'antonio@email.com', '2013-05-25', '23:26:34', '127.0.0.1', 1, 2),
(4, 'Teste de usuario', 'usuario', '202cb962ac59075b964b07152d234b70', 'teste_email@teste.com', '2013-05-26', '00:21:30', '127.0.0.1', 0, 1),
(5, 'teste', 'teste', '202cb962ac59075b964b07152d234b70', 'teste_email@teste.com', '2013-05-27', '21:57:16', '127.0.0.1', 0, 0),
(6, 'Alvaro Bacelar de Sousa', 'amin', '202cb962ac59075b964b07152d234b70', 'alvarinho_bacelar@hotmail.com', '2013-05-27', '22:24:07', '127.0.0.1', 0, 0),
(7, 'Usuario Teste', 'usuario', '202cb962ac59075b964b07152d234b70', 'usuario@hotmail.com', '2013-05-28', '02:36:28', '127.0.0.1', 1, 1),
(8, 'Usuario Supervisor', 'supervis', '202cb962ac59075b964b07152d234b70', 'supervisor@email.com', '2013-05-28', '02:36:58', '127.0.0.1', 1, 2),
(9, 'usuario', 'usuario', '202cb962ac59075b964b07152d234b70', 'usuario@hotmail.com', '2013-06-06', '02:11:49', '127.0.0.1', 1, 1),
(10, 'novo', 'novo', '42323e3211ed4478b2b8ba87d4185a03', 'alvarinho_bacelar@hotmail.com', '2013-06-11', '22:15:00', '127.0.0.1', 0, 2),
(11, 'Alvaro Bacelar de Sousa', 'alva', '202cb962ac59075b964b07152d234b70', 'alvarinho_bacelar@hotmail.com', '2013-06-11', '23:27:25', '127.0.0.1', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visita`
--

CREATE TABLE IF NOT EXISTS `visita` (
  `id_visita` int(11) NOT NULL AUTO_INCREMENT,
  `visitante_data` date DEFAULT NULL,
  `visitante_hora` time DEFAULT NULL,
  `visitante_quem_vis` varchar(50) DEFAULT NULL,
  `visitante_obs` text,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_visita`,`id_pessoa`),
  KEY `fk_visita_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `visita`
--

INSERT INTO `visita` (`id_visita`, `visitante_data`, `visitante_hora`, `visitante_quem_vis`, `visitante_obs`, `id_pessoa`) VALUES
(22, '2013-05-26', '12:00:00', 'Antonio Bacela de sousa', 'mensagem', 1),
(23, '2013-05-01', '13:45:00', 'Fulano', 'teste', 1),
(27, '2013-06-07', '00:04:27', 'Maj Dimas', 'Teste de observaÃ§Ã£o', 1),
(28, '2013-06-07', '00:07:51', 'Sgt Bacelar', 'Teste de mensagem', 1),
(29, '2013-06-07', '00:15:06', 'Sgt Policarpo', 'Veio visitar', 2),
(30, '2013-06-09', '17:09:18', 'cap anselmo', 'Nada a declarar', 1),
(31, '2013-06-13', '00:24:53', 'Maj Dimas', 'Veio visitar', 3),
(32, '2013-06-13', '00:27:15', 'Sgt Antonio', 'Veio Visitar', 4),
(33, '2013-06-13', '00:28:20', 'Sgt Antonio', '', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitado`
--

CREATE TABLE IF NOT EXISTS `visitado` (
  `id_visitado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visitado_nome` varchar(100) NOT NULL,
  `visitado_rg` varchar(12) DEFAULT NULL,
  `visitado_telefone` varchar(15) DEFAULT NULL,
  `visitado_funcao` varchar(45) DEFAULT NULL,
  `visitado_secao` varchar(45) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_visitado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `visitado`
--

INSERT INTO `visitado` (`id_visitado`, `visitado_nome`, `visitado_rg`, `visitado_telefone`, `visitado_funcao`, `visitado_secao`, `status`) VALUES
(1, 'Sgt Bacelar', '2323232323', '(86) 8805-24', 'chefe s1', '1 secao', 1),
(2, 'Sgt Antonio', '3442323232', '(86) 9981-6016', 'chefe s3', '3 secao', 1),
(5, 'cap anselmo', '45323231', '(86) 3234-33423', 'chefe', 'secao', 1),
(6, 'cap anselmo', '45323231', '(86) 3234-33423', 'chefe', 'secao', 1),
(7, 'Maj Dimas', '32332323232', '(86) 2232-3343', 'administracao', '4 secao', 1),
(8, 'alvaro', '1323211', '(23) 2323-2323', 'chefe', 'teste', 1),
(9, 'teste', '12312121', '(32) 3322-3232', 'teste', 'teste', 1),
(10, 'Teste OUTRO', '1212121212', '(34) 4343-4343', 'secao', 'secao', 1),
(11, 'Teste', '1212121212', '(13) 2323-2323', 'fucnao', 'teste', 1),
(12, 'Teste', '1212121212', '(13) 2323-2323', 'fucnao', 'teste', 1),
(13, 'Sgt Policarpo', '23434343443', '(24) 3434-4343', 'chefe secao de informatica', 'secao de informatica', 1);

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
