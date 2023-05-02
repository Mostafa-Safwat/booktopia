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
            <img
              src="Images/Vector.png"
              alt="name website"
              width="30px"
              height="30px"
            />
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
    <form class="add-container" method="post" action="add_user.php">
      <input type="file" name="myfile" />
      <input class="book-name" name="name" type="text" placeholder="name" />
      <input class="book-name" name="price" type="number" placeholder="price" />
      <textarea class="book-disc" name="description" placeholder="description"></textarea>
      <div class="btn-container">
      <input class="add-btn" type="submit" name="add" value="Add">
      <input class="edit-btn" type="submit" name="edit" value="Edit">
      <input class="delete-btn" type="submit" name="delete" value="Delete">
      </div>
    </form>
    <table>
        <thead>
          <tr>
            <th style="width:15%">Name</th>
            <th style="width:4%">Price</th>
            <th>Description</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
          <tr>
            <td data-column="Name">Lorem</td>
            <td data-column="Price">100</td>
            <td data-column="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste alias reprehenderit fuga dolore, et distinctio, rem in hic, nobis voluptate omnis. Voluptates neque magnam quis placeat harum, reprehenderit ullam!</td>
            <td data-column="Image">Lorem.png</td>
          </tr>
        </tbody>
      </table>
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
                    <a href=""><img class="git" src="Images/git (2).png" alt="git" ></a>
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
        <br />
        </footer>
    </div>
    <!-- End footer -->
  </body>
</html>