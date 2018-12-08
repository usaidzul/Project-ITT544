

<h2><?=$title?></h2>
<?php foreach($user as $users) : ?>

 <h3><?php echo $users['id']; ?></h3>
 <small>First Name: <?php echo $users['fName'];?></small><br>
 <?php echo $users['email']; ?>

<?php endforeach; ?>


