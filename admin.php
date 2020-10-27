<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: white">
	<div class="col-12">
		<div class="col-6 mx-auto" style=" width: 800px; height: 50px">
			<h1 class="text-primar">Добавить товар</h1>
		</div>
		<form action="insert.php" method="GET">
		<meta charset="utf-8">
		<div class="col-6 mx-auto">
			<input class="form-control form-group border border-primary" style=" width: 800px; height: 50px" type="" name="name">
		</div>
		<div class="col-6 mx-auto">
			<input class="form-control form-group border border-primary" style=" width: 800px; height: 150px" class="mx-auto" type="" name="desc">
		</div>
		<div class="col-6 mx-auto">
			<input class="form-control form-group border border-primary" style=" width: 800px; height: 50px" type="" name="cost">
		</div>
		<div class="col-6 mx-auto">
			<input class="form-control form-group border border-primary" style=" width: 800px; height: 50px" type="" name="img">
		</div>
		<div class="col-6 mx-auto">
			<button class="form-control border border-primary form-group mt-5" style=" width: 800px; height: 50px">Добавить</button>
		</div>
		</form>
	</div>
</body>
</html>
