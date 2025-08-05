<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    #$tipo = $_POST['tipo'];

    $hash = md5($senha);
    echo "Sua senha  sua senha encriptografada é: $hash";

    #if($tipo == 'fisica'){
    #    $sql = "insert into tb_clientes_fisica(nome, email) values ('$nome','$email')";
    #}else{
    #    $sql = "insert into tb_clientes_juridica(nome, email) values ('$nome','$email')";
    #}

    

    $sql = "insert into login(nome, email, senha) values ('$nome', '$email', '$hash')";

    include "conexao.php";

    $resultado = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    header('location:ClienteListar.php')

?>