<div class="row">
      <?php
        $imgs=$Graphic->all(['sh'=>1]);
        foreach($imgs as $key=>$img){
      ?>

        <div class="col-lg-3 col-md-4 col-sm-6 mt-5 mx-auto">
          <a data-fancybox="gallery" href="./img/<?=$img['img'] ?>">
            <img src="./img/<?=$img['img_sm'] ?>" class="p3Img">
          </a>
        </div>

        <?php
        }
      ?>

      </div>
      
