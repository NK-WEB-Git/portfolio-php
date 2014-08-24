<?php include '../vendor/autoload.php'; ?>
<?php include 'partials/header.php'; ?>
<?php 
	use Debug\Debug;
	use Form\Form;
?>

<div class="well col-sm-6" style="margin-top: 40px; margin-left: 20px;">
	<?= Debug::getDataPost() ?>
</div>

<form class="form-horizontal" role="form" style="margin-top: 20px;" action="#" method="post">
	<div class="well col-sm-6" style="margin-left: 20px;">
	  <div class="form-group">
	    <label for="username" class="col-sm-2 control-label">Username</label>
	    <div class="col-sm-8">
	      <?= Form::input('username'); ?>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="password" class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-8">
	      <input type="password" class="form-control" id="password" name="password">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <div class="checkbox">
	        <label>
	          <input type="checkbox"> Remember me
	        </label>
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Log in</button>
	    </div>
	  </div>
	</div>
</form>

<?php include 'partials/footer.php'; ?>