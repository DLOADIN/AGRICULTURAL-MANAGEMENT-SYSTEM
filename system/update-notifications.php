<?php
  require "connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `admin` WHERE id=$id ");
  $row = mysqli_fetch_array($check);
  }
  else{
  header('location:loginadmin.php');
  } 
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/newfriend.css">
  <link rel="stylesheet" href="./CSS/another-one.css">
  
  <link rel="shortcut icon" href="./images/WhatsApp Image 2024-05-12 at 21.51.51_09ba8a5f.jpg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script><link rel="shortcut icon" href="../images/🇷🇼.jpeg" type="image/x-icon">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="../JS/js.js"></script>
  <title>UPDATE DETAILS</title>
</head>
<body>
  <style>
    #main-contents{
      height: 250vh;
    }
    .formation-1{
  display: grid;
  grid-template-columns: 130px 700px 150px 300px;
  row-gap: 30px;
  column-gap: 30px;
  padding-top: 10vh;
}
.lebutton a{
  text-decoration: none;
  color:#33622B;

}
.lebutton {
    border-radius: 40px;
    width:100%;
    height: 38px;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 800;
    border-radius: 15px;
    background-color: rosybrown;
    padding: 1rem 3rem 2rem 3rem;
    margin-bottom: .5rem;
    margin-right: 1rem;
  }

  </style>
  <div class="sidebar">
      <ul class="menu">
        <div class="logout">
        <li>
          <a href="dashboard.php">
            <i class="fa-solid fa-house-chimney"></i>
            <span>DASHBOARD</span>
          </a>
        </li>
        <li>
          <a href="add-details.php">
            <i class="fa-solid fa-suitcase"></i>
            <span>ADD DETAILS</span>
          </a>
        </li>
        <li>
          <a href="view.php">
            <i class="fa-solid fa-people-group"></i>
            <span>VIEW</span>
          </a>
        </li>
        <li>
          <a href="view-user.php">
          <i class="fa-solid fa-user"></i>
            <span>USERS</span>
          </a>
        </li>
        <li>
          <a href="profile.php">
            <i class="fa-solid fa-gear"></i>
            <span>ADMIN SETTINGS</span>
          </a>
        </li>
        <li>
          <a href="view-user.php">
          <i class="fa-solid fa-user"></i>
            <span>USERS</span>
          </a>
        </li>
        <li>
        <a href="index.html">
          <i class="fa-solid fa-globe"></i>
            <span>HOME</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span>LOGOUT</span>
          </a>
        </li>
      </div>
    </ul>
  </div>

  <div class="main-content" id="main-contents">
    <div class="header-wrapper">
      <div class="div">
      </div>
      <div class="header-title">
        <h1>RE-UPDATE DETAILS</h1>
      </div>
      <div class="user-info">
      <div class="gango">
        <?php
          $sql=mysqli_query($con, "SELECT u_name from `admin` WHERE id='$id'");
          $row=mysqli_fetch_array($sql);
          $attorney=$row['u_name'];
          ?>
        <h3 class="my-account-header">
        <?php echo $attorney?>
          </h3>
        <p>MANAGER</p></div>   
        <button name="submit" type="submit" class="btn-3" >
          <a href="logout.php">LOGOUT</a>
        </button>
      </div>       
       </div>
       <div class="catch">
        <h1>NOTIFICATIONS</h1>
        <form action="" method="post" class="form-form">
          <div class="formation-1">
          <?php
          $id=$_GET['id'];
          $sql=mysqli_query($con, "SELECT * from `notifications` WHERE id='$id' ");
          $row = mysqli_num_rows($sql);
          if($row){
            while($row=mysqli_fetch_array($sql))
            { 
          ?>
          <label for="">ADD NOTE FOR EXPORTERS</label>
          <textarea name="u_notifications"  cols="30" rows="10"><?php echo $row['u_notifications']?></textarea>
        </div>
        <?php
            }
          }
        ?>
          <button name="submit" type="submit" class="btn-3" id="button-btn">NOTIFY NOW</a>
          </button>
        </form>
       </div>
      </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
  $u_notifications=$_POST['u_notifications'];
  $sql=mysqli_query($con,"UPDATE `notifications` SET u_notifications='$u_notifications' WHERE id='$id' ");
if($sql){
  echo "<script>alert('Saved the records successfully')</script>";
}
else{
  echo "<script>alert('Failed to Save your records ')</script>";
}
}
?>