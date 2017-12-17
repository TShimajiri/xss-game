<?php
header('X-XSS-Protection:0;');

function h($target) {
	return htmlspecialchars($target, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>おまけ</title>

		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/frame.js"></script>

		<style type="text/css">
			body { background-color: rgb(255, 255, 255); }
		</style>
	</head>
<?php
if (isset($_GET['color'])) {
?>
	<body style="background-color:<?php echo ($_GET['color']); ?>">
<input style="-moz-binding: url(../xbl.xml#xss)">
<?php
} else {
?>
	<body>
<?php
}
?>

		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-7 col-sm-6">
					<h2>背景色選択</h2>
					<div class="dropdown">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						背景色
						<span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="dropdownMenu1">
					  <li><a href="99.php?color=white"><font style="color:white">■</font>白</a></li>
						<li><a href="99.php?color=blue"><font style="color:blue">■</font>青</a></li>
						<li><a href="99.php?color=pink"><font style="color:pink">■</font>ピンク</a></li>
						<li><a href="99.php?color=green"><font style="color:green">■</font>緑</a></li>
					  </ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
