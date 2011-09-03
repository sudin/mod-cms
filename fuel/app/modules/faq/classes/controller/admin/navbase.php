<?php
namespace Navigation;
class Controller_Admin_Navbase extends \Controller_Template{
    //put your code here
     public $template ='admin/admin_template';
    public $auto_render = true;
    public $title='';
    public $content='';
    public $scripts=array();
    function before(){
  $this->check_authuser();
\Config::load('nav_config');
          parent::before();
    
  }
  
  function check_authuser(){
   \Fuel::add_module('base');
     \Base\Controller_Base::check_authuser();
  }
   function get_nav_type(){
       $nav_type=array();
      
       foreach(\Config::get('position') as $k=>$v){
           $nav_type[$k]=$v;
       } 
   
       return $nav_type;
   }   
 
}

?>
