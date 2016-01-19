<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container">
	<div class="row">
		<div class="col-md-5 center-block" style="float: none;">
			<h1>Login!</h1>
			<hr class="separator">
			<?php echo validation_errors(); ?>
			<?php echo form_open(base_url('login/authenticate'), array('class' => 'form-horizontal')); ?>
				<div class="form-group">
					<label for="id" class="col-md-3">User ID: </label>
					<div class="col-md-7">
						<input type="text" name="id" class="form-control" id="id" placeholder="User ID" required>		
					</div>					
				</div>
				<div class="form-group">
					<label for="password" class="col-md-3">Password: </label>
					<div class="col-md-7">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>		
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-7 col-md-offset-3">
						<input type="submit" value="Login" class="btn btn-primary btn-block" >	
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>		
</div>
