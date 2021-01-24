<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link href="../styles/academia_salao.css" rel="stylesheet">
    <link href="../styles/tipografico.css" rel="stylesheet">
    <title> Visão Geral</title>
</head>
<body>
    <div id="top">
        <p  style="text-decoration: none; float: left;  padding-left: 20px;
        padding-top: 12px;">Logo</p>
        <a style="text-decoration: none; float: right;  padding-right: 20px;
            padding-top: 12px;" href="../genereal.php">Voltar</a></p>
    </div>
    <div id="container">
        <div id="center">
            <form action=' ' method="post" class="meio">
                <label>
                    Pesquisar  <input name="date" type="date">
                    <button class="button" type="submit">Enviar</button>
                </label>
            </form>
            <?php
                $idd = $_SESSION['id'];
                $link =  mysqli_connect('localhost','root','','sanpetersburgo');
                $date = isset($_POST["date"])?$_POST["date"]:[0000-00-00][0];
                $select = "select * from tb_academia WHERE dt_entrada='".$date."' and id_morador =$idd";
                $query = mysqli_query($link,$select);

                while($acumula = mysqli_fetch_array($query)) {
                    $id = $acumula['id_academia'];
                    $dt_entrada = $acumula['dt_entrada'];
                    $hora_entrada = $acumula['tm_hora_entrada'];
                    $dt_saida = $acumula['dt_saida'];
                    $hora_saida = $acumula['tm_hora_saida'];

            }

                    ?>
            <?php echo "
    <form method='post' action='../../php/academia/updateSalao.php'>
           <p class='text'>Entrada</p>
                <input value='".$id."' type='hidden' name='id_salao' >
                <input value='".$idd."' type='hidden' name='id'>
                <label for='dataIn'>Data</label>
                <input name='data_entrada' value='".$dt_entrada."' id='dataIn' type='date'>
                <br>
                <label for='timeIn'>Horario</label>
                <input name='hora_entrada' value='".$hora_entrada."' min='06:00' max='23:00' id='timeIn' type='time' required>

                <p class='text'>Saida</p>
                <label for='dateOut'>Data</label>
                <input name='data_saida' value='".$dt_saida."' id='dateOut' type='date' required>
                <br>
                <label for='timeOut'>Horario</label>
                <input name='hora_saida' value='".$hora_saida."' id='timeOut' type='time' required>
            <br> 
            <button class='button' type='submit'> Marcar Horario</button>
            </form>
            <form action='../../php/academia/deletesalao.php' method='post'>
                <input value='".$id."' type='hidden' name='id_salao'>
                <button class='button proximo' type='submit'>Deletar Horario</button>
            </form>
            "?>
        </div>   
    </div>
</body>
</html>