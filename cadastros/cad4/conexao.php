<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbnome = "cad4";

$conexao = mysqli_connect($servidor,$usuario, $senha, $dbnome);

if(!$conexao){
    die("Houve um erro na conexao ".mysqli_connect_error());
}
else{
    echo "conexao bem sucedida!";
};

?>