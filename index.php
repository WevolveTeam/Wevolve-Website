<?php
require('inc/init.php');
$wevolve = translate('wevolve', $language);
$menu = translate('menu', $language);
$footer = translate('footer', $language);
?>
<!DOCTYPE html>
<html lang="<?=$language?>">
<head>
<?=headGenerate(
	// Title:
	$menu['home'],
	// Description:
	$wevolve['soon'],
	// Scripts:
	array(
        "/$language/assets/js/jquery-3.4.1.min.js" => ''
	),
	// CSS:
	array(
        "/$language/assets/css/_main.css",
        'https://use.fontawesome.com/releases/v5.7.2/css/all.css',
        "/$language/assets/css/Footer.css",
        "/$language/assets/css/Menus.css",
        "/$language/assets/css/Buttons.css"
	)
)?>
<style>
html {
    overflow:hidden;
    position:absolute;
	top:0;left:0;
	width:100%;
	transition:1s;

	/* Firefox compatibility... :) */
	height:200vh;
	background:linear-gradient(to right,#06C,#639),#06C;
}
body {
    padding-top:calc(25vh + 70px)!important;
	background:linear-gradient(to right,#06C,#639),#06C;
	height:200vh;
	overflow:hidden;
}
#main {
    user-select:none;
}
#title {
    position:absolute;
    display:block;
    font:100pt 'Mont';
    text-shadow:0 0 1.5em white;
    top:35vh;
    width:100%;
    text-align:center;
}
footer {
    background:none!important;
}
#description {
    position:absolute;
    display:block;
    font:18pt 'Geomanist-Book';
    top:calc(35vh + 170px);
    width:100%;
    text-align:center;
}
#main {
    color:white;
}
#scroll {
    position:fixed;
    left:0;bottom:10px;
    width:100%;
    text-align:center;
    font-size:18px;
    text-align:center;
    opacity:0.5;
}
.fa-cloud {
    position:absolute;
    opacity:0.2;
    transition:0.1s;
}
.fa-chevron-down {
    font-size:10px;
    margin:0 10px;
    vertical-align:middle;
}
#cloud1 {top:calc(15vh + 70px);left:10%;font-size:70px;}
#cloud2 {top:85vh;right:70%;font-size:80px;}
#cloud3 {top:30vh;right:10%;font-size:90px;}
@media screen and (max-width:800px) {
	#title {
		font-size:60pt;
		top:40vh;
	}
	#description {
		font-size:11pt;
		top:calc(40vh + 120px);
	}
	html {
		position:relative;
		overflow-y:scroll;
	}
	body {
		height:calc(100vh + 200px + 50vh - 200px);
		overflow-y:scroll;
	}
	#scroll {
		display:none;
	}
}
</style>
<script>
$(document).ready(function() {
	$(window).mousemove(function(event) {
		$("#title").css({
			"margin-left":-(event.pageX * 0.01),
			"margin-top":-(event.pageY * 0.01)
		});
		$("#description").css({
			"margin-left":-(event.pageX * 0.01),
			"margin-top":-(event.pageY * 0.01)
		});
		$("#cloud1").css({
			"margin-left":-(event.pageX * 0.04),
			"margin-top":-(event.pageY * 0.04)
		});
		$("#cloud2").css({
			"margin-right":-(event.pageX * 0.04),
			"margin-top":-(event.pageY * 0.04)
		});
		$("#cloud3").css({
			"margin-right":-(event.pageX * 0.04),
			"margin-top":-(event.pageY * 0.04)
		});
	});
	$(window).bind('wheel', function(e) {
		if (window.innerWidth >= 800) {
			if (e.originalEvent.deltaY > 0) {
				// Scroll down
				$('html').css({"top":"calc(-400px)"});
				$('#scroll').fadeOut(100);
			} else {
				// Scroll top
				$('html').css({"top":"0vh"});
			}
		}
	});
});
</script>
</head>

<body>
    <?php include('_header.php'); ?>
    <div id="main" style="text-align:center;height:calc(100vh - 200px);">
        <i id="cloud1" class="fas fa-cloud"></i>
        <i id="cloud2" class="fas fa-cloud"></i>
        <i id="cloud3" class="fas fa-cloud"></i>
        <span id="title">SOON</span>
        <span id="description"><?=$wevolve['soon']?></span>
        <span id="scroll"><i class="fas fa-chevron-down"></i> <?=$wevolve['scrolldown']?> <i class="fas fa-chevron-down"></i></span>
    </div>
	<?php include('_footer.php'); ?>
</body>
</html>