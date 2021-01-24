<?php
    //require '../conexao.php';
    $link =  mysqli_connect('localhost','root','','sanpetersburgo');

    $nome = $_POST["nome"];
    $apto = $_POST["apto"];
    $bloco = $_POST["bloco"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $morador = isset($_POST['morador']) ? true : 0;
    $sindico = isset($_POST['sindico']) ? true : 0;
    $porteiro = isset($_POST['porteiro']) ? true : 0;
    $sql = "insert into tb_morador (nm_morador,apto_morador,bl_morador,email,senha,morador,sindico,porteiro)
                            values ('".$nome."',$apto,$bloco,'".$email."','".$senha."',$morador,$sindico,$porteiro);";


    //$sql = "insert into tb_morador (nm_morador,apto_morador,bl_morador,email,senha,morador,sindico,porteiro) values ('nome',203,2,'teste','teste',true,true,true);";

    $insert = mysqli_query($link,$sql);

    if($insert == false){
        echo "<script>alert('Ocorreu um erro ao salvar o morador')
                document.location='../../pages/morador/addmorador.html'</script>";
    }else{
        echo "<script>alert('Morador salvo com sucesso')
                document.location='../../pages/morador/addmorador.html'</script>";
    }
?>

