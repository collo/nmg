<?php

/**
 * Show errors related to permissions
 * 
 * @param string $msg Message to display
 * @param string $heading Heading of the error
 * @param string $back_override Override the '<i>back</i>' URL in the message
 */
function show_perm_error_msg($msg = '', $heading = '', $back_override = '') {
  $msg = ($msg == '' ) ? 'You do not have permission to access the resource requested' : $msg;
  $_msg = "$msg<p><a href=\"" . (($back_override == '') ? "javascript:history.go(-1)" : $back_override ) . '">Back</a></p>';
  $_head = ($heading == '') ? 'Permission error' : $heading;
  show_error($_msg, 403, $_head);
  exit();
}

/**
 * General purpose error messages
 * 
 * @param string $msg Error message to show
 * @param string $heading Heading of the message
 * @param string $back_override Override the '<i>back</i>' URL in the message
 * @param int $code error code. Please put a valid code
 */
function show_error_msg($msg, $_heading = '', $back_override = '', $code = 500) {
  $heading = ($_heading == null || $_heading == '') ? 'The following error(s) were encountered' : $_heading;
  $_msg = $msg . '<p><a href="' . (($back_override == '') ? "javascript:history.go(-1)" : $back_override ) . '">Back</a></p>';
  $ci = &get_instance();
  $ci->output->set_status_header($code);
  $ci->load->view('msg_template', array('heading' => $heading, 'message' => "<p>$_msg<p>", 'title' => 'Address Book'));
}

?>
