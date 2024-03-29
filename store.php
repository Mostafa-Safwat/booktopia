<!DOCTYPE html>
<html lang="en" lang="en">
  <head>
    <link rel="stylesheet" href="store.css" />
    <title>Store | Booktopia</title>
    <!--Logo title-->
    <link rel="icon" type="image/jpg" href="Images/Vector.png">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"       rel="stylesheet">
  </head>
  <body>
    <div class="picture">
    <div class="all_page">
    <div class="header">
      <div class="contanier_header">
        <div class="logo_header">
          <img src="Images/Vector.png" alt="name website" width="30px" height="30px" />
          <span class="website name"> Booktopia </span>
        </div>
        <div class="nav">
          <ul>
            <li><a href="home.php"> Home </a></li>
            <li><a href="store.php"> Store </a></li>
            <li><a href="admin.php"> Admin </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    </div>
    <?php
    //to connect to database server
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "book-data";

    $conn = mysqli_connect($host, $user, $pass, $db);

    $read = mysqli_query($conn, "SELECT * FROM booktable");
    ?>
  <?php 
  $count = 0;
  while ($row = mysqli_fetch_array($read)) {
    if ($count % 3 == 0) {
      echo '<div class="container">';
    }
  ?>
    <div class="books">
      <div>
        <div>
          <img class="books border" src="<?php echo $row['Image']; ?>" />
          <div class="pad"><?php echo $row['Name']; ?></div>
        </div>
        <div class="subtext"><?php echo $row['Description']; ?></div>
        <a class="btn" href="checkout.php?book_id=<?php echo $row['ID']; ?>"><button class="btn" type="button">Buy Now</button></a>
        <div class="price">$<?php echo $row['Price']; ?></div>
      </div>
    </div>
  <?php
    $count++;
    if ($count % 3 == 0) {
      echo '</div>';
    }
  }
  // If there are any remaining books, close the container div
  if ($count % 3 != 0) {
    echo '</div>';
  }
  ?>
        <!-- start footer -->
        <div class="footer"> 
            <div class="contanier_footer">
                <div class="logo_footer">
                    <img src="Images/Vector.png" alt="name website" width="30px" height="30px">
                    <span class="website-name"> Booktopia </span>
                    <div class="media_icon">
                        <a href=""><img class="facebook" src="Images/facebook.png" alt="facebook" width="20px" height="20px"></a>
                        <a href=""><img class="twitter" src="Images/twitter.png" alt="twitter" width="20px" height="20px"></a>
                        <a href=""><img class="linkedin" src="Images/linked in.png" alt="linkedin" width="20px" height="20px"></a>
                        <a href=""><img class="git" src="Images/git.png" alt="git" ></a>
                    </div>
                </div>
                <div class="list_one">
                    <p style="color:white;">Explore</p>
                    <ul>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="home.php">Home</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="store.php">Store</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="admin.php">Admin</a>
                        </li>
                    </ul>
                </div>
                <div class="footer4">
                    <h3> Keep in Touch</h3>
                    <p> Address: address</p><br>
                    <p> Mail:  support@booktopia.com</p><br>
                    <p> Phone:  (+20)123-4567-900</p>
                </div>
            </div>
            <span class="line_footer"><hr></span>
            <footer><div class="made"> Made with love <img src="Images/love.png" alt=""></div>
            </footer>
        </div>
        <!-- End footer -->
  </body>
</html>
