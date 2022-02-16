<?php include_once "../base.php";  //先匯入base.php來取得$DB變數  ?>

<h3><?=$DB->upload;?></h3>
<hr>
                             
<form action="api/upload.php?do=<?=$DB->table;?>" method="post" enctype="multipart/form-data">    

    <table>
        <tr>
            <?php 
            switch($DB->table){ 
            case "graphic": 
            ?>

            <td>更新縮圖：</td>";
            <td><input type='file' name='img_sm'></td>"; 
            <td>更新原圖：</td>";
            <td><input type='file' name='img'></td>";

            <?php
            break;
            default:  
            ?> 

            <td><?=$DB->upload?>：</td>
            <td><input type='file' name='img'></td>
        <?php
        }
        ?>
            
        </tr>
        
    </table>
    <!-- 為了讓資料庫知道要更新的是哪一筆id -->
    <input type="hidden" name="id" value="<?=$_GET['id'];?>"> 
    <div><input type="submit" value="確定"><input type="reset" value="重置"></div>
    
</form>