<!-- <?php
include_once "base.php";

// if(!isset($_SESSION['login'])){
//     to('index.php');  
//     //如果沒有登入就導回首頁，不能去後台
// }
// ?> 

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>後台管理系統</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
	<style>
		.menu-style{
			color:#000; font-size:13px; text-decoration:none;
		}
        a{
            text-decoration:none;
        }
        a:hover{
            text-decoration:underline;
        }

        body{
            background-color:white;
            margin:0;
        }
	</style>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(`#cover`)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

        <!-- 頁首 -->
    <div id="main">
        <a href='index.php' style="position:relative;">
            <img src="./img/logo_2.png" alt="logo_white" class="backendLogo">
            <div class="ti" >
                <h2 class="backendTitle">作品集管理系統</h2>
            </div>
        </a>
        <!--標題-->
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單-->
                    <span class="t botli">後台管理選單</span>
                    <a class="menu-style" href="?do=nav">
                        <div class="mainmu">導覽列管理 </div>
                    </a>
                    <a class="menu-style" href="./backend.php?do=title">
                        <div class="mainmu ">首頁圖片管理 </div>
                    </a>
                    <a class="menu-style" href="?do=intro">
                        <div class="mainmu">簡介內容管理 </div>
                    </a>
                    <a class="menu-style" href="?do=web">
                        <div class="mainmu">網頁設計作品管理 </div>
                    </a>
                    <a class="menu-style" href="?do=dm">
                        <div class="mainmu">平面設計作品管理 </div>
                    </a>
                    <a class="menu-style" href="?do=graphic">
                        <div class="mainmu">過去設計作品管理 </div>
                    </a>
                    <a class="menu-style" href="?do=bottom">
                        <div class="mainmu">頁尾版權及聯繫資料管理 </div>
                    </a>
                    <a class="menu-style" href="?do=admin">
                        <div class="mainmu">管理者帳號管理 </div>
                    </a>
                    
                    <div style="width:100%">
                        <button onclick="location.replace(`../api/logout.php`)"
                        style="width:90%; height:85px;display:block;font-size:large;">管 理 登 出</button>
                    </div>
                </div>
            </div>
            <!-- 主選單結束 -->

            <!--正中央-->
            <div class="di"
                style="height:610px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                
                <?php

								$do=(isset($_GET['do']))?$_GET['do']:'title';
								$file="backend/".$do.".php";
								// 先判斷檔案是否存在
								if(file_exists($file)){
									include $file;
								}else{
									include "backend/title.php";
								}
	

							?>
            </div>
            <div style="clear:both;"></div>
            <div
            class="footer">
                <span class="colorBtn brown" style="background-color:#999900;"></span>
                <span class="colorBtn purple" style="background-color:rgb(124, 94, 123);"></span>
                <span class="colorBtn blue" style="background-color:rgb(74, 126, 161);"></span>
                <!-- <span class=" text-center t" style="line-height:80px;display: inline-block;">&copy; copyright by Eunice Chang</span> -->
               
            </div>
        </div>

       <script>
           $(document).ready(function(){
               $('.brown').click(function(){
                    $('.ti').css('background-color','#999900');  //標題列
                    $('.yel td').css('background-color','#EEE8AA'); //分頁欄位
                    // $('.yel td').css('background-color','#BDB76B'); //分頁欄位
                    $('.footer').css('background-color','#CCCC99'); //頁尾
                    $('.dbor').css('background-color','	#FFFAFA'); //選單列
                    });

                
           });   
       </script>
</body>

</html>