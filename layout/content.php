<?php

$navigations = json_decode(file_get_contents(DIR_JSON.'menu.json'), true);
$navigations = $navigations[0];

if (isset($navigations['list'])) {
	foreach ($navigations['list'] as $key => $value) {  ?>
		<section id="<?= $value['id'] ?>" class="uk-section uk-margin-top">
			<?php
				include( DIR_VIEW.$value['file'] );
			?>
		</section>
		<?php	
	} 
}
