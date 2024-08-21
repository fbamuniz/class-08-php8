<?php include("blades/top.php"); ?>
<?php include("../controller/funcao-read-aluno-tab.php"); ?>

<div class="container mt-5">
<a href="v_cadastro.php" class="btn btn-primary">Cadastrar</a>
</div>
<div class="container mt-2 bg-white p-3 rounded">
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th class="text-center">Código</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Cidade</th>
            <th class="text-center">Curso</th>
            <th colspan="2" class="text-center">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php funcaoTabela(); ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="7" class="text-center">Rodapé da Tabela</td>
        </tr>
    </tfoot>
</table>
</div>

<?php include("blades/footer.php"); ?>