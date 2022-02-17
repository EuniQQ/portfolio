<div style="width:100%; height:100%; overflow:auto; ">
    <p class="t cent"><?=$DB->title;?></p>
    
    <form method="post" action="api/edit.php?do=<?=$DB->table;?>">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="30%"><?=$DB->header?></td>
                    <td width="30%"><?=$DB->append?></td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>

                <?php

$rows=$Nav->all(['sh'=>1]);
foreach ($rows as $key => $value) {
?>
<tr>

    <td>
        <input type="text" name='name[]' value="<?=$value['name'];?>" style="width:90%">
    </td>
    <td>
        <input type="text" name="href[]" value="<?=$value['href'];?>" style="width:90%">
    </td>
   
    <td>
        <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=($value['sh']==1)?'checked':"";?>>    
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
            <table style="margin-top:40px; width:70%;">
         <tbody>
             <tr>
          <td width="200px"><input type="button"                                                  
              onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$DB->table;?>.php?table=<?=$DB->table;?>&#39;)" 
              value="<?=$DB->button;?>">
            </td>
              <td class="cent">
                  <input type="submit" value="修改確定">
                  <input type="reset" value="重置"></td>
            </tr>
        </tbody>
    </table>    

    </form>
</div>
</div>

