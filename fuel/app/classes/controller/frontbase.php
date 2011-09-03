<?php

/**
 * Description of base
 *
 * @author Your Name <your.name >
 */
class Controller_Frontbase extends \Controller{
   //put your code here
      public $template = 'client/client_template';
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
       
      function action_404(){
        $this->template->title="404 Page Not Found";
        $this->template->content=View::factory('base/404.php');
      }
}


?>
