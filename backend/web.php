<!-- <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;"> -->
<div style="width:100%; height:100%;margin:auto;overflow:auto; ">
    <p class="t cent"><?=$DB->title;?></p>
    
    <form method="post" action="api/edit.php?do=<?=$DB->table;?>">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="20%"><?=$DB->header;?></td>
                    <td width="30%">hover顯示文字</td>
                    <td width="40%"><?=$DB->append;?></td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                    <td width="10%">更新</td>
                </tr>
                
        <?php
           $rows=$DB->all();
           foreach($rows as $row){  
            $checked=($row['sh']==1)?'checked':'';
       ?>

           

           <tr>
                <td >
                  <img src="./img/<?=$row['img'];?>" style="width:150px;height:130px">
                </td>

                <td>
                   <input type="text" name="text[]" value="<?=$row['text']; ?>" style="width:70%">
                </td>
               
                <td>
                   <input type="text" name="href[]" value="<?=$row['href'];?>" style="width:80%">
                </td>
                               
                <td>
                   <input type="checkbox" name="sh[]" value="<?=$row['sh'];?>"<?=$checked;?>>
                </td>

                <td>
                   <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                </td>
                
                <td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    <!-- 更新圖片按鈕 -->
                    <input type="button"
                    onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload.php?do=<?=$DB->table;?>&id=<?=$row['id'];?>&#39;)" 
                    value="更新圖片">
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
                     <input type="reset" value="重置"></td>
           </tr>
       </table>    

   </form>
</div>