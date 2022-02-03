<?php
include_once "../base.php";
foreach($_POST['id'] as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        //刪除
        $DB->del($id);

    }else{
        //更新
        $data=$DB->find($id);

        switch($DB->table){
            case "title":
                $data['text']=$_POST['text'][$key];
                $data['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "admin":
                $data['acc']=$_POST['acc'][$key];
                $data['pw']=$_POST['pw'][$key];
            break;
            case "nav":
                $data['name']=$_POST['name'][$key];
                $data['href']=$_POST['href'][$key];
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "bottom":
                $data['icon']=$_POST['icon'][$key];
                $data['text']=$_POST['text'][$key];
                $data['href']=$_POST['href'][$key];
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            default:
            //works,info,graphic
                $data['text']=isset($_POST['text'])?$_POST['text'][$key]:'';
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;

        }

        //dd($data);
        $DB->save($data);
    }

}

to("../backend.php?do=".$DB->table);

?>