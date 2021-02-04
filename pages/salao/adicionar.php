<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link href="../styles/academia_salao.css" rel="stylesheet" media="screen">
    <link href="../styles/tipografico.css" rel="stylesheet" media="screen">
    <title> Visão Geral</title>
</head>
<body>
    <div id="top">
        <p  style="text-decoration: none; float: left;  padding-left: 20px;
        padding-top: 12px;">Logo</p>
        <a style="text-decoration: none; float: right;  padding-right: 20px;
            padding-top: 12px;" href="../genereal.php">Voltar</a>
    </div>
    <div id="container">
        <div id="center">
          <?php
          echo "<form action='../../php/salao/addsalao.php' method='post'>
           <p class='text'>Entrada</p>
                <input type='hidden' name='id' value='".$_SESSION['id']."'>
                <label for='dataIn'>Data</label>
                <input name='data_entrada' value='2021-01-01' id='dataIn' type='date'>
                <br>
                <label for='timeIn'>Horario</label>
                <input name='hora_entrada' value='06:00' min='06:00' max='23:00' id='timeIn' type='time'>
                <br>
                <br>
                <br>
                <p class='text'>Saida</p>
                <label for='dateOut'>Data</label>
                <input name='data_saida' value='2021-01-01' id='dateOut' type='date'>
                <br>
                <label for='timeOut'>Horario</label>
                <input name='hora_saida' value='06:00' id='timeOut' type='time'>
            <br> 
            <button class='button' type='submit'> Marcar Horario</button>
            </form>
            ";?>
        </div>   
    </div>
</body>
</html>