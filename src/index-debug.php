<?php 
  session_start();
  include 'partials/header.php';
  include '../vendor/autoload.php';
  use Debug\Debug;
 ?>

<div class="row">
  <div style="margin-top: 40px;">
    <div class="col-sm-8 well" style="word-wrap: break-word; margin-left: 20px;">
      <?php include 'lib/Constants/Constants.php'; ?>
    </div>
  </div>
</div>

<div class="row">
  <div style="margin-top: 15px;">
    <div class="col-sm-4 well" style="word-wrap: break-word; margin-left: 20px;">
      <h2>SERVER</h2>
      <?php echo Debug::getDataServer()?>
    </div>

    <div class="col-sm-4 well" style="word-wrap: break-word; margin-left: 20px;">
      <h2>CONSTANTES</h2>
      <?php echo Debug::getDataConst()?>
    </div>

    <div class="col-sm-3 well" style="word-wrap: break-word; margin-left: 20px;">
      <h2>SESSIONS</h2>
      <?php echo Debug::getDataSession()?>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
