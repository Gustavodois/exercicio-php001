<?php
#formulario de alterar
$id = $_GET['idalterar'];
$nome = "";
$email = "";

include 'conexao.php';
$sql= "select * from login where Id = $id";
$resultado = mysqli_query($conexao,$sql);

while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $email = $linha['email'];
}
?>
 
<form method="post" action="ClienteAlterar.php">
    <input type="hidden" name="id" value="<?=$id ?>">
    <br>
    Nome <input type="text" name="nome" value="<?=$nome ?>"><br>
    E-mail <input type="text" name="email" value="<?=$email ?>"><br>
    <button type="submit">Salvar Alterações</button>
</form>
 