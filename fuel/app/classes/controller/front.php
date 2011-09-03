<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of front
 *
 * @author "samitrimal"
 */
class Controller_Front extends Controller_Frontbase {
    //put your code here
    function action_index(){
       // $this->template->title="Samit";
        //$this->template->content="TEst";
     echo 'welcome folks';
    }
    function action_pages(){
       $val=Widget::check_page(\Uri::segment(3));
      
       
       if(count($val)==1){
       //echo $val->id;
         if($val[0]['page_id']>0){
            $widget= \Request::factory('cms/pages/'.Uri::segment(2),false)->execute();
         echo $widget;
        }
        else{
             $widget= \Request::factory($val[0]['module_name'].'/index/'.Uri::segment(2),false)->execute();
         echo $widget;
       
        }
       }
       else{
           die  ("Page not found");
       }
      
    }
}

?>
