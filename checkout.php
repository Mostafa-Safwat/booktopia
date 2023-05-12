<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Start Description for webpage -->
    <meta name="description" content="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed cumque corporis totam inventore nostrum quia veniam omnis dolorum, ex nemo necessitatibus, perferendis voluptates et facere cum itaque laborum, repellat quis.">
    
    <title>Checkout | Booktopia</title>

    <!-- Main templet css flie -->
    <link rel="stylesheet" href="checkout.css">
    <!--Logo title-->
    <link rel="icon" type="image/jpg" href="Images/Vector.png">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

    $book_id = $_GET['book_id'];

    if(!isset($book_id)) {
        header("Location: store.php");
        exit();
    } 

    $read = mysqli_query($conn, "SELECT * FROM booktable WHERE ID = '$book_id'");
    $row = mysqli_fetch_array($read);
    ?>
    <div class="all_page">
                <!-- Start Header -->
                <div class="header">
                    <div class="contanier_header">
                        <div class="logo_header">
                            <img src="Images/Vector.png" alt="name website" width="30px" height="30px" >
                            <span class="website name"> Booktopia </span>
                        </div>
                        <div class="nav">
                            <ul>
                                <li><a href="#home"> Home </a></li>
                                <li><a href="#home"> Pages </a></li>
                                <li><a href="#home"> Store </a></li>
                                <li><a href="#home"> Contact </a></li>
                              </ul>
                        </div>
                    </div>
                    <div class="pragraph">
                        <div class="line">
                            <img src="Images/lock.png" alt="">
                        <h2>Checkout</h2>
                        <span></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
                <!-- End Header -->
                
                <!-- Start mid -->
                <div class="mid">
                    <div class="delivery-address">
                        <p> Delivery Address</p>
                        <?php 
                        $fname = "";
                        $lname = "";
                        $address_1 = "";
                        $address_2 = "";
                        $country = "";
                        $city = "";
                        $state = "";
                        $post_code = "";
                        $ph_num = "";
                        $email = "";
                        $sql = "";
                        if (isset($_POST["continue"])) {
                          $fname = $_POST["fname"];
                          $lname = $_POST["lname"];
                          $address_1 = $_POST["address_1"];
                          $address_2 = $_POST["address_2"];
                          $country = $_POST["country"];
                          $city = $_POST["city"];
                          $state = $_POST["state"];
                          $post_code = $_POST["post_code"];
                          $ph_num = $_POST["ph_num"];
                          $email = $_POST["email"];
                          $sql = "INSERT INTO orders (`Book ID`, `First Name`, `Last Name`, `Address Line 1`, `Address Line 2`, `Country`, `City`, `State`, `Post Code`, `Phone Number`, `Email`) 
                          VALUES ($book_id, '$fname', '$lname', '$address_1', '$address_2', '$country', '$city', '$state', '$post_code', '$ph_num', '$email')";

                          mysqli_query($conn, $sql);
                          echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                        }
                        ?>
                        <form method="post" class="address-form">
                            <div class="f_l-input">
                                <div class="left">
                                    <label for="fname">First Name </label>
                                    <input type="text" name="fname" required >
                                
                            
                                    <label for="lname"> Last Name </label>
                                    <input type="text" name="lname" required >
                                </div>
                            </div>
                            <div class="address_1">
                                <label for="address_1"> Address Line 1</label>
                                <input type="text" name="address_1" required>
                            </div>
                            <div class="address_2">
                                <label  for="address_2"> Address Line 2</label>
                                <input  type="text" name="address_2" placeholder="(optional)">
                            </div>
                            <div class="c_c">
                                <label for="country"> Country </label>
                                <select class="input" name="country" id="country">
                                    <option value=""> Select Country </option>
                                    <option value="Egypt"> Egypt</option>
                                    <option value="UK">UK</option>
                                    <option value="USA">USA</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                </select>
                                    <label  for="City"> City </label>
                                    <select class="city" name="city" id="city">
                                    <option value=""> Select Country </option>
                                    <option value="Egypt"> Egypt</option>
                                    <option value="UK">UK</option>
                                    <option value="USA">USA</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    </select>
                            </div>
                            <div class="state_post">
                                    <label for="State"> State </label>
                                    <select class="input" name="state" id="city">
                                    <option value=""> Select Country </option>
                                    <option value="Egypt"> Egypt</option>
                                    <option value="UK">UK</option>
                                    <option value="USA">USA</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    </select>
                                <label for="post_code"> Post Code</label>
                                <input  type="text" name="post_code" placeholder="40404" required>
                            </div>
                            <div class="tel_info">
                                <label for="ph_num"> Phone Number</label>
                                <input type="tel" name="ph_num" required placeholder=" 01012345678">
                                <label for="email"> Email </label>
                                <input type="email" name="email" required placeholder=" example@example.com">
                            </div>
                            <div class="button">
                                <button type="submit" name="continue"> Continue </button>
                            </div>
                        </form>
                    </div>
                    <div class="pos_right">
                        <div class="order-summary">
                            <p><b> Order Summary </b> </p>
                            <span></span>
                            <span><?php echo $row['Name']; ?></span>
                            <br />
                            <span>$<?php echo $row['Price']; ?></span>
                        </div>
                    </div>
                </div>
                <!-- End mid -->

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
            <footer><div class="made"> Made with love <img src="Images/love.png" alt=""></div>
            </footer>
        </div>
        <!-- End footer -->
    </div>
</body>
</html>