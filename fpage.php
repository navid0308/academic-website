<?php 
	
	include_once "connection.php";
	include_once "includes/f_header.php";
	
	if(!mysqli_connect_errno()){
	
		$result = mysqli_query($con, "select * from faculty
				  where f_email = '".$_POST['email']."' 
				  and f_passw = '".md5($_POST['passw'])."'
				   ");
				  
		$count = mysqli_num_rows($result);
		$ft = mysqli_fetch_array($result);
		
		$fac = mysqli_query($con, "select * from faculty f, course_section c
				                      where f.f_code = c.f_code
				                       ");
		mysqli_close($con);
	}	
	
	if($count == 1){
		$faculty = $ft['f_name'];
		$fcode = $ft['f_code'];
	}
	else echo "login error<br/>";
	
	?>

		  <ul class="nav navbar-nav navbar-right">
            <li><a><b> <?php echo $faculty; ?> </b> </a> </li>
            <li style="margin:8px;"><button class="btn btn-success" data-toggle="modal" data-target="#dmodal">Log Out</button></li>           
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>	

	<div class="modal fade bs-example-modal-sm" id="dmodal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-sm">
			    <div class="modal-content">
				  <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">Do you really wish to log out?</h4>
			      </div>
			      <div class="modal-body">
			        
			        	<button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location='index.php'">Yes</button>
			        	<button type="button" class="btn btn-info" data-dismiss="modal">No</button>
			        
			      </div>
			      <div class="modal-footer">
			        
			      </div>
			    </div>
			  </div>
		  </div>
	
<div class="jumbotron">
      <div class="container">
        <div style="float:left; width:20%;">
	    	<img src="images/default-user.png" width="70%">
	    	</img>
	    </div>
        
        <div style="float:right; width:80%;">
        	<p>View Your Current Courses</p>
        	
        	<table class="table table-bordered" style="width:60%;">
	        	<thead>
	        		<tr>
	        			<th>Course Code</th>
	        			
	        			<th>Day/Time</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<?php 
	        		$sl_no=1;  
	        	    foreach ($fac as $f){ ?>
	        			<tr>	        				
					        <td>
					        	<a href="<?php echo $site_url."fcourse.php?code=".$f['cs_code']."&name=".$faculty;?>"> <?php echo $f['cs_code'];?> </a>
					        </td>
					        	        				
	        				<td><?php echo $f['cs_day'];?></td>
	        				
	        			</tr>
	       			<?php $sl_no++; } ?>
	        	</tbody>
	        	
	        </table>
	        <p>
	        	<input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#toggleDemo" value="Add Course">
			    <!-- Collapsible Element HTML -->
			    <div id="toggleDemo" class="collapse out">
			    	<p>
			    		<form role="form" name="add_course" action="add_course.php" id="add_course" enctype="multipart/form-data" method="post">
     			
				     		<div style="width:50%">
				     		  <div class="row">
				     		  	<div class="col-xs-6">
								    
								    <input type="text" class="form-control" name="cname" placeholder="Enter course name">
						  		</div>
							    <div class="col-xs-6">
								    
								    <input type="text" class="form-control" name="code" placeholder="Enter course code">
							    </div>
				 		  		
				     		  </div>
				     		  
				     		  <br/>
				     		  
				     		  <div class="row">
				     		  	<div class="col-xs-6">
								    
								    <input type="text" class="form-control" name="credits" id="credits" placeholder="Enter number of credits">
						  		</div>
							    <div class="col-xs-6">
								    
								    <input type="text" class="form-control" name="section" placeholder="Enter section number">
							    </div>
				 		  		
				     		  </div>
				     		  
				     		  <br/>
				     		  
				     									  
							  <div class="row">
							  	<div class="col-xs-6">
							      <input type="text" class="form-control" name="day" placeholder="Enter day(ST or MW)">
							  	</div>
							  	<div class="col-xs-6">
							      <input type="time" class="form-control" name="time" placeholder="Enter class time">
							  	</div>
							  </div>
							  
							  <br/>
							  
							  </div>
							  
							  <input type="hidden" name="faculty" value="<?php echo $faculty;?>" >
							  
							  <input type="hidden" name="fcode" value="<?php echo $fcode;?>" >
							  
							  <button type="submit" class="btn btn-success">Submit</button>
							</form>
			    	</p>
			    </div>
	        </p>
        </div>
        
      </div>
    </div>
    
    
    
    
    
	
	
<?php include_once "includes/footer.php"?>
	
	

	

	
	

	
