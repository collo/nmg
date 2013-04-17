<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');


class Items extends My_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index($id = '') {
    $this->__showMsg('items');
  }

  public function add() {
    $this->__showMsg('items add');
  }

  public function edit($id) {
    $this->__showMsg('items add');
  }

  public function del($id) {
    $this->__showMsg('items del');
  }

}

?>
