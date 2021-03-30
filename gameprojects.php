<!-- AMARA TARIQ -->
<!-- gameprojects.html -->
<!-- GAME PROJECTS - showcasing my gaming projects -->
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
		
        <h1>Game Projects</h1>
			
		<div class="project">
			<a target="_blank" href="https://i.imgur.com/fHkF54L.png">
            	<img class="project-image" src="https://i.imgur.com/fHkF54L.png">
        	</a>
			<div class="project-info">
        		Add a description of the project here 
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
				
			</div>
			
		</div>

        <footer>
		<?php
			include "footer.php";
		?>
		</footer>

	</body>
</html>

