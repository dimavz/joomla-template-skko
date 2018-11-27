<?php defined("_JEXEC") or die(); ?>
<?php
$templateparams = JFactory::getApplication()->getTemplate(true)->params;
$app            = JFactory::getApplication();

$sitename     = $app->get('sitename');
$site_logo    = $templateparams->get('site_logo');
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
$mainPage = $menu->getItem($activePage)->home == 1 ? true : false;

//Подключение стилей (stylesheets)
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/favicon.png');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/fancybox/jquery.fancybox.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/owl-carousel2/assets/owl.carousel.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/owl-carousel2/assets/owl.theme.default.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/libs/countdown/jquery.countdown.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/fonts.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/font-awesome.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/custom.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/main.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/media.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/animate.min.css');

$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/template.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/brown.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/black.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/mint.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/master_access.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $doc->template . '/css/blind-ext.css');


// Отключение стандартных скриптов Joomla (Конфликтуют с подключаемыми скриптами шаблона)
JHtml::_('jquery.framework');
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);

//Подключение скриптов (scripts)
//$doc->addScript(JUri::base().'templates/'.$doc->template.'/libs/jquery/jquery-1.11.1.min.js');

//Проверяем выводяться ли какие либо модули
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
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <title><?php echo $sitename; ?></title>
    <jdoc:include type="head"/>


    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/watch.js" async=""
            type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-migrate.min.js"
            type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-noconflict.js"
            type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.min.js"
            type="text/javascript"></script>
    <script type="text/javascript"
            src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/swfobject2.js"></script>
    <script type="text/javascript"
            src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/swfobject_wrap.js"></script>
    <script type="text/javascript"
            src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
    <script type="text/javascript"
            src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/common_access.js"></script>

