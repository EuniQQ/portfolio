<?php include_once "../base.php";

$rows=$Color->all();
foreach($rows as $row){
    $checked=($row['theme']==1)?'checked':'';
}

//從資料庫中取得指定$id的顯示紀錄
$show=$Color->find(2);
// print_r($show);

//將紀錄中的顯示欄位(sh)值進行切換，在1(顯示),0(不顯示)之間切換
$show['theme']=($show+1)%2;



$Color->save($show['theme']);

to("../backend.php");

?> 