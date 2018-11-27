<?php defined("_JEXEC") or die(); ?>
<?php
$templateparams = JFactory::getApplication()->getTemplate(true)->params;
$app            = JFactory::getApplication();

$sitename     = $app->get('sitename');
$site_name_ru = $templateparams->get('site_name_ru');
$site_desc_ru = $templateparams->get('site_desc_ru');

$site_name_by = $templateparams->get('site_name_by');
$site_desc_by = $templateparams->get('site_desc_by');
//print_r($templateparams);

$doc  = JFactory::getDocument();
$menu = JFactory::getApplication()->getMenu();
$lang = $doc->getlanguage();

$activePage  = $menu->getActive()->id;
$defaultPage = $menu->getDefault()->id;

$itemMenu = $menu->getItem($activePage);

//Проверяем является ли текущая страница главной
$mainPage = $itemMenu->home == 1 ? true : false;

// Отключение стандартных скриптов Joomla (Конфликтуют с подключаемыми скриптами шаблона)
JHtml::_('jquery.framework');
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);

//Подключение стилей (stylesheets)
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/favicon.png');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/font-awesome-4.7.0/css/font-awesome.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/owl-carousel2-2.2.1/css/owl.carousel.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/owl-carousel2-2.2.1/css/owl.theme.default.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/fonts.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/main.css');

//Проверяем выводяться ли какие либо модули
if ($doc->countModules('lang'))
{
	$showLang = true;
}
if ($doc->countModules('position-0'))
{
	$showSearch = true;
}
if ($doc->countModules('position-1'))
{
	$showPhones = true;
}
if ($doc->countModules('position-2'))
{
	$showButtons = true;
}
if ($doc->countModules('position-3'))
{
	$showMessage = true;
}
if ($doc->countModules('position-4'))
{
	$showMenu = true;
}
if ($doc->countModules('position-5'))
{
	$showBanners = true;
}
if ($doc->countModules('position-6'))
{
	$showNewsModule = true;
}
if ($doc->countModules('position-7'))
{
	$showBreadcrumbs = true;
}
if ($doc->countModules('position-8'))
{
	$showSidebar = true;
}
if ($doc->countModules('position-9'))
{
	$showSubscribeModule = true;
}
if ($doc->countModules('position-10'))
{
	$showLeftModule = true;
}
if ($doc->countModules('position-11'))
{
	$showCenterModule = true;
}
if ($doc->countModules('position-12'))
{
	$showRightModule = true;
}
if ($doc->countModules('position-10 or position-11 or position-12'))
{
	$showRowModules = true;
}

