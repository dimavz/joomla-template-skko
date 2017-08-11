<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="tab-content wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
<div id="post_news" class="tab-pane active">
<div class="article-row">
	<h2>Новости</h2>
	<?php $countNews = 1; ?>
	<?php foreach ($list as $item) : ?>
		<?php if ($countNews == 1): ?>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="article_main_widget">
					<div>
					<div class="article_main_img">
						<a href="<?php echo $item->link?>">
							<?php $images = json_decode($item->images); ?>
								<?php if (isset($images->image_fulltext) && !empty($images->image_fulltext)) : ?>
									<img src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo $item->title?>" title="Подробнее">
								<?php endif; ?>
						</a>
					</div>
					<div class="article_main_content">
						<div class="article_main_header">
							<div class="data">
								<span class="day">27</span>
								<span class="month">Сентября</span>
								<span class="year">2017</span>
							</div>
							<h3>
								<a href="<?php echo $item->link?>"><?php echo $item->title?></a>
							</h3>
						</div>
						<div class="article_main_post">
							<a href="<?php echo $item->link?>">
								<?php echo $item->introtext; ?>
							</a>
						</div>
					</div>
						
					</div>
				</div>
			</div>
			<?php $countNews++; ?>
		<?php else : ?>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="article_widget">
					<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item');?>
				</div>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>
</div>
</div>
