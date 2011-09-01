<?php
namespace Cms;
class Controller_Cms extends Controller_Cmsbase{
  
    public function action_index(){
     
       
       $this->template->title="test";
     
       $this->template->content= \View::factory('cms/index');
        
    }
    public function action_managecms(){
        $this->check_authuser();
     //   $this->load_template('admin');
           $this->template->content=\View::factory('cms/index');
    }
    public function action_addcms(){
        //$this->check_authuser();
       $this->template->title="Auth user";
        $this->template->content=\View::factory('cms/index');
    }
    public function action_packmodel(){
        $data['model']= Model_Cms::hello_world();
        $graph=new  \Graph\Bargraph();
        $data['graph']=$graph->hello();
        $this->template->title="Packet and model";
        
       
    }
    public function action_404(){
        $this->template->title='';
        $this->template->content=\View::factory('error/error_404');
     
    }
}   
?>
