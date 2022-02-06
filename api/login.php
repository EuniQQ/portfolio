<?php include_once "../base.php";

$chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if($chk>0){
    $_SESSION['admin']=1;
    to("../backend.php?do=title");
}else{
    echo "<script>";
    echo "alert('帳號密碼錯誤');";
    // echo "location.href='../index.php?do=login'";
    echo "location.href='../index.php'";
    echo "</script>";
}

?>

<!-- <?php


$chk=$Admin->all();

if(!empty($_POST)){
    if($_POST['acc']==$chk['acc'] && $_POST['pw']==$chk['pw']){
        to("../backend.php");
    }else{
        echo "<script>";
        echo "alert('帳號或密碼錯誤')";
        echo "</script>";
        echo "location.href='../index.php'";
    }
}

?> -->