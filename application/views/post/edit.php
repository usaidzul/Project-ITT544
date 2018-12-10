
<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('post/update');?>
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="id">Id</label>
      <input type="number" class="form-control" name="id" readonly=readonly value="<?php echo $users['id'];?>">
    </div>
  	 <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password"  value="<?php echo $users['password'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Username"  value="<?php echo $users['username'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="noPhone">Phone No</label>
      <input type="text" class="form-control" name="noPhone" placeholder="0123456789" value="<?php echo $users['noPhone'];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="fName">First Name</label>
    <input type="text" class="form-control" name="fName" placeholder="Ahmad" value="<?php echo $users['fName'];?>">
  </div>
  <div class="form-group">
    <label for="lName">Last Name</label>
    <input type="text" class="form-control" name="lName" placeholder="lName" value="<?php echo $users['lName'];?>">
  </div>
  <div class="form-group">
    <label for="fName">Email</label>
    <input type="email" class="form-control" name="email" placeholder="abc@yahoo.com" value="<?php echo $users['email'];?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="number" class="form-control" name="role" readonly=readonly value="<?php echo $users['role'];?>">
    </div>

    <div class="form-group">
    <label for="bookid">Book id</label>
    <input type="text" class="form-control" name="bookid" readonly=readonly placeholder="" value="<?php echo $users['bookid'];?>">
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