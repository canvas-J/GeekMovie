<?php 
  if (isset($_POST['lid'])) {
    session_start();
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>极客影院</title>
  <link rel="shortcut icon" href="./0.jpg">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/css.css">

  <script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="./js/myjs.js"></script>
  <script src="https://cdn.bootcss.com/masonry/4.1.1/masonry.pkgd.min.js"></script>
</head>

<body>
  <!-- 导航栏 start -->
  <?php include("headnav.php") ?>
  <!-- 导航栏 end -->
  <div class="container">
    <?php 
      if (isset($_POST['navsearchsubmit'])) {
        include("searchlist.php");
      }else{
        include("carousel.php");
        include("collection.php");
        include("recommend.php");
      }
     ?>
    <!-- 底部 start -->
    <?php include("footer.php") ?>
    <!-- 底部 end -->
    </div>
</body>
</html>