
<h3>新增頁尾聯絡資訊</h3>
<hr>
                             
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/-form-data">    
    <table>
        
        <tr>
            <td>icon連結：</td>
            <td><input type="text" name="icon"></td>
        </tr>

        <tr>
            <td>聯繫資訊：</td>
            <td><input type="text" name="text"></td>
        </tr>

        <tr>
            <td>連結：</td>
            <td><input type="text" name="href"></td>
        </tr>
    </table>
   <!-- 打法:div>input:submit + input>reset -->
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
    
</form>
