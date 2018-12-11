<br>
<br>
<!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
  <img src="<?php echo base_url('images/1157073_16062412150044053329.jpg'); ?>" style="width:60%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3> Los Angeles</h3>
      <p><b>Welcome to Hotel FUSA!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo base_url('images/Here’s-What-You-Can-and-Can’t-Steal-from-Your-Hotel-Room_363678794-Elnur-760x506.jpg'); ?>" style="width:60%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York</h3>
      <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
  <img src="<?php echo base_url('images/hotel-interior-room0416.jpg'); ?>" style="width:60%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Chicago</h3>
      <p><b>Thank you, Chicago - A night we won't forget.</b></p>    
    </div>
  </div>

  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}
</script>
