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


-- Copiando estrutura do banco de dados para projeto_crud_php_t1
DROP DATABASE IF EXISTS `projeto_crud_php_t1`;
CREATE DATABASE IF NOT EXISTS `projeto_crud_php_t1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projeto_crud_php_t1`;

-- Copiando estrutura para tabela projeto_crud_php_t1.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `Aluno_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Aluno_Foto` varchar(250) DEFAULT NULL,
  `Aluno_Nome` varchar(250) DEFAULT NULL,
  `Aluno_Cidade` varchar(250) DEFAULT NULL,
  `Aluno_Curso` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Aluno_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_crud_php_t1.alunos: ~3 rows (aproximadamente)
DELETE FROM `alunos`;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`Aluno_Codigo`, `Aluno_Foto`, `Aluno_Nome`, `Aluno_Cidade`, `Aluno_Curso`) VALUES
	(32, 'foto1.jpg', 'Fred', 'Sete Barras', 'Hotelaria'),
	(33, 'foto2.jpg', 'Julia', 'Cananéia', 'Hotelariax'),
	(37, 'cb66ff73fb84618c31e41410bce0e679.webp', 'Fredx', 'Miracatu', 'Agronomia');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_crud_php_t1.alunos_login
CREATE TABLE IF NOT EXISTS `alunos_login` (
  `Login_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Login_Aluno_Codigo` int(11) DEFAULT NULL,
  `Login_Email` varchar(50) DEFAULT NULL,
  `Login_Senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Login_Codigo`),
  KEY `FK_alunos_login_alunos` (`Login_Aluno_Codigo`),
  CONSTRAINT `FK_alunos_login_alunos` FOREIGN KEY (`Login_Aluno_Codigo`) REFERENCES `alunos` (`Aluno_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_crud_php_t1.alunos_login: ~0 rows (aproximadamente)
DELETE FROM `alunos_login`;
/*!40000 ALTER TABLE `alunos_login` DISABLE KEYS */;
INSERT INTO `alunos_login` (`Login_Codigo`, `Login_Aluno_Codigo`, `Login_Email`, `Login_Senha`) VALUES
	(1, 32, 'fred@email.com', '4b96d5c1ff312eea069ddc760794963d');
/*!40000 ALTER TABLE `alunos_login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
