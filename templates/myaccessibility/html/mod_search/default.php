<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Including fallback code for the placeholder attribute in the search field.
//JHtml::_('jquery.framework');
JHtml::_('script', 'system/html5fallback.js', array('version' => 'auto', 'relative' => true));

?>

<form action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-inline">
	<i class="fa fa-search" aria-hidden="true"></i>
	<input name="searchword" type="search"  id="mod-search-searchword<?php echo $module->id ?>" placeholder="<?php echo $text ?>" >
	<button type="submit" onclick="this.form.searchword.focus();"><?php echo JText::_('TPL_MYACCESSIBILITY_MOD_SEARCH_BUTTON'); ?></button>
	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
</form>
