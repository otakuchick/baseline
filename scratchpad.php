<!DOCTYPE html>
<html>
<head>
	<title>Scratchpad</title>
	<link rel="stylesheet" href="assets/css/core.css" />
	<link rel="stylesheet" href="assets/css/core-responsive.css" />
	<link rel="stylesheet" href="assets/css/wizard.css" />
	<link rel="stylesheet" href="assets/css/prototype.css">
	<script src="assets/js/lib/core.js"></script>
	<script src="assets/js/lib/lib.js"></script>
	<script>
    	$LAB.setGlobalDefaults({AlwaysPreserveOrder:true});
    	$LAB.queueScript("assets/js/lib/jquery.js");
    	$LAB.queueScript("assets/js/lib/header.js");
    	$LAB.queueScript("assets/js/prototype.js").queueWait(function(){
    		uitk.init();
    	});
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="layout-1col-a" id="scratchpad">
	<?php include 'components/header.php'; ?>
	<?php include 'components/nav-primary.php'; ?>
	<?php include 'components/header-page-scratchpad.php'; ?>
	<div class="site-content-wrap cf">
		<div class="site-content cols-row cf">
			<?php include 'components/header-scratchpad-flight1.php'; ?>
			<div class="cols-row cf">
				<div class="timestamp">Viewed 3 hours ago</div>
			</div>
			<div class="flexcard-listing">
				<ul>
					<?php include 'components/flexcard-scratchpad-flight1.php' ; ?>
				</ul>
			</div>
			<?php include 'components/header-scratchpad-flight2.php'; ?>
			<div class="cols-row cf">
				<div class="timestamp">Viewed 4 hours ago</div>
			</div>
			<div class="flexcard-listing">
				<ul>
					<?php include 'components/flexcard-scratchpad-flight2.php' ; ?>
				</ul>
			</div>
			<?php include 'components/header-scratchpad-hotel1.php'; ?>
			<div class="cols-row cf">
				<div class="timestamp">Viewed 5 hours ago</div>
			</div>
			<div class="flexcard-listing">
				<ul>
					<?php include 'components/flexcard-scratchpad-hotel1.php' ; ?>
				</ul>
			</div>
			<?php include 'components/header-scratchpad-hotel2.php'; ?>
			<div class="cols-row cf">
				<div class="timestamp">Viewed 6 hours ago</div>
			</div>
			<div class="flexcard-listing">
				<ul>
					<?php include 'components/flexcard-scratchpad-hotel2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
				</ul>
			</div>
			<?php include 'components/header-scratchpad-package1.php'; ?>
			<div class="cols-row cf">
				<div class="timestamp">Viewed 7 hours ago</div>
			</div>
			<div class="flexcard-listing">
				<ul>
					<?php include 'components/flexcard-scratchpad-package1.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package1.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package1.php' ; ?>
				</ul>
			</div>
			<?php include 'components/header-scratchpad-package2.php'; ?>
			<div class="cols-row cf">
				<div class="timestamp">Viewed 8 hours ago</div>
			</div>
			<div class="flexcard-listing">
				<ul>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php include 'components/footer.php'; ?>
<script>$LAB.runQueue();</script>
</body>
</html>