<?php
include("../db.php");

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Users</title>
</head>
<body>

<h2>Manage Users</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>