<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Feedback extends My_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index($id = '') {
    $this->__showMsg('feedback');
  }

  public function add() {
    $this->__showMsg('feedback add ');
  }

  public function edit($id) {
    $this->__showMsg('feedback edit');
  }

  public function del($id) {
    $this->__showMsg('feedback del');
  }

}

?>
