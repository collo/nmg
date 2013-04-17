<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="description of your site">
    <meta name="author" content="author of the site">
    <title>Nation Media Group News Portal</title>
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
<div id="in-sub-nav">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul>
                    <li><a href="<?php echo base_url().'index.php/items';?>" class="active"><i class="batch home"></i><br>New Section</a></li>
                    <li><span class="label label-important pull-right">08</span><a href="<?php echo base_url().'index.php/outlets';?>"><i class="batch stream"></i><br>Stream</a></li>
                    <li><span class="label label-important pull-right">04</span><a href="<?php echo base_url().'index.php/feedback';?>"><i class="batch plane"></i><br>Feedback</a></li>
                    <li><a href="calendar.html"><i class="batch calendar"></i><br>Calendar</a></li>
                    <li><a href="paragraphs.html"><i class="batch quill"></i><br>Paragraphs</a></li>
                    <li><a href="faq.html"><i class="batch forms"></i><br>FAQ</a></li>
                    <li><a href="users.html"><i class="<?php echo base_url().'index.php/users/view';?>"></i><br>Users</a></li>
                    <li><a href="settings.html"><i class="batch settings"></i><br>Settings</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>