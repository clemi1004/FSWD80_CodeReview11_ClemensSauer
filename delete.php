<?php 

require_once 'db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM library WHERE pk_libraby_id = {$id}" ;
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete User</title>
</head>
<body>

<h3>Do you really want to delete this?</h3>
<form action ="a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['pk_libraby_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button></a>
</form>

</body>
</html>

<?php
}
?>
