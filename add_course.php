<?php 
	
	include_once "connection.php";
	include_once "includes/f_header.php";
	
	if(!mysqli_connect_errno()){
	
		$insert_query1 = "INSERT INTO courses(c_name, c_code, credits)
					   
					   VALUES('".$_POST['cname']."','".$_POST['code']."', '".$_POST['credits']."'  );";
		
		$insert_query2 = "INSERT INTO course_section(c_code, cs_code, f_code, cs_num, cs_day, cs_time)
					   
					   VALUES('".$_POST['code']."','".$_POST['code'].'.'.$_POST['section']."', '".$_POST['fcode']."', 
					   '".$_POST['section']."', '".$_POST['day']."', '".$_POST['time']."'  );";
					   
		mysqli_query($con,$insert_query1);
		mysqli_query($con,$insert_query2);
		
		mysqli_close($con);
	}	
	
	
	
	?>
	
<ul class="nav navbar-nav navbar-right">
            <li><a><b> <?php echo $_POST['faculty']; ?> </b> </a> </li>
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