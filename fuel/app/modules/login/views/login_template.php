<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<?php  echo Asset::css('login/login.css');?>
</head>
<body>
<div id="wrapper">
  <div id="header"> Header</div>
  <div id="container"> 
  	
    <div id="leftmenu" > <?php echo render('leftmenu');?> </div>
    <div id="content">
	<?php echo \Session::get_flash('notice');?>
      <h1><?php echo $title; ?></h1>
      <?php echo $content; ?> </div>
  </div>
</div>
</body>
</html>
