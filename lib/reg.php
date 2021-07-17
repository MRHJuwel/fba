<?php



$conn=mysqli_connect('localhost','root','','facebook');






 $pname=$_POST['fname'];
 $sname=$_POST['sname'];
 $email=$_POST['email'];
 $pass= md5($_POST['pass']);
    
    $day =$_POST['day'];
    $month =$_POST['month'];
    $year =$_POST['year'];
 $daeofbirth = $day.'/'.$month.'/'.$year."<br>";


$ppicname=$_FILES['profilepic']['name'];
$profile = $_FILES['profilepic']['tmp_name'];
$gen = $_POST['gen'];
 $extra = time().$ppicname;


 move_uploaded_file($profile,'../upload/'.$extra);




$mailall = mysqli_query($conn, " select * from facebook_user where email='$email' ");

$kotomail= mysqli_num_rows($mailall);
    if(!empty($pname) && !empty($sname) && !empty($email) &&!empty($pass) &&
!empty($daeofbirth) &&
!empty($gen))
{
    
    if($kotomail == 0)
    {
        mysqli_query($conn,"INSERT INTO facebook_user(fname, sname,email,pass,daeofbirth,profile_pic,gen)values('$pname','$sname','$email','$pass','$daeofbirth','$extra','$gen')");
    }
    else{
        echo " This mail already used. ";
    }
    
    
}
else{
    echo " Please give your information.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome page</title>
</head>
<body>
    <H1 style=" color: green;">Welcome to My website</H1>
</body>
</html>
