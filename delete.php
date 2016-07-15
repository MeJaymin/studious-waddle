<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>
<?php 
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysql_query($query) or die ( mysql_error());
header("Location: view.php"); 
 ?>
