
<h3>新增導覽列選項</h3>
<hr>
                             
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/-form-data">    
    <table>
        
        <tr>
            <td>選項名稱：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>選項連結：</td>
            <td><input type="text" name="href"></td>
        </tr>
    </table>
   <!-- 打法:div>input:submit + input>reset -->
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
    
</form>
