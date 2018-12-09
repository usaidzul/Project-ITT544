
 <?php echo validation_errors(); ?>
      
<?php echo form_open('users/login');?>

<center>  <h2>Login Form</h2> </center>


<!-- Form Name -->
<center><legend>Login Here</legend></center>

<div class="form-row">

  <div class="form-group col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="abc@yahoo.com">
    </div>
        
   <div class="form-group col-md-6">
        <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    
    </div>
    </div>

  <center>
  <button type="submit" class="btn btn-primary">login</button></center>
    </fieldset>
</form>
