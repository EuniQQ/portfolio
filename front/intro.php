    <!-- about 左半邊-->
    <content class="container-fruid" id="aboutMe">
      <div class="row">
       
        <div class="col-lg-6 col-md-12 col-sm-12" >

          <h1 class="aboutTitle mt-5 text-center">ABOUT</h1>
          <h1 class="aboutTitle ml-5 text-center ">// ME //</h1>
          
         
          <img src="./img/<?=$Intro->find(1)['img'];?>" class="euniImg mt-5 ">
          <img src="./img/dec_3.png" class="aboutImg-3">
          <img src="./img/dec_2.png" class="aboutImg-2">
        </div>

        <!-- about 右半邊 -->
        <div class="introduce col-lg-6 col-md-10 col-sm-12 mx-auto" style="position:relative;margin-top:150px;">
          <div class="textArea bg-white px-5 mx-auto">
            <h4 class="py-5" style="letter-spacing:4px;line-height:40px;z-index:2; ">
            <?=$Intro->find(1)['text'];?>
              <!-- <strong style="color:teal;font-size:28px">我是筠臻</strong>，求學時於復興美工科、台中科技大學
              商業設計系，學習美術工藝、平面設計等相關技能。並於基督教機構擔任美編設計。<br>
              <strong
                style="color:teal;font-size:28px">2021年</strong>決定跨出舒適圈，盼望所長與網頁媒體結合，因而進入泰山職訓局，接受920小時php資料庫網頁設計課程訓練，目前仍持續學習中。 -->
            </h4>
            <img src="./img/dec_1.png" class="aboutImg-1" style="z-index:1;">
          </div>
        </div>
      </div>
      </div>
    </content>