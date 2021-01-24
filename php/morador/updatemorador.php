<?php
    $link =  mysqli_connect('localhost','root','','sanpetersburgo');
$id = $_POST["id_morador"];
$nome = isset($_POST['nome'])?$_POST['nome']:[" "][0];
$apto = isset($_POST["apto"]) ? $_POST["apto"] : [" "][0];
$bloco = isset($_POST["bloco"]) ? $_POST["bloco"] : [" "][0];
$email = isset($_POST["email"]) ? $_POST["email"] : [" "][0];
$senha = isset($_POST["senha"]) ? $_POST["senha"] : [" "][0];
$morador = $_POST['id_morador'] = ( isset($_POST['id_morador']) ) ? true : 0;
$sindico = $_POST['sindico'] = ( isset($_POST['sindico']) ) ? true : 0;
$porteiro = $_POST['porteiro'] = ( isset($_POST['porteiro']) ) ? true : 0;


$select = "UPDATE tb_morador set nm_morador='".$nome."',apto_morador=$apto,bl_morador=$bloco,email='".$email."',senha='".$senha."',morador=$morador,sindico=$sindico,porteiro=$porteiro where id_morador =$id";
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

