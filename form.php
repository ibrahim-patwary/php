<?php 
if(isset($_POST['register'])){

$name=$_POST['name'];
$roll=$_POST['roll'];
$cgpa=$_POST['cgpa'];


$con=mysqli_connect('localhost','root','','diu');
$query=mysqli_query($con,"insert into cse(name,roll,cgpa) values('$name','$roll','$cgpa')");
if($query){
    echo "Data Inserted Successfully....!<br>Good Luck..";
}
else{
    echo "Data Failed to Inserted....!<br>Try Again..";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <form action="" method="post">
<div>
<label for="name">Name: </label>
<input type="text" name="name" placeholder="Enter Your Name"autofocus>
</div><br>

<div>
<label for="roll">ID: </label>
<input type="text" name="roll" placeholder="Enter Your Id">
</div><br>

<div>
<label for="cgpa">CGPA: </label>
<input type="text" name="cgpa" placeholder="Enter Your CGPA">
</div><br>

<div>
    <input type="submit" value="Done" name="register">
</div>
    </form>
</body>
</html>


