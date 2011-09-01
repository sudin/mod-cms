<?php
namespace Cms;
class Controller_Cmsbase extends \Controller_Template{
    //put your code here
     public $template ='client/client_template';
    public $auto_render = true;
    public $title='';
    public $content='';
    function before(){
   \Fuel::add_module('base');

          parent::before();
    
  }
  
  function check_authuser(){
   \Fuel::add_module('base');
     \Base\Controller_Base::check_authuser();
  }
      
 
}

?>
