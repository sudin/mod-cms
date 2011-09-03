<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of navwidget
 *
 * @author "samitrimal"
 */
class Faqwidget {
    //put your code here
    public  function show_header(){
       return \DB::select()->from('cms_pages')
               ->join('navigation')->on('cms_pages.id','=','navigation.page_id')
               ->where('cms_pages.page_status','=','live')->as_array()->execute();
    }
}

?>
