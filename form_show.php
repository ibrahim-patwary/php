<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Show</title>
</head>
<body>
    <table>

    <tr>

    <th>ID</th>
    <th>Name</th>
    <th>CGPA</th>

    </tr>
<?php 

    $con=mysqli_connect('localhost','root','','diu');
    $query=mysqli_query($con,"select * from cse");
    while($row=mysqli_fetch_assoc($query)):

?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['cgpa']; ?></td>
    </tr>

<?php endwhile; ?>

    </table>
</body>
</html>

