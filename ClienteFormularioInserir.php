<?php
#formulario de cadastro
?>

<h1>Cadastro</h1>
<form name="cadastro" method="post" action="ClienteSalvar.php">  
    Nome: <input type="text" name="nome" required maxlenght="80"><br>
    E-mail: <input type="email" name="email" required required maxlenght="80"><br>
    Senha: <input type="password" name="senha" required required maxlenght="32"><br>
    <select name="tipo">
        <option value="fisica">Física</option>
        <option value="juridica">Júridica</option>
    </select> <br>
    <button type="submit">Cadastrar cliente</button>

    


</form>