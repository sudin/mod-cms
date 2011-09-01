<?php
$username=(!empty($validated['username']))? $validated['username'] :"";
$password=(!empty($validated['password']))? $validated['password'] :"";
$email=(!empty($validated['email']))? $validated['email'] :"";
$phone=(!empty($validated['phone']))? $validated['phone'] :"";
$address=(!empty($validated['address']))? $validated['address'] :"";
?>
<?php   echo \Form::open('login/create_user'); ?>

<p>
    <?php
    echo Form::label('Username');    
   echo \Form::input("username");
   if(!empty( $val_error['username'])){
       echo $val_error['username'];
   }
   
   ?>
</p>     
<p>
    <?php   echo Form::label('Password');    
   echo \Form::password("password",$password);
   if(!empty( $val_error['password'])){
       echo $val_error['password'];
   }
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
   
    
     echo \Form::select('group', 'none',\Auth::list_groups());
 ?>
</p>
<p>
  <?php   echo Form::label('First Name');    
       echo \Form::input('first_name',$phone);
   if(!empty( $val_error['first_name'])){
       echo $val_error['first_name'];
   }
 ?>
</p>
<p>
  <?php   echo Form::label('Middle Name');    
       echo \Form::input('middle_name',$phone);
   if(!empty( $val_error['middle_name'])){
       echo $val_error['middle_name'];
   }
 ?>
</p>
<p>
  <?php   echo Form::label('Last Name');    
       echo \Form::input('last_name',$phone);
   if(!empty( $val_error['last_name'])){
       echo $val_error['last_name'];
   }
 ?>
</p>

<p>
  <?php   echo Form::label('Phone');    
       echo \Form::input('phone',$phone);
   if(!empty( $val_error['phone'])){
       echo $val_error['phone'];
   }
 ?>
</p>
<p>
    <?php   echo Form::label('Address');    
         echo \Form::input('address',$address);
         if(!empty( $val_error['address'])){
       echo $val_error['address'];
   }
 ?>
</p>
<p>
    <?php echo Form::submit('btn_saveuser', 'Save');?>
</p>
 <?php  echo \Form::close();?>