</head>
<body>
<header class="top_header">
    <nav id="panel_accessibility" class="navbar navbar-fixed-top">
        <div class="access">
            <div class="a-lang">
                <i class="fa fa-language fa-2x" aria-hidden="true"></i>
                <jdoc:include type="modules" name="lang" style="default"/>
            </div>
            <div class="a-fontsize">
                <p><?php echo JText::_('TPL_ACCESSIBILITY_FONTSIZE'); ?></p>
                <p><a href="#" rel="fontsize-small" class="a-fontsize-small"></a></p>
                <p><a href="#" rel="fontsize-normal" class="a-fontsize-normal"></a></p>
                <p><a href="#" rel="fontsize-big" class="a-fontsize-big"></a></p>
            </div>
            <div class="a-colors">
                <p><?php echo JText::_('TPL_ACCESSIBILITY_SITE_COLOR'); ?></p>
                <p><a href="#" rel="color1" class="a-color1"></a></p>
                <p><a href="#" rel="color2" class="a-color2"></a></p>
                <p><a href="#" rel="color3" class="a-color3"></a></p>
            </div>
            <div class="a-images">
                <p><?php echo JText::_('TPL_ACCESSIBILITY_SHOW_IMAGES'); ?></p>
                <p><a rel="imagesoff" href="#" class="a-imagesoff"></a></p>
            </div>
            <div class="a-settings">
                <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>
					<?php echo JText::_('TPL_ACCESSIBILITY_SETTINGS'); ?></a>
            </div>
            <div class="a-accessibility">
                <a href="<?php echo JRoute::_('&template=skko'); ?>"
                   title='<?php echo JText::_('TPL_SKKO_FIELD_VERSION_EYES') ?>'>
                    <i class="fa fa-eye fa-lg" aria-hidden="true"></i><span>Обычная версия</span>
                </a>
            </div>


            <div class="popped">
                <h2><?php echo JText::_('TPL_ACCESSIBILITY_FONT_SETTINGS'); ?></h2>

                <p class="choose-font-family"><?php echo JText::_('TPL_ACCESSIBILITY_SELECT_FONT'); ?> <a
                            class="font-family" id="sans-serif" rel="sans-serif" href="#">Arial</a> <a
                            class="font-family" rel="serif" id="serif" href="#">Times New Roman</a></p>
                <p class="choose-letter-spacing"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING'); ?> <a
                            class="letter-spacing" id="spacing-small" rel="spacing-small"
                            href="#"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING_STANDARD'); ?></a> <a
                            rel="spacing-normal" class="letter-spacing" id="spacing-normal"
                            href="#"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING_MEDIUM'); ?></a> <a
                            rel="spacing-big" class="letter-spacing" id="spacing-big"
                            href="#"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING_LARGE'); ?></a></p>

                <h2><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME'); ?></h2>
                <ul class="choose-colors">
                    <li id="color1"><a rel="color1"
                                       href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_BOW'); ?>
                        </a></li>
                    <li id="color2"><a rel="color2"
                                       href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_WOB'); ?>
                        </a></li>
                    <li id="color3"><a rel="color3"
                                       href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_DBOLB'); ?>
                        </a></li>
                    <li id="color4"><a rel="color4"
                                       href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_BOB'); ?>
                        </a></li>
                    <li id="color5"><a rel="color5"
                                       href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_GODB'); ?>
                        </a></li>
                </ul>
                <p class="saveit"><a class="closepopped"
                                     href="#"><span><?php echo JText::_('TPL_ACCESSIBILITY_CLOSE'); ?></span></a> <a
                            class="default"
                            href="#"><span><?php echo JText::_('TPL_ACCESSIBILITY_RESET_SETTINGS'); ?></span></a></p>
            </div>
        </div>
        <div class="main_menu">
            <div class="menu">
                <!-- 			Главное меню -->
				<?php if ($showMenu): ?>
                    <!-- Модуль Меню -->
                    <jdoc:include type="modules" name="position-4" style="default"/>
				<?php endif; ?>
            </div>

        </div>
    </nav>


    <div class="top_main_menu hidden-sm hidden-md hidden-lg">
        <!-- search module -->
		<?php if ($showMobileSearch): ?>
            <div class="form_search">
                <jdoc:include type="modules" name="position-17"/>
            </div>
		<?php endif; ?>
        <!-- end search module -->
		<?php if ($showMobileMenu): ?>
            <jdoc:include type="modules" name="position-18"/>
		<?php endif; ?>
    </div>


    <div class="container">
        <div class="row">
            <div class="wraper_logo">
                <div class="col-md-3 col-sm-3 col-xs-4">
					<?php if ($mainPage) : ?>
                    <div class="logo_img wow bounceInDown" data-wow-delay="1.5s">
						<?php else: ?>
                        <div class="logo_img">
							<?php endif; ?>
                            <a href="/">
								<?php if ($lang == 'ru-ru'): ?>
                                    <h1><?php echo $site_name_ru ? $site_name_ru : 'СККО' ?></h1>
								<?php else: ?>
                                    <h1><?php echo $site_name_by ? $site_name_by : 'СККА' ?></h1>
								<?php endif; ?>
                            </a>
                        </div>
						<?php if ($mainPage) : ?>
                        <div class="phones wow fadeInLeft" data-wow-delay="2s">
							<?php else: ?>
                            <div class="phones">
								<?php endif; ?>
								<?php if ($showPhones): ?>
                                    <jdoc:include type="modules" name="position-1" style="phones"/>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-8">
                            <div class="logo_text">
								<?php if ($mainPage) : ?>
                                <div class="greeting wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.5s">
									<?php else: ?>
                                    <div class="greeting">
										<?php endif; ?>
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9">
												<?php if ($lang == 'ru-ru'): ?>
                                                    <h3>
														<?php echo $site_desc_ru ? $site_desc_ru : 'Система контроля кассового оборудования' ?>
                                                    </h3>
												<?php else: ?>
                                                    <h3>
														<?php echo $site_desc_by ? $site_desc_by : 'Сістэма кантролю касавага абсталявання' ?>
                                                    </h3>
												<?php endif; ?>
                                                <span id="slog"><?php echo JText::_('TPL_SKKO_FIELD_SITE_SLOGAN') ?></span>

                                            </div>


                                            <!-- Кнопки Войти с ЭЦП и Почта -->
											<?php if ($showButtons): ?>
                                                <div class="col-md-3 col-sm-3">
                                                    <jdoc:include type="modules" name="position-2"/>
                                                </div>
											<?php endif; ?>
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
                                            <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                                            <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <!-- Блок Внимание!!! Бегущая строка -->
										<?php if ($showMessage): ?>
                                            <div class="string_content">

                                                <jdoc:include type="modules" name="position-3" style="message"/>
                                            </div>
										<?php endif; ?>

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <!-- search module -->
									<?php if ($showSearch): ?>
                                        <jdoc:include type="modules" name="position-0"/>
									<?php endif; ?>
                                    <!-- end search module -->
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>
</header>
<section class="content">
    <div class="container">
		<?php if ($showBanners): ?>
            <div class="row">
                <!-- Блок Банеров!!! -->
                <jdoc:include type="modules" name="position-5" style="default"/>
            </div>
		<?php endif; ?>



		<?php if (!$mainPage): ?>        <!-- // Если текущая страница не является главной -->

            <div class="row main_content">
				<?php if ($showBreadcrumbs): ?>
                    <div class="col-md-12">
                        <!-- Модуль Путь ссылок -->
                        <nav class="path_links">
                            <jdoc:include type="modules" name="position-7"/>
                        </nav>
                    </div>
				<?php endif; ?>

				<?php if ($showSidebar): ?>
                    <!-- Контент -->
                    <div class="col-md-9">
                        <jdoc:include type="message"/>
                        <jdoc:include type="component"/>
                    </div>
                    <!-- Сайдбар -->
                    <div class="col-md-3">
                        <!-- Модули Сайдбара -->
                        <div class="block_sidebar">
                            <jdoc:include type="modules" name="position-8"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
				<?php else: ?>
                    <!-- Контент -->
                    <div class="col-md-12">
                        <jdoc:include type="message"/>
                        <jdoc:include type="component"/>
                    </div>
                    <div class="clearfix"></div>
				<?php endif; ?>

                <!-- Путь ссылок -->
				<?php if ($showBreadcrumbs): ?>
                    <div class="col-md-12">
                        <!-- Модуль Путь ссылок -->
                        <nav class="path_links">
                            <jdoc:include type="modules" name="position-7"/>
                        </nav>
                    </div>
				<?php endif; ?>
            </div><!-- /.row main_content -->

		<?php else : ?>
            <div class="row">
                <div class="modules">
					<?php if ($showNewsModule): ?>
                        <jdoc:include type="modules" name="position-6" style="news"/>
					<?php endif; ?>
                </div><!-- /.modules -->
            </div><!-- /.row -->
		<?php endif; ?>

		<?php if ($showRowModules): ?>
            <div class="row part_links">
				<?php if ($showLeftModule): ?>
                    <jdoc:include type="modules" name="position-10" style="left_block"/>
				<?php endif; ?>
				<?php if ($showCenterModule): ?>
                    <jdoc:include type="modules" name="position-11" style="center_block"/>
				<?php endif; ?>
				<?php if ($showRightModule): ?>
                    <jdoc:include type="modules" name="position-12" style="right_block"/>
				<?php endif; ?>
            </div><!-- /.row part_links-->
		<?php endif; ?>
    </div><!-- /.container -->
