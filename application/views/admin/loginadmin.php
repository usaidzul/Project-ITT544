
<?php echo form_open('admin/loginadmin');?>

<center>  <h2>Login Form</h2> </center>
<!-- Form Name -->
<center><legend>Login Here</legend></center>

<div class="form-row">

  <div class="form-group col-md-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
        
   <div class="form-group col-md-6">
        <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    
    </div>
    </div>

  <center>
  <button type="submit" class="btn btn-primary">login</button></center>
    </fieldset>
<?php echo form_close();?>
