
<?php echo validation_errors(); ?>
      
<?php echo form_open('users/register');?>
<!------ Include the above in your HEAD tag ---------->
<center>  <h2>Registration Form</h2> </center>


<!-- Form Name -->
<center><legend>Register Here</legend></center>

 <div class="form-row">

     <div class="form-group col-md-6">
      <label for="fName">First Name</label>
    <input type="text" class="form-control" name="fName" placeholder="Ahmad">
    </div>

    <div class="form-group col-md-6">
        <label for="lName">Last Name</label>
    <input type="text" class="form-control" name="lName" placeholder="Hafiz">
    
    </div>

  </div>

  <div class="form-group">
     <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="abc@yahoo.com">
  </div>

  <div class="form-group">
    <label for="noPhone">Phone No</label>
      <input type="text" class="form-control" name="noPhone" placeholder="0123456789">
  </div>

   <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Username">
  </div>

  <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
  </div>

  <div class="form-row">

    <!--<div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="number" class="form-control" name="role">
    </div>

    <div class="form-group">
    <label for="bookid">Book id</label>
    <input type="text" class="form-control" name="bookid" placeholder="">
  </div>-->

   </div>
  <!--</div>-->
  <center>
  <button type="submit" class="btn btn-primary">Submit</button></center>

</form>
