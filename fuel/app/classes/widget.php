<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of header
 *
 * @author "samitrimal"
 */
class Widget {
    //put your code here
        public static function show_header(){
       return \DB::select()->from('cms_pages')
                ->join('navigation','right')->on('cms_pages.id','=','navigation.page_id')
               ->execute();
    }
    function check_page($name){
       return \DB::select()->from('navigation')->where('nav_name',$name)->as_assoc()->execute(); 
    }
}

?>
