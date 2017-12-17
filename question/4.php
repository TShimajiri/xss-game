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

		<title>問題4</title>

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
					<h2><?php echo h($_GET['name']); ?>さん ご登録ありがとうございます。</h2><br />
					<br />
					<br />
					<a href="<?php echo h($_GET['user_id']); ?>" class="btn btn-primary">MyPageへ</a>
					<br />
					<br />
					<a href="4.php" class="btn btn-success">戻る</a>
				</div>
			</div>
<?php
} else {
?>
			<div class="row">
				<div class="col-lg-12 col-md-7 col-sm-6">
					<h2>アカウント登録</h2>
				</div>
			</div>
			<form class="form-horizontal" action="4.php" method="get" autocomplete="off">
				<div class="form-group">
					<div class="col-xs-5">
						<label>ID</label>
						<input type="text" name="user_id" class="form-control" placeholder="12345">
						<br />
						<label>お名前</label>
						<input type="text" name="name" class="form-control" placeholder="脆弱性　太郎">
						<br />
						<label>メールアドレス</label>
						<input type="text" name="mail" class="form-control" placeholder="vul@email">
						<br />

						<button type="submit" class="btn btn-primary">登録</button>
					</div>
				</div>
			</form>

<?php
} 
?>
		</div>
	</body>
</html>
