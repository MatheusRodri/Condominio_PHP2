<?php
    //$link = require '../conexao.php';
    $link =  mysqli_connect('localhost','root','','sanpetersburgo');

    $id = $_POST['id'];
    $data_entrada = $_POST['data_entrada'];
    $hora_entrada = $_POST['hora_entrada'];
    $data_saida = $_POST['data_saida'];
    $hora_saida = $_POST['hora_saida'];

    $sql = "insert into tb_academia (id_morador,dt_entrada,tm_hora_entrada,dt_saida,tm_hora_saida) 
                              values($id,'".$data_entrada."','".$hora_entrada."','".$data_saida."','".$hora_saida."')";
    $insert = mysqli_query($link,$sql);

    $sql2 = "insert into tb_academia (id_morador,dt_entrada,tm_hora_entrada,dt_saida,tm_hora_saida) values($id,'0000-00-00',null,null,null)";
    $insert = mysqli_query($link,$sql2);

    if($insert == false){
        echo "<script>alert('Ocorreu um erro ao salvar o morador')";
    }else{
        echo "<script>alert('Academia agendada com sucesso')
                document.location='../../pages/_academia/agendarAcedemia.php'</script>";
    }
?>

