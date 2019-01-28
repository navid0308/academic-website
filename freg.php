<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
  	<?php $site_url="http://localhost/uninet/"; ?>

		
		<div class="container" style="margin: 10px;">
        	<div class="row"><h2>New Registration</h2>
     		</div>
     		
     		<form role="form" name="freg" action="f_add.php" id="freg" method="post">
     			
     		<div style="width:50%">
     		  <div class="row">
     		  	<div class="col-xs-6">
				    
				    <input type="text" class="form-control" name="fname" placeholder="Enter your first name">
		  		</div>
			    <div class="col-xs-6">
				    
				    <input type="text" class="form-control" name="lname" placeholder="Enter your last name">
			    </div>
 		  		
     		  </div>
     		  
     		  <br/>
     		  
     		  <div class="row">
     		  	<div class="col-xs-6">
				    
				    <input type="text" class="form-control" name="dept" id="dept" placeholder="Enter department">
		  		</div>
			    <div class="col-xs-6">
				    
				    <input type="text" class="form-control" name="code" placeholder="Enter faculty code">
			    </div>
 		  		
     		  </div>
     		  
     		  <br/>
     		  
     		  <div class="form-group">
			    
			    <input type="email" class="form-control" name="email" placeholder="Enter email">
			  </div>
			  
			  <div class="row">
			  	<div class="col-xs-6">
			      <input type="password" class="form-control" name="passw" placeholder="Password">
			  	</div>
			  	<div class="col-xs-6">
			      <input type="password" class="form-control" name="cpassw" placeholder="Confirm Password">
			  	</div>
			  </div>
			  
			  <br/>
			  <div class="form-group">
			    <label for="exampleInputFile">Upload a Picture</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Example block-level help text here.</p>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
			  </div>
			  
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
     	</div>

<?php include_once "includes/footer.php" ?>
