    <?php
    $imgs = $Dm->all(['sh' => 1]);
    ?>
    <div class="d-flex p-5 ml-5">

      <!-- 旅遊DM -->
      <div id="psImg-1">
        <a href="<?= $imgs[0]['href'] ?>">
          <img src="./img/<?= $imgs[0]['img'] ?>" style="width:100%;">
          <h4 class="ps1text text-white mt-3"><?= $imgs[0]['text'] ?></h4>
        </a>
      </div>


      <!-- 2022年曆 -->
      <div id="psImg-2">
        <a href="<?= $imgs[1]['href'] ?>">
          <img src="./img/<?= $imgs[1]['img'] ?>" style="width:100%;margin-bottom:0px;">
          <h4 class="text-white mt-3 mx-5 "><?= $imgs[1]['text'] ?></h4>
        </a>
      </div>
    </div>