<div id="box">
    <h3>Manage Users</h3><?php //echo Html::anchor('login/create_user',"Create User");?>
<table>
<?php if($list_users[0]>0): ?>
    <thead>
<tr>
<th><?php echo \Html::anchor(\Uri::current().'#',"Username");?></th>
<th><?php echo \Html::anchor(\Uri::current().'#',"Email");?></th>
<th><?php echo \Html::anchor(\Uri::current().'#',"Action");?></th>
</tr>
</thead>
<tbody>
<?php foreach($list_users[1] as $v):?>
<tr>
	<td><?php echo \Html::anchor(\Uri::current().'#',$v['username']);?></td>
	<td><?php echo $v['email'];?></td>
	<td><?php echo Html::anchor("login/edit_user/".$v['id'],'Edit');?>
 <?php if($v['id']>0): echo Html::anchor("/login/delete_user/".$v['id'],"Delete");endif;?></td>
</tr>
<?php endforeach; else:?>
<tr>
	<td colspan="3">No records found</td>
</tr>
<?php endif;?>
</tbody>
</table>
    </div>