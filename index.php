<!DOCTYPE html>
<html>
<head>
	<title>Baseline</title>
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

<!--
Layout body class options:

One column - 100%
layout-1col-a

 ____
|    |
|    |
|____|


Two column split - 25% 75%
layout-2col-a off-campus

 _____
| |   |
| |   |
|_|___|


Two column split (inverse) - 75% 25%
layout-2col-a off-campus inverse

 _____
|   | |
|   | |
|___|_|


Two column split B - 33.3% 66.6%
layout-2col-b off-campus

 ____
| |  |
| |  |
|_|__|


Two column split B (inverse) - 66.6% 33.3%
layout-2col-b off-campus inverse

 ____
|  | |
|  | |
|__|_|


Two column stack - 33.3% 66.6% vertical stack on sml display
layout-2col-stack

 ____
|_|__|
| |  |
|_|__|


Two column stack (inverse) - 66.6% 33.3% vertical stack on sml display
layout-2col-stack inverse

 ____
|__|_|
|  | |
|__|_|

-->

<body class="layout-1col-a" id="home-page">
	<?php include 'components/header.php'; ?>
	<?php include 'components/nav-primary.php'; ?>
	<div class="site-content-wrap">
		<?php include 'components/hero-form.php'; ?>
		<div class="module-wrapper">
			<?php include 'components/recent-searches.php'; ?>
			<?php include 'components/rec-hotels.php'; ?>

			<header class="cols-row-header section-header cf">
				<h3 class="section-header-main">Main title for carousel</h3>
				<h4 class="section-header-sub">Subhead for carousel</h4>
				<div class="section-header-aside">
					<span class="disclaimer">Aside for carousel title content</span>
				</div>
			</header>

			<?php include 'components/p-carousel.php'; ?>
			<?php include 'components/loc-destinations.php'; ?>
			<?php include 'components/top-deals.php'; ?>
		</div>
	</div>
	<?php include 'components/footer.php'; ?>
<script>$LAB.runQueue();</script>
</body>
</html>