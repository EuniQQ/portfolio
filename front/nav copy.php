<div class="container-fruid">
      <div class="row" id="top">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:80px;">
            <img src="./img/logo.png" alt="logo" class="navbar-brand" style="width:5%;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ">
              
              <?php  
              $rows=$Nav->all(['sh'=>1]);
                foreach($rows as $key =>$value){
              ?>
                <li class="nav-item">
                  <a class="nav-link mx-3" href="<?=$value['href']?>"><?=$value['name']?></a>
                </li>

                <!-- 若有登入則NAV顯示LOG IN改成LOG OUT & 新增前往後台的按鈕-->
                <?php
                if(isset($_SESSION['login'])){
                  if($value['name']=='LOG IN'){
                    $value['name']='LOG OUT'; 
                    echo "<a href='backend.php'>
                          <button class='btn btn-warning rounded-pill' style='float-right'>後台管理
                          </button></a>";
                      }
                    }              
              }
                ?>
              </ul>

              <span class="colorBtn brown " style="background-color:#999900;float-right"></span>
            </div>
          </nav>
        </div>
      </div>
    </div>