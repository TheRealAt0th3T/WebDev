<!-- AMARA TARIQ -->
<!-- commissions.html -->
<!-- COMMISSIONS SHOP PAGE -->
<html>
	<head>
	<?php
			if(isset($_SESSION['authenticated']) && $_SESSION['authenticated']){
				include "header2.php";
			}else{
				include "header.php";
			}
		?>
	</head>
	<body>
		
        <h1>Commissions</h1>

            <p>
                <div class="commission-container">
                    <img class="ShopTypes" src="/self_phonewallpaper.PNG" alt="Avatar" >
                    <div class="desc">example commission</div>
                </div>

                COMMISSION EXAMPLE DETAILS AND HOW TO SUBMIT GO HERE: </br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, 
				vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices 
				nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. 
				Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis 
				urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed 
				ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare 
				turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros 
				non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis 
				diam velit.
            </p>

		<footer>
			<p>
				Author: Amara Tariq
				<a href="https://agile-bastion-21160.herokuapp.com/"> x </a>
			</p>
		</footer>

	</body>
</html>
