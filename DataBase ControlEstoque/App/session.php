<?php
//session_start();

$username = $_POST['username'];
echo $password = md5($_POST['password']);

/*if ($username == NULL || $password == NULL) {
    echo "<script>alert('Você deve digitar seu nome e sua senha');</script>";
    echo "<script> window.location.href='../login.php'</script>";
    exit;
}
else {
    require_once "Models/connect.php";

    $connect->login($username, $password);
}*/

?>