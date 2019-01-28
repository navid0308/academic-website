<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" id="flogin" name="flogin" action="fpage.php" method="post">
        <h2 class="form-signin-heading">faculty sign in</h2>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required autofocus>
        
        <input type="password" class="form-control" id="passw" name="passw" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
  
  </html>
  