<?php
header('X-XSS-Protection:0;');

function repl($target) {
	$replaceText = str_replace("(", "（", $target);
	$replaceText = str_replace(")", "）", $replaceText);
	return $replaceText;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>問題3</title>

		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/frame.js"></script>


		<style type="text/css">
			body { background-color: rgb(255, 255, 255); }
		</style>
	</head>
	<body>
		<div class="container">
<?php
if (isset($_GET['name'])) {
?>
			<div class="row">
				<div class="col-lg-12 col-md-7 col-sm-6">
					<h2>ようこそ<?php echo repl($_GET['name']); ?>さん</h2>
					<br />
					<a href="3.php" class="btn btn-success">戻る</a>
				</div>
			</div>

<?php
} else {
?>
			<div class="row">
				<div class="col-lg-12 col-md-7 col-sm-6">
					<h2>あなたの名前を入力してください</h2>
				</div>
			</div>
			<form class="form-horizontal" action="3.php" method="get" autocomplete="off">
				<div class="form-group">
					<div class="col-xs-5">
						<input type="text" name="name" class="form-control">
					</div>
					<div class="col-xs-7">
						<button type="submit" class="btn btn-primary">送信</button>
					</div>
				</div>
			</form>

<?php
} 
?>
		</div>
	</body>
</html>
