<?php
namespace Cms;
class Controller_Admin_Cms extends Controller_Admin_Cmsbase{
    
    public function action_index(){
        $data['pages']=  Model_Cms::find('all');
             $data['view']=Model_Cms::find(\Uri::segment(4,0));   
            
        $this->template->title="List Pages";
        $this->template->content=\View::factory('admin/list',$data);
    }
    public function  action_add(){
             $data=array();
            $data['val_error']=null;
        $data['validated']=null;
        $data['login_error']=null;
        if(\Input::method()=="POST"){
            $val=\Validation::factory('btn_addpage');
            $val->add_field('page_title','Title','required|max_length[100]');
            $val->add_field('page_url','Slug','required|max_length[100]');
            $val->add_field('meta_keyword','keyword','max_length[100]');
            $val->add_field('meta_description','Description','max_length[100]');
            $val->add_field('page_content','Content','required');
            if($val->run()==true){
              $value=$val->validated();
             $value['page_status']=\Input::post('page_status');
              $new= Model_Cms::factory($value)->save();
              \Session::set_flash('notice','Content added sucessfully');
              \Response::redirect('cms/admin/add'); 
            }
            else{
                $data['val_error']=$val->errors();
                $data['validated']=$val->input();
            }
        }
        $this->template->title="Add Pages";
        $this->template->content=\View::factory('admin/add',$data);
    }
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
              $update= Model_Cms::find(\Input::post('id'));
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
        $data['view']=Model_Cms::find(\Uri::segment(4,0));   
        $this->template->title="Add Pages";
        $this->template->content=\View::factory('admin/edit',$data);
    }
    public function action_delete(){
       $del= Model_Cms::find(\Uri::segment('4',0));
       $del->delete();
       \Session::set_flash('notice','Content deleted sucessfully');
       \Response::redirect('cms/admin/'); 
    }
    function action_list_pages($id=null){
        if(!empty ($id)){
            return Model_Cms::find($id);;   
        }
       return  Model_Cms::find('all');
    }
}
?>