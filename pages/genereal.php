<?php session_start();
    if($_SESSION['morador'] == 1){
        $display = "display:none";
    }
    if ($_SESSION['sindico']  == 1){
        $display = "display:show";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link href="./styles/tipografico.css" rel="stylesheet">
    <link href="./styles/stylegeral.css" rel="stylesheet">
    <link href="./styles/responsiveMenu.css" rel="stylesheet">
    <title> Visão Geral</title>
</head>
<body>
    <div id="top">
        <?php echo"<p>".$_SESSION['email']."</p>" ?>
        <a style="text-decoration: none; float: right;  padding-right: 20px;
        padding-top: 12px;" href="home">Voltar</a>
    </div>
    <div id="container">
        <div id="center">
            <?php echo "
            <a style='text-decoration: none;font-size: 20px; $display' href='morador/menu'><div class='square' >Morador</div></a>
            <a style='text-decoration: none;font-size: 20px;' href='academia/menu'><div class='square'>Academia</div></a>
            <a style='text-decoration: none;font-size: 20px;' href='salao/menu'><div class='square'>Salão</div></a>
            <a style='text-decoration: none;font-size: 20px; $display'  href='_comunicado/enviar'><div class='square'>Enviar comunicados</div></a>
            ";
            ?>
        </div>   
    </div>
</body>
</html>