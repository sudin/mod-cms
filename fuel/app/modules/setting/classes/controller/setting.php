<?php
namespace Setting;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of setting
 *
 * @author Your Name <your.name >
 */
class Controller_Setting extends Controller_Settingbase {
    public function action_index(){
       $this->check_authuser();
        $this->template->title="Settings";
       $this->template->content=\View::factory('index');
    }
}

?>