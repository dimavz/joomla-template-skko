<?php defined("_JEXEC") or die();?>
<?php
$templateparams = JFactory::getApplication()->getTemplate(true)->params;
$site_logo = $templateparams->get('site_logo');
$site_name = $templateparams->get('site_name');
$site_desc = $templateparams->get('site_desc');
//print_r($templateparams);

$doc = JFactory::getDocument();

$menu = JFactory::getApplication()->getMenu();

$activePage = $menu->getActive()->id;
$defaultPage = $menu->getDefault()->id;

$user = JFactory::getUser();

if ($user->guest)
{
	$showGuest=true;
}
else
{
	$showGuest=false;
}

//Подключение стилей (stylesheets)
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/favicon.png');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/libs/fancybox/jquery.fancybox.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/libs/owl-carousel2/assets/owl.carousel.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/libs/owl-carousel2/assets/owl.theme.default.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/libs/countdown/jquery.countdown.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/fonts.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/font-awesome.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/custom.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/main.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/media.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/animate.min.css');

//Подключение скриптов (scripts)
//$doc->addScript(JUri::base().'templates/'.$doc->template.'/libs/jquery/jquery-1.11.1.min.js');

//Проверяем выводяться ли какие либо модули
if ($doc->countModules('position-0'))
{
	$showSearch = TRUE;
}
if ($doc->countModules('position-1'))
{
	$showPhones = TRUE;
}
if ($doc->countModules('position-2'))
{
	$showButtons = TRUE;
}
if ($doc->countModules('position-3'))
{
	$showMessage = TRUE;
}
if ($doc->countModules('position-4'))
{
	$showMenu = TRUE;
}
if ($doc->countModules('position-5'))
{
	$showBanners = TRUE;
}
if ($doc->countModules('position-6'))
{
	$showNewsModule = TRUE;
}
if ($doc->countModules('position-7'))
{
	$showBreadcrumbs  = TRUE;
}

if ($doc->countModules('position-8'))
{
	$showSidebar = TRUE;
}
if ($doc->countModules('position-14 or position-15 or position-16'))
{
	$showFooterModules = TRUE;
}
if ($doc->countModules('position-17'))
{
	$showFooterBottomLine = TRUE;
}
// Отключение стандартных скриптов Joomla (Конфликтуют с подключаемыми скриптами шаблона)
//JHtml::_('jquery.framework');
unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery.min.js']);
//unset($doc->_scripts[JURI::root(true). '/media/system/js/core.js']);
//unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery-migrate.min.js']);
//unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true). '/media/jui/js/bootstrap.min.js']);
//unset($doc->_scripts[JURI::root(true). '/media/system/js/mootools-core.js']);
//unset($doc->_scripts[JURI::root(true). '/media/system/js/modal.js']);
unset($doc->_scripts[JURI::root(true). '/media/system/js/mootools-more.js']);
//unset($doc->_scripts[JURI::root(true). '/components/com_cobalt/library/tws/js/owl.carousel.min.js']);

