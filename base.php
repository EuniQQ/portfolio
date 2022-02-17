<?php
date_default_timezone_set("Asia/Taipei");
session_start();


class DB{
    // 本機版
    // protected $dsn="mysql:host=localhost;charset=utf8;dbname=protfolio";
    // protected $user="root";
    // protected $pw='';
    // protected $pdo;
    
    // 遠端版
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=s1100421";
    protected $user="s1100421";
    protected $pw='s1100421';
    protected $pdo;
    
    //在base.php中的class DB中開放部份成員屬性為公開可讀取
    public $table;  //資料表名稱
    public $title;  //後台功能名稱
    public $button; //新增功能按鈕
    public $header; //黃色nev第一欄標題
    public $append; //黃色nev第二欄標題
    public $upload; //更新圖片彈出視窗用
    
    //在class DB中的建構式呼叫文字設定方法，
    //把各公開的屬性依資料表名稱設定為對應的內容
    public function __construct($table){
        $this->table=$table;   
        $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
        $this->setStr($table);  
        //在建構資料表時，去執行這個類別裡面setStr()這個function，並把$table帶入
        }

        
    private function setStr($table){
        switch($table){
            case "admin";
            $this->title="管理者帳號管理";
            $this->button="新增管理者帳號";
            $this->header="帳號";
            $this->append="密碼";
            break;

            case "web";
            $this->title="網頁設計作品管理";
            $this->button="新增作品";
            $this->header="作品圖片";
            $this->append="連結網址";
            $this->upload="更新圖片";
            break;

            case "dm";
            $this->title="平面設計作品管理";
            $this->button="新增作品";
            $this->header="作品圖片";
            $this->append="連結網址";
            $this->upload="更新圖片";
            break;

            case "graphic";
            $this->title="過去設計作品管理";
            $this->button="新增作品";
            $this->header="作品縮圖";
            $this->append="原圖";
            $this->upload="更新圖片";
            break;
            
            case "bottom";
            $this->title="頁尾聯繫資訊管理";
            $this->button="新增聯繫資訊";
            $this->header="聯繫方式";
            $this->append="連結";
            break;

            case "nav";
            $this->title="導覽列管理";
            $this->button="新增選項";
            $this->header="選項名稱";
            $this->append="連結網址";
            break;

            case "title";
            $this->title="首頁圖片管理";
            $this->button="新增首頁圖片";
            $this->header="首頁圖片";
            $this->append="替代文字";
            $this->upload="更新圖片";
            break;

            case "intro";
            $this->title="簡介內容管理";
            $this->button="上傳照片";
            $this->header="照片";
            $this->append="自我介紹";
            $this->upload="更新照片";
            break; 

                    }
    }

    // function find
    public function find($id){
        $sql="SELECT * FROM $this->table WHERE ";
          //如果$id是陣列表示是條件，如果不是陣列表示是值
        if(is_array($id)){
            foreach($id as $key => $value){ 
                $tmp[]="`$key`='$value'";  
            }

            $sql .= implode(" AND ",$tmp); 
        }else{
            $sql .= " `id`='$id'"; 
        }
        //  echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    // function all
    public function all(...$arg){
        $sql="SELECT * FROM $this->table "; //先不加WHERE因做分頁時可能有沒有條件的情況


        switch(count($arg)){
            case 2: //兩個參數的狀況
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;

            case 1:  //一個參數的狀況
                if(is_array($arg[0])){

                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];

                }
            break;
        }
            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // function math 
    public function math($method,$col,...$arg){
        $sql="SELECT $method($col) FROM $this->table ";

        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;
            case 1:
                if(is_array($arg[0])){
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];
                }
                break;
        }

        return $this->pdo->query($sql)->fetchColumn();
    }

    // function save 
    public function save($array){
        if(isset($array['id'])){
            //update
            foreach($array as $key => $value){
                $tmp[]="`$key`='$value'";
            }

            $sql="UPDATE $this->table
                        SET ".implode(",",$tmp)."
                        WHERE `id`='{$array['id']}'";

        }else{
        //insert
            $sql="INSERT INTO $this->table (`".implode("`,`",array_keys($array))."`)
                                    VALUES('".implode("','",$array)."')";
        }

        return $this->pdo->exec($sql);  //exec=執行
    }                         

    //function del
    public function del($id){  
        $sql="DELETE FROM $this->table WHERE ";
        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]="`$key`='$value'";
            }

            $sql .= implode(" AND ",$tmp);
        }else{
            $sql .= " `id`='$id'";
        }                          
        return $this->pdo->exec($sql);
    }


    public function q($sql){
       //return這個物件的pdo去查詢
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

}


    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    
    function to($url){
        header("location:".$url);
    }
    
//用大寫表示後面常用到的變數，代表是資料表
    $Title=new DB('title');
    $Bottom=new DB('bottom');
    $Graphic=new DB('graphic');
    $Web=new DB('web');
    $Dm=new DB('dm');
    $Intro=new DB('intro');
    $Admin=new DB('admin');
    $Nav=new DB('nav');
    $Color=new DB('color');



    $tt=$_GET['do']??''; 

    switch($tt){
        case "admin":
            $DB=$Admin;
        break;
        case "graphic":
            $DB=$Graphic;
        break;
        case "web":
            $DB=$Web;
        break;
        case "dm":
            $DB=$Dm;
        break;
        case "bottom":
            $DB=$Bottom;
        break;
        case "intro":
            $DB=$Intro;
        break;
        
        case "nav":
            $DB=$Nav;
        break;
        
        default:  //default後面不能接參數
            $DB=$Title;
        break;
        


    }


    




?>