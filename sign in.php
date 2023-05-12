<!DOCTYPE html>
<html>
    <head>
        <title>Booktopia Sign In</title>
        <link rel="stylesheet" href="sign in.css">
        <link rel="icon" type="image/jpg" href="Image/Logo (1).png">
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
            <nav>
                <a href="" class="book"><img src="Image/Logo (1).png" alt="image"> Pages</a>
                <pre>
                <a href="">Home</a>    <a href="">Pages</a>    <a href="">About</a>    <a href="">Services</a>     <a href="">Contact</a>
                </pre>
                <a href="" class="basckt"><img src="Image/pngegg.png" alt="" ></a>
            </nav>
            <div>
            <?php
                session_start();
                $email = "";
                $password = "";
                $sql = "";
                if (isset($_POST["signIn"])) {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";

                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    if ($row) {
                        $_SESSION['user_id'] = $row['ID'];
                        $_SESSION['is_admin'] = ($row['ID'] == 1); // Set is_admin to true if user's ID is 1
                        
                        if ($_SESSION['is_admin']) {
                            header('Location: admin.php'); // Redirect to admin page if user is admin
                        } else {
                            header('Location: store.php'); // Redirect to store page if user is not admin
                        }
                    } else {
                        echo '<script>alert("Invalid email or password")</script>';
                    }
                }

            ?>
                <form method="post">
                    <label><h1>Sign In</h1></label><br>
                    <input type="email" name="email" placeholder="Email....."><br>
                    <label><i>password</i></label><br>
                    <input type="password" name="password" placeholder="password......"><br><br>
                    <input type="submit" name="signIn" value="Log In" class="Button_form">
                    <p>Don't have an account?</p>
                    <a href=""><b>Sign Up</b></a>
                </form>
            </div>
            <div class="footer">
                <pre class="footer_img">               
               <a href="" class="bookend"><img src="Image/Logo (1).png" alt="image"> Pages</a>
                
               <a href=""><img src="Image/facebook.png" alt="" class="facebook"></a>  <a href=""><img src="Image/twitter.png" alt=""></a>   <a href=""><img src="Image/linked in.png" alt=""></a> <a href=""><img src="Image/git.png" alt=""></a>
                </pre>
                <ul class="Explore">
                    <h3>Explore</h3>
                    <li><a href=""> Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Appoinments</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
                <ul class="Utillity">
                    <h3>Utillity Pages</h3>
                    <li><a href="">Start here</a></li>
                    <li><a href="">Style guide</a></li>
                    <li><a href="">404 not found</a></li>
                    <li><a href="">Password protected</a></li>
                    <li><a href="">Licenses</a></li>
                    <li><a href="">changelog</a></li>
                </ul>
                <section>
                    <h3 >Keep in Touch</h3>
                    <p>Address: <a href="">address</a></p><br><br>
                    <p>Mail: <a href="">booktopia@store.com</a></p>
                    <p>Phone: <a href="">+20 1000000000</a></p>
                </section>
                <pre class="end">
                <hr>
                 Made with love
            </pre>
            </div>
        </div>
    </body>
</html>