<?
include "config.php";

$username=$_POST[username];
$message=$_POST[msg];
//print_r ($_POST);

$sql="INSERT INTO messages (username, message) VALUES ('".$username."', '".$message."')";
$res = mysqli_query($connect, $sql);
    if (!$res) {
        die('Неверный запрос: '.mysql_error());
    }
return;
