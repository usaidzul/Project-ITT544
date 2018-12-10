<h2><?=$title;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('post/create');?>

  <div class="form-row">
  	 <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label for="noPhone">Phone No</label>
      <input type="text" class="form-control" name="noPhone" placeholder="0123456789">
    </div>
  </div>
  <div class="form-group">
    <label for="fName">First Name</label>
    <input type="text" class="form-control" name="fName" placeholder="Ahmad">
  </div>
  <div class="form-group">
    <label for="lName">Last Name</label>
    <input type="text" class="form-control" name="lName" placeholder="Hafiz">
  </div>
  <div class="form-group">
    <label for="fName">Email</label>
    <input type="email" class="form-control" name="email" placeholder="abc@yahoo.com">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="number" class="form-control" name="role">
    </div>

    <div class="form-group">
    <label for="bookid">Book id</label>
    <input type="text" class="form-control" name="bookid" placeholder="">
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
    </div>
  <!--</div>-->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>