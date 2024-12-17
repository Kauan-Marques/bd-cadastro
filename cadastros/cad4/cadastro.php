<?php
include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$CPF = $_POST['CPF'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$comandosql = "INSERT INTO User(nome, sobrenome, CPF, telefone, email, senha) VALUES('$nome' , '$sobrenome','$CPF','$telefone' , '$email', '$senha')";

//echo "   $nome ,   $sobrenome , $CPF, $telefone, $email , $senha";
if(mysqli_query($conexao,$comandosql)){
    echo "usuario cadastrado!";
}else{
    echo "ERRO".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>