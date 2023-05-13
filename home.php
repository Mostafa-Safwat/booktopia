<!DOCTYPE html>
<html lang="en" lang="en">
  <head>
    <link rel="stylesheet" href="home.css" />
    <title>Home | Booktopia</title>
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
      <div class="quote">
        “If you don’t like to read, you haven’t found the right book.”
      </div>
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
      <div class="between">
        <a class="links" href="sign up.php"> <button class="btn" type="button">Sign Up</button> </a>
        <a class="links" href="sign in.php"> <button class="btn" type="button">Sign In</button> </a>
      </div>
    </div>
    <!-- Start of review -->
    <div class="reviewBox">
      <div class="MoreText">
        Check out the reviews of multiple users 
        <br /> <br />
        Over 4.4 million users with an average score of <br /> (4.5/5) <img src="Images/Reviews2.png" width="15%" />
      </div>
      <!------------ Mr Potato ------------>
      <div class="reviewContainer">
        <img class="reviewProfile" src="Images/MrPotato.jpg" />
        <div class="reviewName">
          Mr Potato
        </div>
          <div class="reviewText">
            “You saved our lives!
            And WE are eternally grateful!”
          </div>
      </div>
      <!------------ Kartoffel ------------>
      <div class="reviewContainer2">
        <img class="reviewProfile2" src="Images/Kartoffel.png" />
        <div class="reviewName2">
          Kartoffel
        </div>
          <div class="reviewText2">
            “أتألم ولا اتكلم”
          </div>
      </div>
      <!------------ Jagaimo ------------>
      <div class="reviewContainer3">
        <img class="reviewProfile3" src="Images/Jagaimo.png" />
        <div class="reviewName3">
          Jagaimo
        </div>
          <div class="reviewText3">
            “One of the best book stores out there!”
          </div>
      </div>
    </div>
    <!-- End of review -->


    <div class = "endBox">
      <div class="endText">
      What are you waiting for?
      <br />
      Check out our <a href="store.php"> <button class="endBtn" type="button">Store</button> </a>
      </div>
      <img class="endPic" src="Images/end.png" />
    </div>
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
