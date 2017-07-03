<?php  
session_start();  
 
if(!isset($_SESSION['username'])){  
    header("Location: /F_login.html");  
    exit();  
}  

include('F_conn.php');    
$user = $_SESSION['username'];
$email = $_SESSION['email'];
$query = $connection->query("select * from userinfo where username = '$user';");  
$row = mysqli_fetch_array($query);  

echo 'User Profile: <br />';  
echo 'Username: ',$user,'<br />';  
echo 'Email: ',$email,'<br />';  
echo 'Cloth Size: ',$row[3],'<br />';
echo 'Fitting Preference: ',$row[4],'<br />';
  
?>  
