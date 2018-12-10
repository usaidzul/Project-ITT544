<h2><?php echo $books['bookid'];?></h2>
<big>Booking Date: <?php echo $books['date'];?></big><br>
<big>Days: <?php echo $books['days'];?></big><br>
<big>Room Id:<?php echo $books['roomid'];?></big><br>

<hr>
<a class="btn btn-primary" href="<?php echo base_url();?>post/editBook/<?php echo $books['bookid'];?>">Edit</a>
 <?php echo form_open('/post/deleteBook/'.$users['bookid']);?>
<input type="submit" value="Delete" class="btn btn-warning">
</form>

