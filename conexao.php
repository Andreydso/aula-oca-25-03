<?php 
//Dados para conexão do banco
$servidor = "localhost";
$user = "root";
$senha = "root";
$banco = "bd_sistema";

//conectando no banco de dados utilizando a função mysqli
$conexao = new mysqli($servidor, $user, $senha, $banco);

//dados para seleção dos alunos

$select = "select * from aluno";

//executar o comando select dentro do banco utilizando a função mysqli_query

$query = mysqli_query($conexao, $select);



while ($array = mysqli_fetch_array($query)) {
    echo $array['rm_aluno'];
    echo "<br>";
    echo $array['nm_aluno'];
    echo "<br>";
    echo $array['email'];
    echo "<br>";
    echo $array['celular']; 
}
?>