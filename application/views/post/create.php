<h2><?=$title;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('post/create');?>

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="id">Cust Id</label>
      <input type="number" class="form-control" name="id" placeholder="Customer Id">
    </div>
    <div class="form-group col-md-6">
      <label for="date">Booking Date</label>
      <input type="date" class="form-control" name="date" placeholder="dd//mm//yyyy">
    </div>
    <div class="form-group col-md-6">
      <label for="days">Days</label>
      <input type="number" class="form-control" name="days" placeholder="1 2 3">
    </div>
    <div class="form-group col-md-6">
      <label for="roomid">Room Id</label>
      <input type="number" class="form-control" name="roomid" placeholder="Room Id">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>