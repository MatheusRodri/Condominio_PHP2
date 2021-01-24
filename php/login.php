<?php
    session_start();

    $link =  mysqli_connect('localhost','root','','sanpetersburgo');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $select = mysqli_query($link,"select * from tb_morador WHERE email='".$email."' AND senha='".$senha."'");
    if (mysqli_num_rows($select)<=0){
      echo '<script type="text/javascript">
            alert("Email ou senha incorretos");
            window.location.href="./login/login";
            </script>';
     die();
    }else{
        $_SESSION['email'] = $_POST['email'];
    while($acumula=mysqli_fetch_array($select)){
        $_SESSION['id'] = $acumula['id_morador'];
        $_SESSION['nm_morador'] = $acumula['nm_morador'];
        $_SESSION['morador'] = $acumula['morador'];
        $_SESSION['sindico'] = $acumula['sindico'];
        $_SESSION['porteiro'] = $acumula['porteiro'];
    }

    echo '<script> window.location.href="../genereal"</script>';
        }
?>
