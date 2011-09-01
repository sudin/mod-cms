<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of auth 
 *
 * @author Your Name <your.name >
 */
//namespace Login;
class Auth_Login_SimpleAuth  extends \Auth\Auth_Login_SimpleAuth{
    //put your code here
    function before(){
        parent::before();
    }
  
    public static function list_groups(){
           $arr=array();
          //print_r(\Config::get('simpleauth.groups'));
          foreach (\Config::get('simpleauth.groups') as $key => $value) {
             $arr[$key]=$value['name'];  
          }
         return $arr;
    }
    /**
     *select the users from authentication table
     * @access public
     * @author samitrimal
     * @return array 
     */
    public function get_users_array($where=null){
        $db=DB::select()->from(\Config::get('simpleauth.table_name'));
        if(!empty($where)){
            foreach($where as $v){
                $db->where($v[0],$v[1],$v[2]);
            }
        }
      $arr = $db->execute()->as_array();
      
        return array(DB::count_records(\Config::get('simpleauth.table_name')),$arr);
        
        
    }
      public function get_user($id=null){
        $db=DB::select()->from(\Config::get('simpleauth.table_name'));
		if(empty($id)){
			$id=\Session::get('user_id');
		}
         $db->where('id','=',$id);
         $arr = $db->execute()->as_array();
     	$arr1=$arr[0];
			$arr2=unserialize($arr1['profile_fields']);
			unset($arr1['profile_fields']);
			$arr3=array_merge($arr1,$arr2);
			unset($arr1);
			unset($arr2);
									
        return $arr3;
        
        
    }
}

?>