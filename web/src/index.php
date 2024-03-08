<?php 
session_start(); 
if(!isset($_SESSION['currentLevel'])){
    $_SESSION['currentLevel'] = 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng thí nghiệm SQL</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <h1>Phòng thí nghiệm SQL của <b>VSL</b></h1>
    <p>Đây là nơi để thực nghiệm và ôn tập lại các câu truy vấn SQL</p>
    <p>Hãy hoàn thành các thử thách SQL để dành được món quà đặc biệt nàooooooo</p>

    <p>Good Luck</p>
    <p>Flag format: <code>VKU{flag}</code></p>
    <hr>
    <div class="form-check">
        <h2>Mô tả về cơ sở dữ liệu</h2>
        <p>Cơ sở dữ liệu sẽ có tên là <b>sqlvsl</b>
        <p>Tên bảng: <b>users</b></p>
        <p>Gồm 4 column là:
        <table>
            <tr>
                <th>Tên cột</td>
                <th>Mô tả</td>
            </tr>
            <tr>
                <td>id</td>
                <td>Kiểu INT - <b>Đây là Key tự tăng</b></td>
            </tr>
            <tr>
                <td>name</td>
                <td>Kiểu varchar</td>
            </tr>
            <tr>
                <td>age</td>
                <td>Kiểu INT</td>
            </tr>
            <tr>
                <td>address</td>
                <td>Kiểu varchar</td>
            </tr>
        </table>
        </p>
        </p>
    </div>
    <a href="./challenge/challenge1.php">Bắt đầu</a>
</body>

</html>