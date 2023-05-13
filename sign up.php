<!DOCTYPE html>
<html>
<head>
        <title>Sign Up | Booktopia</title>
        <link rel="stylesheet" href="sign in.css">
        
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
    <?php
        //to connect to database server
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "book-data";

        $conn = mysqli_connect($host, $user, $pass, $db);
    ?>
        <div class="all_page">
    <!-- Start Header -->
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
  <!-- End Header -->
            <?php 
                $fname = "";
                $lname = "";
                $email = "";
                $password = "";
                $sql = "";
                if (isset($_POST["signUp"])) {
                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $sql = "INSERT INTO users (`First Name`, `Last Name`, `Email`, `Password`) 
                    VALUES ('$fname', '$lname', '$email', '$password')";

                    mysqli_query($conn, $sql);
                    echo '<script>alert("You signed up successfully!")</script>';
                    }
                    ?>
                <form method="post">
                    <label><h1>Sign Up</h1></label><br>
                    <input type="text" name="fname" placeholder="First Name"><br>
                    <input type="text" name="lname" placeholder="Last Name"><br>
                    <input type="email" name="email" placeholder="Email....."><br>
                    <label><i>password</i></label><br>
                    <input type="password" name="password" placeholder="password......"><br><br>
                    <input type="submit" name="signUp" value="Sign Up" class="Button_form">
                    <p>Already have an account?</p>
                    <a href="sign in.php"><b>Sign In</b></a>
                </form>
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
            <footer> Made with love <img src="Images/love.png" alt=""></footer>
        </div>
        <!-- End footer -->
    </body>
</html>