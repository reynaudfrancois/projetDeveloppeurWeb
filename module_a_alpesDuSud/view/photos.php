<?php require "header.inc.php"; ?>

<main id="photos">

	<h2 class="generalTitle">LES PHOTOS</h2>

	<div class="imgCenter">

		<div>
			<button id="before"> &lt; </button>
			<div id="sliderContainer">
				<img name="slide" src="../public/images/imgSlider/0.JPG" id="imgSlider" alt="Alpes du Sud" />
			</div>
			<button id="next"> &gt; </button>
			<h4 id="titleImage"></h4>
			<h4 id="counterImage"></h4>			
		</div>

		<script src="../public/javascript/slider.js"></script>		

	</div>

</main>

<?php require "footer.inc.php"; ?>