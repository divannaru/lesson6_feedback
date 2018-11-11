<?

include "config.php";

$sql = "select * from messages OPDER BY time DESC LIMIT 5";
$result = mysqli_query($connect, $sql);
$num = mysqli_num_rows($result);

if ($num >0){
    while ($data=mysqli_fetch_assoc($result)){
        $msg='<p><span class="message">'.$data[message].'</span></i><br><span class="username">'.$data[username].'</span></p>';
    }
}
else {
    $msg="<p>Отзывов пока нет</p>";
}
echo $msg;
//mysqli_close($connect);
//return;
?>