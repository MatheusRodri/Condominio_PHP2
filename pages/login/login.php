<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/mystylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link href="./styles/responsiveLogin.css" rel="stylesheet">
    <link href="./styles/tipografico.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <header>
        <div id="topo">
            <p id="logo">Logo</p>
            <a id="back" href="../../index.php">Back</a>
        </div>
    </header>
    <div style="background-color: #90822f;" class="container">
        <form method="post" id="login" action="./php/login.php" >
            <div id="email">
                <p style="font-size: 35px;">Email</p>
                <input id="user" name="email" type="name" placeholder="Email"/>
            </div>
            <div id="password">
                <p style="font-size: 35px;"> Senha</p>
                <input id="senha" name='senha' type="password" placeholder="senha"/>
            </div>
            <input id="join" value="ENVIAR" type="submit">
        </form>
    </div>
    <footer>
        <P>teste</P>
    </footer>

</body>
</html>