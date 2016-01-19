<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
		<title>CHS/CC Finance Management System</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/patho-favicon.ico'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>
  	<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url(); ?>">CHS/CC</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="<?php echo base_url(); ?>">Home</a></li>
	        <li><a href="<?php echo base_url('reports'); ?>">Reports</a></li>        
	        <!--<li><a href=<?php //echo base_url('operators'); ?>>Operators</a></li>         -->
	      </ul>      
	      <ul class="nav navbar-nav navbar-right">
	      
	      <?php 
	      // Code for login/logout anchor tag in Navbar. 
	      if($this->session->userdata('logged_in') == 1)
	      {	?>
	  		<li><a href="#"><i class="glyphicon glyphicon-user"> </i> <?php echo $this->session->userdata('name'); ?></a></li>
	     	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url('reports/new'); ?>">New Report</a></li>
	            <li><a href="<?php echo base_url('reports/edit'); ?>">Edit Report</a></li>
	            <li><a href="<?php echo base_url('reports/delete'); ?>">Delete Report</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?php echo base_url('logout'); ?>">Log out</a></li>
	          </ul>
	        </li>
	      <?php }else{ ?>
	      	<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
	      	
	      <?php } //Code ends.
	      ?> 
	        
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>