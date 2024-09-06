<?php include("blades/top.php"); ?>
<?php include("../controller/funcao-read-aluno-tab.php"); ?>

<div class="container mt-5 bg-white p-5 rounded">
    <form action="../controller/funcao-login.php" method="post">
        <label class="form-label pt-5">Usuário</label>
        <input class="form-control" type="text" name="campo_email">
        <label class="form-label pt-3">Senha</label>
        <input class="form-control" type="text" name="campo_senha">
        <div class="container mt-5 d-flex justify-content-end">
            <input type="submit" value="Entrar" class="btn btn-primary">
        </div>
    </form>
</div>

<?php include("blades/footer.php"); ?>