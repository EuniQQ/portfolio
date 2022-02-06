<?php 

include_once "../base.php";

    //如果tmp_name(圖片暫存路徑)不是空白(表示上傳成功)
    if(!empty($_FILES['img']['tmp_name'] && $_FILES['img_sm']['tmp_name'])){
    //將圖片移到img資料夾並加上檔名
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];

    move_uploaded_file($_FILES['img_sm']['tmp_name'],"../img/".$_FILES['img_sm']['name']);
    $data['img_sm']=$_FILES['img_sm']['name'];
    //因為之後做save時是用陣列，先設一個變數，資料表的名稱就是欄位名稱
    //$data變數有img，圖片檔名就是上傳的圖片檔名

    $data['text']=$_POST['text'];
    $data['sh']=1;
    //找出資料表中目前id欄位最大的值
    $maxid=$Graphic->math('max','id');

    //資料列的rank屬性為id的最大值加1
    $data['rank']=$maxid+1;

    //在poster資料表中增加一筆資料，資料內容為上方的資料陣列內容
    $Graphic->save($data);
}
     


//因為有帶do的值過來，所以$DB這個變數一定存在($DB是bakend.php的大變數)
$DB->save($data);
to("../backend.php?do=".$DB->table);



?>