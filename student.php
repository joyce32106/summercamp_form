<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "student") {
    header("Location: login.php");
    exit();
}
?>

<h2>學生頁面</h2>

<?php
if (isset($_COOKIE["user_id"])) {
    echo "你的ID：" . $_COOKIE["user_id"] . "<br>";
}
?>

<a href="logout.php">登出</a><br>
<a href="cookiedel.php">刪除Cookie</a>