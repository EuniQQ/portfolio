<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli"><?=$DB->title?></p>
    <form method="post" action="../api/edit.php?do=<?=$DB->table;?>">
        <table width="50%" style="margin:auto">
        	<tbody>
            <!-- 標題列 -->
            <tr class="yel">    
                    <td width="50%">顯示</td>
                    <td width="50%">
                    <input type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>">
                    </td>
                </tr>
            </tbody>
        </table>


        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>    

    </form>
</div>

