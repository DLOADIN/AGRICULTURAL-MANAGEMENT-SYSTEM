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
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../JS/js.js"></script>
  <title>DASHBOARD</title>
</head>
<body>
  <style>
    #main-contents{
      height: fit-content;
    }
    .caradan-products{
      text-decoration: none;
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
          <h1>DASHBOARD</h1>
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
          <p>Manager</p></div> 
          <button name="submit" type="submit" class="btn-3" >
            <a href="logout.php">LOGOUT</a>
          </button>
        </div>       
         </div>
         <!-- <div class="fire-base">
          <div class="base-1">
          <h3>TOTAL SYSTEM ADMINS</h3>
          <div class="grill">
            <div class="peng-black">
              <i class="fa-solid fa-xmark"></i></div>
            <h1>
              <?php
                 $sql=mysqli_query($con,"SELECT * from `admin`" );
                 if($row=mysqli_num_rows($sql));
                 { 
               ?>
               <tr>
                 <td><?php echo $row?></td></tr>
                 <?php
               }
                ?>
              </h1></div>
          </div>
          <div class="base-1">
          <h3>ACTIVE USERS</h3>
          <div class="grill">
            <div class="peng-black">
            <i class="fa-solid fa-person"></i></div>
            <h1>
               <?php
                 $sql=mysqli_query($con,"SELECT * from `users`" );
                 if($row=mysqli_num_rows($sql));
                 { 
               ?>
               <tr>
                 <td><?php echo $row?></td></tr>
                 <?php
               }
                ?>
              </h1>
          </div>
         </div>
        </div> -->
        <style>
          .pray-pray{
            background:#8C6831;
            opacity:80%;
            color:white;
            text-align:center;
            width:fit-content;
            height:fit-content;
            border-radius: 5px;
            padding:20px 30px;
            font-size:20px;
            margin:auto;
            align-items: center;
          }
          .la-rossse{
            background:url('./images/WhatsApp Image 2024-05-21 at 22.00.03_eb2036b5.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:initial;
            height:50vh;
            padding-top: 10rem;
            margin-bottom: 3rem;
          }
        </style>
        <div class="la-rossse">
          <div class="pray-pray">
            <h3>
            In 2023, Cameroon exported a total of $4.1B, making it the number 147 exporter in <br>
the world. During the last five reported years the exports of Cameroon have changed <br>
by $0.5B from $3.6B in 2018 to $4.1 in 2023
            </h3>
          </div>
        </div>
        <div class="type">
              <div class="collet">
                <h4>
                Exports of goods and services (% of GDP) in Cameroon was reported at 23 % in 2023, according to the <br>World Bank collection of development indicators, compiled from officially recognized sources
                </h4>
              </div>
              <div class="infant">
        <span>Cameroon Tea Auction at EATTA No 21 (USD)</span>
        <hr>
        <span>Cameroon Coffee Auction at EATTA No 43 (USD)</span>
        <hr>
        <span>Cameroon Auction at EATTA No 19 (USD)</span>
      </div>
    </div>
    <div class="container-index">
      <h1>Export Prices and Statistics</h1>
      <h3 class="flack-flack">Below are the export details on weekly basis in Rwanda</h3>
    </div>
              <div class="cardido">
          <div class="caradan-container">
          <a class="caradan-products" href="caradan-products.php">
          <div class="caradan">
          <?php
            $sql = mysqli_query($con, "SELECT * 
            FROM `foods` 
            WHERE u_name = 'horticulture' 
            ORDER BY ABS(DATEDIFF(`u_date`, CURDATE())) 
            LIMIT 1;");
            $row_count = mysqli_num_rows($sql);
            if ($row_count) {
                while ($row = mysqli_fetch_array($sql)) {
            ?>
            <div id="caradan-city">
            <h1><?php echo $row['u_name']?></h1>
            <h3>THE CURRENT EXPORT VOLUME: <?php echo $row['u_type']?></h3>
            <h3>THE CURRENT EXPORT REVENUE:<?php echo $row['u_revenue']?></h3>
            <h3>THE CURRENT TOTAL PRICE: <?php echo $row['u_price']?></h3>
            <h4>Recorded Date: <?php echo $row['u_date']?></h4>
          </div>
          <?php
        }
    }
?>
          </div>
          </a>
          <a class="caradan-products" href="caradan-products.php">
          <div class="caradan">
          <?php
            $sql = mysqli_query($con, "SELECT * 
            FROM `foods` 
            WHERE u_name = 'coffee' 
            ORDER BY ABS(DATEDIFF(`u_date`, CURDATE())) 
            LIMIT 1;");
            $row_count = mysqli_num_rows($sql);
            if ($row_count) {
                while ($row = mysqli_fetch_array($sql)) {
            ?>
            <div id="caradan-city">
            <h1><?php echo $row['u_name']?></h1>
            <h3>THE CURRENT EXPORT VOLUME: <?php echo $row['u_type']?></h3>
            <h3> THE CURRENT EXPORT REVENUE:<?php echo $row['u_revenue']?></h3>
            <h3> THE CURRENT TOTAL PRICE: <?php echo $row['u_price']?></h3>
            <h4>Recorded Date: <?php echo $row['u_date']?></h4>
          </div>
          <?php
        }
    }
?>
          </div>
          </a>
          <a class="caradan-products" href="caradan-products.php">
          <div class="caradan">
          <?php
            $sql = mysqli_query($con, "SELECT * 
            FROM `foods` 
            WHERE u_name = 'tea' 
            ORDER BY ABS(DATEDIFF(`u_date`, CURDATE())) 
            LIMIT 1;");
            $row_count = mysqli_num_rows($sql);
            if ($row_count) {
                while ($row = mysqli_fetch_array($sql)) {
            ?>
            <div id="caradan-city">
            <h1><?php echo $row['u_name']?></h1>
            <h3>THE CURRENT EXPORT VOLUME: <?php echo $row['u_type']?></h3>
            <h3>THE CURRENT EXPORT REVENUE:<?php echo $row['u_revenue']?></h3>
            <h3>THE CURRENT TOTAL PRICE: <?php echo $row['u_price']?></h3>
            <h4>Recorded Date: <?php echo $row['u_date']?></h4>
          </div>
          <?php
        }
    }
?>
          </div></div>
          </a>
          </div>
          <div class="shaka-zulu">
          <div class="fortitude">
          <h1>Daily Market Alerts and Notifications</h1>
              <?php
                  $sql=mysqli_query($con,"SELECT id, u_notifications from `notifications`" );
                  $row_count = mysqli_num_rows($sql);
                  if($row_count > 0) {
                      while($row=mysqli_fetch_array($sql)) {
              ?>
                      <p class="tey"><?php echo $row['u_notifications'];?><br><br><button class="lebutton"><a href="update-notifications.php?id=<?php echo $row['id']?>">RE-MODIFY NOTIFICATIONS</a></button></p>
                      
              <?php
                      }
                  }
              ?>
              </div>
          <img src="./images/WhatsApp Image 2024-05-12 at 21.51.57_7a5e4a96.jpg" alt="">
          </div>
         
         <style>
         .collet h4{
          text-align:center;
          font-size:32px;
          color:black;
          font-weight: lighter;
         }

          .tey{
          border-radius:8px;
          padding: 10px 5px;
          background: #E9F2E5;
          width:60%;
          font-size:28px;
          color:black;

          text-align: center;
          font-weight:bold;
          margin:1vw 0vw 3% 22%;
          border-radius: 7px;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
          }
          
          #caradan-city:hover{
          transition: .7s all ease-in;
          transform: scale(1.1);
          }
          #caradan-city{
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
          border-radius:8px;
          padding: 10px 5px;
          background: #338C25;
          width:fit-content;
          font-size:20px;
          color:white;
          text-align: center;
          font-weight:bold;
          box-sizing: border-box;
          margin: 1rem;
          }
          #caradan-city h1{
            text-align: center;
            margin:1rem
          }
          #caradan-city h3{
            text-align: center;
            margin:1rem;
          }
          .shaka-zulu img{
            width:67%;
            border-radius: 7px;
            margin:1rem 0rem 3rem 15rem;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
          }
          .shaka-zulu{
            align-items: center;
            justify-content: center;
            float: none;

          }
          #caradan-city h4{
            text-align: center;
            margin:4rem 1rem 1rem 1rem;
          }
          
          .fortitude h1{
            margin:8rem 0rem 0rem 26.5rem;
            font-size:30px;
            color:black;
          }
          .cardido h1{
            text-align: center;
            font-size:30px;
          }
          .lebutton a{
            text-decoration: none;
            color:#33622B;

          }
        .lebutton:hover{
          transition: .7s all ease-in;
          transform: scale(1.1);
        }
        .infant{
        display: flex;
        text-align: center;
        background: #E9F2E5;
        width:fit-content;
        border-radius: 5px;
        margin:2vw 2vw 2vw 13vw;
      }
      hr{
        color: green;
        background-color: green;
        height: 80px;
        width:3px;
        margin: 1.7rem 1rem 1rem 1rem;
      }
      .infant span{
        margin:1rem;
        padding: 2rem;
        font-size: 17px;
        font-weight: bold;
        color:#000000;
      }
        .lebutton {
          border-radius: 40px;
          width:70%;
          height: 38px;
          border: none;
          outline: none;
          cursor: pointer;
          font-size: 1em;
          font-weight: 800;
          border-radius: 15px;
          background-color: white;
          padding: 1rem 3rem 3rem 3rem;
          margin-bottom: 2rem;
          margin-left: .5rem;
          margin-right: 0rem;
          margin-top: 2rem;
        }
        .caradan-container{
          display:grid;
          grid-template-columns: 1fr 1fr 1fr;
        }
        .cardido{
          background:#E9F2E5;
          padding:3rem;
        }
        .container-index h1{
          font-size:47px;
        }
        .container-index h3{
          margin-top: 1rem;
        }
        .container-index{
         text-align: center;
         padding: 3rem;
         display: block;
         color:black;
  }
         </style>
        </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
