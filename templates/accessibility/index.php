<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<!-- links -->
<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/template.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/brown.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/black.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/mint.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/master_access.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/blind-ext.css">

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/watch.js" async="" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/swfobject2.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/swfobject_wrap.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/common_access.js"></script>



</head>




<body class="imageson fontsize-big color1 sans-serif spacing-small">


<!-- BEGIN #out -->
<div id="out">
	<!-- BEGIN #access -->
	<h2 class="text_only"><?php echo JText::_('TPL_ACCESSIBILITY_VIEW_SETTINGS'); ?></h2>
	
	<div class="access">
		
		<dl class="a-fontsize">
			<dt><?php echo JText::_('TPL_ACCESSIBILITY_FONTSIZE'); ?></dt>
			<dd><a href="#" rel="fontsize-small" class="a-fontsize-small"></a></dd>
			<dd><a rel="fontsize-normal" href="#" class="a-fontsize-normal"></a></dd>
			<dd><a href="#" rel="fontsize-big" class="a-fontsize-big"></a></dd>
		</dl>
		<dl class="a-colors">
			<dt><?php echo JText::_('TPL_ACCESSIBILITY_SITE_COLOR'); ?></dt>
			<dd><a href="#" rel="color1" class="a-color1"></a></dd>
			<dd><a href="#" rel="color2" class="a-color2"></a></dd>
			<dd><a href="#" rel="color3" class="a-color3"></a></dd>
		</dl>		
		<dl class="a-images">
			<dt><?php echo JText::_('TPL_ACCESSIBILITY_SHOW_IMAGES'); ?></dt>
			<dd><a rel="imagesoff" href="#" class="a-imagesoff"></a></dd>
		</dl>
			<p class="a-settings"><a href="#"><?php echo JText::_('TPL_ACCESSIBILITY_SETTINGS'); ?></a></p>

		<div class="popped">
		<h2><?php echo JText::_('TPL_ACCESSIBILITY_FONT_SETTINGS'); ?></h2>
		
		<p class="choose-font-family"><?php echo JText::_('TPL_ACCESSIBILITY_SELECT_FONT'); ?> <a class="font-family" id="sans-serif" rel="sans-serif" href="#">Arial</a> <a class="font-family" rel="serif" id="serif" href="#">Times New Roman</a></p>
		<p class="choose-letter-spacing"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING'); ?> <a class="letter-spacing" id="spacing-small" rel="spacing-small" href="#"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING_STANDARD'); ?></a> <a rel="spacing-normal" class="letter-spacing" id="spacing-normal" href="#"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING_MEDIUM'); ?></a> <a rel="spacing-big" class="letter-spacing" id="spacing-big" href="#"><?php echo JText::_('TPL_ACCESSIBILITY_KERNING_LARGE'); ?></a></p>
		
		<h2><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME'); ?></h2>
		<ul class="choose-colors">
			<li id="color1"><a rel="color1" href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_BOW'); ?></a></li>
			<li id="color2"><a rel="color2" href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_WOB'); ?></a></li>
			<li id="color3"><a rel="color3" href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_DBOLB'); ?></a></li>
			<li id="color4"><a rel="color4" href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_BOB'); ?></a></li>
			<li id="color5"><a rel="color5" href="#"><span>—</span><?php echo JText::_('TPL_ACCESSIBILITY_COLOR_SCHEME_GODB'); ?></a></li>
		</ul>
			<p class="saveit"><a class="closepopped" href="#"><span><?php echo JText::_('TPL_ACCESSIBILITY_CLOSE'); ?></span></a> <a class="default" href="#"><span><?php echo JText::_('TPL_ACCESSIBILITY_RESET_SETTINGS'); ?></span></a></p>
		</div>
		
		<div class="search">
		
			<jdoc:include type="modules" name="search-vi" style="none" />
		</div>

	</div>
	
	
	<!-- END #access -->
	
	<!-- BEGIN #header -->
	<div class="header">
		<div style="float:right; width:200px; margin-top: 20px;">
			<jdoc:include type="modules" name="position-0-vi" />
		</div>
	</div>
	<!-- END #header -->


	<!-- BEGIN #nav -->
	<div class="nav">
		<?php
		$app = & JFactory::getApplication();
		$siteName = $app->getCfg('sitename');
		?>
		<h1 class="headline">
			<a href="index.php"><?php echo $siteName; ?></a>
		</h1>


		<jdoc:include type="modules" name="position-1-vi" style="xhtml" />
		<jdoc:include type="modules" name="position-2-vi" style="xhtml" />
		
	</div>
	<!-- END #nav -->
	
	
	<!-- BEGIN #left -->
<?php 
$content_width="100%";
if ($this->countModules('left-vi')): 
$content_width="800px";
?>	
		<div class="left">
			<jdoc:include type="modules" name="left-vi" style="xhtml" />
		</div>
<?php endif; ?>	
	<!-- END #left -->	

	
<!-- BEGIN #page -->
	<div class="page" style=width:<?php echo $content_width;?>>
		
		<jdoc:include type="message" />
		<jdoc:include type="component" />

	</div>
<!-- END #page -->

<div style="clear:both;">
&nbsp;
</div>    


<!-- BEGIN #footer -->
<div class="footer">
		
		<jdoc:include type="modules" name="position-3-vi" style="none" />
</div>
	<!-- END #footer -->
	
</div>
<!-- END #out -->

		<jdoc:include type="modules" name="position-4-vi" style="none" />
	
</body></html>