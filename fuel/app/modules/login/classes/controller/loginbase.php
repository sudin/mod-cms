<?php

namespace Login;

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

class Controller_Loginbase extends \Controller_Template {

    protected $user_id;
    public $template =null;
    public $auto_render = false;

    function before() {
           \Fuel::add_module('base');
 $this->template=\Base\Controller_Base::load_template('admin');
    //\Base\Controller_Base::

        parent::before();
        
        $string = explode('/', \Fuel\Core\URI::string());
        $string[1] = (empty($string[1])) ? 'index' : $string[1];
        if ($string[1] != "loginform" and $string[0] == "login") {
            if (!\Auth\Auth::check()) {
                \Auth\Auth::logout();
                \Response::redirect('login/loginform');
            } else {
                $user_id = \Auth::instance()->get_user_id();
                $this->user_id = $user_id[1];
                \Session::set('user_id', $this->user_id);
            }
        }
    }

}
?>