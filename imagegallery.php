<!-- AMARA TARIQ -->
<!-- imagegallery.html -->
<!-- Image Gallery - showcasing my art -->
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
		
        <h1>Image Gallery</h1>

        <div class="gallery">
            <a target="_blank" href="https://i.imgur.com/anzU1Zx.jpg">
              <img class="gallery-images" src="https://i.imgur.com/anzU1Zx.jpg">
            </a>
            <div class="desc">Isolation</div>
        </div>
		
        <div class="gallery">
            <a target="_blank" href="https://i.imgur.com/BPstfum.jpg">
              <img class="gallery-images" src="https://i.imgur.com/BPstfum.jpg">
            </a>
            <div class="desc">The Dark Neon Sea</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://i.imgur.com/M6ERWta.jpg">
              <img class="gallery-images" src="https://i.imgur.com/M6ERWta.jpg">
            </a>
            <div class="desc">The Smile</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://i.imgur.com/fHkF54L.png">
              <img class="gallery-images" src="https://i.imgur.com/fHkF54L.png">
            </a>
            <div class="desc">Personal Logo</div>
        </div>

        <footer>
        <?php
			include "footer.php";
		?>
		</footer>

	</body>
</html>
