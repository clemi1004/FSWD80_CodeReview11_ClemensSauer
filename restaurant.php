<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if ( !isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}
?>

<html lang='en'>

<head>
    <meta name="XXXXX" content="Codefactory">
    <meta charset='utf-8'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Own CSS -->
    <link rel='stylesheet' type='text/css' href='XXXXX.css'>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JSON -->
    <script type="text/javascript" src="list_of_new_products.json"></script>
    <title>My libary</title>
    <style type="text/css" media="screen">
    .jumbotron {
        background-image: url("https://cdn.pixabay.com/photo/2014/12/27/20/04/vienna-581427_960_720.jpg");
        padding-top: 6%;
        padding-bottom: 6%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }
    .pictures{
        height: 100%;
        width: 100%;
        border-style: solid;
        border-color: red;
    }
    </style>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1 class="text-white">Clemens Travelblog</h1>
        </div>
    </header>
<!-- <a href="create.php"><button type='button' class='btn btn-primary'>Create New Item</button></a> -->

<!-- Connection to database -->
<?php
global $conn;
?>

<a  href="logout.php?logout">Sign Out</a>

    <!-- retrieving data restaurants-->
        <div class="card-deck">
                <?php 
                $sql2 = "SELECT * FROM restaurants INNER JOIN location ON restaurants.fk_location_id = pk_location_id";
                $result = mysqli_query($conn, $sql2);

                // fetch the next row (as long as there are any) into $row
                if ($result-> num_rows > 0) {
                    while ( $row = $result->fetch_assoc()) {

                        // output data of each row
                        echo  '<div class="card" style="width: 18rem;">
                                  <img src="'.$row['pic'].'" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">'.$row['restaurant_name'].'</h5>
                                  </div>
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Telephone Number:<br>'.$row['telephone_number'].'</li>
                                    <li class="list-group-item">Restaurant Type:<br>'.$row['restaurant_type'].'</li>
                                    <li class="list-group-item">Short Description:<br>'.$row['short_description_rest'].'</li>
                                    <li class="list-group-item">Location:<br>'.$row['address'].'<br>'.$row['zip_code'].' '.$row['city'].'</li>
                                  </ul>
                                  <div class="card-body">
                                    <a href="'.$row['web'].'" class="card-link" target="_blank">Webpage</a>&nbsp&nbsp';
                    if (isset($_SESSION['admin']) ) {
                        echo        '<a href="delete.php?id="'.$row['pk_restaurants_id'].'><button type="button" class="btn btn-danger">delete</button></a>&nbsp&nbsp
                                    <a href="delete.php?id="'.$row['pk_restaurants_id'].'><button type="button" class="btn btn-primary">update</button></a>';
                        }
                        echo '</div></div>';
                                };
                            };
                        ?>
            </div>




<!-- Own JS -->
<script type="text/javascript" src="empty_file.js"></script>
</body>

<img src="" alt="">

</html>