<h3>新增首頁圖片</h3>
<hr>
             
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">    
                                      <!-- 有上傳檔案就需要打enctype="multipart/-form-data -->
    <table>
        <tr>
            <td>首頁圖片：</td>
            <td><input type="file" name="img"></td>
        </tr>
        
    </table>

    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
    
</form>