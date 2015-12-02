<!DOCTYPE html>
<html>
<head>
	<title>PPU HMSI</title>
	<link rel="stylesheet" type="text/css" href="/pemilu.app/public/lib/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="/pemilu.app/public/lib/css/styles.css">
	<link href='/pemilu.app/public/lib/css/mapbox.css' type="text/css" rel='stylesheet' />
</head>
<body>
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper container">
				<a href="#!" class="brand-logo">PPU HMSI</a>
			</div>
		</nav>
	</div>

	<!-- LOGIN FORM -->
	<div class="container">
		<div class="col s12">
			<form action="login" method="POST">
				<h4 class="center blue-text heading">Where me login ?</h4>
				<div class="row">
					{!! csrf_field() !!}
					<div class="input-field col s12 m6 offset-m3">
						<i class="mdi-action-account-circle prefix"></i>
						<input id="icon_prefix" type="text" class="validate" name="username">
						<label for="icon_prefix">Username</label>
					</div>
					<div class="input-field col s12 m6 offset-m3">
						<i class="mdi-action-lock prefix"></i>
						<input id="icon_prefix" type="password" class="validate" name="password">
						<label for="icon_prefix">Password</label>
					</div>
					<div class="col s12 m6 offset-m3">
						<div class="section center">
							<input type="submit" class="btn wave-effect" value="Login" />
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<footer class="page-footer">
		<div class="container"><a href="">
		</a>
		<div class="row"><a href="">
			<div class="col l6 s12">
				<h5 class="white-text">PPU HMSI</h5>
				<p class="grey-text text-lighten-4"></p>
			</div>
		</a>
		<div class="col l3 s12">
			<h5 class="white-text">Pages</h5>
			<ul>
				<li><a href=""></a><a class="white-text" href="/">Page 1</a>
				</li>
				<li><a class="white-text" href="#">Page 2</a>
				</li>
				<li><a class="white-text" href="#">Page 3</a>
				</li>
			</ul>
		</div>
		<div class="col l3 s12">
			<h5 class="white-text">Developer Team</h5>
			<h6 class="white-text">Panda</h6>
		</div>
	</div>
</div>
<div class="footer-copyright center">
	<div class="container">
		PPU HMSI | Made with 
		<a class="grey-text text-lighten-2" href="http://materializecss.com/">Materialize CSS</a>
	</div>
</div>
</footer>
<script type="text/javascript" src="/pemilu.app/public/lib/js/jquery.js"></script>
<script type="text/javascript" src="/pemilu.app/public/lib/js/materialize.min.js"></script>
</body>
</html>