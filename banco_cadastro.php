<?php

include 'conexao_banco.php';


// Inserir dados no banco

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$nome = mysqli_real_escape_string($connection, $nome);
$email = mysqli_real_escape_string($connection, $email);
$senha = mysqli_real_escape_string($connection, $senha);

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result = $connection->query($sql);


if ($result->num_rows > 0){

    echo "<script style='background-color:black;'> alert ( 'Email já cadastrado' ) </script>";
    
    echo "<meta http-equiv='refresh' content='0; url=cadastro.php'>";
} else {
    $query = "INSERT INTO cadastro (nome,email,senha) VALUES ('$nome','$email','$senha')";
    $sql= mysqli_query($connection, $query) or die ('erro 2');

    header('Location: login.php');
    exit;

}

?>
