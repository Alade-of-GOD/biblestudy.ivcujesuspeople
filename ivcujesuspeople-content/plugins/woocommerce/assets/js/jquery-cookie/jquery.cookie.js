/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function(factory){if(typeof define==='function'&&define.amd){define(['jquery'],factory);}else if(typeof exports==='object'){factory(require('jquery'));}else{factory(jQuery);}}(function($){var pluses=/\+/g;function encode(s){return config.raw?s:encodeURIComponent(s);}
function decode(s){return config.raw?s:decodeURIComponent(s);}
function stringifyCookieValue(value){return encode(config.json?JSON.stringify(value):String(value));}
function parseCookieValue(s){if(s.indexOf('"')===0){s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,'\\');}
try{s=decodeURIComponent(s.replace(pluses,' '));return config.json?JSON.parse(s):s;}catch(e){}}
function read(s,converter){var value=config.raw?s:parseCookieValue(s);return $.isFunction(converter)?converter(value):value;}
var config=$.cookie=function(key,value,options){if(value!==undefined&&!$.isFunction(value)){options=$.extend({},config.defaults,options);if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setTime(+t+days*864e+5);}
return(document.cookie=[encode(key),'=',stringifyCookieValue(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''));}
var result=key?undefined:{};var cookies=document.cookie?document.cookie.split('; '):[];for(var i=0,l=cookies.length;i<l;i++){var parts=cookies[i].split('=');var name=decode(parts.shift());var cookie=parts.join('=');if(key&&key===name){result=read(cookie,value);break;}
if(!key&&(cookie=read(cookie))!==undefined){result[name]=cookie;}}
return result;};config.defaults={};$.removeCookie=function(key,options){if($.cookie(key)===undefined){return false;}
$.cookie(key,'',$.extend({},options,{expires:-1}));return!$.cookie(key);};}));;jQuery(function($){if(typeof wc_cart_fragments_params==='undefined'){return false;}
var $supports_html5_storage;var cart_hash_key=wc_cart_fragments_params.ajax_url.toString()+'-wc_cart_hash';try{$supports_html5_storage=('sessionStorage'in window&&window.sessionStorage!==null);window.sessionStorage.setItem('wc','test');window.sessionStorage.removeItem('wc');window.localStorage.setItem('wc','test');window.localStorage.removeItem('wc');}catch(err){$supports_html5_storage=false;}
function set_cart_creation_timestamp(){if($supports_html5_storage){sessionStorage.setItem('wc_cart_created',(new Date()).getTime());}}
function set_cart_hash(cart_hash){if($supports_html5_storage){localStorage.setItem(cart_hash_key,cart_hash);sessionStorage.setItem(cart_hash_key,cart_hash);}}
var $fragment_refresh={url:wc_cart_fragments_params.wc_ajax_url.toString().replace('%%endpoint%%','get_refreshed_fragments'),type:'POST',success:function(data){if(data&&data.fragments){$.each(data.fragments,function(key,value){$(key).replaceWith(value);});if($supports_html5_storage){sessionStorage.setItem(wc_cart_fragments_params.fragment_name,JSON.stringify(data.fragments));set_cart_hash(data.cart_hash);if(data.cart_hash){set_cart_creation_timestamp();}}
$(document.body).trigger('wc_fragments_refreshed');}}};function refresh_cart_fragment(){$.ajax($fragment_refresh);}
if($supports_html5_storage){var cart_timeout=null,day_in_ms=(24*60*60*1000);$(document.body).bind('wc_fragment_refresh updated_wc_div',function(){refresh_cart_fragment();});$(document.body).bind('added_to_cart',function(event,fragments,cart_hash){var prev_cart_hash=sessionStorage.getItem(cart_hash_key);if(prev_cart_hash===null||prev_cart_hash===undefined||prev_cart_hash===''){set_cart_creation_timestamp();}
sessionStorage.setItem(wc_cart_fragments_params.fragment_name,JSON.stringify(fragments));set_cart_hash(cart_hash);});$(document.body).bind('wc_fragments_refreshed',function(){clearTimeout(cart_timeout);cart_timeout=setTimeout(refresh_cart_fragment,day_in_ms);});$(window).on('storage onstorage',function(e){if(cart_hash_key===e.originalEvent.key&&localStorage.getItem(cart_hash_key)!==sessionStorage.getItem(cart_hash_key)){refresh_cart_fragment();}});try{var wc_fragments=$.parseJSON(sessionStorage.getItem(wc_cart_fragments_params.fragment_name)),cart_hash=sessionStorage.getItem(cart_hash_key),cookie_hash=$.cookie('woocommerce_cart_hash'),cart_created=sessionStorage.getItem('wc_cart_created');if(cart_hash===null||cart_hash===undefined||cart_hash===''){cart_hash='';}
if(cookie_hash===null||cookie_hash===undefined||cookie_hash===''){cookie_hash='';}
if(cart_hash&&(cart_created===null||cart_created===undefined||cart_created==='')){throw'No cart_created';}
if(cart_created){var cart_expiration=((1*cart_created)+day_in_ms),timestamp_now=(new Date()).getTime();if(cart_expiration<timestamp_now){throw'Fragment expired';}
cart_timeout=setTimeout(refresh_cart_fragment,(cart_expiration-timestamp_now));}
if(wc_fragments&&wc_fragments['div.widget_shopping_cart_content']&&cart_hash===cookie_hash){$.each(wc_fragments,function(key,value){$(key).replaceWith(value);});$(document.body).trigger('wc_fragments_loaded');}else{throw'No fragment';}}catch(err){refresh_cart_fragment();}}else{refresh_cart_fragment();}
if($.cookie('woocommerce_items_in_cart')>0){$('.hide_cart_widget_if_empty').closest('.widget_shopping_cart').show();}else{$('.hide_cart_widget_if_empty').closest('.widget_shopping_cart').hide();}
$(document.body).bind('adding_to_cart',function(){$('.hide_cart_widget_if_empty').closest('.widget_shopping_cart').show();});});
