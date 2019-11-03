<?php

$navigations = json_decode(file_get_contents(DIR_JSON.'menu.json'), true);
$navigations = $navigations[0];
?>
<!--HEADER-->
<header class="uk-box-shadow-small" id="site-head" style="background-color: white">
	<div class="uk-container uk-container-expand">
		<nav class="uk-navbar" id="navbar" data-uk-navbar>
			<div class="uk-navbar-left">
				<a class="uk-navbar-item uk-logo" href="/">
					<strong><?= (isset($navigations['title']))? $navigations['title'] : ''  ?></strong>
				</a>
			</div>
			<div class="uk-navbar-right">
				<ul class="uk-navbar-nav uk-visible@m">
					<?php
					if (isset($navigations['list'])) {
						foreach ($navigations['list'] as $key => $value) {
							echo '<li><a href="'.$value['url'].'" uk-scroll>'.$value['label'].'</a></li>';
						}
					}
					?>
				</ul>
				<div class="uk-navbar-item">
					<a class="uk-navbar-toggle uk-hidden@m" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
					<?php
					if (isset($navigations['button'])) {
						$detect = new Mobile_Detect;
						foreach ($navigations['button'] as $key => $value) {
							if ($key === 0) {
								$icalendar 	= 'https://www.dropbox.com/s/wjhl66o1z8hj297/Ely_and_Iwan_Wedding.ics?dl=0&raw=1';
								$action_url = ($detect->isiOS())? $icalendar : $value['url'];
								echo '<a href="'.$action_url.'" class="uk-button uk-button-secondary uk-visible@m"target="_blank" >
								<span data-uk-icon="'.$value['icon'].'"></span>
								'.$value['label'].'
								</a>';
							}
						}
					}
					?>
				</div>
			</div>
		</nav>
	</div>
</header>
	<!--/HEADER-->