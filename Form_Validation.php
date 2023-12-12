////PHP from validation/////////
<?php 
if(isset($_POST['register'])){
$f_name=$_POST['firstname'];
$l_name=$_POST['lastname'];
$f_password=$_POST['password'];
$f_gmail=$_POST['gmail'];

$error=array();

if($f_name==Null){
    $error['f_name']="First Name can not be Empty..!";
}
if($l_name==null){
    $error['l_name']="Last Name can not be Empty..!";
}
if($f_password==null){
    $error['f_password']="Password can not be Empty..!";
}
if($f_gmail==null){
    $error['f_gmail']="Email can not be Empty..!";
}
if(count($error)==0){
    $con=mysqli_connect('localhost','root','','diu');
    $query=mysqli_query($con,"insert into cse(fname,lname,fpass,fgmail) values('$f_name','$l_name','$f_password','$f_gmail')");
    if($query){
        echo "Data Inserted Successfully....!<br>Good Luck..";
    }
    else{
        echo "Data Failed to Inserted....!<br>Try Again..";
    }
}


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form method="post" action="">
<div>
    <label for="f_name">First Name: </label>
    <input type="text" name="firstname" placeholder="Enter Your First Name" autofocus>
    <?php
        if(isset($error['f_name'])){
            echo $error['f_name'];
        }

    ?>
</div><br>
<div>
    <label for="l_name">Last Name: </label>
    <input type="text" name="lastname"placeholder="Enter Your Last Name" >
    <?php
        if(isset($error['l_name'])){
            echo $error['l_name'];
        }

    ?>
</div><br>
<div>
    <label for="fpass">Password: </label>
    <input type="password" name="password" placeholder="Enter Your Password" >
    <?php
        if(isset($error['f_password'])){
            echo $error['f_password'];
        }

    ?>
</div><br>
<div>
    <label for="femail">Email: </label>
    <input type="email" name="gmail" placeholder="Enter Your Email Address" >
    <?php
        if(isset($error['f_gmail'])){
            echo $error['f_gmail'];
        }

    ?>
</div><br>
<div>
    <input type="submit" name="register"value="Sign Up" >
</div><br>
    </form>
</body>
</html>