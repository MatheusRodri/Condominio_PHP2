<?php
    $link =  mysqli_connect('localhost','root','','sanpetersburgo');
    $id_academia = $_POST['id_academia'];
    $id = $_POST['id'];
    $data_entrada = isset($_POST['data_entrada'])?$_POST['data_entrada']:[" "][0];
    $hora_entrada = $_POST['hora_entrada'];
    $data_saida = $_POST['data_saida'];
    $hora_saida = $_POST['hora_saida'];


$select = "UPDATE tb_academia set id_morador=$id,dt_entrada='".$data_entrada."',tm_hora_entrada='".$hora_entrada."',dt_saida='".$data_saida."',tm_hora_saida='".$hora_saida."' where id_academia =$id_academia";
echo $select;
$query = mysqli_query($link, $select);
//print_r($query);

if ($query == false) {
    echo "<script>alert('ANALISE OS DADOS NOVAMENTE')</script>";
    header("Location:../../pages/morador/updateacademia.php");die("tudo certo");
} else {
    echo "<script>alert('MORADOR ATUALIZADO COM SUCESSO')</script>";
    header("Location:../../pages/genereal.php");die("tudo certo");
}

?>