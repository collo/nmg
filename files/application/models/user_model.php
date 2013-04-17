<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class User_Model extends My_Model {

  public function __construct() {
    parent::__construct('users');
  }

  public function is_valid($usr, $pwd) {
    $this->db->select(array('usr_id', 'usr_cat_id'));
    $query = $this->db->get_where($this->__table, array('usr_name' => $usr, 'usr_pwd' => $pwd));
    if ($query->num_rows() != 1)
      return false;
    $result = $query->result_array();
    return $result[0];
  }
  
  public function updateUser($usrnm, $usrpwd, $usr_cat_id) {
    if ($grp == '1' && $enabled == '0' && $usrid != '') {
      $usr = $this->getUsers($usrid);
      if (count($usr) != 1)
        return"User '$usrnm' not found.";
      if (($usr[0]['grpid'] == '1') && $this->checkActiveAdmins() < 2)
        return "At least one active user from the administration group is required. User '" . $usr[0]['usrname'] . "' not disabled";
    }
    $data = array('usrname' => $usrnm, 'grpid' => $grp, 'enabled' => $enabled);
    if ($usrpwd != sha1(''))
      $data['pwd'] = $usrpwd;
    $query = ($usrid != '') ? $this->db->update($this->__table, $data, array('usrid' => $usrid)) : $this->db->insert($this->__table, $data);
    if (!$query) {
      switch (mysql_errno()) {
        case 1452:return "The group for user '$usrnm' is not selected or is invalid";
          break;
        case 0:return'';
          break;
        default:return"An error occured while updating the user '$usrnm'.";
          break;
      }
    }
    //if ($grp == '2' && $dists != '') {
    $this->load->model('userdistrict');
    $id = ($usrid == '') ? $this->db->insert_id() : $usrid;
    $q = $this->userdistrict->updateUserDists($id, (($dists == '' || $dists == null) ? array() : explode(',', $dists)));
    if ($q)
      return'';
    //}
    switch (mysql_errno()) {
      case 1452:return "The districts for user '$usrnm' are invalid";
        break;
      case 0:return'';
        break;
      default:return"An error occured while updating the districts for user '$usrnm'.";
        break;
    }
  }

  public function delUser($usrid) {
    $usr = $this->getUsers($usrid);
    if (count($usr) != 1)
      return'';
    if (($usr[0]['grpid'] == '1') && $this->checkActiveAdmins() < 2)
      return "At least one active user from the administration group is required. User '" . $usr[0]['usrname'] . "' not deleted";
    if ($usr[0]['grpid'] == '2') {
      $this->load->model('userdistrict');
      $this->userdistrict->delUserDists($usr[0]['usrid']);
    }
    return $this->db->delete($this->__table, array('usrid' => $usrid)) ? '' : 'An error occured while deleting the user.';
  }

  public function checkActiveAdmins() {
    $query = $this->db->select('count(*) as num')->get_where($this->__table, array('enabled' => '1', 'grpid' => '1'));
    $res = $query->result_array();
    return $res[0]['num'];
  }

  public function changePwd($usrid, $old, $new) {
    $query = $this->db->get_where($this->__table, array('usrid' => $usrid, 'pwd' => $old));
    if ($query->num_rows() != 1) {
      return 'Invalid old password given';
    }

    $q = $this->db->update($this->__table, array('usr_pwd' => $new), array('usr_id' => $usrid));
    if (!($q && ($this->db->affected_rows() == 1))) {
      return "Database error occured. Password not changed.";
    }

    return'';
  }

  public function isunique($usr, $isupdate = false, $id = 0) {
    $query = $this->db->select('usr_id')->get_where($this->__table, array('usr_name' => $usr));
    if ($query->num_rows() < 1)
      return true;
    $res = $query->result();
    $n = $res[0]->usrid;

    return ($n == $id) && ($isupdate);
  }

}

?>
