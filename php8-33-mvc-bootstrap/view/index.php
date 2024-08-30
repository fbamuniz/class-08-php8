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



    <!-- O Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Título do Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    Confirma a exclusão do registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href='../controller/funcao-delete-aluno.php?ida=$exibe[0]&idf=$exibe[1]' class='btn btn-danger'>Excluir</a>
                </div>
            </div>
        </div>
    </div>

<?php include("blades/footer.php"); ?>