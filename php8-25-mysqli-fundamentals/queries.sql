SELECT * FROM aluno
/* Seleciona apenas algumas colunas */
SELECT aluno.Aluno_Nome, aluno.Aluno_Cidade FROM aluno
/* Seleciona todos os dados e ordena por nome */
SELECT * FROM aluno ORDER BY Aluno_Nome
/* Seleciona todos os dados e ordena por nome de forma decrescente */
SELECT * FROM aluno ORDER By Aluno_Nome DESC
/* Buscar apenas o nome indicado */
SELECT * FROM aluno WHERE Aluno_Nome LIKE "João da Silva"