<?php 

require_once 'db_connect.php';

if ($_POST) {
   $fname = $_POST['title'];
   $lname = $_POST['surname_author'];
   $dob = $_POST[ 'lastname_author'];

   $id = $_POST['id'];

   $sql = "UPDATE library SET title = '$fname', surname_author = '$lname', lastname_author = '$dob' WHERE pk_libraby_id = {$id}";
   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?> 