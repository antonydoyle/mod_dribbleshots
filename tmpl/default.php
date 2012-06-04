<?php 
/**
 *
 *
 * @package   mod_dribbleshots
 * copyright Siege21.com/Antony Doyle
 * @license GPL3
 */
 defined('_JEXEC') or die('Direct Access to this location is not allowed.');
?>
<script>
var playername = "<?php echo $userName; ?>";
var shotcount ="<?php echo $shotCount; ?>";
$.jribbble.getShotsByPlayerId(playername, function (playerShots) {
    var html = [];

    $.each(playerShots.shots, function (i, shot) {
        html.push('<div class="dribbleshot"><h3>' + shot.title + '</h3>');
        html.push('<a href="' + shot.url + '">');
        html.push('<img src="' + shot.image_teaser_url + '" ');
        html.push('title="' + shot.title + ' by ' + shot.player.name + '" ');
		html.push('alt="' + shot.title + '" ></a></div>');

    });

    $('#dribbleshots').html(html.join(''));
}, {page: 1, per_page: shotcount});
</script>
<div id="dribtext">
<p><?php echo $txtAbove; ?></p>
</div>
<div id="dribbleshots">


</div>