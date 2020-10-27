<!DOCTYPE html>
<html>
<head>
	<title>Мой Магазин</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>	
	<div class="col-12  border border-primary row" style="height: 108px;">
		<div class="row">
			<div class="col-4 px-0 py-0  row">
				<div class="col-4  " >
					<img class="w-75 rounded-circle" src="moto2.svg">
				</div>
				<div class="col-4  " >
					<img class="w-75 rounded-circle" src="games2.svg">
				</div>	
				<div class="col-4  " >
					<img class="w-75 rounded-circle" src="music2.svg">
				</div>		
			</div>
			<div class="col-4 ml-3   ">
				<h1 class="text-primary ml-2" style="font-size: 55px">MyShop.com</h1>
			</div>
			<div class="col-4 px-0 py-0 row">
				<div class="col-4   b">
					<button class="w-100 form-control form-group mt-3 bg-primary"><a class="text-light" href="">Доставка</a></button>
				</div>
				<div class="col-4  ">
					<button class="w-100 form-control form-group mt-3 bg-primary" style="height: 75px"><a class="text-light" href="">Служба поддержки</a></button>
				</div>	
				<div class="col-4  ">
					<form action="admin.php" method="GET">
					<meta charset="utf-8">
					<button class="w-100 form-control form-group mt-3 bg-primary"><a class="text-light" href="admin.php">Админ-панель</a></button>	
					</form>
					<?php  
					$con = mysqli_connect("127.0.0.1","root","" , "shop");
					$q = mysqli_query($con, "SELECT * FROM things");
					$stroka1 = $q->fetch_assoc();
					$stroka2 = $q->fetch_assoc();
					$stroka3 = $q->fetch_assoc();
					$stroka4 = $q->fetch_assoc();
					$stroka5 = $q->fetch_assoc();
					?>
				</div>		
			</div>
		</div>
	</div>
	<div class="col-12" style="height: 700px">
		<div class="row">
			<div class="col-4 px-0 py-0 border border-primary">
				<?php 
					echo "<h1>" . $stroka1['name'] . "</h1>";
					echo "<img class='w-100 'src = " . $stroka1['img'] . ">";
					echo "<p style='font-size: 20px'>" . $stroka1['description'] . "</p>";
					echo "<h1>" . $stroka1['cost'] . "</h1>";
				 ?>
			</div>
			<div class="col-8 px-0 py-0 ">
				<div class="col-12 px-0 py-0 border border-primary" style="height: 350px">
					<?php 
						echo "<h1>" . $stroka2['name'] . "</h1>";
						echo "<img style='height: 200px; width: 600px'src = " . $stroka2['img'] . ">";
						echo "<p style='font-size: 20px'>" . $stroka2['description'] . "</p>";
						echo "<h1>" . $stroka2['cost'] . "</h1>";
				 	?>
				</div>
				<div class="col-12 " style="height: 350px">
					<div class="row">
						<div class="col-6  border border-primary">
							<?php 
								echo "<h1>" . $stroka3['name'] . "</h1>";
								echo "<img style='height: 200px; width: 450px'src = " . $stroka3['img'] . ">";
								echo "<p style='font-size: 20px'>" . $stroka3['description'] . "</p>";
								echo "<h1>" . $stroka3['cost'] . "</h1>";
					 		?>
						</div>
						<div class="col-6 px-0 py-0 border border-primary">
							<?php 
								echo "<h1>" . $stroka4['name'] . "</h1>";
								echo "<img style='height: 200px; width: 350px'src = " . $stroka4['img'] . ">";
								echo "<p style='font-size: 20px'>" . $stroka4['description'] . "</p>";
								echo "<h1>" . $stroka4['cost'] . "</h1>";
					 		?>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="col-12 px-0 py-0 " style="height: 400px">
		<div class="row">
			<div class="col-6 border border-primary ">
				<?php 
					echo "<h1>" . $stroka5['name'] . "</h1>";
					echo "<img class='w-100 'src = " . $stroka5['img'] . ">";
					echo "<p style='font-size: 20px'>" . $stroka5['description'] . "</p>";
					echo "<h1>" . $stroka5['cost'] . "</h1>";
				 ?>
			</div>
			<div class="col-6 ">
				
			</div>
		</div>
	</div>

</body>
</html>