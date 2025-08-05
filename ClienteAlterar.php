<?php
    #ClienteAlterar.php
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    include "conexao.php";
    $sql = "UPDATE `login` SET `nome` = '$nome', `email` = '$email' WHERE `login`.`Id` = $id";
    $resultado = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    header('location:ClienteListar.php')
?>