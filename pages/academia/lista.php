<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/view.css" media="screen">
    <link href="../styles/tipografico.css" rel="stylesheet" media="screen">
    <title>Agendamentos</title>
    <style>
        #table-morador tr:hover td{
            background-color: #feffb7;
        }
        #table-morador tr.selecionado td{
            background-color: #aff7ff;
        }

    </style>
</head>
<body>
    <header id="top">
        <p >Logo</p>
        <a href="../genereal.php">Voltar</a>
    </header>
    <div id="container">
      <table  style="border: 5px solid black; text-align: center;font-size: 20px" id='table-morador'>;
            <thead>
            <tr>
                <th class='centerTextTable'>Nome</th>
                <th class='centerTextTable'>Data de entrada</th>
                <th class='centerTextTable'>Horario de entrada</th>
                <th class='centerTextTable'>Data de saida</th>
                <th class='centerTextTable'>Horario de saida</th>
            </tr>
            </thead>
            <tbody>
          <?php
          $link =  mysqli_connect('localhost','root','','sanpetersburgo');

          $sql = "select * from vm_consultar_academia where nm_morador='".$_SESSION['nm_morador']."'";
          $select = mysqli_query($link,$sql);


        while($acumula=mysqli_fetch_array($select)){
             echo "<tr>".
                         "<td>".$acumula['nm_morador']."</td>".
                         "<td>".date_format(new datetime($acumula['dt_entrada']),'d-m-Y')."</td>".
                         "<td>".$acumula['tm_hora_entrada']."</td>".
                         "<td>".date_format(new datetime($acumula['dt_saida']),'d-m-Y')."</td>".
                         "<td>".$acumula['tm_hora_saida']."</td>".
                    "</tr>"
             ;
          }
          ?>
            </tbody>
        </table>
    </div>
</body>
</html>