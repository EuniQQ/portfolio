<?php include "base.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="img/x-icon">
  <title>作品集</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./login.php">
</head>



 <?php
//  $colors=$Color->all();
//  foreach($colors as $color){  
?>

<body style="">
  <main class="mx-auto">
        <!--導覽列 nav -->
        <?php include "./front/nav.php"; ?>
        <!-- nav end -->

        <!--頁首圖 top img -->
        <?php include "./front/title.php" ?>
        <!-- top img end-->


        <!--自我介紹 About me -->
        <?php include "./front/intro.php" ?>
        <!--  about end-->


        <!-- frotfolio -->
        <!-- 網頁設計 -->
        <?php include "./front/web.php" ?>
        <!-- page 1 網頁設計 end-->

    <!-- Tabs -->
    <div>
      <ul id="frotfolio" class="nav nav-tabs justify-content-around " style='position:relative;z-index:2'>
                
        <!-- page-1 DM -->
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#page2">DM Disign</a>
          <!-- active是預設顯示頁，tab的a tag要加，下面tab-content的地方也要加 -->

        </li>

        <!-- page-2 Graphic Disign -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#page3">Graphic Disign</a>
        </li>

      </ul>
      <!-- Tabs end -->

    <content class="tab-content">
      
      <!--page 2 影像課DM -->
      <div id="page2" class="container-fruid tab-pane fabe py-5 active" style="background-color: rgb(252, 251, 251);"><br>
        <div class="row" style="justify-content:space-evenly;">

        <?=include "front/dm.php"?>

        <!-- p1 文字說明 -->
        <div id="psImg-3" class="col-lg-3 col-md-4 col-sm-8">
          <i class="fas fa-quote-right fa-5x" mb-2></i>
          <h4 style="letter-spacing: 8px;line-height: 40px;">PHOTOSHOP <br>ILLUSTRATOR <br><br>在職訓局受訓期間，除了網頁技術相關課程學習
            ，也得以在ADOBE軟體的應用上學習精進<br><i class="fas fa-palette fa-3x float-right"></i></h4>
        </div>
      </div>
    </div>
    <!-- page 2 end -->


    <!-- 以前作品 page 3 -->
    <div id="page3" class="container-gruid tab-pane fabe">
      <?= include "./front/graphic.php" ?>
    </div>
    <!-- </div> -->
    <!-- page 3 end -->

    </content>
    <!-- top button -->
    <div class="container" >
      <div class="row" >
        <a id="top" href="#top" class="col-12 text-center font-weight-bold mt-5"
          style="text-align:center;color:rgb(90, 120, 1)"><i class="arrow fas fa-chevron-circle-up fa-2x"></i></a>

      </div>
    </div>
    <!-- top button end -->


    <!--頁尾聯絡資訊 bottom -->
    <footer id="contact" class="footer row mt-5 pt-5 text-white">
      <?=include "./front/bottom.php" ?>
    </footer>
    <!-- bottom end -->

<?php
//  }
?>
    <!-- 燈箱效果 -->
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- 燈箱效果end -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
      integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
      crossorigin="anonymous"></script>

    <script>

      $(document).ready(function () {
        $(".nav-tabs a").click(function () {
          $(this).tab('show');
        });

        $(".nav-link").on('click', function () {
          $('a').removeClass('active');
          $(this).addClass('active');
        })


        $('.imgDark').on('mouseover', function () {
          $(this).siblings('.imgTitle').removeClass('d-none');
          $(this).siblings('.imgTitle').addClass('d-1');
        })

        $(".imgDark").on("mouseout", function () {
          $(this).siblings('.imgTitle').addClass('d-none');
          $(this).siblings('.imgTitle').removeClass('d-1');
        })

      });









    </script>
  </main>
</body>

</html>