if ($doc->countModules('position-13 or position-14 or position-15'))
{
	$showFooterModules = true;
}
if ($doc->countModules('position-13'))
{
	$showFooterLeftModules = true;
}
if ($doc->countModules('position-14'))
{
	$showFooterCenterModules = true;
}
if ($doc->countModules('position-15'))
{
	$showFooterRightModules = true;
}
if ($doc->countModules('position-16'))
{
	$showFooterBottomLine = true;
}
if ($doc->countModules('position-17'))
{
	$showMobileSearch = true;
}
if ($doc->countModules('position-18'))
{
	$showMobileMenu = true;
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru" id="goToUp">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <title><?php echo $sitename; ?></title>
    <jdoc:include type="head"/>
    <link rel="shortcut icon" href="favicon.png"/>

</head>
<body class="imageson fontsize-small color1 spacing-small roboto">
<header id="header">
    <div class="accessibility">
        <div class="settings">
            <!-- language module -->
			<?php if ($showLang): ?>
                <i class="fa fa-flag fa-lg" aria-hidden="true"></i>
                <jdoc:include type="modules" name="lang"/>
			<?php endif; ?>
            <!-- end language module -->
            <div class="a-fontsize">
                <p><?php echo JText::_('TPL_MYACCESSIBILITY_FONTSIZE') ?></p>
                <p><a href="#" rel="fontsize-small" class="a-fontsize-small"></a></p>
                <p><a href="#" rel="fontsize-normal" class="a-fontsize-normal"></a></p>
                <p><a href="#" rel="fontsize-big" class="a-fontsize-big"></a></p>
            </div>
            <div class="a-collor">
                <p><?php echo JText::_('TPL_MYACCESSIBILITY_SITE_COLOR') ?></p>
                <p><a href="#" rel="color1" class="a-color1"></a></p>
                <p><a href="#" rel="color2" class="a-color2"></a></p>
                <p><a href="#" rel="color3" class="a-color3"></a></p>
            </div>
            <div class="a-images">
                <p><?php echo JText::_('TPL_MYACCESSIBILITY_SHOW_IMAGES') ?></p>
                <p><a class="a-imagesoff" rel="imagesoff" href="#"></a></p>
            </div>
            <div class="a-settings">
                <a href="#">
                    <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                    <p><?php echo JText::_('TPL_MYACCESSIBILITY_SETTINGS') ?></p>
                    <i class="fa fa-angle-down fa-lg" aria-hidden="true"></i>
                </a>

            </div>
            <div class="popped">
                <h2><?php echo JText::_('TPL_MYACCESSIBILITY_FONT_SETTINGS') ?></h2>
                <p class="choose-font-family"><?php echo JText::_('TPL_MYACCESSIBILITY_SELECT_FONT') ?>
                    <a class="font-family active" id="roboto" rel="roboto" href="#">Roboto</a>
                    <a class="font-family" id="sans-serif" rel="sans-serif" href="#">Arial</a>
                    <a class="font-family" id="serif" rel="serif" href="#">Times New Roman</a>
                </p>
                <p class="choose-letter-spacing"><?php echo JText::_('TPL_MYACCESSIBILITY_KERNING') ?>
                    <a id="spacing-small" class="letter-spacing active" rel="spacing-small"
                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_KERNING_STANDARD') ?></a>
                    <a id="spacing-normal" class="letter-spacing" rel="spacing-normal"
                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_KERNING_MEDIUM') ?></a>
                    <a id="spacing-big" class="letter-spacing" rel="spacing-big"
                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_KERNING_LARGE') ?></a>
                </p>

                <h2><?php echo JText::_('TPL_MYACCESSIBILITY_COLOR_SCHEME') ?></h2>
                <ul class="choose-colors">
                    <li id="color1"><a rel="color1"
                                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_COLOR_SCHEME_BOW') ?></a></li>
                    <li id="color2"><a rel="color2"
                                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_COLOR_SCHEME_WOB') ?></a></li>
                    <li id="color3"><a rel="color3"
                                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_COLOR_SCHEME_DBOLB') ?></a>
                    </li>
                    <li id="color4"><a rel="color4"
                                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_COLOR_SCHEME_BOB') ?></a></li>
                    <li id="color5"><a rel="color5"
                                       href="#"><?php echo JText::_('TPL_MYACCESSIBILITY_COLOR_SCHEME_GODB') ?></a></li>
                </ul>
                <p class="saveit">
                    <a class="default" href="#">
                        <span><?php echo JText::_('TPL_MYACCESSIBILITY_RESET_SETTINGS') ?></span>
                    </a>
                    <a class="closepopped" href="#">
                        <span><?php echo JText::_('TPL_MYACCESSIBILITY_CLOSE') ?></span>
                    </a>
                </p>
            </div>
            <div class="a-normalversion">
                
                <a href="<?php echo JRoute::_('&template=skko'); ?>"
                   title="<?php echo JText::_('TPL_MYACCESSIBILITY_STANDART_VERSION') ?>">
                   <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                    <p><?php echo JText::_('TPL_MYACCESSIBILITY_STANDART_VERSION') ?></p>
                </a>
            </div>

        </div>
    </div>
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="wrapper_nav">
                <!--            Главное меню -->
				<?php if ($showMenu): ?>
                    <!-- Модуль Меню -->
                    <jdoc:include type="modules" name="position-4" style="default"/>
				<?php endif; ?>
            </div>
        </div><!-- /.container -->
    </nav><!--end navbar-->
    <div class="wrap_header">
        <div class="container">
            <div class="header_content">
                <div class="logo">
					<?php if ($lang == 'ru-ru'): ?>
                        <h1><?php echo $site_name_ru ? $site_name_ru : 'СККО' ?></h1>
					<?php else: ?>
                        <h1><?php echo $site_name_by ? $site_name_by : 'СККА' ?></h1>
					<?php endif; ?>
                    <div class="phone visible-xs">
						<?php if ($showPhones): ?>
                            <jdoc:include type="modules" name="position-1" style="phones"/>
						<?php endif; ?>
                    </div>
                </div><!--end logo-->
                <div class="site_title">
					<?php if ($lang == 'ru-ru'): ?>
                        <h2>
							<?php echo $site_desc_ru ? $site_desc_ru : 'Система контроля кассового оборудования' ?>
                        </h2>
					<?php else: ?>
                        <h2>
							<?php echo $site_desc_by ? $site_desc_by : 'Сістэма кантролю касавага абсталявання' ?>
                        </h2>
					<?php endif; ?>

                    <span class="visible-xs">
                                <?php echo JText::_('TPL_MYACCESSIBILITY_FIELD_SITE_SLOGAN') ?>
                            </span>
                </div><!-- end site_title-->
                <div class="buttons">
                    <!-- Кнопки Войти с ЭЦП и Почта -->
					<?php if ($showButtons): ?>
                        <jdoc:include type="modules" name="position-2"/>
					<?php endif; ?>
                </div>
            </div><!-- end header_content-->
            <div class="meta_info hidden-xs">
                <div class="phone">
					<?php if ($showPhones): ?>
                        <jdoc:include type="modules" name="position-1" style="phones"/>
					<?php endif; ?>
                </div>
                <div class="slogan">
                    <span><?php echo JText::_('TPL_MYACCESSIBILITY_FIELD_SITE_SLOGAN') ?></span>
                </div>
            </div><!-- end meta_info-->
            <div class="info_panel hidden-xs affix-top" data-spy="affix" data-offset-top="100">
                <div class="icons">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>
                </div>
                <div class="run_string">
                    <!-- Блок Внимание!!! Бегущая строка -->
					<?php if ($showMessage): ?>
                        <jdoc:include type="modules" name="position-3" style="message"/>
					<?php endif; ?>

                </div>
                <div class="search">
                    <!-- search module -->
					<?php if ($showSearch): ?>
                        <jdoc:include type="modules" name="position-0"/>
					<?php endif; ?>

                </div>
            </div><!-- end panel-->
        </div><!--end container-->
    </div><!-- end wrap_header-->
</header>
<section id="slider">
    <div class="container">
        <div class="slider_wrapper">
			<?php if ($showBanners): ?>
                <!-- Блок Банеров!!! -->
                <jdoc:include type="modules" name="position-5" style="default"/>
			<?php endif; ?>
        </div><!--end /.slider_wrapper-->
    </div>
</section>
<?php if ($mainPage): ?>
<section id="news">
	<?php if ($showNewsModule): ?>
        <jdoc:include type="modules" name="position-6" style="news"/>
	<?php endif; ?>
</section>
<?php endif; ?>
<?php if (!$mainPage): ?>
<section id="content">
        <div class="container">
            <div class="wrap_content">
				<?php if ($showBreadcrumbs): ?>
                    <!-- Модуль Путь ссылок -->
                    <jdoc:include type="modules" name="position-7"/>
				<?php endif; ?>
                <div class="main_content">
                    <div class="row">
						<?php if ($showSidebar): ?>
                            <div class="col-md-8">
                                <jdoc:include type="message"/>
                                <jdoc:include type="component"/>
                            </div>
                            <div class="col-md-4">
                                <jdoc:include type="modules" name="position-8" style="sidebarmenu"/>
                            </div>
						<?php else: ?>
                            <div class="col-md-12">
                                <jdoc:include type="message"/>
                                <jdoc:include type="component"/>
                            </div>
						<?php endif; ?>

                    </div>
                </div>
				<?php if ($showBreadcrumbs): ?>
                    <!-- Модуль Путь ссылок -->
                    <jdoc:include type="modules" name="position-7"/>
				<?php endif; ?>
            </div>
        </div>
</section>
<?php endif; ?>
<section id="block_links">
    <div class="container">
        <div class="wrap_block_links">
			<?php if ($showRowModules): ?>
                <div class="row">
					<?php if ($showLeftModule): ?>
                        <jdoc:include type="modules" name="position-10" style="left_block"/>
					<?php endif; ?>
					<?php if ($showCenterModule): ?>
                        <jdoc:include type="modules" name="position-11" style="center_block"/>
					<?php endif; ?>
					<?php if ($showRightModule): ?>
                        <jdoc:include type="modules" name="position-12" style="right_block"/>
					<?php endif; ?>
                </div>
			<?php endif; ?>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="wrap_footer">
        <div class="container">
            <div class="row">
				<?php if ($showFooterModules): ?>
					<?php if ($showFooterLeftModules): ?>
                        <jdoc:include type="modules" name="position-13" style="footer_left_block"/>
					<?php endif; ?>
					<?php if ($showFooterCenterModules): ?>
                        <jdoc:include type="modules" name="position-14" style="footer_center_block"/>
					<?php endif; ?>
					<?php if ($showFooterRightModules): ?>
                        <jdoc:include type="modules" name="position-15" style="footer_right_block"/>
					<?php endif; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>

	<?php if ($showFooterBottomLine): ?>
            <div class="container">
                <div class="all_reserve">
                    <jdoc:include type="modules" name="position-16"/>
                </div>
            </div>
	<?php endif; ?>
</footer>
<div id="top_up">
    <a href="#goToUp" class="flowing-scroll other-class">
        <i class="fa fa-angle-double-up fa-4x" aria-hidden="true"></i>
    </a>
</div>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->


<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/owl-carousel2-2.2.1/js/owl.carousel.min.js"></script>
<script src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/scrollto/jquery.scrollTo.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/js/jquery.plugin.cookie.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/js/common.js"></script>


<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>