<div class="container-fruid">
      <div class="row">
        <div class="col-12" style="position:relative;">

          <!-- 頁首大標&小臻臻  -->
          <img src="./img/title-2.png" class="title">
          <img src="./img/euniQQ.png" ; style="z-index:1;position:absolute;bottom:0px;right:-40px;width:35%">

          <!-- 頁首底圖 -->
          <?php
            $theme=$Color->find(2);
            if($theme['theme']==1){
              echo "<img src='./img/top_03.png' alt='日式版' class='topImg'>";
            }else{
          ?>
          <img src='./img/<?=$Title->find(['sh'=>1])['img'];?>' class='topImg'>
          <?php
            }
          ?>

        </div>
      </div>
    </div>