<?php
include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$confirmarsenha = md5($_POST['confirmarsenha']);

$comandosql = "INSERT INTO User(nome, sobrenome, email, senha, confirmarsenha) VALUES('$nome' , '$sobrenome' , '$email', '$senha','$confirmarsenha')";

//echo "   $nome ,   $sobrenome ,   $email ,   $senha, $confirmarsenha";
if(mysqli_query($conexao,$comandosql)){
    echo "usuario cadastrado!";
}else{
    echo "ERRO".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>