<?php defined("_JEXEC") or die();?>
<?php
$templateparams = JFactory::getApplication()->getTemplate(true)->params;
$app  = JFactory::getApplication();

$sitename = $app->get('sitename');
$site_logo = $templateparams->get('site_logo');
$site_name = $templateparams->get('site_name');
$site_desc = $templateparams->get('site_desc');
//print_r($templateparams);

$doc = JFactory::getDocument();
$menu = JFactory::getApplication()->getMenu();

$activePage = $menu->getActive()->id;
$defaultPage = $menu->getDefault()->id;

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

// Отключение стандартных скриптов Joomla (Конфликтуют с подключаемыми скриптами шаблона)
JHtml::_('jquery.framework');
unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true). '/media/jui/js/bootstrap.min.js']);

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
if ($doc->countModules('position-9'))
{
	$showSubscribeModule = TRUE;
}
if ($doc->countModules('position-10'))
{
	$showLeftModule = TRUE;
}
if ($doc->countModules('position-11'))
{
	$showCenterModule = TRUE;
}
if ($doc->countModules('position-12'))
{
	$showRightModule = TRUE;
}
if ($doc->countModules('position-10 or position-11 or position-12'))
{
	$showRowModules = TRUE;
}

if ($doc->countModules('position-13 or position-14 or position-15'))
{
	$showFooterModules = TRUE;
}
if ($doc->countModules('position-13'))
{
	$showFooterLeftModules = TRUE;
}
if ($doc->countModules('position-14'))
{
	$showFooterCenterModules = TRUE;
}
if ($doc->countModules('position-15'))
{
	$showFooterRightModules = TRUE;
}
if ($doc->countModules('position-16'))
{
	$showFooterBottomLine = TRUE;
}
if ($doc->countModules('position-17'))
{
	$showMobileSearch = TRUE;
}
if ($doc->countModules('position-18'))
{
	$showMobileMenu = TRUE;
}



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
	<title><?php echo $sitename; ?></title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
