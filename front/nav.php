<div class="container-fruid">
  <div class="row" id="top">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:80px;">
        <img src="./img/logo.png" alt="logo" class="navbar-brand" style="width:5%;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                                                            <!-- 兩顆切換鍵的位置父層 -->
        <div class="collapse navbar-collapse" id="navbarNav" style="position:relative;">

          <ul class="navbar-nav " >

            <?php  
              $rows=$Nav->all(['sh'=>1]);
              foreach($rows as $key =>$value){
            ?>

            <li class="nav-item">
              <a class="nav-link mx-3" href="<?=$value['href']?>">
                <?=$value['name']?>
              </a>
            </li>

              <?php
                }
              
            
                // 登入登出鍵切換
                if(isset($_SESSION['login'])){
              ?>
                <li class='nav-item'>
                <a class='nav-link mx-3' href='./api/logout.php'>LOG OUT</a>
                </li> 
                <button onclick="location.href='./backend.php'" class='btn btn-warning rounded-pill' style='float-right'>後台管理</button>
                
              <?php   
                }else{
              ?>

              <li class='nav-item'>
              <a class='nav-link mx-3' href='login.php'>LOG IN</a>
              </li>
    
              <?php
                }
              ?>           
             

            <!-- 風格切換鍵 -->                     
            <div style="position:absolute;right:0;">
              <!-- 預設 深色底-->
              <input type="button" class=" btn" onclick="location.href='../api/change_status.php?id=1'"
                style="background-color:rgb(160, 149, 143); border-radius:50%;width:40px;height:40px;">
              
                <!-- 淺色底 -->
              <input type="button" class="themeBtn btn" onclick="location.href='../api/change_status.php?id=2'"
                style="background-color:rgb(211, 204, 1); border-radius:50%;width:40px;height:40px;">
                
            </div>

          </ul>          
        </div>
      </nav>
    </div>
  </div>
</div>