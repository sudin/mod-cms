<?php
namespace Login;
class Controller_Login extends Controller_Loginbase{
    public $auto_render=true;
     function action_index(){
//	echo \Session::get('user_id');
   
        $this->template->title="Manage Users";
       $data['list_users']= \Auth::instance()->get_users_array();
       
        $this->template->content=\View::factory('login'.DS.'index',$data);
    }
    
    
  private  function action_create_auth_user(){
        $this->template->title="Creaate User";
        $this->template->content=\View::factory('login'.DS.'index');        
        $pass= \Auth::instance()->hash_password('samitrimal');
        $auth= \Auth::instance()->create_user(
                'samitrimal',$pass
                ,'rimalsamit@yahoo.com',100,array('phone'=>3434343,'address'=>'gaurighat'));
        
    }
	/**
     * Create a new user
     * @author samitrimal
     */
	public function action_create_user(){
         $data=array();
        $data['val_error']=null;
        $data['validated']=null;
        $data['login_error']=null;
        if(\Input::method()=="POST"){
          
            $val= \Validation::factory('btn_saveuser');
          
              $val->add_field('username','Username','required');
              $val->add_field('password','Username','required');
              $val->add_field('email','Email','required|valid_email');
			 $val->add_field('first_name','First Name','required'); 
			 //$val->add_field('middle_name','Middle Name','required'); 
			 $val->add_field('last_name','Last Name','required'); 
             $val->add_field('phone','Phone','required');
             $val->add_field('address','Address','required');
             if($val->run()==true){
                 $password=\Auth::hash_password($val);
                     $auth= \Auth::instance()->create_user(
                $val->validated('username'),$password,
                 $val->validated('email'),\Input::post('group'),array('phone'=>$val->validated('phone'),
							 'address'=>$val->validated('address'),
							 'first_name'=>$val->validated('first_name'),
							 'middle_name'=>\Input::post('middle_name'),
							 'last_name'=>$val->validated('last_name')));
                   \Session::set_flash('notice','User added sucessfully');
                   \Response::redirect('/login/create_user/');
             }
             else{
         
                        $data['val_error']=$val->errors();
               
                 $data['validated']=$val->input();
             }
        }
		$this->template->title="Create User";
  
        $this->template->content = \View::factory('login/add',$data);
	}
	
	/**
     * update a new user
     * @author samitrimal
	 * @access public
     */
		function action_edit_user(){
		  $data=array();
        $data['val_error']=null;
        $data['validated']=null;
        $data['login_error']=null;
        if(\Input::method()=="POST"){
          
            $val= \Validation::factory('btn_edituser');
          	$val->add_field('email','Email','required|valid_email');
			$val->add_field('first_name','First Name','required'); 
			$val->add_field('last_name','Last Name','required'); 
            $val->add_field('phone','Phone','required');
            $val->add_field('address','Address','required');
            if($val->run()==true){

                     $auth= \Auth::instance()->update_user(
                 array('email'=>$val->validated('email'),\Input::post('group'),'phone'=>$val->validated('phone'),'address'=>$val->validated('address'),'first_name'=>$val->validated('first_name'), 'middle_name'=>\Input::post('middle_name'),'last_name'=>$val->validated('last_name')),\Input::post('username'));
                   \Session::set_flash('notice','User updated sucessfully');
                   \Response::redirect('/login/index/');
             }
             else{
         
                        $data['val_error']=$val->errors();
		
               
                 $data['validated']=$val->input();
             }
        }
			$data['user_info']= \Auth::instance()->get_user(\Uri::segment(3));
		
			$this->template->title="Edit User";
			$this->template->content=\View::factory('login/edit_user',$data);
		}
        /**
         * Delete a user
         * @author samitrimal
         * @return void
         */
        function action_delete_user(){
            $user=\Auth::instance()->get_user();
          
           if($user['group']==100 and \Uri::segment(3)>1){
                  \DB::delete(\Config::get('simpleauth.table_name'))->where('id','=',\Uri::segment(3))->execute();
                  \Session::set_flash('notice', "User deleted sucessfully");
               
           }
           else{
                  \Session::set_flash('notice', "You are not authorized to perform this action");
           }
           \Response::redirect('login/');
            
                
            
        }


        /**
	* Authenticate the user 
	*@author samitrimal	
	*@return void
	*/
    public function  action_loginform(){
        
		if(\Auth::check()){ \Response::redirect('login/index');}
        $this->template->title="login";
	 $data=array();
        $data['val_error']=null;
        $data['validated']=null;
        $data['login_error']=null;
         if(\Input::method()=="POST"){
             if(!\Security::check_token()){
                 \Response::redirect("/login/");
                die("CSRF validation not passed");
             }
       
             $val=\Validation::factory('login_user');
             $val->add('username','User Name')->add_rule('required');
             $val->add_field('userpass','Password','required');
             if($val->run()==true){
                 $auth=\Auth::instance();
                 $password=\Auth\Auth::hash_password($val->validated('userpass'));
                 if($auth->login($val->validated('username'),$password)){
                     \Response::redirect('/login/');
                 }else{
                  $data['login_error']="username password combo mismatch" ;  
                 }
                     
                 }else{
                    $data['val_error']=$val->errors();
                   $data['validated']=$val->input();
                    
             }
                 
                
                 }
                  
       
       $this->template->content=\View::factory('login'.DS.'login',$data);
    }
	/**
	* Logout the user
	*@author samitrimal	
	*@return void
	*/
	public function action_logout(){
		\Auth::instance()->logout();
		\Response::redirect('/');		
	}
    /**
     * if requested page is not found
     */
    public function action_404(){
        echo "The page is not available";
        $this->template->title="Page Not found";
        $this->template->content="";
            
                
    }
}
?>