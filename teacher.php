<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "teacher") {
    header("Location: login.php");
    exit();
}
?>

<h2>教師頁面</h2>

<?php
if (isset($_COOKIE["user_id"])) {
    echo "你的ID：" . $_COOKIE["user_id"] . "<br>";
}
?>

<a href="logout.php">登出</a><br>
<a href="cookiedel.php">刪除Cookie</a>