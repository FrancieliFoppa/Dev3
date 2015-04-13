<?php ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		
		<title>Trab DS3</title>
		
		<!-- Css Files -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<link href="css/skin.css" rel="stylesheet" />
		<link href="js/dataTables/dataTables-bootstrap.css" rel="stylesheet" />
		<link href="js/dataTables/dataTables.css" rel="stylesheet" />
		<link href="js/fancyBox/fancybox.css" rel="stylesheet" />
		
		<!-- Javascript Files -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/dataTables/dataTables.min.js"></script>
		<script src="js/dataTables/dataTables-bootstrap.js"></script>
		<script src="js/fancyBox/fancybox.js"></script>
		<script src="js/contextMenu/contextMenu.js"></script>
		<script src="js/contextMenu/taphold.js"></script>
		<script src="js/contextMenu/themeSwitcher.js"></script>
	
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
							<a class="navbar-brand" href="?show=usuario&action=home">new<span>PMI</span></a>
						</div>
						
						<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li><a href="?show=usuario&action=home">Home</a></li>
								<li class="dropdown ">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Eventos <b class=" icon-angle-down"></b></a>
									<ul class="dropdown-menu">
										<li><a href="?show=evento&action=listaEventos">Listar Eventos</a></li>
										<li><a href="?show=usuario&action=home">op2</a></li>
									</ul>
								</li>
								<!-- TODO: Testar se isAdministrator == 1 -->
								<li><a href="?show=usuario&action=listaUsuarios">Usu&aacute;rios</a></li>
								<!-- Fim teste -->
								<li><a href="" onClick="logout()">Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- end header -->
			
			<section id="content">
				<?php echo $view->show();	//Show central content ?>
			</section>
			
			<footer class="footer">
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
		<script type="text/javascript">
			function logout(){
				$.getJSON("?show=login&action=logout&ajax=1", function (){
					window.location.href = "?show=static&action=home";				
				});
			}
		</script>
	</body>
</html>