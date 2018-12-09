
<h2><?=$title?></h2>
<?php foreach($user as $users) : ?>

 <h3><?php echo $users['id']; ?></h3>
 <small>First Name: <?php echo $users['fName'];?></small><br>
 <?php echo $users['email']; ?>
 <br><br>
<p><a class="btn btn-primary" href="<?php echo site_url('/post/'.$users['id']); ?>"> Read More </a></p>
<?php endforeach; ?>




