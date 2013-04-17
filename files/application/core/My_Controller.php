<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class My_Controller extends CI_Controller {

  /** an array of groups allowed to access this page */
  protected $ACCESS_LEVELS;

  /**
   * Default constructor for controllers. It specifies the groups that can access the contoller.<br>
   * By default all groups (1,2,3) are allowed. If no groups are specified, only admins can access.
   * 
   * @param array $level array of groupids allowed to access the controller.
   */
  public function __construct($level = array(1, 2, 3)) {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper(array('url', 'msg', 'form', 'session_vars'));
    $this->load->model('user_model');
    $this->ACCESS_LEVELS = is_array($level) ? $level : array('1');
  }

  protected function __canAccess($override = null) {
    $grp = $this->__grp();
    $lvls = (!is_null($override) && is_array($override)) ? $override : $this->ACCESS_LEVELS;
    if (count($lvls) < 1)
      return $grp == '1';
    return is_numeric(array_search($grp, $lvls));
  }

  protected function index() {
    if (!$this->__is_logged_in()) {
      redirect(site_url('/'));
    }
    if (!$this->__canAccess()) {
      show_perm_error_msg();
    }
    if (get_class($this) == get_class()) {
      redirect(site_url('/'));
    }
  }

  /**
   * Combine selected view with html head and foot
   * @param String $view View to be combined
   * @param String $title Title of the page
   * @param Array $body_args Arguments given to the body of the page
   */
  protected function __showView($view, $body_args = array()) {
    if ($this->__is_logged_in()) {
      $this->__refresh_user();
    }
    //$this->load->view('html_head');
    //$this->load->view($view, $body_args);
    //$this->load->view('html_foot');
  }

  protected function __showMsg($s) {
    echo $s;
  }

  protected function __usrid() {
    if (!$this->__is_logged_in())
      return-1;

    $u = $this->session->userdata(sess_userid_key());
    return ($u === false) ? -1 : $u;
  }

  protected function __usrnm() {
    if (!$this->__is_logged_in())
      return'';

    $u = $this->session->userdata(sess_username_key());
    return ($u === false) ? '' : $u;
  }

  protected function __is_logged_in() {
    return $this->session->userdata(sess_logged_key());
  }

  protected function __refresh_user() {
    $usr = $this->usermodel->getUsers($this->__usrid());
    if (count($usr) == 1) {
      $usr = $usr[0];
      if ($usr['enabled']) {
        $this->session->set_userdata(array(
            sess_userid_key() => $usr['usrid'],
            sess_username_key() => $usr['usrname'],
            sess_group_key() => $usr['grpid'],
            sess_admin_key() => ($usr['grpid'] == '1'),
        ));
        return;
      }
    }
    redirect(site_url('user/logout'));
  }

  protected function add() {
    
  }

  protected function edit() {
    
  }

  protected function del() {
    
  }

  protected function csv_to_array($csv) {
    return (($csv == '' | $csv == null) ? array() : explode(',', $csv));
  }

}

?>
