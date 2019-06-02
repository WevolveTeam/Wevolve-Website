<?php
if (!isset($footer)) $footer = translate('footer', $language);
if (!isset($menu)) $menu = translate('menu', $language);
?>
<div id="Footer" style="position:relative;display:block;left:none;right:none;top:none;margin-top:30px;">
	<footer style="position:relative;">
		<div id="wevolveLogo"></div>
		<div class="footerFlex"> 
			<h2>Wevolve</h2>
			<ul id="wevolveLinks">
				<li><a href="/<?=$language?>/faq"><?=$footer['faq']?></a></li>
				<li><a href="mailto:contact@wevolve.yt"><?=$footer['contact']?></a></li>
				<li><a href="/<?=$language?>/translator"><?=$footer['translator']?></a></li>
				<li><a href="#"><?=$footer['tos']?></a></li>
			</ul>
		</div>
		<div class="footerFlex"> 
			<h2>Navigation</h2>
			<ul id="navigationLinks">
				<li><a href="/<?=$language?>/"><?=$menu['home']?></a></li>
				<li><a href="/<?=$language?>/downloads"><?=$menu['dl']?></a></li>
				<li><a href="/<?=$language?>/join-us"><?=$menu['join']?></a></li>
			</ul>
		</div>
		<div class="footerFlex"> 
			<h2>Réseaux sociaux</h2>
			<ul id="socialLinks">
				<li><a id="facebook" href="https://www.facebook.com/WevolveTeam" target="_blank">Facebook</a></li>
				<li><a id="twitter" href="https://twitter.com/WevolveTeam" target="_blank">Twitter</a></li>
				<li><a id="github" href="https://github.com/WevolveTeam" target="_blank">Github</a></li>
				<li><a id="discord" href="https://wevolve.yt/discord">Discord</a></li>
			</ul>
		</div>
		<div id="languages"> 
			<div id="selectLanguage-wrap">
				<select id="selectLanguage">
					<option name="fr"<?php if ($language == "fr") echo ' selected="selected"'; ?>>Français</option>
					<option name="en"<?php if ($language == "en") echo ' selected="selected"'; ?>>English</option>
					<option name="es"<?php if ($language == "es") echo ' selected="selected"'; ?>>Espanõl</option>
				</select>
			</div>
		</div>
		<a id="ytMade" href="https://developers.google.com/youtube/terms/branding-guidelines" target="_blank"></a>
	</footer>
</div>
<script>
$(document).ready(function() {
	$('#selectLanguage').change(function() {
		window.location.replace(window.location.href.replace('/<?=$language?>/', '/'+$('#selectLanguage option:selected').attr('name')+'/'));
	});
	/*
	$(window).resize(function(b) {
		footerFix();
	});
	footerFix();
	setInterval(function() {
		footerFix();
	}, 500);
	*/
});
function footerFix() {
	setTimeout(function() {
		$('div footer').css({"position": "relative"});
		var footerY = $('div footer').offset().top + $('div footer').height();
		if ($(window).height() > footerY) {
			$('div footer').css({"position": "fixed", "bottom": "0"});
		}
	}, 10);
}
</script>
