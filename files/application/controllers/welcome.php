<?php
/**
 * Created by JetBrains PhpStorm.
 * User: liyosi
 * Date: 4/17/13
 * Time: 3:15 PM
 * To change this template use File | Settings | File Templates.
 */
class Welcome extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $data['main']='home';
        $this->load->view('inc/template',$data);

    }
}