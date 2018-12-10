
<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('post/updateBook');?>
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="id">Book Id</label>
      <input type="number" class="form-control" name="bookid" readonly=readonly value="<?php echo $users['bookid'];?>">
    </div>
  	 <div class="form-group col-md-6">
      <label for="password">Cust ID</label>
      <input type="number" class="form-control" name="id" placeholder="Cust ID"  value="<?php echo $users['id'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="username">Booking Date</label>
      <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy"  value="<?php echo $users['date'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="days">Days</label>
      <input type="number" class="form-control" name="days" placeholder="1 2 3" value="<?php echo $users['days'];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="roomid">Room ID</label>
    <input type="number" class="form-control" name="roomid" placeholder=" 1 2 3" value="<?php echo $users['roomid'];?>">
  </div>
  
    <!--<div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>-->
  
  <!--</div>-->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>