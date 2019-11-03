<?php
$Parsedown 	= new Parsedown();
$detect 	= new Mobile_Detect;
$infos 		= json_decode(file_get_contents(DIR_JSON.'information.json'), true);
?>
<div class="uk-container uk-container-small  uk-margin-top">
	<div class="uk-text-center">
		
		<?php foreach ($infos as $key => $value) : ?>
			<?php if ($key === 3 ) : ?>
				<hr/>
				<h3><?= $value['title'] ?></h3>
				<div class="uk-countdown-wrapper">
					<div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: <?= $value['description'] ?>">
						<div>
							<div class="uk-countdown-number uk-countdown-days"></div>
							<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hari</div>
						</div>
						<div class="uk-countdown-separator">:</div>
						<div>
							<div class="uk-countdown-number uk-countdown-hours"></div>
							<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Jam</div>
						</div>
						<div class="uk-countdown-separator">:</div>
						<div>
							<div class="uk-countdown-number uk-countdown-minutes"></div>
							<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Menit</div>
						</div>
						<div class="uk-countdown-separator">:</div>
						<div>
							<div class="uk-countdown-number uk-countdown-seconds"></div>
							<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Detik</div>
						</div>
					</div>
				</div>
				<?php  else:  ?>
					<h4>
						<small><?= $value['title'] ?></small><br/>
						<?= $Parsedown->text($value['description']) ?>
					</h4>	
					<?php 
					if (!empty($value['url_label'])) {
						if ($detect->isiOS()) {
							$action_url = $value['url_ios'];
						}else{
							$action_url = $value['url_web'];
						} ?>
						<a href="<?= $action_url ?>" class="uk-button uk-button-<?= $value['url_class'] ?> uk-button-small" target="_blank">
							<span data-uk-icon="<?= $value['url_icon'] ?>"></span>
							<?= ucwords($value['url_label']) ?>
						</a>
					<?php }?>
				<?php endif; ?>
			<?php endforeach; ?>

			<hr/>
		</div>
	</div>