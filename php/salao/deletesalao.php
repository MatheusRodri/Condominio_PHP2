<?php
$link =  mysqli_connect('localhost','root','','sanpetersburgo');
$id = $_POST['id_academia'];
$sql = "DELETE FROM tb_salao WHERE id_academia = $id";

$query = mysqli_query($link,$sql);
if ($query == false) {
    echo "<script>alert('ANALISE OS DADOS NOVAMENTE')</script>";
    header("Location:../../pages/morador/updateacademia.php");die("tudo certo");
} else {
    echo "<script>alert('MORADOR DELETADO COM SUCESSO')</script>";
    header("Location:../../pages/genereal.php");die("tudo certo");
}
?>

