
<h3>新增作品圖片</h3>
<hr>
             
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">    
                                    
    <table>
        <tr>
            <td>網頁設計作品縮圖：</td>
            <td><input type="file" name="img"></td> 
            <!-- name欄位跟資料表是一致的 -->
        </tr>

        <tr>
            <td>Hover顯示作品文字：</td>
            <td><input type="text" name="text"></td> 
        </tr>

        <tr>
            <td>作品連結：</td>
            <td><input type="text" name="href"></td> 
        </tr>

    </table>
   <!-- 打法:div>input:submit + input>reset -->
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
    
</form>