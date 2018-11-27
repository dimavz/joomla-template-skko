<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$fl=true;

$doc = JFactory::getDocument();
$lang = $doc->getlanguage();
// echo $lang;
// Функция руссификации даты
function rus_date() {
// Перевод
	$translate = array(
		"am" => "дп",
		"pm" => "пп",
		"AM" => "ДП",
		"PM" => "ПП",
		"Monday" => "Понедельник",
		"Mon" => "Пн",
		"Tuesday" => "Вторник",
		"Tue" => "Вт",
		"Wednesday" => "Среда",
		"Wed" => "Ср",
		"Thursday" => "Четверг",
		"Thu" => "Чт",
		"Friday" => "Пятница",
		"Fri" => "Пт",
		"Saturday" => "Суббота",
		"Sat" => "Сб",
		"Sunday" => "Воскресенье",
		"Sun" => "Вс",
		"January" => "Января",
		"Jan" => "Янв",
		"February" => "Февраля",
		"Feb" => "Фев",
		"March" => "Марта",
		"Mar" => "Мар",
		"April" => "Апреля",
		"Apr" => "Апр",
		"May" => "Мая",
		"May" => "Мая",
		"June" => "Июня",
		"Jun" => "Июн",
		"July" => "Июля",
		"Jul" => "Июл",
		"August" => "Августа",
		"Aug" => "Авг",
		"September" => "Сентября",
		"Sep" => "Сен",
		"October" => "Октября",
		"Oct" => "Окт",
		"November" => "Ноября",
		"Nov" => "Ноя",
		"December" => "Декабря",
		"Dec" => "Дек",
		"st" => "ое",
		"nd" => "ое",
		"rd" => "е",
		"th" => "ое"
		);
 // если передали дату, то переводим ее
	if (func_num_args() > 1) {
		$timestamp = func_get_arg(1);
		return strtr(date(func_get_arg(0), $timestamp), $translate);
	} else {
// иначе текущую дату
		return strtr(date(func_get_arg(0)), $translate);
	}
}

// Функция белоруссификации даты
function bel_date() {
// Перевод
	$translate = array(
		"am" => "дп",
		"pm" => "пп",
		"AM" => "ДП",
		"PM" => "ПП",
		"Monday" => "Панядзелак",
		"Mon" => "Пн",
		"Tuesday" => "Аўторак",
		"Tue" => "Аўт",
		"Wednesday" => "Серада",
		"Wed" => "Ср",
		"Thursday" => "Чацвер",
		"Thu" => "Чт",
		"Friday" => "Пятніца",
		"Fri" => "Пт",
		"Saturday" => "Субота",
		"Sat" => "Сб",
		"Sunday" => "Нядзеля",
		"Sun" => "Нд",
		"January" => "Студзеня",
		"Jan" => "Студ",
		"February" => "Лютага",
		"Feb" => "Лют",
		"March" => "Сакавіка",
		"Mar" => "Сак",
		"April" => "Красавіка",
		"Apr" => "Крас",
		"May" => "Мая",
		"May" => "Мая",
		"June" => "Чэрвеня",
		"Jun" => "Чэр",
		"July" => "Ліпеня",
		"Jul" => "Ліп",
		"August" => "Жніўня",
		"Aug" => "Жніў",
		"September" => "Верасня",
		"Sep" => "Вер",
		"October" => "Кастрычніка",
		"Oct" => "Кас",
		"November" => "Лістапада",
		"Nov" => "Ліст",
		"December" => "Снежня",
		"Dec" => "Снеж",
		"st" => "ое",
		"nd" => "ое",
		"rd" => "е",
		"th" => "ое"
		);
 // если передали дату, то переводим ее
	if (func_num_args() > 1) {
		$timestamp = func_get_arg(1);
		return strtr(date(func_get_arg(0), $timestamp), $translate);
	} else {
// иначе текущую дату
		return strtr(date(func_get_arg(0)), $translate);
	}
}
// print_r($list);
$catLink = ''; //Переменная для хранения ссылки на категорию
?>
<?php $countNews = 1; ?>
<?php foreach ($list as $item) : ?>
	<?php $arrLinkCat = preg_split("/[\d,]+/", $item->link);?>
	<?php $catLink = $arrLinkCat[0]; ?>
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
								<span class="day">
									<?php echo date("d",strtotime($item->publish_up)); ?>
								</span>
								<span class="month">
									<?php 
									if ($lang=='ru-ru'){
										echo $month = rus_date("F", strtotime($item->publish_up));
									}
									elseif($lang=='be-by'){
										echo $month = bel_date("F", strtotime($item->publish_up));
									} 
									?>
								</span>
								<span class="year">
									<?php echo date("Y",strtotime($item->publish_up)); ?>
								</span>
							</div>
							<h3>
								<a href="<?php echo $item->link?>"><?php echo $item->title?></a>
							</h3>
						</div>
						<div class="article_main_post">
							<a href="<?php echo $item->link?>">
								<?php echo  $item->introtext; ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $countNews++; ?>
	<?php else : ?>
		<?php if ($fl): ?>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<?php $fl=false; ?>
			<?php endif; ?>
			<div class="article_widget">
				<div class="article_img">
					<a href="<?php echo $item->link?>">
						<?php $images = json_decode($item->images); ?>
						<?php if (isset($images->image_fulltext) && !empty($images->image_fulltext)) : ?>
							<img src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo $item->title?>" title="Подробнее">
						<?php endif; ?>
					</a>
				</div>
				<div class="article_header">
					<h3>
						<a href="<?php echo $item->link?>"><?php echo $item->title?></a>
					</h3>
					<div class="article_data">

						<?php  
							if ($lang=='ru-ru'){
								$day = rus_date("j", strtotime($item->publish_up));
								$month = rus_date("F", strtotime($item->publish_up));
								$year = rus_date("o", strtotime($item->publish_up));
								echo $day.' '.$month.' '.$year;
							}
							elseif($lang=='be-by'){
								$day = bel_date("j", strtotime($item->publish_up));
								$month = bel_date("F", strtotime($item->publish_up));
								$year = bel_date("o", strtotime($item->publish_up));
								echo $day.' '.$month.' '.$year;
							}
						?>
						<!-- <?php echo JText::sprintf(JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC3'))); ?> -->
					</div>
				</div>
				<div class="article_post">
					<a href="<?php echo $item->link?>">
						<?php echo $item->introtext; ?>
					</a>
				</div>
			</div><!-- /.article_widget -->
		<?php endif; ?>
	<?php endforeach; ?>
</div>
<div class="col-sm-12 col-xs-12">
	<div class="all_news">
		<a class="btn btn-success" href="<?php echo $catLink; ?>" role="button"><?php echo JText::_('TPL_SKKO_MOD_NEWS_BUTTON'); ?></a>
	</div>
</div>

