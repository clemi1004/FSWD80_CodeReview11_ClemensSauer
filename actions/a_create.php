<?php 

require_once 'db_connect.php';

if ($_POST) {
   $fname = $_POST['title'];
   $lname = $_POST['img'];
   $dob_1 = $_POST[ 'surname_author'];
   $dob_2 = $_POST[ 'lastname_author'];
   $dob_3 = $_POST[ 'ISBN'];
   $dob_4 = $_POST[ 'type'];
   $dob_4_1 = $_POST[ 'short_description'];
   $dob_5 = $_POST[ 'publish_date'];
   $dob_6 = $_POST[ 'publisher_name'];
   $dob_6_1 = $_POST[ 'publisher_adress'];
   $dob_7 = $_POST[ 'publisher_city'];
   $dob_8 = $_POST[ 'publisher_size'];

   $sql = "INSERT INTO library (title, img, surname_author, lastname_author, ISBN, type, short_description, publish_date, publisher_name, publisher_adress, publisher_city, publisher_size) VALUES ('$fname', '$lname', '$dob_1', '$dob_2', '$dob_3', '$dob_4','$dob_4_1', '$dob_5', '$dob_6', '$dob_6_1', '$dob_7', '$dob_8')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='create.php'><button type='button'>Back</button></a>";
        echo "<a href='index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?> 