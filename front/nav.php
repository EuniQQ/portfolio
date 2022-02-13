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
                
              <?php
                }
            
                // 登入登出鍵切換
                if(isset($_SESSION['login'])){
                
                echo "<li class='nav-item'>";
                echo "<a class='nav-link mx-3' href='./api/logout.php'>LOG OUT</a>";
                echo "</li>"; 
                echo "<button onclick='location.href='backend.php' class='btn btn-warning rounded-pill' style='float-right'>後台管理</button>";
                   
                }else{
                echo "<li class='nav-item'>";
                echo "<a class='nav-link mx-3' href='login.php'>LOG IN</a>";
                echo "</li>";  
                }
                           
                ?>
              
               <!-- 風格切換鍵 -->
               <form action="./api/change_status.php">
              <button type="submit" id="2" class="themeBtn" 
                      style="background-color:rgb(255, 247, 0); border-radius:50%;width:40px;height:40px;}">
              </button>

              </form>



              </ul>
              
            </div>
          </nav>
        </div>
      </div>
    </div>