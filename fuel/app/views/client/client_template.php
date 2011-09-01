<?php //echo $title; ?><?php //  echo Asset::css('login/login.css');?>
	<?php //echo \Session::get_flash('notice');?>
     <?php //echo $title; ?>
      <?php // echo $content; ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php
   echo Html::meta('programmer','Samit Rimal');
   ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Amantran Nepal</title>

<?php //echo Asset::js('jquery1.6.2.min.js');?>
</head>
<body>

	<?php echo render('client/header');?>
	      <?php // echo render('client/leftbar');?>
		
	
            <?php echo $content;?>
			
</body>
</html>