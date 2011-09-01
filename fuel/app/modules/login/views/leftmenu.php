<?php
if(Auth::check()):
?>
<h2>Menu</h2>
<ul>
    <li><?php echo Html::anchor('login/index',"Home");?></li>
    <li><?php echo Html::anchor('login/Index',"Manage User");?></li>
    <li><?php echo Html::anchor('login/logout',"logout");?></li>
    
</ul>
<?php
endif;
?>

