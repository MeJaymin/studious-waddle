
<?php 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h2>You can update your profile information</h2>


<table width="100%" border="2"  style="border-collapse:collapse; ">
<tr>
<td><span>Username:</span></td>
</tr>
<tr>
<td><span>Email:</span></td>
</tr>
<tr>
<td><span>Password:</span></td>
</tr>
<p>Your Username is: <?php echo $_SESSION['username']; ?>!</p>
<?php 
$id="";
$array= array();
$q=mysql_query("SELECT * from 'users' WHERE 'id'=".$id);
while($r=mysql_fetch_assoc($q))
{
	$array['id']=$row['id'];
	$array['username']=$row['username'];
	$array['password']=$row['password'];
	$array['email']=$row['email'];
	$array['trn_date']=$row['trn_date'];
}
?>
<!--
<?php
$count=1;
$sel_query="Select * from users ;";
$result = mysql_query($sel_query);

while($row = mysql_fetch_assoc($result))
 { 
 ?>
<tr><td align="center">
<?php echo $count; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<!--<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>-->
</tr>
<?php $count++; } ?>
-->
</table>
</div>
</body></html>