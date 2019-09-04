<?php

include_once '../modelo/modeloAluno.php';

class controleAluno
{
    public static function index()
    {
        echo "<script>window.location='../view/viewAlunoCadastrar.php'</script>";
    }

    public static function remover($id)
    {
        $aluno = modeloAluno::findAluno($id);

        if (empty($aluno)) {
            echo "<script>alert('O ID informado para o aluno não existe!')</script>";
            echo "<script>window.location='viewAluno.php'</script>";
        } else {
            modeloAluno::delAluno($id);
            echo "<script>alert('Registro removido com sucesso!')</script>";
            echo "<script>window.location='viewAluno.php'</script>";
        }
    }

    public static function confirmar()
    {
        if (
            $_POST['nome'] != "" && $_POST['curso'] != ""
            && $_POST['turma'] != ""
           ) {

            // Inserir
            if (empty($_POST['id'])) {
                
                $dados_aluno = array(
                    "nome" => $_POST['nome'],
                    "curso" => $_POST['curso'],
                    "turma" => $_POST['turma']
                );
                modeloAluno::addAluno($dados_aluno);
                echo "<script>alert('Registro inserido com sucesso!')</script>";

            } else { // Alterar
                $dados_aluno = array(
                    "id" => $_POST['id'],
                    "nome" => $_POST['nome'],
                    "curso" => $_POST['curso'],
                    "turma" => $_POST['turma']
                );
    
                modeloAluno::upAluno($dados_aluno);
                echo "<script>alert('Registro alterado com sucesso!')</script>";
            }

            echo "<script>window.location='../view/viewAluno.php'</script>";
        }
    }

    public static function loadTabelaAlunos()
    {
        $alunos = modeloAluno::getAlunos();

        while ($objAluno = $alunos->fetchObject()) {

            echo "<tr>";
            echo "<td>" . $objAluno->id . "</td>";
            echo "<td>" . $objAluno->nome . "</td>";
            echo "<td>" . $objAluno->curso . "</td>";
            echo "<td>" . $objAluno->turma . "</td>";

            echo "<td>";
            echo "<a href='viewAlunoAlterar.php?id=$objAluno->id' class='btn btn-info glyphicon glyphicon-pencil' role='button'></a>";
            echo "<a href='viewAlunoRemover.php?id=$objAluno->id' class='btn btn-danger glyphicon glyphicon-remove' role='button'></a>";
            echo "</td>";
            echo "</tr>";
        }
    }
}
