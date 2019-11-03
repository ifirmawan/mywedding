<?php

$navigations = json_decode(file_get_contents(DIR_JSON.'menu.json'), true);
$navigations = $navigations[0];
?>
<!-- OFFCANVAS -->
<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
	<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
		<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
		<ul class="uk-nav uk-nav-default">
			<?php
			if (isset($navigations['list'])) {
				foreach ($navigations['list'] as $key => $value) {
					echo '<li><a href="#'.$value['url'].'" uk-scroll>'.ucwords($value['label']).'</a></li>';
				}
			}
			?>
			<li class="uk-nav-divider"></li>
			<?php
			if (isset($navigations['button'])) {
				$detect = new Mobile_Detect;
				foreach ($navigations['button'] as $key => $value) {
					$icalendar 	= 'https://www.dropbox.com/s/wjhl66o1z8hj297/Ely_and_Iwan_Wedding.ics?dl=0&raw=1';
					$action_url = ($detect->isiOS() && $key === 0)? $icalendar : $value['url'];
					echo '<li><a href="'.$action_url.'" target="_blank" ><span data-uk-icon="'.$value['icon'].'"></span>&nbsp;'.ucwords($value['label']).'</a></li>';
				}
			}
			?>
		</ul>
	</div>
</div>
<!-- /OFFCANVAS -->