<?php include "sidebar.php" ?>
        <div class="content">
            <div class="container-fluid">
                
                    </div>
					
					   
                               <div class="col-md-6">
							    <div class="card">
                        
                            <div class="header">
                                <h4 class="title">Latest Reported Offences</h4>
                               
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
<?php 
	$result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC limit 5");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>                                           
										   <tr>
                                                <td><?php echo $row['offence']; ?></td>
                                                <td class="td-actions text-right">
                                                  <span style="background-color:#FFFFFF; ">  <?php echo $row['date']; ?> </span>
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
		


     