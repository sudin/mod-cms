<div id="box">
    
    <h3>Manage Category </h3>
<?php   echo \Form::open('navigation/admin/add'); ?>
    <fieldset>
        <p>
    <?php
    echo Form::label('Link type');   
        $check['onclick']="window.location='".Uri::base()."navigation/admin/add/'+this.value";
        if((\Uri::segment(4)=='pages')){
             $check['checked']='checked';
        }
      
   echo \Form::radio("link_type",'pages',$check)." Pages ";
     $checkmod['onclick']="window.location='".Uri::base()."navigation/admin/add/'+this.value";
//     $checkmod['disabled']='disabled';
       if((\Uri::segment(4)=='modules')){
             $checkmod['checked']='checked';
        }
   echo \Form::radio("link_type",'modules',$checkmod)." Modules";
   
   echo \Arr::element($val_error, 'link_type', false);
   ?>

</p>
<p>
    <?php
    echo Form::label(' Name');    
   echo \Form::input("nav_name",Arr::element($validated,'nav_name',false));
   echo    \Arr::element($val_error, 'nav_name', false);
   ?>
</p>     


<p>
    
    <?php  if(\Uri::segment(4)=='pages'):?>
    <?php $pages[0]='Select'; echo \Form::select('page_id',0,$pages);
    elseif(\Uri::segment(4)=='modules'):
    echo \Form::hidden('module');
    echo 'it is still under construction';
    else: echo 'here content will be shown according to <br>previous selection'; endif; ?>
</p>
<p>
    <?php
 
    echo Form::label('Position');    
   echo \Form::select("position",'top',$nav_type);
   
   echo \Arr::element($val_error, 'position', false);
   ?>
</p>   
<p>
    <?php echo Form::submit('btn_addnav', 'Save');?>
</p>
</fieldset>
 <?php  echo \Form::close();?>
</div>