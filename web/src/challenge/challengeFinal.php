<?php
session_start();
if (!isset($_SESSION['currentLevel']) || $_SESSION['currentLevel'] < 6) {
    die("Hãy qua thử thách " . $_SESSION['currentLevel'] . " trước <a href='challenge" . $_SESSION['currentLevel'] . ".php'>tại đây</a>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Lab - Congragulation</title>
    <link rel="stylesheet" href="./../assets/css/style-chall.css">

</head>

<body>
    <h1>Chúc mừng</h1>
    <p>Chúc mừng bạn đã hoàn thành xuất sắc các thử thách SQL, bạn đúng là một chiến binh SQL tuyệt vời 🥷⚔️</p>

    <p>Flag cuối cùng của bạn là: <b>VSL{y0u_4r3_4n_4w3s0m3_5ql_w4rr10r}</b></p>
    <img src="./../assets/img/pentest.png" alt="Hacker Image" style="width: 400px;">
</body>

</html>