<div style="width:100%; height:100%; ; overflow:auto; ">
    <p class="t cent"><?=$DB->title;?></p>
    
    <form method="post" action="api/edit.php?do=<?=$DB->table;?>">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>
                </tr>

        <?php
        $rows=$Admin->all();
        foreach ($rows as $key => $value) {
        ?>
        
        <tr>
            <td>
                <input type="text" name='acc[]' value="<?=$value['acc'];?>" style="width:90%">
            </td>
            <td>
                <input type="password" name="pw[]" value="<?=$value['pw'];?>" style="width:90%">
            </td>
            <td>
                <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
            </td>
        
            <input type="hidden" name="id[]" value="<?=$value['id'];?>">
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
        
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                     <!-- 新增作品按鈕 -->
                    <td width="200px">
                        <input type="button"                                                  
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$DB->table;?>.php?table=<?=$DB->table;?>&#39;)"
                        value="<?=$DB->button;?>">
                    </td>
                    <td class="cent">
                      <input type="submit" value="修改確定">
                      <input type="reset" value="重置">
                    </td>
                    <!-- 彈出視窗modal(完整op function寫在js.js)  -->
                    <!-- 在bake.php可找到，預設為display-none，所以看不到 -->
                </tr>
            </tbody>
        </table>    


    </form>
</div>
</div>
