<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?> </title>

</head>

<body>



              <?php echo \Session::get_flash('notice');?>
        <div id="wrapper">
           
            <div id="sidebar" style="float:left;width:200px;">
  				       <?php echo render('admin/leftmenu');?>
          </div>
             <div id="content" style="width:500px; float:left;">
       			
             <?php echo $content; ?>
            </div>
      </div>
        


</body>
</html>