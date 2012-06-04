<?php
/**
 *
 *
 * @package   mod_dribbleshots
 * copyright Siege21.com/Antony Doyle
 * @license GPL3
 */
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
$userName = $params->get('username');
$shotCount = $params->get('shotcount');
$jQuery = $params->get('jQuery'); 
$dribCss = $params->get('dribcss'); 
$txtAbove = $params->get('textabove');

 // Returns a reference to the global document object - credit to @nternetinspired for this bit (via OneWeb - check it out on GitHub! https://github.com/nternetinspired/OneWeb)
$doc = JFactory::getDocument();
 
if ($jQuery) {
  $doc->addCustomTag('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>');
}
$doc->addCustomTag('<script src="modules/mod_dribbleshots/js/jribble.js"></script>');

if ($dribCss) {
  $doc->addCustomTag('<link href="modules/mod_dribbleshots/tmpl/css/dribbleshots.css" media="screen" rel="stylesheet" type="text/css" />');
}