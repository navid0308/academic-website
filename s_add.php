<?php 
	
	include_once "includes/header.php";
 
	include_once "connection.php";
	

	if(!mysqli_connect_errno())
	{
		$insert_query="INSERT INTO student(st_name, st_id, st_dept, st_email, st_passw)
					   
					   VALUES('".$_POST['fname'].' '.$_POST['lname']."','".$_POST['id']."', '".$_POST['dept']."', '".
					   
					   $_POST['email']."', '".md5($_POST['passw'])."' );";
		
		mysqli_query($con,$insert_query);
		
		mysqli_close($con);
	}
	
	?>
	
	<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
            	<h1 class="masthead-brand">UniNet</h3>
              <!-- <h3 class="masthead-brand">Cover</h3> -->
              <ul class="nav masthead-nav">
                <li class="active"><a href="#">Home</a></li>
                
                <li>
					<button class="btn btn-primary" data-toggle="modal" data-target="#smodal">SignUp</button>
                </li>
                
				
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Welcome To Uninet!</h1>
            <p class="lead">The University Academic Network</p>
            <p class="lead">You are now a registered member. 
            </p>
            <p class="lead">
              <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#lmodal">Please Login</button>
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>
    
    <div class="modal fade bs-example-modal-sm" id="smodal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
		  <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        
	        	<button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location='sreg.php'">Student</button>
	        
	        
	       
	        	<button type="button" class="btn btn-info" onclick="window.location='freg.php'">Faculty</button>
	        
	        
	      </div>
	      <div class="modal-footer">
	        
	      </div>
	    </div>
	  </div>
	</div>
	
	<div class="modal fade bs-example-modal-sm" id="lmodal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
		  <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel">Login to UniNet</h4>
	      </div>
	      <div class="modal-body">
	        
	        	<button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location='slogin.php'">Student</button>
	        	<button type="button" class="btn btn-info" onclick="window.location='flogin.php'">Faculty</button>
	        
	      </div>
	      <div class="modal-footer">
	        
	      </div>
	    </div>
	  </div>
	</div>
    
<?php include_once "includes/footer.php" ?>
