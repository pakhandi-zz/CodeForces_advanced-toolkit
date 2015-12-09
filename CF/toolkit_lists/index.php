<html>

	<head>
		<title>CF-Toolkit</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/homepage.css" rel="stylesheet">
		<script src="../js/html5shiv.min.js"></script>
	    <script src="../js/respond.min.js"></script>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="../css/reset.css">
	    <link rel="stylesheet" href="../css/style.css">
	    <script src="../js/modernizr.js"></script>
	    <script type="text/javascript" src="../js/homepage.js"></script>
	    <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>

	<body>

		<nav class="main-nav navbar navbar-inverse navbar-fixed-top" id ="my-navbar">
			
			<div class = "container-fluid">
			    <div class = "navbar-header">
			      	<button type="button" class ="navbar-toggle" data-toggle = "collapse" data-target ="#navbar-collapse">
				    	<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  	</button>
		         	<a href="../php/homepage.php" class="navbar-brand">CFToolkit</a>	
			    </div>
		       
		      	<div class="collapse navbar-collapse" id="navbar-collapse">
		        	<a href="#0" class="cd-signin btn btn-warning navbar-btn navbar-right">Sign In</a>
		        	<a href="#0" class="cd-signup btn btn-warning navbar-btn navbar-right">Sign Up</a>
		         	<ul class="nav navbar-nav">
				        <li><a href="compete.php">Compete</a>
				        <li><a href='allsub.php'>All Submissions</a>
				        <li><a href="lastsub.php">Last Submissions</a>
				        <li><a href="compare.php">Compare</a>
				        <li><a href="bugecode.com">Bug-e-Code</a>
				        <li><a href="notice.php">Notice</a>
					</ul>
		      	</div>
		    </div>
		</nav>

	   	<div id="textslide"><p>Welcome to CF Toolkit</p></div>
        

        <div class="cd-user-modal"> 
		<div class="cd-user-modal-container"> 
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> 
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
			</div> 

			<div id="cd-signup"> 
				<form class="cd-form">

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

                    <div class="g-recaptcha" data-sitekey="6LfPchITAAAAAEoJDHZDo6cYHtu5osOyYMFn9gCE"></div>
					
					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>

				</form>

			<div id="cd-reset-password"> 
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> 
			<a href="#0" class="cd-close-form">Close</a>
		</div> 
	</div> 
        
 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    <script src="../js/main.js"></script>
	</body>
</html>
