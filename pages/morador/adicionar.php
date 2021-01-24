<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Morador</title>
    <link rel="stylesheet" href="../styles/tipografico.css" media="screen">
    <link rel="stylesheet" href="../styles/morador.css" media="screen">
</head>
<body>
    <header>
        <p>Logo</p>
        <a href="../genereal.php">Voltar</a>
    </header>
        <div id="container">
            <div class="center">
                <form action="../../php/morador/addmorador.php" method="post">
                <div class="centerbutton">
                <h1>ADICIONAR MORADOR</h1>
                </div>
                <div  class="row, padding">
                    <div class="column-3 column label">
                        <label for="txtNome">Nome do Morador</label>
                    </div>
                    <div class="column-9 column input">
                        <input name="nome" type="text" id="txtNome" />
                    </div>
                </div>
                <div class="row">
                    <div class="column-3 column label">
                        <label for="txtApto">Apto do Morador</label>
                    </div>
                    <div class="column-9 column input">
                        <input name="apto" type="text" id="txtApto" />
                    </div>
                </div>
                <div class="row">
                    <div class="column-3 column label">
                        <label for="txtBloco">Bloco</label>
                    </div>
                    <div class="column-9 column input">
                        <input name="bloco" type="text" id="txtBloco" />
                    </div>
                </div>
                <div class="row">
                    <div class="column-3 column label">
                        <label  for="txtEmail">Email</label>
                    </div>
                    <div class="column-9 column input">
                        <input name="email" type="text" id="txtEmail" />
                    </div>
                </div>
                <div class="row">
                    <div class="column-3 column label">
                        <label for="txtSenha">Senha</label>
                    </div>
                    <div class="column-9 column input">
                        <input name="senha" type="text" id="txtSenha"/>
                    </div>
                </div>

                <div class="row">
                    <div class="column-3 column label">
                        <label for="txtSenha">Permissão</label>
                    </div>
                    <div class="column-9 column">
                        <input class="checkbox-input" type="checkbox" id="morador" name="morador">
                        <label class="checkbox" for="morador">Morador</label>
                        <input class="checkbox-input" type="checkbox" id="sindico" name="sindico">
                        <label class="checkbox" for="sindico">Sindico</label>
                        <input class="checkbox-input" type="checkbox" id="porteiro" name="porteiro">
                        <label class="checkbox" for="porteiro">Porteiro</label>
                    </div>
                </div>
                <div class="centerbutton">
                 <button class="button" type="submit">SALVAR O MORADOR</button>
                </div>
                </form>
            </div>
        </div>
    <footer>

    </footer>


</body>
</html>