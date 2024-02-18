<?php

include 'conexao_banco.php';


// Inserir dados no banco

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email >= 1){
    echo "<script style='background-color:black;'> alert ( 'Email já cadastrado' ) </script>";
    
    echo "<meta http-equiv='refresh' content='0; url=cadastro.php'>";
} else {
    $query = "INSERT INTO cadastro (nome,email,senha) VALUES ('$nome','$email','$senha')";
    $sql= mysqli_query($connection, $query) or die ('erro 2');

    header('Location: login.php');
    exit;

}

?>