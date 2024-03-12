<!-- Ещё более сложные связи, 12 задача -->


<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = '333';

$link = mysqli_connect($host, $user, $password, $db_name);
// 1. Запрос для получения интересов пользователя:
$query1 = "SELECT u.username, i.interest_name
            FROM users u
            JOIN user_interests ui ON u.user_id = ui.user_id
            JOIN interests i ON ui.interest_id = i.interest_id
            WHERE u.username = 'Alice';";

// 2. Запрос для получения всех пользователей с определенным интересом:
$query2 = "SELECT u.username, i.interest_name
            FROM users u
            JOIN user_interests ui ON u.user_id = ui.user_id
            JOIN interests i ON ui.interest_id = i.interest_id
            WHERE i.interest_name = 'Игры'";

$arr = [$query1, $query2];

foreach($arr as $query){
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    print_r($data);
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';
}
?>