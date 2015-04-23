<?php
/**
* @version $Id:$
* @package plg_rsg2_singledisplay
* @copyright Copyright (C) 2007 Jonathan DeLaigle. (plugin for Joomla 1.0.x.)
* @copyright Copyright (C) 2010 Radek Kafka. (Migration of plugin to Joomla 1.5.x and addition of Highslide using Highslide JS for Joomla plugin)
* @copyright Copyright (C) 2011 RSGallery2 Team. (Addition of popup options and the popup styles: No popup, Normal popup, Joomla Modal. Code slightly re-arranged.)
* @copyright Copyright (C) 2012 RSGallery2 Team. (Code changed for Joomla 2.5 and addition of clearfloat and modal behaviour)
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Usage example: {rsg2_singledisplay:9999,thumb,true,left;float:left,both}
*	 imageid: Backend > Components > RSGallery2 > Items: use the number from the ID column.
*	 size: thumb, display or original.
*	 caption: true (use the item desciption as a caption) or false (no caption).
*	 format: text-align style property
*	 clearfloat: both, left, right (clears float after image with extra div with style clear:both/left/right) or false for no added div
*/
defined( '_JEXEC' ) or die();
?>

Changelog
------------
This is a non-exhaustive but informative changelog for the plg_rsg2_singledisplay 
plugin for RSGallery2, including alpha, beta and stable releases.
Our thanks to all those people who've contributed bug reports and code fixes.

Legend:
* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note

2015-03-19 finnern - SVN ...
+ Added try and catch with error messages
  
2015-01-10 finnern - SVN ...
+ Adapted for J!3.x
  
2012-10-30 Mirjam - SVN 1100
+ Added "jimport('joomla.html.parameter');" to function rsgallery2_singledisplay_parameters
  User dartVader suggested this fix for "Fatal error: Class 'JParameter' not found" error
  (system: Joomla 2.5.7, RSGallery2 3.2.0, PHP 5.4.5, plg_rsg2_singledisplay_3.1_J25).
  Note: not reproduced on PHP 5.3.3 system.
^ Removed assignement by reference "&" in
  $plugin =& JPluginHelper::getPlugin('content', $pluginName);
+ Added (empty) index.html file

--------------- 3.1.0 -- SVN 1066 -- 2012-02-25 -------------

2012-02-26 Mirjam - SVN 1065
^ Changes with respect to 3.0
  When the plugin cannot show an image (wrong use of plugin, 
  unpublished item or gallery or user not allowed to view 
  (access) the item) it just shows nothing unless the new debug 
  plugin option is enabled.

--------------- 3.0.0 -- SVN  -- 2012-02-18 -------------

2012-02-19 Mirjam - SVN 1065
^ Changes in 3.0 with respect to 2.1
  changes to let this plugin work on Joomla 2.5.x (no longer on Joomla 1.5.x)
  addition of clearfloat option after images
  addition of modal popup
! Tagging 3.0 (for Joomla 2.5)

--------------- 2.1.0 -- SVN 1064 -- 2011-05-14 -------------

2012-02-19 Mirjam - SVN 1065
^ Changes in 3.0 with respect to 2.1
  changes to let this plugin work on Joomla 2.5.x (no longer on Joomla 1.5.x)
  addition of clearfloat option after images
  addition of modal popup

2012-02-19 Mirjam - SVN 1064
! Tagging 2.1 (for Joomla 1.5)

--------------- 2.0.0 -- SVN 1030 -- 2011-05-14 -------------

2011-05-15 Mirjam - SVN 1027
+ Added plg_rsg2_singledisplay files to RSGallery2 SVN on JoomlaCode
! Tagging 2.0 (for Joomla 1.5)

--------------- 0.2.0 -- SVN 394  -- 2007-11-13 -------------