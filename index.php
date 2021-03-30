<!-- AMARA TARIQ -->
<!-- index.html -->
<!-- main home page -->
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
		<p>
			<img class="selfie" src="https://i.imgur.com/K1Poaq3.jpg" alt="selfie">
		</p>

		<p>
			<h1>Amara Tariq</h1>
			Hello! My name's Amara Tariq! I am currently a Junior at Boise State University.
			I am double majoring in Computer Science and GIMM (Gaming, Interactive, Mobile Media)
			and minoring in math. </br> 
			In the future, I hope to work in the gaming industry; weither that in the coding field 
			or in the art/animation side. Currently, due to my GIMM major, I work on creating a game 
			each semester. On the side I also do a lot of different art. I design prints and stickers,
			occationally doing acrylic pieces on canvas or shoes. 
		</p>

		<div class="socials">

			<img class="FindMeHeader" src="">

			<a href="https://www.instagram.com/at0th3t/"> 
				<img class="socialLogos" 
				src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png"
				>Instagram
			</a>
			<a href="https://twitter.com/at0th3t">
				<img class="socialLogos" src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png"
				>Twitter
			</a>
			<a href="">
				<img class="socialLogos" src="https://pngimg.com/uploads/tiktok/tiktok_PNG8.png"
				>Tiktok
			</a>
			<a href="https://www.youtube.com/user/pokemon4049">
				<img class="socialLogos" 
				src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c545.png"
				>YouTube
			</a>
		</div>

		<footer>
		<?php
			include "footer.php";
		?>
		</footer>

	</body>
</html>
