<?php

include 'conexao_banco.php';


// Inserir dados no banco
$id = $_POST['id'];
$email = $_POST['email']; 
$senha = $_POST['senha'];

$query = mysqli_query($connection, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'");

$result = ( $query );

$row = mysqli_num_rows($result);  // verifica o número de linhas encontradas

if($row == 1) { // caso encontrada 1 linha, então o usuário está cadastrado

    $_SESSION['email'] = $email;    // se o usuário está cadastrado, inicia uma sessão com seu nome
    header('location:main.php');

} else {
    echo "<script> alert ( 'Erro nas credenciais' ) </script>";
    
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}

?>

