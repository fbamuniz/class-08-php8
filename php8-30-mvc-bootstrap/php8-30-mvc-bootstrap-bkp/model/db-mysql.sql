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
DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `Aluno_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Aluno_Nome` varchar(250) DEFAULT NULL,
  `Aluno_Cidade` varchar(250) DEFAULT NULL,
  `Aluno_Curso` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Aluno_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_crud_php_t1.alunos: ~4 rows (aproximadamente)
DELETE FROM `alunos`;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`Aluno_Codigo`, `Aluno_Nome`, `Aluno_Cidade`, `Aluno_Curso`) VALUES
	(1, 'João da Silva', 'Registro', 'TDS'),
	(2, 'Maria Pereira', 'Sete Barras', 'TADM'),
	(4, 'Fernanda Pontes', 'Miracatu', 'TADM'),
	(5, 'Luiza Silva', 'Cajati', 'TDS');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
