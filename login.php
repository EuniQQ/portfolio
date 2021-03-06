<?php

if(isset($_SESSION['login'])){
    to("backend.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logIn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body{
            background-image: url(./img/logIn_bg.png);
            background-size:  100% auto  ;
        }

        .container{
            background-color: rgb(253, 252, 252);
            box-shadow: 0 0 0 20px white;
            opacity:0.5;


        }

        .container:hover{
            opacity:1;
            
        }

    </style>
</head>
<body>

<div class="container my-5 p-5 " style="border:1px solid rgb(43, 43, 43)">
    <div class="row">
       <div class="col-lg-8 col-md-6 col-sm-6 mx-auto ">

            <form method="post" action="./api/login.php" >

                <h1 class="py-3  logInText">WELCOME</h1>
                <h1 class="mt-3 mb-5">HOME！</h1>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="logInText" style="text-align: center;" >ACCOUNT</label>
                  <input type="text" class="form-control" name='acc' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter account">

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="logInText mt-3">PASSWORD</label>
                  <input type="password" class="form-control " name='pw' id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <!-- <div class="form-check my-4">
                  <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  <label class="form-check-label " for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-info mx-auto">Submit</button>
                <button type="btn" class="btn btn-warning mx-auto"><a href="index.php" class="text-white">Home</a></button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>




</body>
</html>