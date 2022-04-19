<div class="container-fruid">
      <div class="row">
        <div class="col-12">

          <!-- 頁首大標 -->
          <img src="./img/title-2.png" class="bigTitle" style="position:relative;z-index:1;margin-left:30%;width:80%;">
          <!-- 小臻臻 -->
          <img src="./img/euniQQ.png" class="euniQQ" >

          <!-- 頁首底圖 -->
          <?php
            $theme=$Color->find(2);
            if($theme['theme']==1){
          ?>
              <img src='./img/top_03.png' alt='日式版' class='pic'>
          <?php
            }else{
          ?>
          <img src='./img/<?=$Title->find(['sh'=>1])['img'];?>' class='pic' >
          <?php
            }
          ?>

        </div>
      </div>
    </div>