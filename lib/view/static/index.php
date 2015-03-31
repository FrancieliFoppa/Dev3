<!DOCTYPE html>
<html lang="pt-BR">
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
							<a class="navbar-brand" href="index.html">DS<span>3</span></a>
						</div>
					</div>
				</div>
			</header>
			<!-- end header -->
			
			
			<section id="content">
				<?php echo $view->show();	//Show central content ?>
			</section>
			
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