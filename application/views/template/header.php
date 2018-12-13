<html>

	<head>



		 <title> Hotel Reservation System </title>
		 <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <style>

 .fa {
  padding: 10px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 3px 1px;
  border-radius: 1000px
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

}
   </style>

	</head>

	<body> 
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand"href="<?php echo base_url(); ?>">FUSA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/post">List Customer</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/post/book">List Bookings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/post/create">Booking</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(!$this->session->userdata('logged_in')) :?>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login </a>
      </li>
     
      <?php endif;?>
       <?php if($this->session->userdata('logged_in')) :?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout </a>
      </li>
         <?php endif;?>
    </ul>
   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<div class="container">

  <?php if($this->session->flashdata('post_created')):?>
    <?php echo '<p class="alert alert-success">'
.$this->session->flashdata('post_created').'</p>';?>
    <?php endif;?>

     <?php if($this->session->flashdata('user_registered')):?>
    <?php echo '<p class="alert alert-success">'
.$this->session->flashdata('user_registered').'</p>';?>
    <?php endif;?>

     <?php if($this->session->flashdata('user_loggedin')):?>
    <?php echo '<p class="alert alert-success">'
.$this->session->flashdata('user_loggedin').'</p>';?>
    <?php endif;?>

    <?php if($this->session->flashdata('user_loggedout')):?>
    <?php echo '<p class="alert alert-success">'
.$this->session->flashdata('user_loggedout').'</p>';?>
    <?php endif;?>




     

   