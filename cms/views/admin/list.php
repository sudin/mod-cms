<div id="box">
    

<h3>List Pages</h3>
<div style="width:350px;float: left;">
    <table>
        <tbody>
    <?php if(count($pages)>0):
        foreach($pages as $v):
        ?>
    <tr>
        <td>
            <?php echo Html::anchor("cms/admin/index/".$v['id'],$v['page_title']);?>
        </td>
        
    </tr>
    <?php endforeach;else:?>
    <tr>
        <td>No pages available</td>
        
    </tr>
        </tbody>
    <?php endif;?>        
</table>
</div>
<div style="float: left; width: 388px;">
    
   <?php   if(\Uri::segment(4)>0):
   
       
   ?>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tbody>
        <tr>
            <td>slug</td>    
             <td><?php echo $view->page_url;?></td>    
        </tr>
       <tr>
            <td>Meta Keyword</td>    
             <td><?php echo $view->meta_keyword;?></td>    
        </tr>
        <tr>
            <td>Meta Description</td>    
             <td><?php echo $view->meta_description;?></td>    
        </tr> 
        <tr>
            <td>Status</td>    
             <td><?php echo $view->page_status  ;?></td>    
        </tr> 
        <tr>
            <td><?php echo Html::anchor('cms/admin/edit/'.$view->id, 'Edit');?></td>
            <td><?php echo Html::anchor('cms/admin/delete/'.$view->id, 'Delete');?></td>
        </tr>
        </tbody>
    </table>
    <?php else:?>
    
        
    <?php endif;?>
</div>
</div>