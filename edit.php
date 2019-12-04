<?php 

require_once 'dbconnect.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $cat = $_GET['cat'];
   echo $cat;

   if ($cat == "conc") {
      $sql = "SELECT * FROM concerts WHERE pk_concerts_id = {$id}";
      } elseif($cat == "rest") {
      $sql = "SELECT * FROM restaurants WHERE pk_restaurant_id = {$id}";
      } elseif($cat == "thing") {
      $sql = "SELECT * FROM things WHERE pk_things_id = {$id}";
      }
   
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update Library</legend>

<?php
if ($_GET['id']) {
   $id = $_GET['id'];
   $cat = $_GET['cat'];

  if ($cat == "conc") { echo
     '<form action="update.php"  method="post">
         <table  cellspacing="0" cellpadding= "0">
             <tr>
                 <th>Title Concerts</th>
                 <td><input type="text"  name="title" placeholder ="Title" value='.$data['concerts_name'].'"></td>
             </tr >    
             <tr>
                 <th>Event Time</th>
                 <td><input type= "text" name="surname_author"  placeholder="First Name" value ='.$data['event_time'].'"></td>"
             </tr>
             <tr>
                 <input type= "hidden" name= "id" value='.$data['pk_concerts_id'].'>
                 <td><button  type= "submit">Save Changes</button></td>
                 <td><a  href= "index.php"><button  type="button">Back</button ></a></td >
             </tr>
         </table>
     </form>';}
     elseif ($cat == "rest") { echo
      '<form action="update.php"  method="post">
         <table  cellspacing="0" cellpadding= "0">
             <tr>
                 <th>Restaurant Name</th>
                 <td><input type="text"  name="title" placeholder ="Title" value="'.$data['restaurant_name'].'"></td>"
             </tr >    
             <tr>
                 <th>Telephone Number</th>
                 <td><input type= "text" name="surname_author"  placeholder="First Name" value ="'.$data['telephone_number'].'"/></td>"
             </tr>
             <tr>
                 <input type= "hidden" name= "id" value='.$data['pk_restaurants_id'].'"/>"
                 <td><button  type= "submit">Save Changes</button></td>
                 <td><a  href= "index.php"><button  type="button">Back</button ></a></td >
             </tr>
         </table>
     </form >';}
     elseif ($cat == "thing") { echo
      '<form action="update.php"  method="post">
         <table  cellspacing="0" cellpadding= "0">
             <tr>
                 <th>Name</th>
                 <td><input type="text"  name="title" placeholder ="Title" value="'.$data['thingstodo_name'].'"/></td>
             </tr >    
             <tr>
                 <th>Typer</th>
                 <td><input type= "text" name="surname_author"  placeholder="First Name" value ="'.$data['thingstodo_type'].'"/></td>
             </tr>
             <tr>
                 <input type= "hidden" name= "id" value= "'.$data['pk_things_id'].'"/>
                 <td><button  type= "submit">Save Changes</button></td>
                 <td><a  href= "home_1.php"><button  type="button">Back</button></a></td >
             </tr>
         </table>
     </form >';}
     }
    }
?>
</fieldset >

</body >
</html >

