<?php include_once "../base.php";
        // math($method,$col,...$arg){}

    //debug方式:
    //echo "$Admin->math('count','*',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])"  
    //exec() 先暫停程式
if($Admin->math('count','*',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
    
    //如果帳密正確則建立一個session，用來表示登入的狀態
    $_SESSION['login']=$_POST['acc'];

    to("../backend.php");

}else{
    echo "<script>";
    echo "alert('帳號或密碼錯誤');";
    // echo "location.href='../index.php?do=login'";
    echo "location.href='../index.php'";
    echo "</script>";
}

?>