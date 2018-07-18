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
          </ul>
        </div>
      </nav>

      <!-- CENTER THE PRODUCTS AND REMOVE SPACES -->
      <div class="col-lg-2"></div>

      <!-- MAIN CONTENT OF FEATURED PRODUCts -->
        <div class="col-md-8">
          <div class="row">
            <h2 class="text-center">Featured Products</h2>

            <div class="col-md-3 item">
              <h4>Levis Jeans</h4>
              <img src="images/levisJeans.jpg" alt="Levis Jeans" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$24.99</s></p>
              <p class="price">Our Price: $19.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-1">Details</button>
            </div>

            <div class="col-md-3 item">
              <h4>Adidas Football</h4>
              <img src="images/adidasFootball.jpg" alt="Adidas Football" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$39.99</s></p>
              <p class="price">Our Price: $29.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-2">Details</button>
            </div>

            <div class="col-md-3 item">
              <h4>Watch</h4>
              <img src="images/gucciWatch.jpg" alt="Watch" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$20.99</s></p>
              <p class="price">Our Price: $19.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-3">Details</button>
            </div>

            <div class="col-md-3 item">
              <h4>Polo Shirt</h4>
              <img src="images/poloShirt.jpg" alt="Polo Shirt" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$54.99</s></p>
              <p class="price">Our Price: $19.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-4">Details</button>
            </div>

            <div class="col-md-3 item">
              <h4>Joggers</h4>
              <img src="images/joggers.jpg" alt="Joggers" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$62.99</s></p>
              <p class="price">Our Price: $54.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-5">Details</button>
            </div>

            <div class="col-md-3 item">
              <h4>Purse</h4>
              <img src="images/purse.jpg" alt="Purse" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$66.99</s></p>
              <p class="price">Our Price: $61.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-6">Details</button>
            </div>

            <div class="col-md-3 item">
              <h4>Hoodie</h4>
              <img src="images/hoodie.jpg" alt="Hoodie" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$27.99</s></p>
              <p class="price">Our Price: $19.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-7">Details</button>
            </div>

            <div class="col-md-3 item">
              <h4>Head Band</h4>
              <img src="images/headband.jpg" alt="Head Band" class="anItem">
              <p class="listPrice text-danger">List Price: <s>$9.99</s></p>
              <p class="price">Our Price: $5.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#details-8">Details</button>
            </div>
          </div>

          <footer class="text-center" id="footer">&copy; Copyright 2018 CryptoShop</footer>
        </div>





    <!-- DETAILS MODAL -->
    <?php include 'details-modal-levisJeans.php';
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