//print_r($doc->params);
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Сайт SKKO</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
</head>
<body>
	<header class="top_header">
		<nav id="header_topline" class="navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="top_main_menu">
						<div class="form_search">
							<form class="form-inline ">
								<div class="form-group">
									<label class="sr-only" for="InputFind">Поиск</label>
									<div class="input-group">
										<input type="text" class="form-control" id="InputFind" placeholder="Что ищем?">
										<div class="input-group-addon btn btn-info" type="submit">Найти</div>
									</div>
								</div>
							</form>
						</div>
						
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-info">
								<div class="panel-heading" >
									<h4 class="panel-title">
										<a href="#">
											Главная
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
											Новости
										</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
											Объявления
											<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Продать/Купить Хаски</a></li>
											<li><a href="#">Дрессировка собак</a></li>
											<li><a href="#">Знакомства для вязки</a></li>
											<li><a href="#">Медицина и ветеринария</a></li>
											<li><a href="#">Гроуминг и стрижки</a></li>
											<li><a href="#">Розыск собаки</a></li>
											<li><a href="#">Ищу хозяина</a></li>
											<li><a href="#">Прочее</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-info">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false">
											Полезное
											<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Продать/Купить Хаски</a></li>
											<li><a href="#">Дрессировка собак</a></li>
											<li><a href="#">Знакомства для вязки</a></li>
											<li><a href="#">Медицина и ветеринария</a></li>
											<li><a href="#">Гроуминг и стрижки</a></li>
											<li><a href="#">Розыск собаки</a></li>
											<li><a href="#">Ищу хозяина</a></li>
											<li><a href="#">Прочее</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>

					</div><!-- /.top_main_menu -->
					<div class="col-md-6 col-sm-6 col-xs-3">
						<div class="top_brand">
							<button class="menu_button hidden-sm hidden-md hidden-lg">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<a href="/">
								<h1 class="hidden-xs wow fadeInDown"><?php echo $site_name ?  $site_name : 'SKKO.BY'?></h1>
							</a>
						</div>
						<div class="icon_search visible-sm-block"><i class="fa fa-search fa-2x" aria-hidden="true"></i>

						</div>
						<!-- search module -->
						<?php if($showSearch):?>
							<jdoc:include type="modules" name="position-0"/>
						<?php endif;?>
						<!-- end search module -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-9">
						<?php if($showPhones):?>
							<jdoc:include type="modules" name="position-1" style="phones"/>
						<!-- <div class="icon_phone">
							<i class="fa fa-phone-square fa-lg fa-2x" aria-hidden="true"></i>
						</div>
						<div class="phones">
							<i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>
							8 (017) 269-18-00, 8 (017) 269-18-09
						</div> -->
					<?php endif;?>
				</div>
			</div><!-- /.row -->
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="wraper_logo">
				<div class="col-md-3 col-sm-3 col-xs-4">
					<div class="logo_img wow bounceInDown" data-wow-delay="0.5s">
						<?php if($site_logo) :?>
							<a href="<?php echo JUri::base();?>">
								<img src="<?php echo $site_logo ?>" alt="<?php echo $site_desc ?  $site_desc : 'СККО - Система контроля кассового оборудования' ?>">
							</a>
						<?php else:?>
							<a href="<?php echo JUri::base();?>">
								<img src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/images/logo.png" alt="<?php echo $site_desc ?  $site_desc : 'СККО - Система контроля кассового оборудования' ?>">
							</a>
						<?php endif;?>

					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-8">
					<div class="logo_text">
						<div class="logo_title visible-xs-block">
							<a href="/"><h1><?php echo $site_name ?  $site_name : 'SKKO.BY'?></h1></a>
						</div>
						<div class="greeting wow flipInX">
							<div class="row">
								<div class="col-md-9 col-sm-9">
									<h3><?php echo $site_desc ?  $site_desc : 'СККО - Система контроля кассового оборудования.' ?></h3> 
									<span>Управляйте своим бизнесом через Internet</span>
								</div>
								<?php if ($showButtons):?>
									<!-- Кнопки Войти с ЭЦП и Почта -->
									<div class="col-md-3 col-sm-3">
										<jdoc:include type="modules" name="position-2"/>
									</div>
								<?php endif;?>
							</div><!-- /.row -->
							<?php if($showMessage):?>
								<div class="row hidden-xs">
									<!-- Блок Внимание!!! -->
									<jdoc:include type="modules" name="position-3" style="message"/>
								</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div><!-- /.wraper_logo -->
		</div>

		<?php if($showMenu):?>
			<!-- Модуль Меню -->
			<jdoc:include type="modules" name="position-4" style="default"/>
		<?php endif;?>
		<?php if($showMessage):?>
			<div class="row visible-xs">
				<!-- Блок Внимание!!! -->
				<jdoc:include type="modules" name="position-3" style="message"/>
			</div>
		<?php endif;?>
	</div>
