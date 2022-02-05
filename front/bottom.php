

<?php
     
     $rows=$Bottom->all(['sh'=>1]);
     foreach($rows as $key => $value){
   ?>

     <div class="contactIfo text-center col-lg-4 ">
       <a href="<?=$value['href']?>" style="color: white;"><?=$value['icon']?><br><br><?=$value['text']?></a>
     </div>

   <?php
     }
   ?>


   <!-- copyright -->
   <div class="col-12 mt-5 py-2 ">
     <p class=" text-center ">&copy; copyright by Eunice Chang</p>
   </div>
   <!-- </div> -->
</div>