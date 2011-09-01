<?php
namespace Setting;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of settingbase
 *
 * @author Your Name <your.name >
 */
class Controller_Settingbase extends \Controller_Template {
        public $template =null;
    public $auto_render = true;
    public $title='';
    public $content='';
    function before(){
   \Fuel::add_module('base');
 $this->template=\Base\Controller_Base::load_template('admin');
          parent::before();
    
  }
  
  function check_authuser(){
   \Fuel::add_module('base');
    \Base\Controller_Base::check_authuser();
 
  
  }
 
}

?>