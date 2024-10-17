-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.33-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para escola2
DROP DATABASE IF EXISTS `escola2`;
CREATE DATABASE IF NOT EXISTS `escola2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `escola2`;

-- Copiando estrutura para tabela escola2.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `Aluno_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Aluno_Nome` varchar(250) NOT NULL,
  `Aluno_Sexo` varchar(1) NOT NULL,
  `Aluno_Cidade` varchar(250) NOT NULL,
  PRIMARY KEY (`Aluno_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela escola2.aluno: ~0 rows (aproximadamente)
DELETE FROM `aluno`;
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` (`Aluno_Codigo`, `Aluno_Nome`, `Aluno_Sexo`, `Aluno_Cidade`) VALUES
	(1, 'João da Silva', 'M', 'Registro'),
	(2, 'Maria de Souza', 'F', 'Registro'),
	(3, 'Pedro Pereira', 'M', 'Juquiá'),
	(4, 'Amanda Barbosa', 'F', 'Miracatu'),
	(5, 'Ana Paula da Silva', 'F', 'Sete Barras');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
