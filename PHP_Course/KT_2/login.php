<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'kt2';

$link = mysqli_connect($host, $user, $password, $db_name);

if(!empty($_POST['password']) and !empty($_POST['login'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE login='$login' AND password='$password'";
    $result = mysqli_query($link, $query);

    $user = mysqli_fetch_assoc($result);

    if(!empty($user)){
        $_SESSION['auth'] = true;
        header('Location: index.php');

    }else{
        echo 'нет входа';
    }
}

?>

<form action="" method="POST">
    <input type="text" name='login'>
    <input type="password" name='password'>
    <input type="submit" value='Отправить'>
</form>
