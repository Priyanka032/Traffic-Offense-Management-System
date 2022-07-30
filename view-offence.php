<?php include"sidebar.php"?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                       
                            <div class="header">
                                <h4 class="title">Offence Table</h4>
                                <p class="category">Here is a list of all Offences</p>
                            </div>
                            <div class="content table-responsive table-full-width">
							
							 <label for="filter">Search</label> <input type="text" name="filter" value="" id="myInput" placeholder="Search with offence ID" onkeyup="myFunction()"/>
   
   <script>
function myFunction() {
  
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
                                <table class="table table-hover table-striped" id="myTable">
                                    <thead>
                                        <th>Offence ID</th>
                                    	<th>Offence</th>
                                    	<th>Offender</th>
                                    	<th>Reporter</th>
                                    	<th>Address</th>
										<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php 
	$result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                                        <tr>
										<td><?php echo $row['offence_id']; ?></td>
                                        	<td><a title="Click to view details" href="offence-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['offence']; ?></a></td>
                                        	<td><?php echo $row['name']; ?></td>
                                        	<td><?php echo $row['officer_reporting']; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><td>
			<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                                        	
                                        </tr>
	<?php } ?>
                                    </tbody>
                                </table>

								
    </div>
  </div>
  
								
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
		   <footer class="footer">
            <div class="container-fluid">
                
               
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	
	
	<script src="assests/js/bootstrap-notify.js"></script>
	<script src="assests/js/chartist.min.js"></script>

	
	

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	
	<script src="assests/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    

	
	<script src="assets/js/demo.js"></script>

	
	
 <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){


var element = $(this);

/
var del_id = element.attr("id");


var info = 'id=' + del_id;
 if(confirm("Sure you want to do these? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete-offence.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});

</script>
<script src="assets/js/script.js"></script>
</script>
</html>
