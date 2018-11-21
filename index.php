<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css">
  </head>
  <body>

    <?php

      session_start();

      $url = $_SERVER["PHP_SELF"];

      if($_SESSION[$url]){
          $_SESSION[$url]["visits"] +=1;
          $_SESSION[$url]["time"] = time();
      }else{
        $_SESSION[$url]=["url"=>$url,"visits"=>1, "time"=>time()];
      }

    ?>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><b>בית</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">אודות <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">צור קשר <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="data.php">דף מידע אודות פעילות באתר <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron">
      <h1 class="display-4">דף הבית</h1>

      <?php
        if(strpos($_SERVER["HTTP_REFERER"],"prog")){
          echo "<h4>ברוך הבא</h4>";
          echo "<h5>הועברת מדף ". $_SERVER["HTTP_REFERER"].".</h5>";
        }
      ?>
    </div>

  </body>
</html>
