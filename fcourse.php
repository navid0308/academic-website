<?php 
	
	include_once "connection.php";
	include_once "includes/f_header.php";
	$faculty = $_GET['name'];
	
	if(!mysqli_connect_errno()){
	
		$result1 = mysqli_query($con, "select * from enrolled e, student s
				  where e.cs_code = '".$_GET['code']."'
				  and e.st_id = s.st_id 
				  
				   ");
				   
		$result2 = mysqli_query($con, "select * from courses c, course_section cs
				  where cs.cs_code = '".$_GET['code']."'
				  and c.c_code = cs.c_code	");
				  
		//$count = mysqli_num_rows($result);
		$students = mysqli_fetch_array($result1);
		$class = mysqli_fetch_array($result2);
		
		mysqli_close($con);
	}
	
?>

		<ul class="nav navbar-nav navbar-right">
		            <li><a><b> <?php echo $faculty; ?> </b> </a> </li>
		            <li style="margin:8px;"><button class="btn btn-success" data-toggle="modal" data-target="#dmodal">Log Out</button></li>           
		          </ul>
		          
		        </div><!--/.nav-collapse -->
		      </div>
		    </div>
		    
		<div class="jumbotron" style="width:80%; margin-left:auto; margin-right: auto;">
	      <h3>
	      	Course: <?php echo $class['c_name']." "; 
	      				  echo $class['c_code']; ?>
	      </h3>
	      
	      <table class="table table-bordered" style="width:60%;">
	        	<thead>
	        		<tr>
	        			<th>Student ID</th>
	        			
	        			<th>Name</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<?php 
	        		$sl_no=1;  
	        	    foreach ($result1 as $r){ ?>
	        			<tr>	        				
					        <td>
					        	<a href="#"> <?php echo $r['st_id'];?> </a>
					        </td>
					        	        				
	        				<td><?php echo $r['st_name'];?></td>
	        				
	        			</tr>
	       			<?php $sl_no++; } ?>
	        	</tbody>
	        	
	        </table>
		</div>	