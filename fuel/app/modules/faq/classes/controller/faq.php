<?php
namespace FAQ;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of navigation
 *
 * @author "samitrimal"
 */
class Controller_Faq extends Controller_Faqbase {
    //put your code here
    function action_index(){
        $this->template->title='hello world';
        $this->template->content="Faq module initiation";
        
    }
    
}
?>