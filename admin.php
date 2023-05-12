<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Admin | Booktopia</title>

  <!-- Main templet css flie -->
  <link rel="stylesheet" href="admin.css" />
  <!--Logo title-->
  <link rel="icon" type="image/jpg" href="Images/Vector.png" />
</head>

<body>
  <div class="all_page">
    <!-- Start Header -->
    <div class="header">
      <div class="contanier_header">
        <div class="links">
          <span class="icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <ul>
            <li><a href="#home"> Home </a></li>
            <li><a href="#home"> Pages </a></li>
            <li><a href="#home"> Store </a></li>
            <li><a href="#home"> Contact </a></li>
            <li><a href="#home"> Home </a></li>
          </ul>
        </div>
        <div class="logo_header">
          <img src="Images/Vector.png" alt="name website" width="30px" height="30px" />
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
    </div>
  </div>
  <!-- End Header -->

  <?php
  //to connect to database server
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "book-data";

  $conn = mysqli_connect($host, $user, $pass, $db);

  $read = mysqli_query($conn, "SELECT * FROM booktable");
  $ID = "";
  $name = "";
  $price = "";
  $disc = "";
  $book_cover = "";

  if (isset($_FILES["book-img"]) && $_FILES["book-img"]["error"] == 0) { // check if an image has been uploaded
    $img = $_FILES["book-img"];
    $img_name = $img["name"];
    $img_location = $img["tmp_name"];
    copy($img_location, $img_name);
    $book_cover = $img_name;
  } else {
    // assign a default image if no image is uploaded
    $book_cover = "default_book_cover.jpg";
  }

  if (isset($_POST["book-ID"])) {
    $ID = $_POST["book-ID"];
  }

  if (isset($_POST["book-name"])) {
    $name = $_POST["book-name"];
  }

  if (isset($_POST["book-price"])) {
    $price = $_POST["book-price"];
  }

  if (isset($_POST["book-description"])) {
    $disc = $_POST["book-description"];
  }

  $sql = "";
  if (isset($_POST["add-btn"])) {
    $sql = "insert into booktable (Name, Price, Description, Image) values(\"$name\", $price, \"$disc\", \"$book_cover\")";
    mysqli_query($conn, $sql);
    header("location: admin.php");
  }

  if (isset($_POST["edit-btn"])) {
    $sql = "update booktable set Name = \"$name\", Price = $price, Description = \"$disc\" where ID = $ID";
    mysqli_query($conn, $sql);
    header("location: admin.php");
  }

  if (isset($_POST["delete-btn"])) {
    $sql = "delete from booktable where ID = $ID";
    mysqli_query($conn, $sql);
    header("location: admin.php");
  }
?>
  <form class="add-container" method="post" enctype="multipart/form-data">
    <input type="file" name="book-img" accept="image/*" />
    <input class="book-id" id="bID" name="book-ID" type="text" placeholder="ID" readonly />
    <input class="book-name" id="bname" name="book-name" type="text" placeholder="name" />
    <input class="book-name" id="bprice" name="book-price" type="number" step="any" placeholder="price" />
    <textarea class="book-disc" id="bdes" name="book-description" placeholder="description"></textarea>
    <div class="btn-container">
      <input class="add-btn" type="submit" name="add-btn" value="Add">
      <input class="edit-btn" type="submit" name="edit-btn" value="Edit">
      <input class="delete-btn" type="submit" name="delete-btn" value="Delete">
    </div>
  </form>
  <table id="booktable">
    <thead>
      <tr>
        <th style="width:1%">ID</th>
        <th style="width:15%">Name</th>
        <th style="width:4%">Price</th>
        <th>Description</th>
        <th style="width:5%">Image</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_array($read)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
        echo "<td>" . $row['Image'] . "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <!-- javascript code to get the data in the tables and add it in the form when clicked-->
  <script>
    var tbl = document.getElementById("booktable");

    for (var x = 1; x < tbl.rows.length; x++) {
      tbl.rows[x].onclick = function () {
        document.getElementById("bID").value = this.cells[0].innerHTML
        document.getElementById("bname").value = this.cells[1].innerHTML
        document.getElementById("bprice").value = this.cells[2].innerHTML
        document.getElementById("bdes").value = this.cells[3].innerHTML
      }
    }

  </script>

  <!-- start footer -->
  <div class="footer">
    <div class="contanier_footer">
      <div class="logo_footer">
        <img src="Images/Vector (2).png" alt="name website" width="30px" height="30px">
        <span class="website-name"> Booktopia </span>
        <div class="media_icon">
          <a href=""><img class="facebook" src="Images/facebook (2).png" alt="facebook" width="20px" height="20px"></a>
          <a href=""><img class="twitter" src="Images/twitter (2).png" alt="twitter" width="20px" height="20px"></a>
          <a href=""><img class="linkedin" src="Images/linked in (2).png" alt="linkedin" width="20px" height="20px"></a>
          <a href=""><img class="git" src="Images/git (2).png" alt="git"></a>
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
        <p> Mail: support@doctors.com</p><br>
        <p> Phone: (+22)123-4567-900</p>
      </div>
    </div>
    <span class="line_footer">
      <hr>
    </span>
    <footer>
      <div class="made"> Made with love <img src="Images/love.png" alt=""></div>
      <br />
    </footer>
  </div>
  <!-- End footer -->
</body>

</html>