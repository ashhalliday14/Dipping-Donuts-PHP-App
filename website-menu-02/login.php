<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">Dippin' Donuts</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>


              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                  <li ><a href="products.php" class="nav-link">Products</a></li>
                  <li><a href="#" class="nav-link">Shopping Cart</a></li>
                  <li><a href="login.php" class="nav-link">Login</a></li>
                  <li><a href="#" class="nav-link">Register</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

      <body>

    <div class="hero">
        
        <p>Please Login to Purchase Donuts!</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="login" class="herologin1" allign="center">
            <input type="text" name="username" placeholder="Enter Username..."/>
            <br><br>
            <input type="password" name="password" placeholder="Enter Password..."/>
            <br><br>
            <input name="submit" type="submit" value="Login"/>
        </form>
    </div>
</body>


    <?php

        //includes
        include_once('connection.php');
        include_once('cleanse.php');

        //check login form has been submitted
        if(isset($_POST['submit']))
        {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
  
            $username = clean($username);
            $password = clean($password);
  
            //prepared statement login query
            $stmt = $conn->prepare("SELECT * FROM tblLogin WHERE Username=? AND Password=? LIMIT 1");
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $stmt->bind_result($username, $password);
            $stmt->store_result();
  
            //check number of rows matched is only 1
            if($stmt->num_rows == 1)
            {
                header("Location: index.php");
            }
            else
            {
                echo "LOL FAIL!";
            }
        }
    ?>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>