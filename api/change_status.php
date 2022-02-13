<?php include_once "../base.php";



//從資料庫中取得指定$id的顯示紀錄
$id=$_POST['id'];
$show=$Color->find($id);


//將紀錄中的顯示欄位(sh)值進行切換，在1(顯示),0(不顯示)之間切換
$show['theme']=($show+1)%2;

$Color->save($show['theme']);

to("../backend.php");

?> 