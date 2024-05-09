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
  <link rel="shortcut icon" href="../images/🇷🇼.jpeg" type="image/x-icon">
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
  background: rgba(22, 236, 22, 0.747);
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
  background: rgba(22, 236, 22, 0.747);
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
        border: 1px solid rgba(22, 236, 22, 0.747);
        border-radius: 12px;
   }
   #img_div:after{
        content: "";
        display: block;
        clear: both;
   }
   img{
        margin: 5px;
        width: 300px;
        height: 270px;
        border-radius: 50%;
   }
   textarea{
      font-size:20px;
      font-weight:bold;
      font-style: italic;
      border: 2px solid black;
      width:80%
   }p{
    font-size:30px;
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
            <li><a>EXPORTS ▼</a>
              <ul class="dropdown" 🔽 >
                <li><a href="../exporters.html">EXPORTERS</a></li>
                <li><a href="../market-analysis.html">MARKET ANALYSIS</a></li>
                <li><a href="../crops-market.html">CROPS MARKET REPORT</a></li>
                <li><a href="../products.html">PRODUCTS</a></li>
                <li><a href="../country-export-requirement.html">COUNTRY EXPORT</a></li>
              </ul>
            </li>
            <li><a>SERVICES ▼</a>
              <ul class="dropdown">
                <li><a href="../competitor.html">COMPETITOR</a></li>
                <li><a href="../customer.html">CONSUMER BEHAVIOR</a></li>
                <li><a href="../Trade.html">TRADE AGREEMENT</a></li>
                <li><a href="../other-market-reports.html">CROPS MARKET REPORT</a></li>
              </ul>
            </li>
            <li><a href="../contact-us.html">CONTACT US</a></li>
            <li><a href="blog.php">BLOGS & REVIEWS</a></li>
            <div class="graifte">
              <button class="button-focus">
                <a href="./system/loginadmin.php">ADMIN LOGIN</a>
              </button>
              <button class="button-focus">
                <a href="./system/registrationadmin.php">CREATE AN ACCOUNT</a>
              </button></div>
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
              <input type="text" name="title">
            </div>
            <div>
              <input type="file" name="image">
            </div>
            <div>
          <textarea 
            id="text"  cols="40"  rows="4"   name="image_text" placeholder="Say something about us..."></textarea>
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
          <li><a href="../index.html" >HOME</a></li>
          <li><a>EXPORTS ▼</a>
            <ul class="dropdown" 🔽 >
              <li><a href="../exporters.html">EXPORTERS</a></li>
              <li><a href="../market-analysis.html">MARKET ANALYSIS</a></li>
              <li><a href="../crops-market.html">CROPS MARKET REPORT</a></li>
              <li><a href="../products.html">PRODUCTS</a></li>
              <li><a href="../country-export-requirement.html">COUNTRY EXPORT</a></li>
            </ul>
          </li>
          <li><a>SERVICES ▼</a>
            <ul class="dropdown">
              <li><a href="../competitor.html">COMPETITOR</a></li>
              <li><a href="../customer.html">CONSUMER BEHAVIOR</a></li>
              <li><a href="../Trade.html">TRADE AGREEMENT</a></li>
              <li><a href="../other-market-reports.html">CROPS MARKET REPORT</a></li>
            </ul>
          </li>
          <li><a href="../contact-us.html">CONTACT US</a></li>
          <li><a href="blog.php">BLOGS & REVIEWS</a></li>
          <div class="graifte"></div>
        </ul>
      </div>
      <div class="footerbottom">
        <p class="p">Copyright &copy; 2024 | ALL RIGHTS RESERVED</span></p>
      </div>
    </div></footer>
</body>
</html>