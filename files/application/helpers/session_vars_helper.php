<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/** userid */
function sess_userid_key() {
  return 'usr';
}

/** usrname */
function sess_username_key() {
  return 'usrn';
}

/** group id */
function sess_group_key() {
  return 'grp';
}

/** if is_admin */
function sess_admin_key() {
  return 'adm';
}

/** if is_loggedin */
function sess_logged_key() {
  return 'lg';
}

/** logging id */
function sess_logid_key() {
  return 'lgid';
}

?>
