<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

?>
<i class="fa fa-eye fa-lg" aria-hidden="true" title="<?php echo JText::_('COM_CONTENT_ARTICLE_HITS_ALL');?>"></i>
<span title="<?php echo JText::_('COM_CONTENT_ARTICLE_HITS_ALL');?>">
	<?php echo JText::sprintf($displayData['item']->hits); ?>
</span>