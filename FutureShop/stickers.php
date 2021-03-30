<!-- AMARA TARIQ -->
<!-- stickers.html -->
<!-- STICKERS SHOP PAGE -->
<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
		<?php
			if(isset($_SESSION['authenticated']) && $_SESSION['authenticated']){
				include "header2.php";
			}else{
				include "header.php";
			}
		?>
	</head>
	<body>
		
        <h1>Stickers</h1>

        <div class="row">
        <div class="image-container">
            <img class="ShopTypes" src="https://i.imgur.com/fHkF54L.png" alt="Avatar" >
            <div class="desc">test 1</div>
        </div>

        <div class="image-container">
            <img class="ShopTypes" src="https://i.imgur.com/fHkF54L.png" alt="Avatar" >
            <div class="desc">test 2</div>
        </div>

        <div class="image-container">
            <img class="ShopTypes" src="https://i.imgur.com/fHkF54L.png" alt="Avatar" >
            <div class="desc">test 3</div>
        </div>
        </div>

		<footer>
			<p>
				Author: Amara Tariq
				<a href="https://agile-bastion-21160.herokuapp.com/"> x </a>
			</p>
		</footer>

	</body>
</html>