</section>
<footer class="wow pulse">
    <div class="main_footer">
        <div class="footer_subscribe">
            <div class="container">
                <div class="row">
					<?php if ($showSubscribeModule): ?>
                        <jdoc:include type="modules" name="position-9"/>
					<?php endif; ?>
                </div>
            </div>
        </div>
		<?php if ($showFooterModules): ?>
            <div class="footer_topline">
                <div class="container">
                    <div class="row">
						<?php if ($showFooterLeftModules): ?>
                            <jdoc:include type="modules" name="position-13" style="footer_left_block"/>
						<?php endif; ?>
						<?php if ($showFooterCenterModules): ?>
                            <jdoc:include type="modules" name="position-14" style="footer_center_block"/>
						<?php endif; ?>
						<?php if ($showFooterRightModules): ?>
                            <jdoc:include type="modules" name="position-15" style="footer_right_block"/>
						<?php endif; ?>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer_topline -->
		<?php endif; ?>
		<?php if ($showFooterBottomLine): ?>
            <div class="footer_bottomline">
                <div class="container">
                    <div class="row">
                        <jdoc:include type="modules" name="position-16"/>
                    </div>
                </div>
            </div>
		<?php endif; ?>
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
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/waypoints/waypoints-1.6.2.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/scrollto/jquery.scrollTo.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/owl-carousel2/owl.carousel.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.plugin.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.countdown-ru.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/libs/landing-nav/navigation.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/js/wow.min.js"></script>
<script type="text/javascript"
        src="<?php echo JUri::base(); ?>templates/<?php echo $doc->template; ?>/js/common.js"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter47268396 = new Ya.Metrika({
                    id: 47268396,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/47268396" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>