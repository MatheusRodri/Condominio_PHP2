<?php
$link =  mysqli_connect('localhost','root','','sanpetersburgo');
$id = $_POST['id_morador'];
$sql = "DELETE FROM tb_morador WHERE id_morador = $id";

$query = mysqli_query($link,$sql);
if ($query == false) {
    echo "<script>alert('ANALISE OS DADOS NOVAMENTE')</script>";
    header("Location:../../pages/morador/updateacademia.php");die("tudo certo");
} else {
    echo "<script>alert('MORADOR DELETADO COM SUCESSO')</script>";
    header("Location:../../pages/genereal.php");die("tudo certo");
}
?>

