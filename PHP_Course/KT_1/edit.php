<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

function input($name)
{ {
        if (isset($_POST[$name])) {
            $value = $_POST[$name];
        } else {
            $value = "";
        }
    }
    return '<input name="' . $name . '" value="' . $value . '">';
}

if (!empty($_POST)) {
    $id = $_GET['id'];
    $name = $_POST['name_edit'];
    $age = $_POST['age_edit'];
    $salary = $_POST['salary_edit'];
    $query = "UPDATE `workers` SET name = '$name', age = '$age', salary = '$salary' WHERE `workers`.`id` = '$id'";
    mysqli_query($link, $query) or die(mysqli_error($link));
}

?>

<form action="" method="POST">
        <?php echo input('name_edit'); ?>
        <?php echo input('age_edit'); ?>
        <?php echo input('salary_edit'); ?>
        <input type="submit" value="Принять изменения">
    </form>

<a href="index.php">Вернуться назад</a>