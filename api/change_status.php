<?php include_once "../base.php";



//從資料庫中取得指定$id的顯示紀錄
$id=$_GET['id'];

if($id==1){   
    // echo "1111";
    $show=$Color->find(1);
    $show['theme']=1;
    $Color->save($show);

    $other=$Color->find(2);
    $other['theme']=0;
    $Color->save($other);

    
}else{
    // echo "222";
    $show=$Color->find(1);
    $show['theme']=0;
    $Color->save($show);

    $other=$Color->find(2);
    $other['theme']=1;
    $Color->save($other);
}   
    
// $row=$Color->find(1);
// $row['theme']=0;
// echo $Color->save($row);

to("../index.php");

?> 