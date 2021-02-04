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
                <th class='centerTextTable'>Id</th>
                <th class='centerTextTable'>Morador</th>
                <th class='centerTextTable'>Apto</th>
                <th class='centerTextTable'>Bloco</th>
                <th class='centerTextTable'>Email</th>
                <th class='centerTextTable'>Senha</th>
                <th class='centerTextTable'>Morador</th>
                <th class='centerTextTable'>Sindico</th>
                <th class='centerTextTable'>Porteiro</th>
            </tr>
            </thead>
            <tbody>
          <?php
          $link =  mysqli_connect('localhost','root','','sanpetersburgo');

          $select = mysqli_query($link, "SELECT * FROM tb_morador");

          while($acumula=mysqli_fetch_array($select)){
             echo "<tr>".
                         "<td>".$acumula['id_morador']."</td>".
                         "<td>".$acumula['nm_morador']."</td>".
                         "<td>".$acumula['apto_morador']."</td>".
                         "<td>".$acumula['bl_morador']."</td>".
                         "<td>".$acumula['email']."</td>".
                         "<td>".$acumula['senha']."</td>".
                         "<td>".$acumula['morador']."</td>".
                         "<td>".$acumula['sindico']."</td>".
                         "<td>".$acumula['porteiro']."</td>".
                    "</tr>";
          }
          ?>
            </tbody>
        </table>
    </div>
</body>
</html>