<?php
  if(isset($_GET['errmsg'])){ ?>

  <div class="alert alert-danger">
    <?php echo $_GET['errmsg']; ?>
  </div>
  <?php } ?>

  <?php
  if(isset($_GET['message'])){ ?>
  <div class="alert alert-success">
    <?php echo $_GET['msg']; ?>
  </div>
  <?php } ?>