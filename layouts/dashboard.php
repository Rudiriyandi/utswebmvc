<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gudang Ku | Project5</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/gudang1.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/gudang.png" class="brand">
			<div class="user">Rudi Riyandi</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home1.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/barang">
						<img class="icon" src="<?php echo AST; ?>/img/dbarang.png" alt=""> Daftar Barang
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/supplier">
						<img class="icon" src="<?php echo AST; ?>/img/supplier.png" alt=""> Supplier
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pembelian">
						<img class="icon" src="<?php echo AST; ?>/img/beli.png" alt=""> Pembelian
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/penjualan">
						<img class="icon" src="<?php echo AST; ?>/img/jual.png" alt=""> Penjualan
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Designed by Mr. Sue
		</footer>
	</main>

</body>

</html>