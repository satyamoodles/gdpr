<?php

/*** Child Theme Function  ***/

function edgtf_oxides_child_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action('wp_enqueue_scripts', 'edgtf_oxides_child_theme_enqueue_scripts', 11);


/** Language Translater **/

add_shortcode('language_translate','language_translator');

function language_translator(){
	?>
	<!-- GTranslate: https://gtranslate.io/ -->
<style type="text/css">
.switcher {font-family:Arial;font-size:10pt;text-align:left;cursor:pointer;overflow:hidden;width:163px;line-height:17px;}
.switcher a {text-decoration:none;display:block;font-size:10pt;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;}
.switcher a img {vertical-align:middle;display:inline;border:0;padding:0;margin:0;opacity:0.8;}
.switcher a:hover img {opacity:1;}
.switcher .selected {background:#FFFFFF url(//localhost/gdpr/wp-content/plugins/gtranslate/switcher.png) repeat-x;position:relative;z-index:9999;}
.switcher .selected a {border:1px solid #CCCCCC;background:url(//localhost/gdpr/wp-content/plugins/gtranslate/arrow_down.png) 146px center no-repeat;color:#666666;padding:3px 5px;width:151px;}
.switcher .selected a.open {background-image:url(//localhost/gdpr/wp-content/plugins/gtranslate/arrow_up.png)}
.switcher .selected a:hover {background:#F0F0F0 url(//localhost/gdpr/wp-content/plugins/gtranslate/arrow_down.png) 146px center no-repeat;}
.switcher .option {position:relative;z-index:9998;border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;background-color:#EEEEEE;display:none;width:161px;max-height:198px;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;overflow-y:auto;overflow-x:hidden;}
.switcher .option a {color:#000;padding:3px 5px;}
.switcher .option a:hover {background:#FFC;}
.switcher .option a.selected {background:#FFC;}
#selected_lang_name {float: none;}
.l_name {float: none !important;margin: 0;}
.switcher .option::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 3px rgba(0,0,0,0.3);border-radius:5px;background-color:#F5F5F5;}
.switcher .option::-webkit-scrollbar {width:5px;}
.switcher .option::-webkit-scrollbar-thumb {border-radius:5px;-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);background-color:#888;}
</style>
<div class="switcher notranslate">
<div class="selected">
<a href="#" onclick="return false;"><img src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/en.png" height="16" width="16" alt="en" /> English</a>
</div>
<div class="option">
<a href="#" onclick="doGTranslate('en|ar');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Arabic" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/ar.png" height="16" width="16" alt="ar" /> Arabic</a><a href="#" onclick="doGTranslate('en|zh-CN');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Chinese (Simplified)" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/zh-CN.png" height="16" width="16" alt="zh-CN" /> Chinese (Simplified)</a><a href="#" onclick="doGTranslate('en|nl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Dutch" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/nl.png" height="16" width="16" alt="nl" /> Dutch</a><a href="#" onclick="doGTranslate('en|en');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="English" class="nturl selected"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/en.png" height="16" width="16" alt="en" /> English</a><a href="#" onclick="doGTranslate('en|fr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="French" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/fr.png" height="16" width="16" alt="fr" /> French</a><a href="#" onclick="doGTranslate('en|de');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="German" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/de.png" height="16" width="16" alt="de" /> German</a><a href="#" onclick="doGTranslate('en|it');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Italian" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/it.png" height="16" width="16" alt="it" /> Italian</a><a href="#" onclick="doGTranslate('en|pt');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Portuguese" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/pt.png" height="16" width="16" alt="pt" /> Portuguese</a><a href="#" onclick="doGTranslate('en|ru');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Russian" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/ru.png" height="16" width="16" alt="ru" /> Russian</a><a href="#" onclick="doGTranslate('en|es');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Spanish" class="nturl"><img data-gt-lazy-src="//localhost/gdpr/wp-content/plugins/gtranslate/flags/16/es.png" height="16" width="16" alt="es" /> Spanish</a></div>
</div>
<script type="text/javascript">
jQuery('.switcher .selected').click(function() {jQuery('.switcher .option a img').each(function() {if(!jQuery(this)[0].hasAttribute('src'))jQuery(this).attr('src', jQuery(this).attr('data-gt-lazy-src'))});if(!(jQuery('.switcher .option').is(':visible'))) {jQuery('.switcher .option').stop(true,true).delay(100).slideDown(500);jQuery('.switcher .selected a').toggleClass('open')}});
jQuery('.switcher .option').bind('mousewheel', function(e) {var options = jQuery('.switcher .option');if(options.is(':visible'))options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta);return false;});
jQuery('body').not('.switcher').click(function(e) {if(jQuery('.switcher .option').is(':visible') && e.target != jQuery('.switcher .option').get(0)) {jQuery('.switcher .option').stop(true,true).delay(100).slideUp(500);jQuery('.switcher .selected a').toggleClass('open')}});
</script>
<style type="text/css">
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
.goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;if(typeof ga!='undefined'){ga('send', 'event', 'GTranslate', lang, location.hostname+location.pathname+location.search);}else{if(typeof _gaq!='undefined')_gaq.push(['_trackEvent', 'GTranslate', lang, location.hostname+location.pathname+location.search]);}var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
if(GTranslateGetCurrentLang() != null)jQuery(document).ready(function() {var lang_html = jQuery('div.switcher div.option').find('img[alt="'+GTranslateGetCurrentLang()+'"]').parent().html();if(typeof lang_html != 'undefined')jQuery('div.switcher div.selected a').html(lang_html.replace('data-gt-lazy-', ''));});
</script>

	<?php
}
