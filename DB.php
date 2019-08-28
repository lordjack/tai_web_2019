<?php
class DB
{
    private $DB_NOME = "db_tai";
    private $DB_USUARIO = "root";
    private $DB_SENHA = "123456";
    private $DB_CHARSET = "utf8";

    public function connection()
    {
        $str_conn = "mysql:host=localhost;dbname=" . $this->DB_NOME;

        return new PDO(
            $str_conn,
            $this->DB_USUARIO,
            $this->DB_SENHA,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->DB_CHARSET)
        );
    }

    public function select()
    {
        $conn = $this->connection();
        $stmt = $conn->prepare("SELECT * FROM tb_alunos LIMIT 3");
        $stmt->execute();

        return $stmt;
    }

    public function insert($dados)
    {
        $sql = "INSERT INTO tb_alunos(nome, curso, turma) VALUES(";

        $flag = 0;
        $arrayValue = [];
        foreach ($dados as $valor) {
            if ($flag == 0) {
                $sql .= "?";
                $flag = 1;
            } else {
                $sql .= ", ?";
            }
            $arrayValue[] = $valor;
        }
        $sql .= ");";

        $conn = $this->connection();
        $stmt = $conn->prepare($sql);

        $stmt->execute($arrayValue);

        return $stmt;
    }
    function update($dados)
    {
        $id = $dados['id'];
        $sql = "UPDATE tb_alunos SET ";
        $flag = 0;
        $arrayValue = [];

        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= "$campo='$valor'";
                $flag = 1;
            } else {
                $sql = ", $campo='$valor'";
            }
            $arrayValue[] = $valor;
        }

        $sql .= "WHERE id = $id;";

        $conn = $this->connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($arrayValue);

        return $stmt;
    }

    function delete($id)
    {
        $conn = $this->connection();
        $stmt = $conn->prepare("DELETE FROM tb_alunos WHERE id = $id");
        $stmt->execute();
        return $stmt;
    }

    function selectFind($id)
    {
        $sql = "SELECT * FROM tb_alunos WHERE id = $id;";
        $conn = $this->connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchObject();
    }
}
/*
$dados = array("nome" => "MARCOS",
    "curso" => "INFORMÁTICA - EMI",
    "turma" => "INFO14");
*/
$obj = new DB();
/*
//$aluno = $obj->insert($dados);
//echo "INSERIDO COM SUCESSO!";
$dados_aluno = array(
    "id" => 1,
    "nome" => "MARIA CHIQUINHA",
    "curso" => "INFORMÁTICA - EMI",
    "turma" => "INFO6");
    
$aluno = $obj->update($dados);
echo "UPDATE COM SUCESSO!";
//$obj->delete(2);
//0echo "DELETADO COM SUCESSO!";
*/
$select = $obj->select();

while ($objAluno = $select->fetchObject()) {
    echo $objAluno->id . "<br>";
    echo $objAluno->nome . "<br>";
    echo $objAluno->curso . "<br>";
    echo $objAluno->turma . "<br>";
}

$selectAluno = $obj->selectFind(3);

var_dump($selectAluno);
