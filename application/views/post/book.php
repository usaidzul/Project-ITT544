
<h2><?=$title?></h2>
<?php foreach($book as $books) : ?>

 <h3><?php echo $books['bookid']; ?></h3>
 <small>Booking Date:<?php echo $books['date'];?></small><br>
 Days Book:<?php echo $books['days']; ?>
 Cust ID:<?php echo $books['id']; ?>
 Room ID:<?php echo $books['roomid']; ?>
 <br><br>
<?php endforeach; ?>




