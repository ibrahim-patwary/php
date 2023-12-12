
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>

<form action="" method="post">
<input type="text" placeholder="Searching.." name="searched" ><br>
<button name="search">Search</button><br>

</form>

    <table>
    <tr>
     <th>Id</th>
     <th>First Name</th>
     <th>Last Name</th>
    </tr>
<?php

if(isset($_POST['search'])){
    $searchName=$_POST['searched'];
}
    $con=mysqli_connect('localhost','root','','buet');
    $result=mysqli_query($con,"SELECT * FROM `cse` WHERE fname LIKE '%$searchName%'");

    while($row=mysqli_fetch_assoc($result)):

?>

    <tr> 
    <td><?php echo $row['id']; ?> </td>
    <td> <?php echo $row['fname']; ?></td>
    <td> <?php echo $row['lname']; ?></td>
    <td><a href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
    <td><a href="update.php?updateid=<?php echo $row['id']; ?>">Update</a></td>
    </tr>
    <?php endwhile; ?>
    
    
    </table>
</body>
</html>









<?php
	$did=$_GET['deleteid'];
    $con=mysqli_connect('localhost','root','','buet');
    $result=mysqli_query($con,"delete from cse where id='$did'");
	if($result){
		echo "Delete Successfully";
	}
	else{
		echo "Delete Unsuccessful";
	}

?>











<?php
    $uid=$_GET['updateid'];
    $con=mysqli_connect('localhost','root','','buet');
    $result=mysqli_query($con,"select * from cse where id='$uid'");
    $row=mysqli_fetch_assoc($result);
    $firstname=$row['fname'];
    $lastname=$row['lname'];
if(isset($_POST['update'])){
    $first=$_POST['firstname'];
    $last=$_POST['lastname'];
    $con=mysqli_connect('localhost','root','','buet');
    $query=mysqli_query($con,"update cse set id='$uid',fname='$first',lname='$last' where id='$uid'");
    if($query){
        echo "Update Successfully..";
    }
    else{
        echo "Update Unsuccessufully..";
    }
}



 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update Form</title>
 </head>
 <body>
     <form action=""  method="post">
     <div>
     <input type="text" name="firstname" value="<?php echo $firstname;?>" autofocus>
     </div><br>
     <div>
     <input type="text" name="lastname"  value="<?php echo $lastname;?>">
     </div><br><br>
     <input type="submit" name="update" value="Update"><br>

     </form>
 </body>
 </html>


