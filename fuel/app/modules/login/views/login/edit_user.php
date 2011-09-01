<?php
$email=(!empty($validated['email']))? $validated['email'] :$user_info['email'];
$first_name=(!empty($validated['first_name']))? $validated['first_name'] :$user_info['first_name'];
$last_name=(!empty($validated['last_name']))? $validated['last_name'] :$user_info['last_name'];
$phone=(!empty($validated['phone']))? $validated['phone'] :$user_info['phone'];
$address=(!empty($validated['address']))? $validated['address'] :$user_info['address'];
?>
<?php   echo \Form::open('login/edit_user'); ?>

<p>	
    <?php
    echo Form::label(' Username  ');     
		echo  Form::hidden('username',$user_info['username'])	;   
   
   ?>
</p>     
<p>
    <?php   echo Form::label('Email');    
   echo \Form::input("email",$email);
   if(!empty( $val_error['email'])){
       echo $val_error['email'];
   }
 ?>
</p>
<p>
    <?php   echo Form::label('Group');    
      echo \Form::select('group', $user_info['group'],\Auth::list_groups());
 ?>
</p>
<p>
  <?php   echo Form::label('First Name');    
       echo \Form::input('first_name',$first_name);
   if(!empty( $val_error['first_name'])){
       echo $val_error['first_name'];
   }
 ?>
</p>
<p>
  <?php   echo Form::label('Middle Name');    
       echo \Form::input('middle_name',$user_info['middle_name']);
 ?>
</p>
<p>
  <?php   echo Form::label('Last Name');    
       echo \Form::input('last_name',$last_name);
   if(!empty( $val_error['last_name'])){
       echo $val_error['last_name'];
   }
 ?>
</p>
<p>
    <?php   echo Form::label('Phone');    
     echo \Form::input('phone',$phone);
   if(!empty( $val_error['phone'])){ echo $val_error['phone']; }
 ?>
</p>
<p>
    <?php   echo Form::label('Address');    
         echo \Form::input('address',$address);
         if(!empty( $val_error['address'])){  echo $val_error['address']; }
 	?>
</p>
<p>
    <?php echo Form::submit('btn_edituser', 'Save');?>
</p>
 <?php  echo \Form::close();?>