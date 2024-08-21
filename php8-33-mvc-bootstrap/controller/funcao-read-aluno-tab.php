<?php
    function funcaoTabela(){
        include("../model/connect.php");
        $query = mysqli_query($conexao,"SELECT * FROM alunos ORDER BY Aluno_Codigo DESC");
            while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
                    <td>$exibe[0]</td>
                    <td><img src='imgs/$exibe[1]' width='100px'></td>
                    <td>$exibe[2]</td>
                    <td>$exibe[3]</td>
                    <td>$exibe[4]</td>
                    <td class='text-center'><a href='../view/v_edit.php?ida=$exibe[0]' class='btn btn-success'>Editar</a></td>
                    <td class='text-center'><a href='../controller/funcao-delete-aluno.php?ida=$exibe[0]&idf=$exibe[1]' class='btn btn-danger'>Excluir</a></td>
                </tr>";       
            }
    } 
 ?>