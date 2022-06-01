<div style="width:100%; height:100%; ; overflow:auto; ">
    <p class="t cent"><?=$DB->title;?></p>
    
    <form method="post" action="api/edit.php?do=<?=$DB->table;?>">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    
                    <td width="20%"><?=$DB->header;?></td>
                    <td width="30%"><?=$DB->append?></td>
                    <td width="20%">替代文字</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                    <td width="10%">更新</td>
                    <td width="10%">排序</td>
                </tr>


        <?php

            $rows=$DB->all(" ORDER by `rank`");
            // dd($rows);
            foreach($rows as $key => $row){
                $checked=($row['sh']==1)?"checked":"";
                //第一張 
                if($key==0){
                    $up=$row['id'] . "-" . $row['id'];
                    $down=$row['id'] . "-" . $rows[$key+1]['id'];
                }
                //最後一張
                if($key==(count($rows)-1)){
                    $down=$row['id'] . "-" . $row['id'];
                    $up=$row['id'] . "-" . $rows[$key-1]['id'];
                }
                //中間
                if($key>0 && $key<(count($rows)-1)){
                    $up=$row['id'] . "-" . $rows[$key-1]['id'];
                    $down=$row['id'] . "-" . $rows[$key+1]['id'];
                }

        ?>


                
            <tr>
                <td >
                    <img src="./img/<?=$row['img_sm'];?>" style="width:120px;height:80px">
                </td>
                <td >
                    <img src="./img/<?=$row['img'];?>" style="width:180px;height:120px">
                </td>
                <td>
                    <input type="text" name="text[]" value="<?=$row['text'];?>">
                </td>
                <td>
                    <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$checked;?>>
                </td>
                <td>
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                </td>

                <td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                        <!-- 更新圖片按鈕 -->
                        <input type="button"
                        onclick="op('#cover','#cvr','modal/upload.php?do=<?=$DB->table;?>&id=<?=$row['id'];?>')" 
                        value="<?=$DB->upload?>">
                </td>
                <td>
                    <input type="button" class="sw" value="往上" data-sw="<?=$up;?>">
                    <input type="button" class="sw" value="往下" data-sw="<?=$down;?>">
                </td>
            </tr>
                
            <?php  } ?>
            
            </tbody>
       </table>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$DB->table;?>.php?table=<?=$DB->table;?>&#39;)"
                            value="<?=$DB->button;?>">
                    </td>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>  

   </form>
</div>

<script>
    $('.sw').on('click',function(){
        let id=$(this).data("sw").split("-");
        $.post("api/sw.php",{id,table:"graphic"},()=>{
            location.reload();
        })
    })

</script>