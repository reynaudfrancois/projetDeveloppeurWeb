<?php include "header.inc.php"; ?>

<main id="photos">

	<h2 class="generalTitle">LES PHOTOS</h2>

	<div class="imgCenter">

		<div>
			<button id="before"> < </button>
			<div id="sliderContainer">
				<img name="slide" src="../public/images/allImages/0.JPG" id="imgSlider" alt="Alpes du Sud" />
			</div>
			<button id="next"> > </button>
			<h4 id="titleImage"></h4>
			<h4 id="counterImage"></h4>			
		</div>

		<script type="text/javascript" src="../public/javascript/titleImages.js"></script>
		<script type="text/javascript" src="../public/javascript/slider.js"></script>		

	</div>

</main>

<?php include "footer.inc.php"; ?>
			

	