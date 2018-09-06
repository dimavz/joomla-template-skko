<?php

class DataHelper
{

// Функция руссификации даты
private function rus_date() {
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
	} 
	else {
// иначе текущую дату
		return strtr(date(func_get_arg(0)), $translate);
	}
}

// Функция белоруссификации даты
private function bel_date() {
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
	} 
	else 
	{
// иначе текущую дату
		return strtr(date(func_get_arg(0)), $translate);
	}
}

 public function getArticleDate($articleData)
 {
 		$doc = JFactory::getDocument();
		$lang = $doc->getlanguage();

 		if ($lang=='ru-ru')
		{
			$day = $this->rus_date("j", strtotime($articleData));
			$month = $this->rus_date("F", strtotime($articleData));
			$year = $this->rus_date("o", strtotime($articleData));
			return $day.' '.$month.' '.$year;
		}
		elseif($lang=='be-by')
		{
			$day = $this->bel_date("j", strtotime($articleData));
			$month = $this->bel_date("F", strtotime($articleData));
			$year = $this->bel_date("o", strtotime($articleData));
			return $day.' '.$month.' '.$year;
		}
 }
}

?>

		
