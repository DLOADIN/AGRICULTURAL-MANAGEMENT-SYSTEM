<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "agriculture");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        $image_title = mysqli_real_escape_string($db, $_POST['title']);
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
       // image file directory
        $target = "images/".basename($image);

        $sql = "INSERT INTO blog VALUES ('','$image', '$image_text','$image_title')";
        // execute query
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
        }else{
                $msg = "Failed to upload image";
        }
  }
  $result = mysqli_query($db, "SELECT * FROM blog");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/website.css">
  <link rel="shortcut icon" href="./images/WhatsApp Image 2024-05-12 at 21.51.51_09ba8a5f.jpg" type="image/x-icon">
  <script src="../JS/js.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <title>BLOG</title>
</head>
<style>
  .flaskss-12{
  background-image: url('./images/pexels-zenzazione-1211772.jpg');
  background-position: center;
  background-attachment:initial;
  background-repeat: no-repeat;
  background-size: cover;
  height: 76vh;
}

.haey button:hover{
  box-shadow: 3px 3px 4px 2px rosybrown;
  transition: .7s all ease ;
}
.haey button{
  background: #33622B;
  padding: 14px 28px;
  border-radius: 14px;
  color: white;
  font-size: 21px;
  cursor: pointer;
}
.haey button a{
  color: white;
  font-size: 21px;
  text-decoration: none;
}
.les-button{
  background: #33622B;
  padding: 14px 28px;
  border-radius: 14px;
  color: white;
  font-size: 21px;
  cursor: pointer;
}
#content{
        width: 50%;
        margin: 20px auto;
        border: none
   }
   form{
        width: 50%;
        margin: 20px auto;
   }
   form div{
        margin-top: 5px;
   }
   #img_div{
        width: 80%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid #33622B;
        border-radius: 12px;
   }
   #img_div:after{
        content: "";
        display: block;
        clear: both;
   }
   img{
        margin: 5px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
   }
   textarea{
      font-size:20px;
      font-weight:bold;
      font-style: italic;
      border: 2px solid black;
      width:80%
   }p{
    font-size:33px;
      font-weight:bold;
      font-style: italic;
      font-family: Arial, Helvetica, sans-serif;
   }
   .p{
      font-size:20px;
      font-weight:bold;
      font-style: italic;
      font-family: Arial, Helvetica, sans-serif;
   }
</style>
<body>
    <div class="flaskss-12">
      <div class="flusk">
        <nav>
          <ul>
          <li><a href="../index.html" >HOME</a></li>
          <li><a href="../contact-us.html">CONTACT US</a></li>
          <li><a href="blogger.php">BLOGS & REVIEWS</a></li>
            <div class="graifte">
              <button class="button-focus">
                <a href="./loginadmin.php">ADMIN</a>
              </button>
              <button class="button-focus">
                <a href="./loginuser.php">USERS</a>
              </button> </div>
              <li><a id="social-media-icon" href="https://chat.whatsapp.com/JRji0eELly437QYwFFUFjd"><i class="fa-brands fa-whatsapp"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="seven-dollar1">
      <h1>TELL US WHAT IS ON YOUR MIND</h1>
    <div class="haey">
      <button>
        <i class="fa-solid fa-plus"></i>
       <a href="#form">LEAVE US A REVIEW</a> 
      </button>
    </div>
    <div id="content">
      <?php
        while ($row = mysqli_fetch_array($result)) {
          echo "<div id='img_div'>";
            echo "<img src='images/".$row['image']."' >";
            echo "<p>".$row['image_text']."</p>";
          echo "</div>";
        }
      ?>
      <form method="POST" action="" enctype="multipart/form-data" id="form">
            <input type="hidden" name="size" value="1000000">
            <div>
              <input type="text" name="image_text">
            </div>
            <div>
              <input type="file" name="image">
            </div>
            <div>
          <textarea 
            id="text"  cols="40"  rows="4"   name="title" placeholder="Say something about us..."></textarea>
            </div>
            <div><button type="submit" name="upload" class="les-button">POST</button>
            </div>
      </form>
  </div>
  <footer>
    <div class="footer-container">
      <div class="socialicons">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-twitter"></i></a>
        <a href=""><i class="fa-brands fa-youtube"></i></a>
        <a href=""><i class="fa-brands fa-linkedin"></i></a>
      </div>
      <div class="footernav">
        <nav></nav>
        <ul>
        <li><a href="index.html">HOME</a></li>
          <li><a href="blogger.php">BLOGS & REVIEWS</a></li>
            <li><a href="contact-us.html">CONTACT US</a></li>
          <div class="graifte"></div>
        </ul>
      </div>
      <div class="footerbottom">
        <p class="p">Copyright &copy; 2024 | ALL RIGHTS RESERVED</span></p>
      </div>
    </div></footer>
</body>
</html>