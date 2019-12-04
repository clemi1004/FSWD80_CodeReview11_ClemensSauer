<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD  |  Add Item</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add Item</legend>

   <form  action="a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Title</th >
               <td><input  type="text" name="title"  placeholder="Title" /></td >
           </tr>    
           <tr>
               <th>Picture</th>
               <td><input  type="text" name= "img" placeholder="Image" /></td>
           </tr>
           <tr>
               <th>First Name</th>
               <td><input type="text"  name="surname_author" placeholder ="First Name" /></td>
           </tr>
           <tr>
               <th>Last Name</th>
               <td><input type="text"  name="lastname_author" placeholder ="Last Name" /></td>
           </tr>
           <tr>
               <th>ISBN Name</th>
               <td><input type="text"  name="ISBN" placeholder ="ISBN" /></td>
           </tr>
           <tr>
               <th>Book/Cd</th>
               <td><input type="text"  name="type" placeholder ="Book or CD" /></td>
           </tr>
           <tr>
               <th>Short Description</th>
               <td><input type="text"  name="short_description" placeholder ="Short Description" /></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="text"  name="publish_date" placeholder ="Date of Publish" /></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="publisher_name" placeholder ="Name of the Publisher" /></td>
           </tr>
           <tr>
               <th>Adress 1</th>
               <td><input type="text"  name="publisher_adress" placeholder ="Adress 1" /></td>
           </tr>
           <tr>
               <th>Adress 2</th>
               <td><input type="text"  name="publisher_city" placeholder ="Adress 2" /></td>
           </tr>
           <tr>
               <th>Size</th>
               <td><input type="text"  name="publisher_size" placeholder ="Size" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert Data</button></td>
               <td ><a href= "index.php"><button  type="button">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>