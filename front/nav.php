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
              ?>
              
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>