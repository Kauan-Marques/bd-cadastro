<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$confirmarsenha= md5($_POST['confirmarsenha']);
$datanascimento= $_POST['datanascimento'];

$comandosql = "INSERT INTO User(nome, email, senha, confirmarsenha, datanascimento) VALUES('$nome' , '$email', '$senha','$confirmarsenha','$datanascimento')";

//echo "   $nome ,  $email ,   $senha";
if(mysqli_query($conexao,$comandosql)){
    echo "usuario cadastrado!";
}else{
    echo "ERRO".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>