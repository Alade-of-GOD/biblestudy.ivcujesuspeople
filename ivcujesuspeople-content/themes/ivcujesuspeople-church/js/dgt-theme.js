;(function($){"use strict";$(document).ready(function(){var body=$('body'),windowWidth=$(window).width();var carousel=body.find('.dgt-slider-carousel');if($(carousel).length>0){$(carousel).each(function(){var navigation=false,pagination=false,number=1;if($(this).data('control')!=''){navigation=$(this).data('control');}
if($(this).data('pager')!=''){pagination=$(this).data('pager');}
if($(this).data('number')!=''){number=$(this).data('number');}
$(this).owlCarousel({items:number,itemsDesktop:[1199,number-1],itemsDesktopSmall:[979,1],itemsTablet:[768,1],autoWidth:true,pagination:pagination,navigation:navigation,navigationText:['<i class="ion-ios-arrow-thin-left"></i>','<i class="ion-ios-arrow-thin-right"></i>'],});})}
var imgCarousel=body.find('.dgt-flickity-slider-wrap');if($(imgCarousel).length>0){$(imgCarousel).each(function(){var galleryCarousel=$(this).find('.dgt-flickity-slider');var galleryNav=$(this).find('.dgt-flickity-slider-nav');$(galleryCarousel).flickity({freeScroll:true,wrapAround:true,pageDots:false});$(galleryNav).flickity({asNavFor:'.dgt-flickity-slider',contain:true,prevNextButtons:false,pageDots:false});});}
var fixed_header=body.find('.fixed-header');if(fixed_header.length>0){if($(window).scrollTop()>50){$(fixed_header).removeClass('not-sticking').addClass('sticking');}
$('.fixed-header').stickMe({topOffset:50});}
if(windowWidth>992){var fixed_sidebar=body.find('.fixed-sidebar .sidebar');if(fixed_sidebar.length>0){$(fixed_sidebar).theiaStickySidebar({additionalMarginTop:30});}}
var isotopItem=body.find('.dgt-isotope-wrap');if(isotopItem.length>0){$(isotopItem).each(function(){var itemSelect=$(this).find('.dgt-isotope-item');$(this).isotope({});});}
var searchCategory=body.find('.dgt-search-wrap');if(searchCategory.length>0){var searchIcon=$(this).find('.dgt-search-icon');$(searchIcon).click(function(){$(this).closest('.dgt-search-wrap').toggleClass('dgt-search-open');});}
if($('#dgt-back-top').length){var scrollTrigger=300,backToTop=function(){var scrollTop=$(window).scrollTop();if(scrollTop>scrollTrigger){$('#dgt-back-top').fadeIn();}else{$('#dgt-back-top').fadeOut();}};backToTop();$(window).on('scroll',function(){backToTop();});$('#dgt-back-top').on('click',function(e){e.preventDefault();$('html,body').animate({scrollTop:0},700);});}
if($('.dgt-venobox').length){$('.dgt-venobox').each(function(){$(this).venobox({titleattr:'data-title',numeratio:true,infinigall:true});});}
var headerMobileOpen=body.find('.header-mobile-open-icon'),headerMobileClose=body.find('.header-mobile-close'),headerMobile=body.find('.header-mobile');if(jQuery(headerMobileOpen).length>0){if(jQuery(headerMobile).length>0){var menuArrow='<span class="menu-arrow ion-android-add"></span>',menuDrop=jQuery(".mobile-menu").find(".sub-menu");jQuery(headerMobileOpen).click(function(){jQuery(this).closest('body').find(headerMobile).addClass('header-mobile-open');});jQuery(headerMobileClose).click(function(){jQuery(this).closest('body').find(headerMobile).removeClass('header-mobile-open');});jQuery(menuDrop).closest(".menu-item").append(menuArrow);jQuery(".mobile-menu .menu-arrow").click(function(){jQuery(this).closest("ul").find(".sub-menu").slideUp();jQuery(this).prev().slideDown();jQuery(this).closest("ul").find(".menu-arrow").removeClass('ion-android-remove').addClass('ion-android-add');jQuery(this).removeClass('ion-android-add').addClass('ion-android-remove');});}}
if(windowWidth<992){var footerWidgetTitle=jQuery('.site-footer').find('.widget-title');if(jQuery(footerWidgetTitle).length>0){jQuery(footerWidgetTitle).click(function(){jQuery(this).closest('.footer-widget').find('.widget-title').next().slideUp();jQuery(this).closest('.footer-widget').find('.widget-title').removeClass('open');if(jQuery(this).hasClass('open')){jQuery(this).next().slideUp();jQuery(this).removeClass('open');}else{jQuery(this).next().slideDown();jQuery(this).addClass('open');}});}}
if(windowWidth<992){var WidgetTitle=jQuery('.sidebar').find('.widget-title');if(jQuery(WidgetTitle).length>0){jQuery(WidgetTitle).click(function(){jQuery(this).closest('.sidebar').find('.widget-title').next().slideUp();jQuery(this).closest('.sidebar').find('.widget-title').removeClass('open');if(jQuery(this).hasClass('open')){jQuery(this).next().slideUp();jQuery(this).removeClass('open');}else{jQuery(this).next().slideDown();jQuery(this).addClass('open');}});}}
jQuery(".tnp-email").val("Enter your email");jQuery(".tnp-email").focus(function(){jQuery(this).val("");});jQuery(".tnp-email").blur(function(){jQuery(this).val("Enter your email");});if(jQuery('.dgt-audio-play').length>0){jQuery('.dgt-audio-play').mediaelementplayer();}
if(jQuery('.dgt-sermon-item').length>0){jQuery('.dgt-sermon-item').each(function(){var audio=jQuery(this).find('.dgt-blog-audio');jQuery(this).find('.icon-audio').click(function(){if(jQuery(audio).hasClass('active')){jQuery(this).find('i').removeClass('ion-android-close').addClass('ion-android-volume-up');jQuery(audio).removeClass('active');}else{jQuery(this).find('i').addClass('ion-android-close').removeClass('ion-android-volume-up');jQuery(audio).addClass('active');}});});}});$(window).load(function(){var preloading=$('body').find('.dgt-loading-wrap');if(preloading.length>0){$(preloading).fadeOut();}});})(window.jQuery);;function newsletter_check_field(field,message){if(!field)return true;if(field.type=="checkbox"&&!field.checked){alert(message);return false;}
if(field.required!==undefined&&field.required!==false&&field.value==""){alert(message);return false;}
return true;}
function newsletter_check(f){var re=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;if(!re.test(f.elements["ne"].value)){alert(newsletter.messages.email_error);return false;}
if(!newsletter_check_field(f.elements["nn"],newsletter.messages.name_error))return false;if(!newsletter_check_field(f.elements["ns"],newsletter.messages.surname_error))return false;for(var i=1;i<newsletter.profile_max;i++){if(!newsletter_check_field(f.elements["np"+i],newsletter.messages.profile_error))return false;}
if(!newsletter_check_field(f.elements["ny"],newsletter.messages.privacy_error))return false;return true;}
