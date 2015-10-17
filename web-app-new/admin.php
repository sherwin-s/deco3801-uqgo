<?php 

//Start session 
session_start();

// If session is empty, return to admin login page
if(empty($_SESSION['admin_id'])){
    header('Location: /v0-5/admin-login.php');
  }    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UQGO - Administrator</title>
    <?php include "./php/page-elements/header.php";?>
    <link rel="stylesheet" href="./css/admin.css">
    <script src="./js/Chart.js"></script>
  </head>
  <body class="admin">
    <div class="sidebar">
        <div class="user-display">
            <p>Administrator</p>
        </div>
        <nav>
            <a href="admin.php" id="nav-item-report" class="nav-active-item"><i class="fa fa-area-chart fa-fw"></i>&nbsp;Reports</a>
            <a href="./php/function/admin_logout.php" id="nav-item-logout"><i class="fa fa-close fa-fw"></i>&nbsp;Logout</a>
        </nav>
    </div>
    <div class="content">
        <h1>Reports</h1>
        <div class="module-content">
          <form class="report-filter-form">
            <p><label>Age</label><input type="number" placeholder="Mininum"><input type="number" placeholder="Maximum"></p>
            <p><label>Gender</label><input type="checkbox" value="Male"><label class="checkbox-label">Male</label><input type="checkbox" value="Female"><label class="checkbox-label">Female</label></p>
            <p><label>Height</label><input type="number" placeholder="Mininum"><input type="number" placeholder="Maximum"></p>
           <p> <label>Weight</label><input type="number" placeholder="Mininum"><input type="number" placeholder="Maximum"></p>
            <p><label>Steps</label><input type="number" placeholder="Mininum"><input type="number" placeholder="Maximum"></p>
            <p><label>Distance</label><input type="number" placeholder="Mininum"><input type="number" placeholder="Maximum"></p>
            <p><label>Calories</label><input type="number" placeholder="Mininum"><input type="number" placeholder="Maximum"></p>
            <p><label>Date</label><input type="text" placeholder="From"><input type="text" placeholder="To"></p>
            <input type="submit" value="Generate" class="button-primary"><input type="reset" value="Clear">
          </form>
        </div>
    </div>
  </body>
</html>