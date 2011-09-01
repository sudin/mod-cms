   
<h3>List Category</h3>
<div style="width:350px;float: left;">
    <table>
        <tr>
            <td>Name</td>
            <td>Link Type</td>
            <td>Position</td>
            <td>Action</td>
        </tr>
    <?php if(count($view_nav)>0):
        foreach($view_nav as $v):
        ?>
    <tr>
        <td><?php echo $v['nav_name'];?></td>
         <td> <?php echo $v['link_type'];?></td>
         <td><?php echo $v['position'];?></td>
         <td><?php echo \Html::anchor('#','Edit');?><?php echo \Html::anchor('#','Delete');?></td>
        
    </tr>
    <?php endforeach;else:?>
    <tr>
        <td>No pages available</td>
        
    </tr>
        </tbody>
    <?php endif;?>        
</table>
</div>
