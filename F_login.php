<?php

$user = $_POST['user'];  
$psw = $_POST['psw'];

include('F_conn.php');

$sql = "select email from userinfo where username='$user' and password='$psw';"; 
$result = $connection->query($sql);

$email = mysqli_fetch_array($result, MYSQLI_NUM);
$num = mysqli_num_rows($result);

if($num==1){  
	//login success  
    session_start();  
    $_SESSION['username'] = $user;
    $_SESSION['email'] = $email[0];
    header('Location: /F_my.php');
    exit;  
} 
else {  
    exit('Failed to login! Click <a href="javascript:history.back(-1);">HERE</a> to go back to login page.');  
}  

?>
