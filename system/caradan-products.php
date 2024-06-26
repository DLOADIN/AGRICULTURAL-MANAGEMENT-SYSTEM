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
         <div class="fire-base">
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
        </div>
        <div class="type">
          <div class="fortitude">
              <div class="cardido">
          <h1>WEEKLY REPORT</h1>
      <?php
// Assuming $con is your database connection

// Select distinct weeks and years from the database
$weeksQuery = mysqli_query($con, "SELECT DISTINCT WEEK(u_date, 1) as week, YEAR(u_date) as year FROM `foods` ORDER BY year DESC, week DESC");

// Initialize variables for grouping
$currentWeek = null;
?>
    <?php
    // Iterate over the weeks
    while ($weekRow = mysqli_fetch_array($weeksQuery)) {
        // Get week and year
        $week = $weekRow['week'];
        $year = $weekRow['year'];

        // Calculate the start and end date of the week
        $startDate = new DateTime();
        $startDate->setISODate($year, $week);
        $endDate = clone $startDate;
        $endDate->modify('+6 days');

        // Format the start and end date
        $formattedStartDate = $startDate->format('M j');
        $formattedEndDate = $endDate->format('M j Y');

        // Select records for the current week and year
        $recordsQuery = mysqli_query($con, "SELECT * FROM `foods` WHERE WEEK(u_date, 1) = $week AND YEAR(u_date) = $year ORDER BY u_date DESC");

        // Display title for the week
        echo '<h2 class="caradan-h1">Week ' . sprintf('%02d', $week) . ', ' . $formattedStartDate . ' - ' . $formattedEndDate . '</h2>';
        
        // Open container for the week
        echo '<div class="caradan">';

        // Iterate over the records
        while ($row = mysqli_fetch_array($recordsQuery)) {
            ?>
            <div id="caradan-city">
                <h1><?php echo $row['u_name']?></h1>
                <h3>EXPORT VOLUME: <?php echo $row['u_type']?></h3>
                <h3>EXPORT REVENUE: <?php echo $row['u_revenue']?></h3>
                <h3>TOTAL PRICE: <?php echo $row['u_price']?></h3>
                <h4>Recorded Date: <?php echo $row['u_date']?></h4>
            </div>
            <?php
        }
        
        // Close the container for the week
        echo '</div>';
    }
    ?>
</div>

          <div class="shaka-zulu">
          <img src="./images/WhatsApp Image 2024-05-12 at 21.51.57_7a5e4a96.jpg" alt="">
          </div>
         </div>
         <style>
          .tey{
          border-radius:8px;
          padding: 10px 5px;
          background: #338C25;
          width:60%;
          font-size:28px;
          color:white;
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
          .caradan{
            display:grid;
            justify-content: center;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            margin:0vw 0vw 0vw 6vw;
          }
          .caradan-h1{
            margin:0vw 0vw 0vw 6vw;
          }
          .fortitude h1,.cardido h1{
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
          background-color: rosybrown;
          padding: 1rem 3rem 3rem 3rem;
          margin-bottom: 2rem;
          margin-left: .5rem;
          margin-right: 0rem;
          margin-top: 2rem;
        }
         </style>
        </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
