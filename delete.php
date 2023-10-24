<?php
include 'databaseconnect.php';


if(isset($_GET['id']))  {
    $id= $_GET['id'];
   $sql = "DELETE FROM formdata WHERE id='$id'";
 
   if ($conn->query($sql) === TRUE) {
     echo "Record deleted successfully";
   } else {
     echo "Error deleting record: " . $conn->error;
   }
 }

 $conn->close();
?>

