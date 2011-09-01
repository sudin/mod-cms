<?php
namespace Navigation;
class Controller_Admin_Navigation extends Controller_Admin_Navbase{
    
    public function action_index(){
     
        
       
             $data['view_nav']=Model_Navigation::find('all');   
            
        $this->template->title="List category";
        $this->template->content=\View::factory('admin/list',$data);
    }
    public function  action_add(){
        $this->check_authuser();
       
             $data=array();
            $data['val_error']=null;
        $data['validated']=null;
        $data['login_error']=null;
        if(\Input::method()=="POST"){
            $val=\Validation::factory('btn_addnav');
            $val->add_field('nav_name','Name','required|max_length[20]');
            $val->add_field('link_type','Link Type','required');
            if($val->run()==true){
              $value=$val->validated();
             $value['module_name']=\Input::post('module');
             $value['position']=\Input::post('position');
             $value['page_id']=\Input::post('page_id');
             
              $new= Model_Navigation::factory($value)->save();
              \Session::set_flash('notice','Navigation added sucessfully');
              \Response::redirect('navigation/admin/add'); 
            }
            else{
                $data['val_error']=$val->errors();
                $data['validated']=$val->input();
            }
        } 
        $data['nav_type']=$this->get_nav_type();  
         $data['pages']=$this->getpages();
         
        $this->template->title="Add Pages";
        $this->template->content=\View::factory('admin/add',$data);
    }
    function getpages(){
        $arr=array();
        $pages= \DB::select('id','page_title')->from('cms_pages')->execute()->as_array();
        foreach ($pages as $page){
            $arr[$page['id']]=$page['page_title'];
        }
        $arr['none']='None';
        return $arr;
    }
    
	/*
    function action_edit(){
             $data=array();
            $data['val_error']=null;
        $data['validated']=null;
        $data['login_error']=null;
        if(\Input::method()=="POST"){
            if(\Security::check_token()){
            $val=\Validation::factory('btn_addpage');
            $val->add_field('page_title','Title','required|max_length[100]');
            $val->add_field('page_url','Slug','required|max_length[100]');
            $val->add_field('meta_keyword','keyword','max_length[100]');
            $val->add_field('meta_description','Description','max_length[100]');
            $val->add_field('page_content','Content','required');
            if($val->run()==true){
              $value=$val->validated();
             $value['page_status']=\Input::post('page_status');
              $update= Model_Category::find(\Input::post('id'));
              $update->page_title=$val->validated('page_title');
              $update->page_status=\Input::post('page_status');
              $update->meta_keyword=$val->validated('meta_keyword');
              $update->meta_description=$val->validated('meta_description');
              $update->page_content=$val->validated('page_content');
              $update->save();
              \Session::set_flash('notice','Content updated sucessfully');
              \Response::redirect('cms/admin/'); 
            }
            else{
                $data['val_error']=$val->errors();
                $data['validated']=$val->input();
            }
           }
        }
        $data['view']=Model_Category::find(\Uri::segment(4,0));   
        $this->template->title="Add Pages";
        $this->template->content=\View::factory('admin/edit',$data);
    }
    public function action_delete(){
       $del= Model_Category::find(\Uri::segment('4',0));
       $del->delete();
       \Session::set_flash('notice','Content deleted sucessfully');
       \Response::redirect('cms/admin/'); 
    }*/
}
?>