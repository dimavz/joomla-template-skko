/* jce - 2.6.18 | 2017-07-20 | http://www.joomlacontenteditor.net | Copyright (C) 2006 - 2017 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
!function(){tinymce.each;tinymce.create("tinymce.plugins.IframePlugin",{init:function(ed,url){var t=this;t.editor=ed,t.url=url,ed.addCommand("mceIframe",function(){ed.windowManager.open({file:ed.getParam("site_url")+"index.php?option=com_jce&view=editor&plugin=iframe",width:785+parseInt(ed.getLang("iframe.delta_width",0)),height:340+parseInt(ed.getLang("iframe.delta_height",0)),inline:1,popup_css:!1},{plugin_url:url})}),ed.addButton("iframe",{title:"iframe.desc",cmd:"mceIframe",image:url+"/img/iframe.png"}),ed.onNodeChange.add(function(ed,cm,n){cm.setActive("iframe",ed.dom.is(n,"img.mceItemIframe"))})}}),tinymce.PluginManager.add("iframe",tinymce.plugins.IframePlugin,["media"])}();