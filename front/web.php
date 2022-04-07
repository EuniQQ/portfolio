<div id="page1" class="container-fruid tab-pane"><br>
<!-- 網頁設計相關作品 -->
          <?php
        $webs=$Web->all(['sh'=>1]);
       
        ?>

          <div class="row">

            <!-- 第一層 -->
            <!-- 萬年曆 -->
            <div class="col-md-4 col-sm-12 p-0 ">
              <a href="<?=$webs[0]['href']?>">
                <h2 class="imgTitle text-center font-weight-bold mx-auto d-none">
                  <?=$webs[0]['text']?>
                </h2>
                <img src="./img/<?=$webs[0]['img']?>" class="imgDark ptfloImg" style="background-color:rgb(206, 203, 176)">
              </a>
            </div>
            
            <div class="pfloText col-md-4 col-sm-12 p-0 d-flex align-items-center justify-content-center">
              <h3 class="text-center font-weight-bold ">P H P<br>AJAX</h3>
            </div>

            <!-- api串接 -->
            <div class="col-md-4 col-sm-12 p-0" style="background-color:rgb(240, 234, 222);">
            <a href="<?=$webs[3]['href']?>">
                <h2 class="imgTitle text-center font-weight-bold mx-auto d-none">
                  <?=$webs[3]['text']?>
                </h2>
                <img src="./img/<?=$webs[3]['img']?>" class="imgDark ptfloImg" style="background-color:rgb(206, 203, 176);margin:auto">
              </a>
            </div>
          </div>

          <div class="row">
            <!-- 第二層 -->
            <div class="pfloText col-md-4 col-sm-12 p-0 d-flex align-items-center justify-content-center">
              <h3 class=" text-left font-weight-bold" style="line-height: 50px;">HTML<br>CSS</h3>
            </div>
            <!-- 投票系統 -->
            <div class="col-md-4 col-sm-12 p-0 ">
              <a href="<?=$webs[1]['href']?>">
                <h2 class="imgTitle text-center font-weight-bold d-none"><?=$webs[1]['text']?></h2>
                <img src="./img/<?=$webs[1]['img']?>" class="imgDark ptfloImg">
              </a>
            </div>
            <div class="pfloText col-md-4 col-sm-12 p-0 d-flex align-items-center justify-content-center">
              <h3 class=" text-right font-weight-bold" style="line-height: 50px;">JAVASCRIPT<br>JQUERY
              </h3>
            </div>
          </div>
      </content>

      <div class="row  ">
        <!-- 第三層 -->
        <div class="col-md-4 col-sm-12 p-0" style="background-color:#e1e2b5;"></div>

        <div class="pfloText col-md-4 col-sm-12 p-0 d-flex align-items-center justify-content-center">
          <h3 class="text-center font-weight-bold ">BOOSTRAP<br>FIGMA</h3>
        </div>

        <!-- 展示書 -->
        <div class="col-md-4 col-sm-12 p-0" style="background-color:rgb(255, 255, 255);">
          <a href="<?=$webs[2]['href']?>">
            <h2 class="imgTitle text-center font-weight-bold d-none" style="left: 100px;"><?=$webs[2]['text']?></h2>
            <img src="./img/<?=$webs[2]['img']?>" class="imgDark ptfloImg" style="background-color:rgb(201, 229, 236)">
          </a>
        </div>
      </div>
    </div>