</head>
<body>
	<header class="top_header">
		<div class="top_main_menu hidden-sm hidden-md hidden-lg">
			<div class="form_search">
				<form class="form-inline" action="/" method="post" >
					<div class="form-group">
						<div class="input-group">
							<input name="searchword" type="search" class="form-control" id="InputFind" placeholder="Поиск...">
							<button class="input-group-addon btn btn-info" type="submit" onclick="this.form.searchword.focus();">Найти</button>
						</div><!-- end /.input-group -->
					</div><!-- end /.form-group -->
					<input type="hidden" name="task" value="search" />
					<input type="hidden" name="option" value="com_search" />
					<input type="hidden" name="Itemid" value="101" />
				</form>
			</div>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-info">
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a href="/home">Главная</a>
						</h4>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">О системе<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li>
									<a href="/about-system/opisanie-skko">Описание СККО</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a class="collapsed active" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">Владельцам<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li>
									<a href="/vladeltsam/poryadok-zaklyucheniya-dogovora">Порядок заключения договора</a>
								</li>
								<li>
									<a href="/vladeltsam/dokumenty">Документы</a>
								</li>
								<li>
									<a class="active" href="/vladeltsam/grafik-podklyucheniya-kassovogo-oborudovaniya-k-skko">График подключения к СККО</a>
								</li>
								<li>
									<a href="/vladeltsam/tarify-i-sposoby-oplaty">Тарифы и способы оплаты</a>
								</li>
								<li>
									<a href="/vladeltsam/voprosy-otvety">Вопросы/Ответы</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">Публикации<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li>
									<a href="/publikatsii/novosti">Новости</a>
								</li>
								<li>
									<a href="/publikatsii/normativnye-pravovye-akty">Нормативные правовые акты</a>
								</li>
								<li>
									<a href="/publikatsii/raz-yasneniya-mns">Разъяснения МНС</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a href="/tsto">ЦТО</a>
						</h4>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a href="/kontakty">Контакты</a>
						</h4>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a href="/partnjory">Наши партнёры</a>
						</h4>
					</div>
				</div>
			</div>
		</div><!-- /.top_main_menu -->	
		<nav id="header_topline" class="navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div id="top" class="menu_icon visible-xs-block">						<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
					</div>

					<div class="run_str display-xs-block hidden-sm hidden-md hidden-lg">
						<marquee onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left">
							<span>ВНИМАНИЕ!!!</span>
							В связи с проводимыми техническими работами некоторые сервисы будут недоступны.
						</marquee>
					</div>
					<ul class="hidden-xs">
						<li class="home active">
							<a href="/" title="Главная">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>Главная
							</a>
						</li>
						<li class="dropdown">
							<span id="dLabe1" class="header" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								О системе
								<i class="fa fa-caret-down" aria-hidden="true"></i>
							</span>
							<ul class="dropdown-menu" aria-labelledby="dLabe1">
								<li><a href="#">Описание СККО</a></li>
							</ul>
						</li>
						<li class="dropdown active">
							<span id="dLabe4" class="header" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Владельцам
								<i class="fa fa-caret-down" aria-hidden="true"></i>
							</span>
							<ul class="dropdown-menu" aria-labelledby="dLabe4">
								<li><a href="list_articles.html">Порядок заключения договора</a></li>
								<li class="active"><a href="#">Документы</a></li>
								<li><a href="#">График подключения кассового оборудования к СККО</a></li>
								<li><a href="#">Тарифы и способы оплаты</a></li>
								<li><a href="#">Вопросы/Ответы</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<span id="dLabe3" class="header" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Публикации
								<i class="fa fa-caret-down" aria-hidden="true"></i>
							</span>
							<ul class="dropdown-menu" aria-labelledby="dLabe3">
								<li><a href="#">Новости</a></li>
								<li><a href="#">Нормативные правовые акты</a></li>
								<li><a href="#">Разъяснения МНС</a></li>

							</ul>
						</li>
						<li class="dropdown">
							<span id="dLabe2" class="header" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								ЦТО
								<i class="fa fa-caret-down" aria-hidden="true"></i>
							</span>
							<ul class="dropdown-menu" aria-labelledby="dLabe2">
								<li><a href="#">Перечень ЦТО</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<span id="dLabe5" class="header" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Контакты
								<i class="fa fa-caret-down" aria-hidden="true"></i>
							</span>
							<ul class="dropdown-menu" aria-labelledby="dLabe5">
								<li><a href="#">Структурные подразделения</a></li>
								<li><a href="#">Бухгалтерия</a></li>
								<li><a href="#">График работы</a></li>
								<li><a href="#">Техническая поддержка</a></li>
								<li><a href="#">Размещение рекламы</a></li>
							</ul>
						</li>
						<li class="link">
							<a href="#">
								Наши партнёры
							</a>
						</li>
					</ul>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</nav>
		<div class="container">
			<div class="row">
				<div class="wraper_logo">
					<div class="col-md-3 col-sm-3 col-xs-4">
						<div class="logo_img wow bounceInDown" data-wow-delay="1.5s">
							<a href="/">
								<h1>СККО</h1>
							</a>
						</div>
						<div class="phones wow fadeInLeft" data-wow-delay="2s">
							<i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>
							8 (017) 269-18-00
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="logo_text">
							<div class="greeting wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.5s" >
								<div class="row">
									<div class="col-md-9 col-sm-9">
										<h3>Система контроля кассового оборудования.</h3>
										<span id="slog">Управляйте своим бизнесом через Internet</span>
									</div>
									<div class="col-md-3 col-sm-3">
										<a class="btn btn-success ru" href="#" role="button">
											<i class="fa fa-key" aria-hidden="true"></i>
											Войти с ЭЦП
										</a>
										<a id ="btn_mail" class="btn btn-success " href="#" role="button"><i class="fa fa-envelope" aria-hidden="true"></i>
										Почта</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.wraper_logo -->
			</div>
			<div class="row">
				<div class="col-md-12">
					<nav class="main_menu affix-top" data-spy="affix" data-offset-top="150">
						<div class="col-md-8">
							<div class="run_string">
								<div class="icon_chevron">
									<i class="fa fa-chevron-right fa-2x" aria-hidden="true" ></i>
									<i class="fa fa-chevron-right fa-lg" aria-hidden="true" ></i>
									<i class="fa fa-chevron-right" aria-hidden="true" ></i>
								</div>
								<div class="string_content">
									<!-- <span>ВНИМАНИЕ!!!</span> -->
									<marquee onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left">
										<span>ВНИМАНИЕ!!!</span>
										В связи с проводимыми техническими работами некоторые сервисы будут недоступны.
									</marquee>
								</div>
							</div>

						</div>
						<div class="col-md-4">
							<div class="top_search">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								<div class="form_find">
									<form action="/" method="post" class="form-inline">
										<div class="form-group">
											<label class="sr-only" for="mod-search-searchword87">Поиск</label>
											<div class="input-group">
												<input name="searchword" type="search" class="form-control" id="mod-search-searchword87" placeholder="Поиск..." >
												<button class="input-group-addon btn btn-info" type="submit" onclick="this.form.searchword.focus();">Найти</button>
											</div><!-- end /.input-group -->
										</div><!-- end /.form-group -->

										<input type="hidden" name="task" value="search" />
										<input type="hidden" name="option" value="com_search" />
										<input type="hidden" name="Itemid" value="101" />
									</form>
								</div><!-- end /.form_find -->
							</div><!-- end top_search -->
						</div>
					</nav>
				</div>
			</div>

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
								<div class="clearfix"></div>
							<?php else:?>
								<!-- Контент -->
								<div class="col-md-12">
									<jdoc:include type="message" />
									<jdoc:include type="component" />
								</div>
								<div class="clearfix"></div>
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
								<?php if($showNewsModule): ?>
									<jdoc:include type="modules" name="position-6" style="news"/>
								<?php endif; ?>
							</div><!-- /.modules -->
						</div><!-- /.row -->
					<?php endif;?>
					<?php if($showRowModules): ?>
						<div class="row part_links">
							<?php if($showLeftModule): ?>
								<jdoc:include type="modules" name="position-10" style="left_block"/>
							<?php endif;?>
							<?php if($showCenterModule): ?>
								<jdoc:include type="modules" name="position-11" style="center_block"/>
							<?php endif;?>
							<?php if($showRightModule): ?>
								<jdoc:include type="modules" name="position-12" style="right_block"/>
							<?php endif;?>
						</div><!-- /.row part_links-->
					<?php endif;?>
				</div><!-- /.container -->
			</section>
			<footer class="wow pulse">
				<div class="main_footer">
					<div class="footer_subscribe">
						<div class="container">
							<div class="row">
								<?php if($showSubscribeModule): ?>
									<jdoc:include type="modules" name="position-9"/>
								<?php endif;?>
							</div>
						</div>
					</div>
					<?php if($showFooterModules): ?>
						<div class="footer_topline">
							<div class="container">
								<div class="row">
									<?php if($showFooterLeftModules): ?>
										<jdoc:include type="modules" name="position-13" style="footer_left_block"/>
									<?php endif;?>
									<?php if($showFooterCenterModules): ?>
										<jdoc:include type="modules" name="position-14" style="footer_center_block"/>
									<?php endif;?>
									<?php if($showFooterRightModules): ?>
										<jdoc:include type="modules" name="position-15" style="footer_right_block"/>
									<?php endif;?>
								</div><!-- /.row -->
							</div><!-- /.container -->
						</div><!-- /.footer_topline -->
					<?php endif;?>
					<?php if($showFooterBottomLine): ?>
						<div class="footer_bottomline">
							<div class="container">
								<div class="row">
									<jdoc:include type="modules" name="position-16"/>
								</div>
							</div>
						</div>
					<?php endif;?>
					<div class="clearfix"></div>
				</div>
			</footer>
			<div class="hidden">
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