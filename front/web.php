<div id="page1" class="container-fruid tab-pane"><br>

          <?php
        $webs=$Web->all(['sh'=>1]);
        // foreach($rows as $key=>$value){
        ?>

          <div class="row">

            <!-- 第一層 -->
            <div class="col-md-4 col-sm-6 p-0 ">
              <a href="<?=$webs['href'][1]?>">
                <h2 class="imgTitle text-center font-weight-bold mx-auto d-none">
                  <?=$webs['text'][1]?>
                </h2>
                <img src="./<?=$webs['img'][1]?>" class="imgDark ptfloImg" style="background-color:rgb(206, 203, 176)">
              </a>
            </div>
            <div class="pfloText col-md-4 col-sm-6 p-0 d-flex align-items-center justify-content-center">
              <h2 class="text-center font-weight-bold ">P H P</h3>
            </div>
            <div class="col-md-4 col-sm-0 p-0" style="background-color:rgb(240, 234, 222);">


            </div>
          </div>

          <div class="row">
            <!-- 第二層 -->
            <div class="pfloText col-md-4 col-sm-6 p-0 d-flex align-items-center justify-content-center">
              <h2 class=" text-left font-weight-bold" style="line-height: 50px;">HTML<br>CSS</h2>
            </div>
            <div class="col-md-4 col-sm-6 p-0 ">
              <a href="http://220.128.133.15/s1100421/polling/index.php">
                <h2 class="imgTitle text-center font-weight-bold d-none">Polling<br>投 票 系 統</h2>
                <img src="./img/polling.png" class="imgDark ptfloImg">
              </a>
            </div>
            <div class="pfloText col-md-4 col-sm-6 p-0 d-flex align-items-center justify-content-center">
              <h2 class=" text-right font-weight-bold" style="line-height: 50px;">JAVASCRIPT<br>JQUERY
              </h2>
            </div>
          </div>
      </content>

      <div class="row  ">
        <!-- 第三層 -->
        <div class="col-md-4 col-sm-12 p-0" style="background-color:#e1e2b5;"></div>

        <div class="pfloText col-md-4 col-sm-6 p-0 d-flex align-items-center justify-content-center">
          <h2 class="text-center font-weight-bold ">BOOSTRAP</h2>
        </div>

        <div class="col-md-4 col-sm-6 p-0" style="background-color:rgb(255, 255, 255);">
          <a href="http://220.128.133.15/s1100421/story/index.php?page=1&language=Chinese">
            <h2 class="imgTitle text-center font-weight-bold d-none" style="left: 100px;">Story<br>五 頁 式 展 示 書</h2>
            <img src="./img/story.png" class="imgDark ptfloImg" style="background-color:rgb(201, 229, 236)">
          </a>
        </div>
      </div>
    </div>

