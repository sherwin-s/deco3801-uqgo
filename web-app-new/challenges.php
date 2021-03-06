<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UQGO - Challenges</title>
    <script src="./js/Chart.js"></script>
    <?php include "./php/page-elements/header.php";?>
    <script type="text/javascript">
      $(document).ready(function() {
          $("#nav-item-challenges").addClass("nav-active-item"); // highlight corresponding nav item in sidebar
          loadModule('challenges-inprogress-module.php');
      });
    </script>
  </head>
  <body>
    <?php include "./php/page-elements/sidebar.php";?>
    <?php include "./php/page-elements/notification-tray.php";?>
    <div class="content">
        <h1>Challenges</h1>
        <nav>
          <a onClick="highlightNavItem(this); loadModule('challenges-inprogress-module.php');" class="subnav-active-item">In Progress</a>
          <a onClick="highlightNavItem(this); loadModule('challenges-completed-module.php');">Completed</a>
          <a onClick="highlightNavItem(this); loadModule('challenges-discover-module.php');">Discover</a>
        </nav>
        <div class="module-content">
          <!-- module content will load here automatically -->
        </div>
    </div>
  </body>
</html>