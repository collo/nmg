<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="description of your site">
    <meta name="author" content="author of the site">
    <title>IndustryApp Template</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>components/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>components/bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>components/bootstrap/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>components/bootstrap/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>components/bootstrap/css/toastr.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>components/bootstrap/css/fullcalendar.css">
    <script src="<?php echo base_url(); ?>components/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/d3.v3.min.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/toastr.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/jquery.tablesorter.min.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/gcal.js"></script>
    <script src="<?php echo base_url(); ?>components/bootstrap/js/setup.js"></script>
</head>
<body>
<div id="in-nav">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="pull-right">
                    <li><a href="#">Link1</a></li>
                    <li><a href="#">Link2</a></li>
                    <li><a href="#">Link3</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul><a id="logo" href="index.html">
                <h4>My<strong>Admin</strong></h4></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="span6 offset2">
            <div class="login">
                <form class="form-horizontal">
                    <div class="control-group">
                        <div class="controls">
                            <h4>Login</h4>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="inputEmail" class="control-label">Email </label>
                        <div class="controls">
                            <input id="inputEmail" type="text" placeholder="Email"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="inputPassword" class="control-label">Password </label>
                        <div class="controls">
                            <input id="inputPassword" type="password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls"><a href="index.html" class="btn">Login</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body><script>protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://'; address = protocol + window.location.host + window.location.pathname + '/ws'; socket = new WebSocket(address);
socket.onmessage = function(msg) { msg.data == 'reload' && window.location.reload() }</script>
</html>