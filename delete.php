
<?php
include 'database.php';
?>

<?php

$id = $_GET['id'];

$deletequery = "DELETE FROM `employee` WHERE EmployeeID=$id";

$query = mysqli_query($conn,$deletequery);

header("location:page1.php");

?>
                                                
                                               

