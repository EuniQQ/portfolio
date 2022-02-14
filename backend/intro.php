<div style="width:100%; height:100%; ; overflow:auto; ">
    <p class="t cent">
        <?=$DB->title;?>
    </p>

    <form method="post" action="api/edit.php?do=<?=$DB->table;?>">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="30%">
                        <?=$DB->header;?>
                    </td>
                    <td width="50%">
                        <?=$DB->append;?>
                    </td>
                </tr>


                <tr>
                    <td>
                        <img src="./img/<?=$Intro->find(1)['img'];?>" style="width:50%;height:50%">
                    </td>
                    <td>
                        <textarea name="text" style="width:80%;height:150px;font-size:16px;line-height:25px">
                        <?=$Intro->find(1)['text'];?>
                    </textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?=$do['id'];?>">
                        <!-- 更新照片按鈕 -->
                        <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload.php?do=<?=$DB->table;?>&id='<?=$do['id'];?>'&#39;)"
                            value="<?=$DB->upload;?>">
                    </td>
                </tr>
            </tbody>
        </table>

        <table style="margin-top:40px; width:100%;">
            <tbody>
                <tr>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>


    </form>
</div>
</div>