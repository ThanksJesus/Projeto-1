<?php

include 'conexao_banco.php';


// Inserir dados no banco

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem']; 

$query = "INSERT INTO dados (nome,email,telefone,mensagem) VALUES ('$nome','$email','$telefone','$mensagem')";
$sql= mysqli_query($connection, $query) or die ('erro 2');

ob_start();
// seu código
header('Location: main.php');
exit;



/*$query = mysqli_query($connection, "SELECT * FROM dados WHERE email = '$email' AND senha = '$senha'");*/

/*$result = ( $query );

$row = mysqli_num_rows($result);  // verifica o número de linhas encontradas

if($row == 1) { // caso encontrada 1 linha, então o usuário está cadastrado

    $_SESSION['email'] = $email;    // se o usuário está cadastrado, inicia uma sessão com seu nome

    header('location:homepag.html');

} else {
    echo "<script> alert ( 'Erro nas credenciais' ) </script>";
}
*/

?>