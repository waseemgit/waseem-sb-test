<?php
$data = $parameters;
$firstNames = $data['firstNames'];
$surNames   = $data['surNames'];
$total      = $data['total'];
?>
<form action="<?=BASE_DIR;?>/peopleController/save" method="post">
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        <?php 
        for($i = 0; $i < $total ; $i++) { ?>
        <tr>            
            <td><input type="text" name="people[][firstname]" value="<?=$firstNames[$i];?>" /></td>
            <td><input type="text" name="people[][surname]" value="<?=$surNames[$i];?>" /></td>
        </tr>
        <?php }?>
    </table>
    <input type="submit" value="OK" />
</form>