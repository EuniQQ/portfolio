<?php
include_once "../base.php";

 
switch($DB->table){ 
case "graphic": 
    if(!empty($_FILES['img']['tmp_name'] || $_FILES['img_sm']['tmp_name'] )){
        move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
        move_uploaded_file($_FILES['img_sm']['tmp_name'],"../img/".$_FILES['img']['name']);
        //先取出該筆資料
        $data=$DB->find($_POST['id']);
    
        //更新img欄位的內容
        $data['img']=$_FILES['img']['name'];
        $data['img_sm']=$_FILES['img_sm']['name'];
        
        //資料寫入資料表
        $DB->save($data);
    }
   
    break;
    default:  
              

    if(!empty($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

        //先取出該筆資料
        $data=$DB->find($_POST['id']);

        //更新img欄位的內容
        $data['img']=$_FILES['img']['name'];

        //資料寫入資料表
        $DB->save($data);
    }
}

to("../backend.php?do=".$DB->table);

?>