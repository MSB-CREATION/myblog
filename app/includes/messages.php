<?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><?php echo $_SESSION['message']; ?></strong>
        <?php  unset($_SESSION['message']);  unset($_SESSION['type']);?>
        </div>
        <?php endif; ?>