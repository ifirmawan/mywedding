<?php

$weddings = json_decode(file_get_contents(DIR_JSON.'wedding.json'), true);
?>
<div class="uk-container uk-container-small">
	<div class="uk-child-width-1-2@m" uk-grid>
		<?php foreach ($weddings as $key => $value) : ?>
			<div>
				<div class="uk-card uk-card-default">
					<div class="uk-card-media-top">
						<img src="<?= $value['image'] ?>" alt="<?= $value['title'] ?>">
					</div>
					<div class="uk-card-body uk-text-center">
						<h4>
							<strong><?= ucwords($value['title']) ?></strong>
						</h4>
						<p><?= ucwords($value['description']) ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>