<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc  = JFactory::getDocument();
$lang = $doc->getlanguage();
// echo $lang;
// Функция руссификации даты
function rus_date()
{
// Перевод
	$translate = array(
		"am"        => "дп",
		"pm"        => "пп",
		"AM"        => "ДП",
		"PM"        => "ПП",
		"Monday"    => "Понедельник",
		"Mon"       => "Пн",
		"Tuesday"   => "Вторник",
		"Tue"       => "Вт",
		"Wednesday" => "Среда",
		"Wed"       => "Ср",
		"Thursday"  => "Четверг",
		"Thu"       => "Чт",
		"Friday"    => "Пятница",
		"Fri"       => "Пт",
		"Saturday"  => "Суббота",
		"Sat"       => "Сб",
		"Sunday"    => "Воскресенье",
		"Sun"       => "Вс",
		"January"   => "Января",
		"Jan"       => "Янв",
		"February"  => "Февраля",
		"Feb"       => "Фев",
		"March"     => "Марта",
		"Mar"       => "Мар",
		"April"     => "Апреля",
		"Apr"       => "Апр",
		"May"       => "Мая",
//		"May"       => "Мая",
		"June"      => "Июня",
		"Jun"       => "Июн",
		"July"      => "Июля",
		"Jul"       => "Июл",
		"August"    => "Августа",
		"Aug"       => "Авг",
		"September" => "Сентября",
		"Sep"       => "Сен",
		"October"   => "Октября",
		"Oct"       => "Окт",
		"November"  => "Ноября",
		"Nov"       => "Ноя",
		"December"  => "Декабря",
		"Dec"       => "Дек",
		"st"        => "ое",
		"nd"        => "ое",
		"rd"        => "е",
		"th"        => "ое"
	);
	// если передали дату, то переводим ее
	if (func_num_args() > 1)
	{
		$timestamp = func_get_arg(1);

		return strtr(date(func_get_arg(0), $timestamp), $translate);
	}
	else
	{
// иначе текущую дату
		return strtr(date(func_get_arg(0)), $translate);
	}
}

// Функция белоруссификации даты
function bel_date()
{
// Перевод
	$translate = array(
		"am"        => "дп",
		"pm"        => "пп",
		"AM"        => "ДП",
		"PM"        => "ПП",
		"Monday"    => "Панядзелак",
		"Mon"       => "Пн",
		"Tuesday"   => "Аўторак",
		"Tue"       => "Аўт",
		"Wednesday" => "Серада",
		"Wed"       => "Ср",
		"Thursday"  => "Чацвер",
		"Thu"       => "Чт",
		"Friday"    => "Пятніца",
		"Fri"       => "Пт",
		"Saturday"  => "Субота",
		"Sat"       => "Сб",
		"Sunday"    => "Нядзеля",
		"Sun"       => "Нд",
		"January"   => "Студзеня",
		"Jan"       => "Студ",
		"February"  => "Лютага",
		"Feb"       => "Лют",
		"March"     => "Сакавіка",
		"Mar"       => "Сак",
		"April"     => "Красавіка",
		"Apr"       => "Крас",
		"May"       => "Мая",
//		"May"       => "Мая",
		"June"      => "Чэрвеня",
		"Jun"       => "Чэр",
		"July"      => "Ліпеня",
		"Jul"       => "Ліп",
		"August"    => "Жніўня",
		"Aug"       => "Жніў",
		"September" => "Верасня",
		"Sep"       => "Вер",
		"October"   => "Кастрычніка",
		"Oct"       => "Кас",
		"November"  => "Лістапада",
		"Nov"       => "Ліст",
		"December"  => "Снежня",
		"Dec"       => "Снеж",
		"st"        => "ое",
		"nd"        => "ое",
		"rd"        => "е",
		"th"        => "ое"
	);
	// если передали дату, то переводим ее
	if (func_num_args() > 1)
	{
		$timestamp = func_get_arg(1);

		return strtr(date(func_get_arg(0), $timestamp), $translate);
	}
	else
	{
// иначе текущую дату
		return strtr(date(func_get_arg(0)), $translate);
	}
}

$countNews = count($list);
//print_r($countNews);
//exit();
$catLink = ''; //Переменная для хранения ссылки на категорию
?>
<div class="articles">
	<?php if ($countNews > 0): ?>
		<?php foreach ($list as $item) : ?>
			<?php $arrLinkCat = preg_split("/[\d,]+/", $item->link);?>
			<?php $catLink = $arrLinkCat[0]; ?>
            <div class="article">
                <div class="art_title">
                    <div class="data">
                        <div class="day">
							<?php echo date("d", strtotime($item->publish_up)); ?>
                        </div>
                        <div class="month">
							<?php
							if ($lang == 'ru-ru')
							{
								echo $month = rus_date("F", strtotime($item->publish_up));
							}
                            elseif ($lang == 'be-by')
							{
								echo $month = bel_date("F", strtotime($item->publish_up));
							}
							?>
                        </div>
                        <div class="year">
							<?php echo date("Y", strtotime($item->publish_up)); ?>
                        </div>
                    </div><!-- end /.data-->
                    <h2>
                        <a href="<?php echo $item->link ?>">
							<?php echo $item->title ?>
                        </a>
                    </h2>
                </div><!-- end /.art_title-->
                <div class="art_content">
					<?php $images = json_decode($item->images); ?>
					<?php if (isset($images->image_fulltext) && !empty($images->image_fulltext)) : ?>
                        <a href="<?php echo $item->link ?>">
                            <img src="<?php echo htmlspecialchars($images->image_fulltext); ?>"
                                 alt="<?php echo $item->title ?>">
                        </a>
					<?php endif; ?>
                    <div class="text">
                        <div class="intro">
							<?php echo $item->introtext; ?>
                        </div>
                        <div class="see_more">
                            <a href="<?php echo $item->link ?>">
                                <!--								--><?php //echo JText::_('TPL_MYACCESSIBILITY_MOD_NEWS_BUTTON_SEEMORE') ?>
								<?php echo $item->linkText; ?>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- end /.art_content  -->

            </div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
<div class="all_news">
    <a href="<?php echo $catLink; ?>">
        <button>
			<?php echo JText::_('TPL_MYACCESSIBILITY_MOD_NEWS_BUTTON') ?>
        </button>
    </a>
</div>


