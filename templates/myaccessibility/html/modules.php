<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/*
 * none (output raw module content)
 */
function modChrome_default($module, &$params, &$attribs)
{
	if($module->content){

		if ($module->showtitle)
		{
			echo '<h'.$headerlevel.'>';
			echo $module->title; 
			echo "</h".$headerlevel.">";
		}
		echo $module->content;
	}
}

function modChrome_sidebarmenu($module, &$params, &$attribs)
{
	if($module->content)
	{
		echo "<div class='mod_block'>";
		if ($module->showtitle)
		{
			echo "<div class='mod_title'>";
			echo $module->title;
			echo "</div>";
		}
		echo "<div class='mod_content'>";
		echo $module->content;
		echo "</div>"; //body_panel
		echo "</div>"; //mod_block

		//print_r($params);
	}
}

function modChrome_empty($module, &$params, &$attribs)
{
	if($module->content)
	{
		echo $module->content;
	}
}
function modChrome_left_block($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="col-md-3 col-sm-6">';
		echo '<h3>';
		echo $module->title;
		echo '</h3>';
		echo $module->content;
		echo '</div>';
	}
}
function modChrome_center_block($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="col-md-4 col-sm-6">';
		echo '<h3>';
		echo $module->title;
		echo '</h3>';
		echo $module->content;
		echo '</div>';
	}
}
function modChrome_right_block($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="col-md-5 col-sm-12">';
		echo '<h3>';
		echo $module->title;
		echo '</h3>';
		echo $module->content;
		echo '</div>';
	}
}


function modChrome_footer_left_block($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="col-md-4 col-sm-4 col-xs-12">';
		echo '<div id="foot_left_block" class="foot_block">';
		echo '<h3>';
		echo $module->title;
		echo '</h3>';
		echo $module->content;
		echo '</div>';
		echo '</div>';
	}
}
function modChrome_footer_center_block($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="col-md-4 col-sm-4 col-xs-12">';
		echo '<div id="foot_center_block" class="foot_block">';
		echo '<h3>';
		echo $module->title;
		echo '</h3>';
		echo $module->content;
		echo '</div>';
		echo '</div>';
	}
}
function modChrome_footer_right_block($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="col-md-4 col-sm-4 col-xs-12">';
		echo '<div id="foot_right_block" class="foot_block">';
		echo '<h3>';
		echo $module->title;
		echo '</h3>';
		echo $module->content;
		echo '</div>';
		echo '</div>';
	}
}
function modChrome_footer_bottomline($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="footer_bottomline">
		<div class="conteiner">
			<div class="row">
				<div class="col-md-12">';
					echo $module->content;
					echo '</div>
				</div>
			</div>
		</div>';

	}
}
function modChrome_phones($module, &$params, &$attribs)
{
	if($module->content){
		echo '<i class="fa fa-phone-square" aria-hidden="true"></i>';
		echo '<span>';
		echo strip_tags($module->content);
		echo '</span>';
	}
}

function modChrome_message($module, &$params, &$attribs)
{
	if($module->content){
		echo '<marquee onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left">';
		echo strip_tags($module->content);
		echo '</marquee>';
	}
}

function modChrome_news($module, &$params, &$attribs)
{
	if($module->content){
		echo '<div class="container">';
			echo '<div class="wrap_news">';
				echo '<div class="row">';

					if ($module->showtitle)
					{
						echo "<h1>";
						echo $module->title; 
						echo "</h1>";
					}
					echo $module->content;
				echo '</div></div></div>';
	}
}