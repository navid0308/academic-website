<?php 
	
	include_once "connection.php";
	include_once "includes/s_header.php";
	
	
	if(!mysqli_connect_errno()){
	
		$result = mysqli_query($con, "select * from student
				  where st_email = '".$_POST['email']."' 
				  and st_passw = '".md5($_POST['passw'])."'");
				  
		$count = mysqli_num_rows($result);
		$st = mysqli_fetch_array($result);
		
		$course = mysqli_query($con, "select * from enrolled e, course_section c
				                      where e.st_id = '".$st['st_id']."'
				                      and e.cs_code = c.cs_code ");
									   
		//$crs = mysqli_fetch_array($course);
		mysqli_close($con);
	}
?>
	

	<?php 
		if($count == 1){
		$student = $st['st_name'];	
		//echo "login success ".$st['st_name'];
	}
	else echo "login error<br/>";
	?>

		  <ul class="nav navbar-nav navbar-right">
            <li><a><b> <?php echo $student; ?> </b> </a> </li>
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
        	<h3>Academic Profile</h3>
	        <p>Semester: <?php echo $st['st_semester'];?></p>
	        <p>Current CGPA: </p>
	        <p>Courses</p>
	        
	        <table class="table table-bordered" style="width:60%;">
	        	<thead>
	        		<tr>
	        			<th>Course Code</th>
	        			<th>Faculty</th>
	        			<th>Day/Time</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<?php foreach ($course as $c){ ?>
	        			<tr>
	        				<td><a href="<?php echo $site_url."scourse.php?code=".$c['cs_code']."&id=".$st['st_id'];?>"> <?php echo $c['cs_code'];?></a> </td>
	        				<td><?php echo $c['f_code'];?></td>
	        				<td><?php echo $c['cs_day'];?></td>
	        			</tr>
	       			<?php } ?>
	        	</tbody>
	        </table>
	        
	        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
        </div>
        
      </div>
    </div>
    
    
	
	
<?php include_once "includes/footer.php"?>
	
	

	
