<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Morador</title>
    <link rel="stylesheet" href="../styles/tipografico.css" media="screen">
    <link rel="stylesheet" href="../styles/morador.css" media="screen">
    <script rel="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <header>
        <p>Logo</p>
        <a href="../genereal.php">Voltar</a>
    </header>
        <div id="container">
            <div class="center">
              <form action=' ' method="post" class="meio">
                  <label>
                      Pesquisar  <input name="nome" type="text">
                      <button type="submit">Enviar</button>
                  </label>
              </form>
                <?php
                $link =  mysqli_connect('localhost','root','','sanpetersburgo');
                $nm_morador = isset($_POST["nome"][0])?$_POST["nome"]:[" "][0];
                    if($nm_morador == " "){
                        echo "<script>alert('DIGITE UM NOME NO CAMPO DE PESQUISA')</script>";
                            $id = 0;
                            $nome = " ";
                            $apto = " ";
                            $bloco =" ";
                            $email =" ";
                            $senha =" ";
                            $morador = false;
                            $sindico = false;
                            $porteiro = false;

                            if($sindico == false && $porteiro == false && $morador == false)
                        {
                            $checked_sindico = " ";
                            $checked_morador = " ";
                            $checked_porteiro = " ";
                        }
                    }else{
                        $select = "select * from tb_morador WHERE nm_morador='".$nm_morador."'";
                        $query = mysqli_query($link,$select);
                        if ( mysqli_num_rows($query) == 0){
                            echo "<script>alert('MORADOR NÃO ENCONTRADO')</script>";
                            $id = 0;
                            $nome = " ";
                            $apto = " ";
                            $bloco =" ";
                            $email =" ";
                            $senha =" ";
                            $morador = false;
                            $sindico = false;
                            $porteiro = false;

                            if($sindico == false && $porteiro == false && $morador == false)
                            {
                                $checked_sindico = " ";
                                $checked_morador = " ";
                                $checked_porteiro = " ";
                            }
                        }else{
                            while($acumula = mysqli_fetch_array($query)) {
                                $id = $acumula['id_morador'];
                                $nome = $acumula['nm_morador'];
                                $apto = $acumula['apto_morador'];
                                $bloco =$acumula['bl_morador'];
                                $email =$acumula['email'];
                                $senha =$acumula['senha'];
                                $morador =$acumula['morador'];
                                $sindico =$acumula['sindico'];
                                $porteiro =$acumula['porteiro'];

                                if($sindico == 1)
                                {
                                    $checked_sindico = 'checked="checked"';
                                    $checked_morador = 'checked="checked"';
                                    $checked_porteiro = " ";
                                }elseif ($morador == 1){
                                    $checked_morador = 'checked="checked"';
                                    $checked_sindico = " ";
                                    $checked_porteiro = " ";
                                }else{
                                    $checked_porteiro = 'checked="checked"';
                                    $checked_sindico = " ";
                                    $checked_morador = " ";
                                }


                            }
                        }

                    }

                ?>
                <?php
                echo "<form action='../../php/morador/updatemorador.php' method='post'>
                   <input type='hidden' name='id_morador' value='".$id."'>
                <div  class='row, padding'>
                <div class='column-3 column label'>
                    <label for='txtNome'>Nome do Morador</label>
                </div>
                <div class='column-9 column input'>
                    <input type='text' id='txtNome' name='nome' value='".$nome."'/>
                </div>
            </div>
            <div class='row'>
                <div class='column-3 column label'>
                    <label for='txtApto'>Apto do Morador</label>
                </div>
                <div class='column-9 column input'>
                    <input type='text' name='apto' id='txtApto' value='".$apto."' />
                </div>
            </div>
            <div class='row'>
                <div class='column-3 column label'>
                    <label for='txtBloco'>Bloco</label>
                </div>
                <div class='column-9 column input'>
                    <input type='text' name='bloco' id='txtBloco' value='".$bloco."' />
                </div>
            </div>
            <div class='row'>
                <div class='column-3 column label'>
                    <label for='txtEmail'>Email</label>
                </div>
                <div class='column-9 column input'>
                    <input type='text'  name='email' id='txtEmail' value='".$email."' />
                </div>
            </div>
            <div class='row'>
                <div class='column-3 column label'>
                    <label for='txtSenha'>Senha</label>
                </div>
                <div class='column-9 column input'>
                    <input type='text' name='senha' id='txtSenha' value='".$senha."'/>
                </div>
            </div>

            <div class='row'>
                <div class='column-3 column label'>
                    <label for='txtSenha'>Permissão</label>
                </div>

                <div class='column-9 column'>
                    
                    <input class='checkbox-input' type='checkbox' id='morador' name='morador'  $checked_morador>
                    <label class='checkbox' for='morador'>Morador</label>
                    <input class='checkbox-input' type='checkbox' id='sindico' name='sindico' $checked_sindico>
                    <label class='checkbox' for='sindico'>Sindico</label>
                    <input class='checkbox-input' type='checkbox' id='porteiro' name='porteiro' $checked_porteiro>
                    <label class='checkbox' for='porteiro'>Porteiro</label>
                </div>
            </div>
            <div class='centerbutton'>
                <button STYLE=' width: 300px;' class='button' type='submit'>ALTERAR O MORADOR</button>
            </div>
            </form>";
                ?>
                <?php echo "
                <div class='centerbutton'>
                    <form method='post' action='../../php/morador/deleteMorador.php'>
                        <input type='hidden' name='id_morador' value='".$id."'>
                        <button  width: 300px;' class='button' type='submit'>DELETAR O MORADOR</button>
                    </form>
                </div>
                ";?>
            </div>

        </div>
    <footer>

    </footer>
</body>
</html>