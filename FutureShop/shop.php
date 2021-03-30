<!-- AMARA TARIQ -->
<!-- shop.html -->
<!-- MAIN SHOP PAGE -->
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
		
        <h1>Shop</h1>

        <div class="row">
        <div class="image-container">
            <img class="ShopTypes" src="https://i.imgur.com/fHkF54L.png" alt="Avatar" >
            <a href="/prints.html"> 
                <div class="overlay">
                    <div class="hover-text">Prints</div>
                </div>
            </a>
        </div>

        <div class="image-container">
            <img class="ShopTypes" src="https://i.imgur.com/fHkF54L.png" alt="Avatar" >
            <a href="/.html"> 
                <div class="overlay">
                    <div class="hover-text">Stickers</div>
                </div>
            </a>
        </div>

        <div class="image-container">
            <img class="ShopTypes" src="https://i.imgur.com/fHkF54L.png" alt="Avatar" >
            <a href="/.html"> 
                <div class="overlay">
                    <div class="hover-text">Comissions</div>
                </div>
            </a>
        </div>
        </div>

		<footer>
        <?php
			include "footer.php";
		?>
		</footer>

	</body>
</html>
