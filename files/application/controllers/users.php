<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Users extends My_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->__showMsg('users');
  }

  public function add() { $this->__showMsg('users add');}

  public function edit($id) { $this->__showMsg('users edit');}

  public function del($id) { $this->__showMsg('users del');}

  public function login() { $this->__showMsg('users login');}

  public function logout() { $this->__showMsg('users logout');}

}

?>
