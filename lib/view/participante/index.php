<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="Maiglon Lubacheuski, Eduardo Reis, Francieli Foppa, Denis Vidal" />
		
		<title>Trab DS3</title>
		<!-- css -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<link href="css/skin.css" rel="stylesheet" />
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<!-- start header -->
			<header>
				<div class="navbar navbar-default navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="?show=static&action=home">new<span>PMI</span></a>
						</div>
						
						<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li><a href="?show=site&action=home">Home</a></li>
								<li class="dropdown ">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">teste DropDown <b class=" icon-angle-down"></b></a>
									<ul class="dropdown-menu">
										<li><a href="">t1</a></li>
										<li><a href="">t2</a></li>
										<li><a href="">t3 box</a></li>
									</ul>
								</li>
								<li><a href="">menu item</a></li>
								<li><a href="">menu item2</a></li>
								<li class="active"><a href="">menu item 3</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- end header -->
			
			<?php echo $view->show();	//Show central content ?>
			
			<footer>
				<div id="sub-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="copyright">
									<p><span> UNISINOS | Desenvolvimento de Software 3 - 2015/1 </span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		
		<!-- javascript -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>