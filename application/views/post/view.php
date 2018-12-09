<h2><?php echo $users['id'];?></h2>
<big>First Name: <?php echo $users['fName'];?></big><br>
<big>Last Name: <?php echo $users['lName'];?></big><br>
<big>Book Id:<?php echo $users['bookid'];?></big><br>
<div class="post-body">
	<?php echo $users['email']; ?>
</div>

<hr>
<a class="btn btn-primary" href="<?php echo base_url();?>post/edit/<?php echo $users['id'];?>">Edit</a>
 <?php echo form_open('/post/delete/'.$users['id']);?>
<input type="submit" value="Delete" class="btn btn-warning">
</form>

