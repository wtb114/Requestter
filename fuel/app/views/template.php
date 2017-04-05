<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('small-business.css'); ?>
	<style>
	body { margin: 0px; }
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu">
        <a>MENU</a>
      </button>
			<a class="navbar-brand" href="/">
				
			</a>
		</div>
		<div class="container">
			<div class="collapse navbar-collapse" id="header-menu">
				<ul class="nav navbar-nav">
					<li><a href="/request">Request</a></li>
					<li><a href="/tweet/about">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="col-md-12">
			<?php echo $content; ?>
		</div>
	</div>

	<div class="container" style="text-align:center">
    <footer class="footer">
      <div class="small">
        &copy; 2016 Requestter ~ Created by KengoShidahara ~
      </div>
    </footer>
  </div>
</body>
</html>