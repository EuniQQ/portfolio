
<h3>新增作品圖片</h3>
<hr>
             
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">    
                                    
    <table>
        <tr>
            <td>類別：</td>
            <td>
                <input type="radio" name="pages" id="page1" value="1">
                <label for="page1">網頁設計</label>
                <input type="radio" name="pages" id="page2" value="2">
                <label for="page1">平面設計</label>
            </td> 
        </tr>

        <tr>
            <td>網頁設計作品縮圖：</td>
            <td><input type="file" name="img"></td> 
            <!-- name欄位跟資料表是一致的 -->
        </tr>

        <tr>
            <td>替代文字：</td>
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