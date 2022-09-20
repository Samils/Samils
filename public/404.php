<!DOCTYPE html>
<html>
<head>
	<title><?= isset($title) ? $title : '404' ?></title>
	<style type="text/css">
		<?= publics\styles() ?>
		body, html { background: white }
	</style>
	<?= publics\meta_tags() ?>
</head>
<body id="Samils">
	<div class="error-page">
		<div class="error-page-container">
			<div class="error-page-code">
				<span>404</span>
			</div>
			<div class="error-page-data">
				<div class="error-page-data-message">
					Error, page not found
				</div>
				<div class="error-page-data-log">
					View the logs for more informations
				</div>
			</div>
		</div>
	</div>
</body>
</html>