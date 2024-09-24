<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
<style> 
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, blue, purple);
    }
    .tela-login{
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 50px;
        border-radius: 15px;
        color: white;
    }
    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }
    .inputSubmit{
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: black;
        font-size: 15px;
    }
    .inputSubmit{
        background-color: deepskyblue;
        cursor: pointer;
    }
    .return-link {
            background-color: red;
            background-size: cover;
            padding: 5px;
            text-decoration: none;
            color: white;
            border-radius: 15px;
    }
</style>

</head>
<body>
    <a href="home.php" class="return-link">Voltar</a>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <br/><br/>
            <input type="password" name="senha" placeholder="Senha">
            <br/><br/>
            <input class="inputSubmit" type="submit" name="submit" valeu="Enviar">
        </form>
    </div>
</body>
</html>