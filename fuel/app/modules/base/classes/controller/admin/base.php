<?php
namespace Base;
/**
 * Description of base
 *
 * @author Your Name <your.name >
 */
class Controller_Admin_Base extends \Controller_Template{
   //put your code here
      public $template = 'admin/admin_template';
       public $auto_render = true;
    public static $instance='';
  function before(){
  
      parent::before();
       
  }
  public static function check_authuser(){
      if (!\Auth\Auth::check()) {
                \Auth\Auth::logout();
                \Response::redirect('login/loginform');
            }
  }
 
    public static function instance(){
       if(!self::$instance){
           self::$instance= new \Base\Controller_Base();
       }
     
          return self::$instance;
       
    }
   
}


?>
