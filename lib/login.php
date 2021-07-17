<?php

$conn=mysqli_connect('localhost','root','','facebook');

$email = $_POST['email'];
$pass = md5($_POST['passw']);

$loginfo = mysqli_query($conn,"SELECT * FROM FACEBOOK_USER WHERE email='$email'AND pass='$pass' ");
$milegese = mysqli_num_rows($loginfo);
if($milegese == 1)
{
  
    echo "<h1>Login successfully done!</h1>";
}
else{
    echo "Please create an account";
}


?>

