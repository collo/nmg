<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="description of your site">
    <meta name="author" content="author of the site">
    <title>Nation Media Group</title>
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
                </ul><a id="logo" href="index.html">
                <h4>Nation<strong>Media Group</strong></h4></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="span6 offset2">
            <div class="login">
                <form class="form-horizontal">
                 <?php $attr=array('class'=>'form_horizontal');?>
                <?php echo form_open('users/login',$attr);?>
                    <div class="control-group">
                        <div class="controls">
                            <h4><strong>Login</strong></h4>
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
                        <div class="controls"><input type='submit' class="btn" value="Login"/></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>