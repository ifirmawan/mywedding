<div class="uk-height-medium">
	<div class="js-wrapper">
		<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay-interval: 6000" id="wedding-slider">

			<ul class="uk-slider-items">
				<?php  for ($i=1; $i <= 10; $i++) : ?>
					<li class="uk-margin-right uk-width-1-3@m">
						<img src="<?= "images/slide-$i.jpg" ?>" alt="<?= $i ?>">
						<div class="uk-position-center uk-panel"></div>
					</li>
				<?php endfor; ?>
			</ul>

			<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

		</div>
	</div>
</div>