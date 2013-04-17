<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Outlets extends My_Controller {

  public function __construct() {
    parent::__construct(array());
  }

  public function index($id = '') {
    parent::index();
    $this->__showMsg('outlets');
  }

  public function add() {
    $this->__showMsg('outlets add');
  }

  public function edit($id) {
    $this->__showMsg('outlets edit');
  }

  public function del($id) {
    $this->__showMsg('outlets del');
  }

}

?>
