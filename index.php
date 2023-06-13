<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1> session to log in </h1>      
    <form action="sessao.php" method="post" id="Formulario">
        <label>Nome:</label> 
            <input type="text" name="Nome" id="nome"/> <br>
        <label>Senha:</label> 
            <input type="text" name="Senha" id="senha"/>
        <button type="submit"> Enviar seus dados </button>
    </form>
</body>
</html>