<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<?php include 'html-header.php'?>
		<?php include 'authentication.php'?>
		<script src="/frontend/js/authentication.js"> </script>
	</head>
	<body>
		<?php include 'header.php'?>
		<section class="container-fluid no-padding home-container">
			<div class="slideshow">
				<div class="slideshow-image">
					<img src="/frontend/img/art.jpg"> </img>
					<div class="slideshow-center-line"> </div>
					<div class="slideshow-center-text clickable">
						Welcome
					</div>
				</div>
			</div>
		</section>

		<script src="/frontend/js/slideshow.js"> </script>
		<script>
			$(document).ready(function () {
				if (!HAS_LOGGED_IN) {
					$('#account-dropdown').hide();
					$('#signout-button').hide();
					$('#list-project-link').hide();
					$('#create-project-link').hide();
				} else {
					$('#login-dropdown').hide();
				}
			});
		</script>
	</body>
</html>

