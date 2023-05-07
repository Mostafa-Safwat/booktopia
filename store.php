<!DOCTYPE html>
<html lang="en" lang="en">
  <head>
    <link rel="stylesheet" href="store.css" />
    <title>Store | Booktopia</title>
    <!--Logo title-->
    <link rel="icon" type="image/jpg" href="Images/Vector.png">
  </head>
  <body>
    <div class="picture">
      <nav class="navMenu">
        <ul>
          <img
            src="Images/Vector.png"
            alt="logo"
            width="40px"
            style="padding-top: 5px"
          />
          <li class="booktopia"><a class="logo" href="/home">Booktopia</a></li>
          <li><a class="nav-item" href="home">Home</a></li>
          <li><a class="nav-item" href="pages">Pages</a></li>
          <li><a class="nav-item" href="store.html">Store</a></li>
          <li><a class="nav-item" href="contact">Contact</a></li>
        </ul>
      </nav>
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
        <a class="links" href="Book1">
          <img class="books border" src="<?php echo $row['Image']; ?>" />
          <div class="pad"><?php echo $row['Name']; ?></div>
        </a>
        <div class="subtext"><?php echo $row['Description']; ?></div>
        <a class="btn" href="/Product"><button class="btn" type="button">Buy Now</button></a>
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
                    <p>Explore</p>
                    <ul>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">Home</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">Services</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">About</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">Blog</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="list_two">
                    <p>Utility Pages</p>
                    <ul>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">join</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">404</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">Home</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home">Home</a>
                        </li>
                        <li><span class="circle"><span></span> <span></span> <span></span>
                            <a href="#home"> Changing </a>
                        </li>
                    </ul>
                </div>
                <div class="footer4">
                    <h3> Keep in Touch</h3>
                    <p> Address: address</p><br>
                    <p> Mail:  support@doctors.com</p><br>
                    <p> Phone:  (+22)123-4567-900</p>
                </div>
            </div>
            <span class="line_footer"><hr></span>
            <footer><p class="made"> Made with love <img src="Images/love.png" alt=""></p>
            </footer>
        </div>
        <!-- End footer -->
  </body>
</html>
