<?php
include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf']; 
$cep = $_POST['cep'];

$comandosql = "INSERT INTO User(nome, sobrenome, sexo, cpf, telefone, email, senha, endereco, bairro, uf, cep) VALUES('$nome','$sobrenome','$sexo','$cpf','$telefone','$email','$senha','$endereco','$bairro','$uf','$cep')";

//echo "   $nome ,   $sobrenome ,$sexo, $cpf, $telefone, $email , $senha", $endereco, $bairro, $uf, $cep;
if(mysqli_query($conexao,$comandosql)){
    echo "usuario cadastrado!";
}else{
    echo "ERRO".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>

