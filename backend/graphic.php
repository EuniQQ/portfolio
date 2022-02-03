<div style="width:100%; height:100%; ; overflow:auto; ">
    <p class="t cent botli"><?=$DB->title;?></p>
    
    <form method="post" action="api/edit.php">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="10%"><?=$DB->header;?></td>
                    <td width="30%">原圖連結</td>
                    <td width="30%">縮圖連結</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>


        <?php
           $rows=$DB->all();
           foreach($rows as $row){  
               $checked=($row['sh']==1)?'checked':'';
       ?>

           

           <tr>
               <td >
                   <img src="./img/<?=$row['img'];?>" style="width:120px;height:80px">
               </td>
               
               <td>
                   <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$checked;?>>
              
               </td>
               <td >
                   <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
 
               </td>
               <td>

           <input type="hidden" name="id[]" value="<?=$row['id'];?>">
           <!-- 更新動畫按鈕 -->
           <input type="button"
           onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload.php?do=<?=$DB->table;?>&id=<?=$row['id'];?>&#39;)" 
           value="更新動畫">
          
            </td>
        </tr>
   
        <?php  } ?>
   
       </table>

       <table style="margin-top:40px; width:70%;">
           <tr>
               <!-- 新增作品按鈕 -->
                <td width="200px"><input type="button"                   
                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$DB->table;?>.php?table=<?=$DB->table;?>&#39;)"
                value="<?=$DB->button?>">  
                </td>

                <td class="cent">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                </td>
               <!-- 彈出視窗modal(完整op function寫在js.js)  -->
               <!-- 在bake.php可找到，預設為display-none，所以看不到 -->
           </tr>
       </table>    

   </form>
</div>