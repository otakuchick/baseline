<!DOCTYPE html>
<html>
<head>
	<title>Flex cards</title>
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
<!--
<style>
	.card {
		position:  relative;
	}
	.card:before {
		content: "";
		display: block;
		padding-top: 100%; /* initial ratio of 1:1*/
	}
	
	/* Other ratios */
	.ratio2_1:before {
		padding-top: 50%;
	}
	.ratio1_2:before {
		padding-top: 200%;
	}
	.ratio4_3:before {
		padding-top: 75%;
	}
	.ratio16_9:before {
		padding-top: 56.25%;
	}
	.aspect {
		/* Positioning */
		position:  absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
	}
</style>
-->
</head>

<body class="layout-1col-a">
	<?php include 'components/header.php'; ?>
	<?php include 'components/nav-primary.php'; ?>
	<div class="site-content-wrap cf">
		<div class="site-content cols-row cf">
			<div class="flexcard-listing cf">
				<ul>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
					<?php include 'components/flexcard-scratchpad-package2.php' ; ?>
				</ul>
			</div>
			<div class="grid-4 flexcard cf">
				<ul>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
				</ul>
			</div>
			<div class="flexcard grid-3 cf">
				<ul>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
				</ul>
			</div>
			<div class="flexcard grid-2 cf">
				<ul>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
					<?php include 'components/flexcard-scratchpad-hotel3.php' ; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php include 'components/footer.php'; ?>
<script>$LAB.runQueue();</script>
</body>
</html>