</header>
<section class="content">
	<div class="container">
		<?php if($showBanners):?>
			<div class="row">
				<!-- Блок Банеров!!! -->
				<jdoc:include type="modules" name="position-5" style="default"/>
			</div>
		<?php endif;?>
		<?php if($activePage != $defaultPage) :?>
			<div class="row main_content">
					<?php if($showBreadcrumbs):?>
						<div class="col-md-12">
							<!-- Модуль Путь ссылок -->
							<nav class="path_links">
								<jdoc:include type="modules" name="position-7"/>
							</nav>
						</div>
					<?php endif;?>
					
					<?php if($showSidebar):?>
						<!-- Контент -->
						<div class="col-md-9">
								<jdoc:include type="message" />
								<jdoc:include type="component" />
						</div>
						<!-- Сайдбар -->
						<div class="col-md-3">
							<!-- Модули Сайдбара -->
							<div class="block_sidebar">
								<jdoc:include type="modules" name="position-8"/>
							</div>	
						</div>
					<?php else:?>
						<!-- Контент -->
						<div class="col-md-12">
								<jdoc:include type="message" />
								<jdoc:include type="component" />
						</div>
					<?php endif;?>

					<!-- Путь ссылок -->
					<?php if($showBreadcrumbs):?>
							<div class="col-md-12">
								<!-- Модуль Путь ссылок -->
								<nav class="path_links">
									<jdoc:include type="modules" name="position-7"/>
								</nav>
							</div>
					<?php endif;?>
			</div><!-- /.row main_content -->
		<?php else :?>
			<div class="row">
				<div class="modules">
					<div class="tab-content wow zoomIn">
						<div class="tab-pane active" id="post_news">
							<div class="article-row">
								<h2>Новости</h2>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="article_main_widget">
										<div>
											<div class="article_main_img">
												<a href="#">
													<img src="img/slider/system_4.jpg" alt="заголовок статьи" title="Подробнее">
												</a>
											</div><!-- end /.article_main_img -->
											<div class="article_main_content">
												<div class="article_main_header">
													<div class="data">
														<span class="day">27</span>
														<span class="month">Сентября</span>
														<span class="year">2017</span>
													</div>
													<h3>
														<a href="#">
															Очень длинный при длинный заголовок статьи. Очень длинный при длинный заголовок статьи.
														</a>
													</h3>
												</div><!-- end /.article_main_header -->
												<div class="article_main_post">
													<a href="#">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur nihil, voluptatum magni voluptatem voluptate atque nobis tenetur omnis eos quisquam quis nulla animi quia sunt neque, accusamus rem officia.
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus commodi voluptates numquam ex debitis quo iste laboriosam rerum iusto provident in earum aut quibusdam, officia at eos nemo recusandae!
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus commodi voluptates numquam ex debitis quo iste laboriosam rerum iusto provident in earum aut quibusdam, officia at eos nemo recusandae!
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus commodi voluptates numquam ex debitis quo iste laboriosam rerum iusto provident in earum aut quibusdam, officia at eos nemo recusandae!
													</a>
												</div>
											</div><!-- end /.article_main_content -->
										</div>
									</div><!-- end /.article_main_widget -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="article_widget">
										<div class="article_img">
											<a href="#">
												<img src="img/slider/system_1.jpg" alt="заголовок статьи" title="Подробнее">
											</a>
										</div><!-- end /.article_img -->
										<div class="article_header">
											<h3>
												<a href="#">
													Очень длинный при длинный заголовок статьи. Очень длинный при длинный заголовок статьи.
												</a>
											</h3>
											<div class="article_data">
												25 сентября 2017
											</div>
										</div><!-- end /.article_header -->
										<div class="article_post">
											<a href="#" alt="">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur nihil, voluptatum magni voluptatem voluptate atque nobis tenetur omnis eos quisquam quis nulla animi quia sunt neque, accusamus rem officia.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus commodi voluptates numquam ex debitis quo iste laboriosam rerum iusto provident in earum aut quibusdam, officia at eos nemo recusandae!
											</a>
										</div>
									</div><!-- end /.article_widget -->
									<div class="article_widget">
										<div class="article_img">
											<a href="#">
												<img src="img/slider/system_2.jpg" alt="заголовок статьи" title="Подробнее">
											</a>
										</div><!-- end /.article_img -->
										<div class="article_header">
											<h3>
												<a href="#">
													Заголовок статьи.
												</a>
											</h3>
											<div class="article_data">
												25 сентября 2017
											</div>
										</div><!-- end /.article_header -->
										<div class="article_post">
											<a href="#" alt="">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur nihil, voluptatum magni voluptatem voluptate atque nobis tenetur omnis eos quisquam quis nulla animi quia sunt neque, accusamus rem officia.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus commodi voluptates numquam ex debitis quo iste laboriosam rerum iusto provident in earum aut quibusdam, officia at eos nemo recusandae!
											</a>
										</div>
									</div><!-- end /.article_widget -->
									<div class="article_widget">
										<div class="article_img">
											<a href="#">
												<img src="img/slider/system_3.jpg" alt="заголовок статьи" title="Подробнее">
											</a>
										</div><!-- end /.article_img -->
										<div class="article_header">
											<h3>
												<a href="#">
													Очень длинный при длинный заголовок статьи. Очень длинный при длинный заголовок статьи.
												</a>
											</h3>
											<div class="article_data">
												25 сентября 2017
											</div>
										</div><!-- end /.article_header -->
										<div class="article_post">
											<a href="#" alt="">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur nihil, voluptatum magni voluptatem voluptate atque nobis tenetur omnis eos quisquam quis nulla animi quia sunt neque, accusamus rem officia.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus commodi voluptates numquam ex debitis quo iste laboriosam rerum iusto provident in earum aut quibusdam, officia at eos nemo recusandae!
											</a>
										</div>
									</div><!-- end /.article_widget -->
								</div>
								<div class="col-sm-12 col-xs-12">
									<div class="all_news">
										<a class="btn btn-success" href="#" role="button">
											Смотреть все новости...
										</a>
									</div>	
								</div>
							</div><!-- end /.article-row -->
						</div><!-- конец вкладки Новое -->
					</div><!-- Конец /.tab-content ArticleTab -->
				</div><!-- /.modules -->
			</div><!-- /.row -->
		<?php endif;?>
		<div class="row part_links">
			<div class="col-md-4 col-sm-4">
				<h2>Сервисы оплаты услуг</h2>
				<a href="#">
					<img src="img/baners/pay.jpg" alt="">
				</a>
			</div>
			<div class="col-md-4 col-sm-4">
				<h2>Сайты партнёры</h2>
				<ul>
					<li><a href="http://ckta.by/">Система контроля торговых автоматов</a></li>
					<li><a href="http://pki.by/">Удостоверяющий центр</a></li>
					<li><a href="#">Сайт партнёра</a></li>
					<li><a href="#">Сайт партнёра</a></li>
					<li><a href="#">Сайт партнёра</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4">
				<h2>Местоположение</h2>
				<a href="#"><img src="img/baners/map.jpg" class="map" alt=""></a>
			</div> 
		</div><!-- /.row part_links-->
	</div><!-- /.container -->
