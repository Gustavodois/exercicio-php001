<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de clientes</h1>
    <a href="ClienteFormularioInserir.php">Adicionar novo cliente</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>            
            <th>Ações</th>
        </tr>
    <?php 
        include "conexao.php";
        $sql = "select * from login";
        $resultado = mysqli_query($conexao,$sql);

        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>{$linha['Id']}</td>";
            echo "<td>{$linha['nome']}</td>";
            echo "<td>{$linha['email']}</td>";
            echo "<td>{$linha['senha']}</td>";
            echo "<td>";
            echo "<a href='ClienteExcluir.php?idexcluir={$linha['Id']}'><img src='img/excluir.png'></a>";
            echo "</td>";
            echo "</tr>";
        }

        mysqli_close($conexao);
    ?>
    </table>
</body>
</html>