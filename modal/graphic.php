
<h3>新增平面設計作品</h3>
<hr>
             
<form action="api/add_graphic.php" method="post" enctype="multipart/form-data">    
                                    
    <table>
        
        <tr>
            <td>新增縮圖：</td>
            <td><input type="file" name="img_sm"></td> 
            <!-- name欄位跟資料表一致 -->
        </tr>
        
        <tr>
            <td>新增原圖：</td>
            <td><input type="file" name="img"></td> 
            <!-- name欄位跟資料表一致 -->
        </tr>

        <tr>
            <td>替代文字：</td>
            <td><input type="text" name="text"></td> 
        </tr>
    </table>

    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
    
</form>