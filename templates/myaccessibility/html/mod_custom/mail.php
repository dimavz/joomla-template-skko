<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$doc = JFactory::getDocument();
// print_r($doc->template);
// exit();
?>
<?php if($doc->template == 'skko'):?>
	<a class="btn btn-success " href="http://inbox.skko.by/" role="button"><i class="fa fa-envelope" aria-hidden="true"></i>
		<?php echo strip_tags($module->content);?>
	</a>

	<?php else:?>
		<div class="mail">
			<a href="http://inbox.skko.by/">
				<i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
				
				<span><?php echo strip_tags($module->content);?></span>
			</a>
		</div>
	<?php endif;?> 

