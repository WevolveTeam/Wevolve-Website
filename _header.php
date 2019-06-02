<?php
if (isset($menu)) $menu = translate('menu', $language);
?>
<input type="checkbox" nostyle="true" id="responsiveMenuToggle" />
<label for="responsiveMenuToggle" id="responsiveMenuToggleButton"></label>
<div id="Menu" style="position:fixed;">
    <div id="profileSection">
        <div id="logoContainer"></div>

            <?php if (hasAccount()) { // User logged in ?>
            <div id="ifConnected">
                <input type="checkbox" nostyle="true" id="dropDownDisplayToggle" />
                <label for="dropDownDisplayToggle" id="profilePic"></label>
                <div id="dropDownProfileMenu">
                    <div id="profilePic"></div>
                    <h3 style="text-align:center;"><?=$_SESSION['account']['pseudo']?></h3>
                    <ul>
                        <li id="profile"><a href="/<?=$language?>/profile/<?=$_SESSION['account']['pseudo']?>"><?=$menu['profile']?></a></li>
                        <li id="settings"><a href="/<?=$language?>/profile/<?=$_SESSION['account']['pseudo']?>/settings"><?=$menu['settings']?></a></li>
                        <li id="logout"><a onclick="logOut();"><?=$menu['logout']?></a></li>
                    </ul>
                </div>
            </div>
            <?php } ?>

        <div id="ifNotConnected"<?php if (!hasAccount()) echo ' style="display:block;"'?>>
            <button class="basic white" onclick="location.replace('<?php
            if (substr($_SERVER['PHP_SELF'], 0, 12) != "/account.php") { // Redirection after successful login
                echo "/".$language."/account?redirect_url=".urlencode(substr($_SERVER['REQUEST_URI'], 1));
            } else {
                echo "#";
            } 
            ?>');">Login</button>
        </div>
    </div>
    <div id="logoContainer"></div>
    <ul id="mainLinks">
        <li id="home"><a href="/<?=$language?>/"><?=$menu['home']?></a></li>
        <li id="downloads"><a href="/<?=$language?>/downloads"><?=$menu['dl']?></a></li>
        <li id="join-us"><a href="/<?=$language?>/join-us"><?=$menu['join']?></a></li>
    </ul>
</div>
<style>
#profilePic{
    background:url("/assets/img/profile_picture/<?=strtolower($_SESSION['account']['pseudo'])?>.jpg") center center no-repeat;
}
body {
    padding-top:70px;
}
@media screen and (max-width: 800px) {
    body {
        padding-top:0px;
    }
}
</style>