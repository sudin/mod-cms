 <?php
if(!empty($login_error)){echo $login_error;echo Html::br();}
$validated['username']=(!empty($validated['username']))?$validated['username']:'';

echo Form::open('login/loginform/');
echo Form::hidden(\Config::get('security.csrf_token_key'),\Security::fetch_token());
echo Form::input("username",$validated['username']);
    if(!empty($val_error['username'])){echo $val_error['username'];}
echo  Html::br();
echo Form::password('userpass');  if(!empty($val_error['userpass'])){echo $val_error['userpass'];}
echo Html::br();
echo Form::submit('login_user', 'Submit');
?>
