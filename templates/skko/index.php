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
// Отключение стандартных скриптов Joomla (Конфликтуют с подключаемыми скриптами шаблона)
//JHtml::_('jquery.framework');
unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery.min.js']);
//unset($doc->_scripts[JURI::root(true). '/media/system/js/core.js']);
//unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery-migrate.min.js']);
//unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true). '/media/jui/js/bootstrap.min.js']);
//unset($doc->_scripts[JURI::root(true). '/media/system/js/mootools-core.js']);
//unset($doc->_scripts[JURI::root(true). '/media/system/js/modal.js']);
//unset($doc->_scripts[JURI::root(true). '/media/system/js/mootools-more.js']);
//unset($doc->_scripts[JURI::root(true). '/components/com_cobalt/library/tws/js/owl.carousel.min.js']);
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