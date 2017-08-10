<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$item = $this->item;
//print_r($params); ?>
<div class="post_header">
	<a href="<?php echo $item->alias;?>">
		<h1>
			<?php echo $item->title;?>
		</h1>
	</a>
</div>
<div class="post_category">
	<span class="category">
		<a href="<?php echo $item->category_route;?>">
		<i class="fa fa-hashtag" aria-hidden="true"></i>
			<?php echo $item->category_title;?>
		</a>
	</span>
	<div class="btn-group" role="group">
		
	</div>
</div>
<div class="post_rating">
	
</div>
<div class="post_info">
	<?php echo $item->introtext; ?>
</div>