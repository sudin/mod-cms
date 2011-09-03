<?php
namespace Cms;
class Controller_Cms extends Controller_Cmsbase{
  
    public function action_index(){
     
       
       $this->template->title="test";
     
       $this->template->content= \View::factory('cms/index');
        
    }
   function action_pages(){
      $this->template->title='hello';
      $this->template->content='hello world';
              
   }
    public function action_404(){
        $this->template->title='';
        $this->template->content=\View::factory('error/error_404');
     
    }
}   
?>
