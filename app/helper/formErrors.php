<?php if(count($errors) > 0): ?>
        <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php foreach ($errors as $error): ?>
        <li> <?php echo $error; ?> </li> 
    <?php endforeach; ?>
        </div>
<?php endif; ?>     