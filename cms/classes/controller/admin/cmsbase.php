<?php
namespace Cms;
class Controller_Admin_Cmsbase extends \Controller_Template{
    //put your code here
     public $template ='admin/admin_template';
    public $auto_render = true;
    public $title='';
    public $content='';
 
  
  function check_authuser(){
   \Fuel::add_module('base');
     \Base\Controller_Base::check_authuser();
  }
      
  function load_template($var=''){
       $this->template=\Base\Controller_Admin_Base::load_template($var);
  }   
 
}

?>
