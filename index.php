<?php
  //require_once 'core/init.php';

  // $servername = "localhost";
  // $username = "root";
  // $password = "";
  //
  // // Create connection
  // $db = new mysqli($servername, $username, $password);
  //
  // if ($db->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  // }
  $serverName = "localhost";
  $dbName = "cryptoShop";
  $dbLogin= "root";
  $dbPassword = "";

  $db = mysqli_connect($serverName,$dbLogin, $dbPassword, $dbName);
  // Check connection
  if(mysqli_connect_error() ){
    die("Could not connect to database...");
  }

  $sql = "SELECT * FROM products WHERE featured = 1";
  $featured = $db->query($sql);

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Crypto Shop</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
          <a href="index.php" class="navbar-brand" id="text">Crypto Shop</a>

          <ul class="nav navbar-nav">
            <!--  DROPDOWN MENU -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    id="text">Men <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Shirts</a></li>
                      <li><a href="#">Pants</a></li>
                      <li><a href="#">Shoes</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    id="text">Women <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Shirts</a></li>
                      <li><a href="#">Pants</a></li>
                      <li><a href="#">Shoes</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    id="text">Kids <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Shirts</a></li>
                      <li><a href="#">Pants</a></li>
                      <li><a href="#">Shoes</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
            </li>
          </ul>
        </div>
      </nav>

      <!-- CENTER THE PRODUCTS AND REMOVE SPACES -->
      <div class="col-lg-2"></div>

      <!-- MAIN CONTENT OF FEATURED PRODUCts -->
        <div class="col-md-8">
          <div class="row">
            <h2 class="text-center">Featured Products</h2>

            <?php
              while($product = mysqli_fetch_assoc($featured)):


             ?>

            <div class="col-md-3 item">
              <h4><?= $product['title']; ?></h4></h4>
              <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$<?= $product['price']; ?></s></p>
              <p class="price">Our Price: $<?= $product['list_price']; ?></p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-<?= $product['id']; ?>">Details</button>
            </div>

          <?php endwhile; ?>

          </div>

          <footer class="text-center" id="footer">&copy; Copyright 2018 CryptoShop</footer>
        </div>





    <!-- DETAILS MODAL -->
    <?php
        include 'details-modal-levisJeans.php';
        include 'details-modal-football.php';
        include 'details-modal-watch.php';
        include 'details-modal-headband.php';
        include 'details-modal-hoodie.php';
        include 'details-modal-joggers.php';
        include 'details-modal-purse.php';
        include 'details-modal-poloshirt.php';
    ?>

    <!-- END OF DETAILS MODAL -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
