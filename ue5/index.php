<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UE5 - Navbar and Form Demo</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	ul.msg-details-box{
    		list-style-type: square;
    	}
    	.panel-success{
    		margin-top: 80px;
    	}
    </style>
  </head>
  <body>
	<nav class="navbar navbar-default">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a> <!-- "Brand" always refers to home page! -->
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link 1<span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link 2</a></li>
	        <li><a href="#">Link 3</a></li>
	        <li><a href="#">Link 4</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Login</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h3>Send us a message</h3>
			<form action="#" method="post">
			  <div class="form-group">
			    <label for="fn-input">First name</label>
			    <input type="text" class="form-control" id="fn-input" name="fname" value="Homer">
			  </div>
			  <div class="form-group">
			    <label for="sn-input">Surname</label>
			    <input type="input" class="form-control" id="sn-input" name="sname" value="Simpson">
			  </div>
			  <div class="form-group">		    
			    <label for="msg-input">Your message</label>		    
			    <textarea class="form-control" id="msg-input" rows="6" name="message">Homer Jay Simpson ist eine der Hauptfiguren der Zeichentrick-Fernsehserie Die Simpsons. Im Original wird die Figur von Dan Castellaneta, in der deutschen Übersetzung wurde er bis zu dessen Tod im November 2015 von Norbert Gastell synchronisiert.</textarea>
			  </div>
			  <button type="submit" class="btn btn-default" name="submitBtn">Send message</button>
			</form>	
			</div>
			<div class="col-md-6">
				<?php
					if(isset($_POST['submitBtn'])){ ?>
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">Message received</h3>
							</div>
							<ul class="msg-details-box">
								<li><strong>First name:</strong> <?php echo $_POST['fname'] ?></li>
								<li><strong>Surname:</strong> <?php echo $_POST['sname'] ?></li>
								<li><strong>Message:</strong> <?php echo $_POST['message'] ?></li>
							</ul>
						</div>
				<?php	}
				?>
			</div>		
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>