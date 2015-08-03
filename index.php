<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smisli dobro ime</title>
    <link rel="stylesheet" href="css/foundation.css" />
       <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
   <?php
    include('spoj.php')
    ?>
   <body id="naslovna">
  
  <div class="row">
    <div class="small-12 medium-12 large-12 large-centered small-centered medium-centered columns">
        <header>
    <h1>Cheese Curds</h1>
    <p>Yes, please.</p>
</header>
        </div>
       </div>
    <div class="row">
    <div class="small-12 medium-12 large-12 large-centered small-centered medium-centered columns">
    	<section class="loginform cf">
		<form name="login" action="login.php" method="get" accept-charset="utf-8">
			<ul>
				<li>
					<label for="usermail">Email</label>
					<input type="email" name="username" placeholder="youremail@email.com" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
				<li>
					<input type="submit" name="Submit" value="Start Scheduling">
				</li>
			</ul>
		</form>
	</section>
    </div>
  </div>
      
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    
  </body>
</html>
