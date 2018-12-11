
<?php /*foreach($book as $books) : ?>

 <h3><?php echo $books['bookid']; ?></h3>
 <small>Booking Date:<?php echo $books['date'];?></small><br>
 Days Book:<?php echo $books['days']; ?>
 Cust ID:<?php echo $books['id']; ?>
 Room ID:<?php echo $books['roomid']; ?>
 <br><br>
<?php endforeach; */?>

 <title>Live Data Search in Codeigniter using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


 <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">LIST OF BOOKINGS</h2><br />
   <div class="form-group">
    <div class="input-group">
     
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />

  <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>Post/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>






