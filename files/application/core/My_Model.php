<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Default model for this app
 */
class My_Model extends CI_Model {

  /** Table that the model uses */
  protected $__table;

  public function __construct($tbl = '') {
    parent::__construct();
    $this->load->database();
    $this->load->helper('msg');
    $this->__table = $tbl;
  }

  protected function csv_to_array($csv) {
    return (($csv == '' | $csv == null) ? array() : explode(',', $csv));
  }

}

?>
