<?php
header('X-XSS-Protection:0;');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>問題2</title>

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
if (isset($_GET['answer'])) {
?>
			<div class="row">
				<div class="col-lg-6">
					<div class="well bs-component">
						<fieldset>
							<legend>以下の内容で送信します</legend>
							<div class="form-group">
								<label for="textArea" class="col-lg-2 control-label">脆弱性について</label>
								<div class="col-lg-10">
									<textarea class="form-control" name="answer" rows="3" id="textArea" readonly><?php echo $_GET['answer']; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<a href="2.php" class="btn btn-success">戻る</a>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
			</div>
<?php
} else {
?>
			<div class="row">
				<div class="col-lg-6">
					<div class="well bs-component">
						<form class="form-horizontal" action="2.php" method="get" autocomplete="off">
							<fieldset>
								<legend>アンケートに回答をお願いします</legend>
								<div class="form-group">
									<label for="textArea" class="col-lg-2 control-label">脆弱性について</label>
									<div class="col-lg-10">
										<textarea class="form-control" name="answer" rows="3" id="textArea"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<button type="submit" class="btn btn-primary">確認</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
<?php
} 
?>
		</div>
	</body>
</html>