</section>
<footer class="wow pulse">
	<div class="main_footer">
		<div class="footer_subscribe">
			<div class="container">
				<div class="row">
									<!-- <form class="form-inline">
										<div class="form-group">
											<label for="Name">Имя:</label>
											<input type="text" class="form-control" id="Name" placeholder="Введите ваше Имя">
										</div>
										<div class="form-group">
											<label for="Email">Email:</label>
											<input type="email" class="form-control" id="Email" placeholder="Введите ваш Email">
										</div>
										<button type="submit" class="btn btn-success">Получать новости</button>
									</form> -->
								</div>
							</div>
						</div>
						<div class="footer_topline">
							<div class="container">
								<div class="row">
									<!-- <div class="col-md-12"> -->
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="footer_left_block wow fadeInDown" data-wow-delay="0.2s">
									<!-- <button id="add_ad" class="btn btn-success hidden-md hidden-lg">
										<i class="fa fa-plus fa-lg" aria-hidden="true"></i>
										<span>Подать объявление</span>
									</button> -->
									<h3 class="add_ad" role="button">Разделы сайта</h3>
									<ul>
										<li><a href="#">О системе</a></li>
										<li><a href="#">Владельцам</a></li>
										<li><a href="#">Публикации</a></li>
										<li><a href="#">ЦТО</a></li>
										<li><a href="#">Контакты</a></li>
										<li><a href="#">Карта сайта</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="footer_center_block wow fadeInDown"data-wow-delay="0.4s">
									<h3 class="reclama" role="button">Разместить рекламу</h3>
									<div class="rec_content">
										<p>Здесь Вы можете узнать <a href="">условия и тарифы по размещению рекламы</a> на нашем сайте.</p>
										<p>Если у вас возникли дополнительные вопросы или предложения по размещению рекламы, то свяжитесь с нами по указанным контактам и мы постараемся максимально быстро ответить на них.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="footer_right_block wow fadeInDown" data-wow-delay="0.6s">
									<h3 class="contacts" role="button">Техподдержка 24ч/7д</h3>
									<div class="contacts_content">
										<div class="mobile">
											<i class="fa fa-mobile" aria-hidden="true"></i>
											<span>8 (029) 873-27-15</span>
										</div>
										<div class="mobile">
											<i class="fa fa-mobile" aria-hidden="true"></i>
											<span>8 (029) 873-57-81</span>
										</div>
										<div class="mobile">
											<i class="fa fa-mobile" aria-hidden="true"></i>
											<span>8 (025) 694-78-61</span>
										</div>
										<div class="email">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>info@skko.by</span>
										</div>
									</div>
								</div>
							</div>
							<!-- </div> -->
						</div>
					</div>
				</div>
				<div class="footer_bottomline">
					<!-- <div class="conteiner"> -->
					<div class="row">
						<!-- <div class="col-md-12"> -->
						<span>Все права защищены. 2016 год.</span>
						<!-- </div> -->
					</div>
					<!-- </div> -->
				</div>
				<div class="clearfix"></div>
			</div>
		</footer>
		<div class="hidden">
			<form action="" id="login" class="login_form">
				<h3>Вход на сайт</h3>
				<div class="form-group has-success has-feedback">
					<label for="inputEmail" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail" placeholder="Введите Ваш Email" required>
					</div>
				</div>
				<div class="form-group has-success has-feedback">
					<label for="inputPassword" class="col-sm-3 control-label">Пароль</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword" placeholder="Введите Ваш Пароль" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Запомнить меня
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Войти</button>
					</div>
				</div>
			</form>
			<form id="register" class="form-horizontal" role="form">
				<div class="form-group has-success has-feedback">
					<label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputSuccess3">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>
				</div>
			</form>
		</div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!-- Подключение скриптов (Scripts) -->
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/scrollto/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/owl-carousel2/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.plugin.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.countdown-ru.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/landing-nav/navigation.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/js/wow.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/js/common.js"></script>

	
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>