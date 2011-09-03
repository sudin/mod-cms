<?php
namespace FAQ;
class Controller_Faqbase extends \Controller_Template{
    //put your code here
     public $template ='client/client_template';
    public $auto_render = true;
    public $title='';
    public $content='';
    public $scripts=array();
    function before(){
           parent::before();
    
  }
  
  
}

?>