<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
		<?php
			include("dados/dados.php");
			include("cabecalho.php");
		?>
		<ul class="info">
			<?php

				foreach ($produtos as $produto) {
					?>
					<li>
						<img src="<?php echo $produto["fotoTrufa"];?>">
						<div>
							<h3><?php echo $produto["item"];?></h3>
							<span class="precoProduto"><?php echo $produto["preco"]; echo $produto["valor"];?></span>
						</div>
					</li>
					<?php
				}
			?>
		</ul>
		<?php include("rodape.php");?>
	</body>
</html>