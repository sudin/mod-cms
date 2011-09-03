<table>
    <tr>
        <?php
$test=\Widget::show_header();
foreach($test as $v):?>
        <td>
           <?php echo Html::anchor('welcome/pages/'.$v['nav_name'],$v['nav_name']);?>
           </td>    
    <?php endforeach; ?>
    </tr>
</table>