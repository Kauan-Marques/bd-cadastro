<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$confirmarsenha = md5($_POST['confirmarsenha']);
$serieescolar = $_POST['serieescolar'];

$comandosql = "INSERT INTO User(nome, email, senha, confirmarsenha, serieescolar) VALUES('$nome' , '$email', '$senha', '$confirmarsenha', '$serieescolar')";

//echo "   $nome ,   $sobrenome ,   $email ,   $senha, $confirmarsenha, $serieescolar";
if(mysqli_query($conexao,$comandosql)){
    echo "usuario cadastrado!";
}else{
    echo "ERRO".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>