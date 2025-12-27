<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS : <?=strtoupper($page);?></title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/style.css" />
</head>
<body>
<h1 align="center">Student Information System</h1>
<div class="navigation">    
    <a <?php if($page=='dashboard'){echo 'class="active"';} ?> href="<?=base_url();?>dashboard">Dashboard</a>
    <a <?php if($page=='student'){echo 'class="active"';} ?> href="<?=base_url();?>student">Student</a>
    <a <?php if($page=='teacher'){echo 'class="active"';} ?> href="<?=base_url();?>teacher">Teacher</a>
    <?php
    if(session()->get('user_name')=="admin")
    {
    ?>
    <a <?php if($page=='admin'){echo 'class="active"';} ?> href="<?=base_url();?>admin">Admin</a>
    <?php
    }
    ?>
    <a href="<?=base_url();?>logout">Logout</a>
</div>