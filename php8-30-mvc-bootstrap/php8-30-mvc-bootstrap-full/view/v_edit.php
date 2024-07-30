<?php 
include("blades/top.php"); 
include("../controller/funcao-edit-aluno.php");
?>

<div class="container mt-5">
<a href="index.php" class="btn btn-primary">Voltar</a>
</div>
<div class="container mt-2 bg-white p-3 rounded">
<h1>Editar informações</h1>
<form action="../controller/funcao-update-aluno.php" method="post">
    <input type="hidden" name="campo_codigo" value="<?php echo $exibe[0] ?>">
    <label class="form-label pt-3">Nome</label>
    <input type="text" class="form-control" name="campo_nome" value="<?php echo $exibe[1] ?>">
    <label class="form-label pt-3">Cidade</label>
    <input type="text" class="form-control" name="campo_cidade" value="<?php echo $exibe[2] ?>">
    <label class="form-label pt-3">Curso</label>
    <input type="text" class="form-control" name="campo_curso" value="<?php echo $exibe[3] ?>">
<div class="container mt-5 d-flex justify-content-end">
    <input type="submit" value="Atualizar" class="btn btn-primary">
</div>    
</form>
</div>

<?php include("blades/footer.php"); ?>