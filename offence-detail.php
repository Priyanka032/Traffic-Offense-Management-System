 <?php include "sidebar.php";?>
        <div class="content">
            <div class="container-fluid">
			
 <div class="row">
					<div class="col-md-8 col-md-offset-2">
					 			<?php
                            
				$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM reported_offence where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>
                       
			<div class="header text-center">
                                <h4 class="title">Offense Detail</h4>
                                <br>
								<div class="mapouter"><div class="gmap_canvas"><iframe width="650px" height="294px" 
							id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $row['address']; ?>
							&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" 
							marginwidth="0"></iframe></div>
							<style>.mapouter{text-align:right;height:294px;width:650px;}.gmap_canvas 
							{overflow:hidden;background:none!important;height:294px;width:650px;}</style><small></small></div>
                            </div>
							
                          
                            <div class="content table-responsive table-full-width table-upgrade">
							 <table class="table">
                                   
                                    <tbody>
									<tr>
                                        	<td >Offense:</td>
                                        	<td><?php echo $row['offence']; ?></td>
                                        </tr>
									<tr>
                                        	<td >Offense ID:</td>
                                        	<td><?php echo $row['offence_id']; ?></td>
                                        </tr>
										<tr>
                                        	<td >Vehicle Reg. No:</td>
                                        	<td><?php echo $row['vehicle_no']; ?></td>
                                        </tr>
										<tr>
                                        	<td >Driver's Licence:</td>
                                        	<td><?php echo $row['driver_license']; ?></td>
                                        </tr>
										<tr>
                                        	<td >Name of Offender:</td>
                                        	<td><?php echo $row['name']; ?></td>
                                        </tr>
										<tr>
                                        	<td >Sex of Offender:</td>
                                        	<td><?php echo $row['gender']; ?></td>
                                        </tr>
                                        <tr>
                                        	<td >Reported By:</td>
                                        	<td><?php echo $row['officer_reporting']; ?></td>
                                        </tr>
										 <tr>
                                        	<td >Location of Offense:</td>
                                        	<td><?php echo $row['address']; ?></td>
                                        </tr>
										<tr>
                                        	<td >Date of Offense:</td>
                                        	<td><?php echo date('l jS \of F Y h:i:s A');?></td>
                                        </tr>
										</tbody>
										</table>
										 </div>
						  
                </div> <?php }?>
            </div>
        </div>
		</div>
		</div>
		