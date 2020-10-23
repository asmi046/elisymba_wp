/*Куки*/
(function(factory){if(typeof define==='function'&&define.amd){define(['jquery'],factory);}else if(typeof exports==='object'){factory(require('jquery'));}else{factory(jQuery);}}(function($){var pluses=/\+/g;function encode(s){return config.raw?s:encodeURIComponent(s);}function decode(s){return config.raw?s:decodeURIComponent(s);}function stringifyCookieValue(value){return encode(config.json?JSON.stringify(value):String(value));}function parseCookieValue(s){if(s.indexOf('"')===0){s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,'\\');}try{s=decodeURIComponent(s.replace(pluses,' '));return config.json?JSON.parse(s):s;}catch(e){}}function read(s,converter){var value=config.raw?s:parseCookieValue(s);return $.isFunction(converter)?converter(value):value;}var config=$.cookie=function(key,value,options){if(value!==undefined&&!$.isFunction(value)){options=$.extend({},config.defaults,options);if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setTime(+t+days*864e+5);}return(document.cookie=[encode(key),'=',stringifyCookieValue(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''));}var result=key?undefined:{};var cookies=document.cookie?document.cookie.split('; '):[];for(var i=0,l=cookies.length;i<l;i++){var parts=cookies[i].split('=');var name=decode(parts.shift());var cookie=parts.join('=');if(key&&key===name){result=read(cookie,value);break;}if(!key&&(cookie=read(cookie))!==undefined){result[name]=cookie;}}return result;};config.defaults={};$.removeCookie=function(key,options){if($.cookie(key)===undefined){return false;}$.cookie(key,'',$.extend({},options,{expires:-1}));return!$.cookie(key);};}));

/*! jQuery & Zepto Lazy v1.7.10 - http://jquery.eisbehr.de/lazy - MIT&GPL-2.0 license - Copyright 2012-2018 Daniel 'Eisbehr' Kern */
!function(t,e){"use strict";function r(r,a,i,u,l){function f(){L=t.devicePixelRatio>1,i=c(i),a.delay>=0&&setTimeout(function(){s(!0)},a.delay),(a.delay<0||a.combined)&&(u.e=v(a.throttle,function(t){"resize"===t.type&&(w=B=-1),s(t.all)}),u.a=function(t){t=c(t),i.push.apply(i,t)},u.g=function(){return i=n(i).filter(function(){return!n(this).data(a.loadedName)})},u.f=function(t){for(var e=0;e<t.length;e++){var r=i.filter(function(){return this===t[e]});r.length&&s(!1,r)}},s(),n(a.appendScroll).on("scroll."+l+" resize."+l,u.e))}function c(t){var i=a.defaultImage,o=a.placeholder,u=a.imageBase,l=a.srcsetAttribute,f=a.loaderAttribute,c=a._f||{};t=n(t).filter(function(){var t=n(this),r=m(this);return!t.data(a.handledName)&&(t.attr(a.attribute)||t.attr(l)||t.attr(f)||c[r]!==e)}).data("plugin_"+a.name,r);for(var s=0,d=t.length;s<d;s++){var A=n(t[s]),g=m(t[s]),h=A.attr(a.imageBaseAttribute)||u;g===N&&h&&A.attr(l)&&A.attr(l,b(A.attr(l),h)),c[g]===e||A.attr(f)||A.attr(f,c[g]),g===N&&i&&!A.attr(E)?A.attr(E,i):g===N||!o||A.css(O)&&"none"!==A.css(O)||A.css(O,"url('"+o+"')")}return t}function s(t,e){if(!i.length)return void(a.autoDestroy&&r.destroy());for(var o=e||i,u=!1,l=a.imageBase||"",f=a.srcsetAttribute,c=a.handledName,s=0;s<o.length;s++)if(t||e||A(o[s])){var g=n(o[s]),h=m(o[s]),b=g.attr(a.attribute),v=g.attr(a.imageBaseAttribute)||l,p=g.attr(a.loaderAttribute);g.data(c)||a.visibleOnly&&!g.is(":visible")||!((b||g.attr(f))&&(h===N&&(v+b!==g.attr(E)||g.attr(f)!==g.attr(F))||h!==N&&v+b!==g.css(O))||p)||(u=!0,g.data(c,!0),d(g,h,v,p))}u&&(i=n(i).filter(function(){return!n(this).data(c)}))}function d(t,e,r,i){++z;var o=function(){y("onError",t),p(),o=n.noop};y("beforeLoad",t);var u=a.attribute,l=a.srcsetAttribute,f=a.sizesAttribute,c=a.retinaAttribute,s=a.removeAttribute,d=a.loadedName,A=t.attr(c);if(i){var g=function(){s&&t.removeAttr(a.loaderAttribute),t.data(d,!0),y(T,t),setTimeout(p,1),g=n.noop};t.off(I).one(I,o).one(D,g),y(i,t,function(e){e?(t.off(D),g()):(t.off(I),o())})||t.trigger(I)}else{var h=n(new Image);h.one(I,o).one(D,function(){t.hide(),e===N?t.attr(C,h.attr(C)).attr(F,h.attr(F)).attr(E,h.attr(E)):t.css(O,"url('"+h.attr(E)+"')"),t[a.effect](a.effectTime),s&&(t.removeAttr(u+" "+l+" "+c+" "+a.imageBaseAttribute),f!==C&&t.removeAttr(f)),t.data(d,!0),y(T,t),h.remove(),p()});var m=(L&&A?A:t.attr(u))||"";h.attr(C,t.attr(f)).attr(F,t.attr(l)).attr(E,m?r+m:null),h.complete&&h.trigger(D)}}function A(t){var e=t.getBoundingClientRect(),r=a.scrollDirection,n=a.threshold,i=h()+n>e.top&&-n<e.bottom,o=g()+n>e.left&&-n<e.right;return"vertical"===r?i:"horizontal"===r?o:i&&o}function g(){return w>=0?w:w=n(t).width()}function h(){return B>=0?B:B=n(t).height()}function m(t){return t.tagName.toLowerCase()}function b(t,e){if(e){var r=t.split(",");t="";for(var a=0,n=r.length;a<n;a++)t+=e+r[a].trim()+(a!==n-1?",":"")}return t}function v(t,e){var n,i=0;return function(o,u){function l(){i=+new Date,e.call(r,o)}var f=+new Date-i;n&&clearTimeout(n),f>t||!a.enableThrottle||u?l():n=setTimeout(l,t-f)}}function p(){--z,i.length||z||y("onFinishedAll")}function y(t,e,n){return!!(t=a[t])&&(t.apply(r,[].slice.call(arguments,1)),!0)}var z=0,w=-1,B=-1,L=!1,T="afterLoad",D="load",I="error",N="img",E="src",F="srcset",C="sizes",O="background-image";"event"===a.bind||o?f():n(t).on(D+"."+l,f)}function a(a,o){var u=this,l=n.extend({},u.config,o),f={},c=l.name+"-"+ ++i;return u.config=function(t,r){return r===e?l[t]:(l[t]=r,u)},u.addItems=function(t){return f.a&&f.a("string"===n.type(t)?n(t):t),u},u.getItems=function(){return f.g?f.g():{}},u.update=function(t){return f.e&&f.e({},!t),u},u.force=function(t){return f.f&&f.f("string"===n.type(t)?n(t):t),u},u.loadAll=function(){return f.e&&f.e({all:!0},!0),u},u.destroy=function(){return n(l.appendScroll).off("."+c,f.e),n(t).off("."+c),f={},e},r(u,l,a,f,c),l.chainable?a:u}var n=t.jQuery||t.Zepto,i=0,o=!1;n.fn.Lazy=n.fn.lazy=function(t){return new a(this,t)},n.Lazy=n.lazy=function(t,r,i){if(n.isFunction(r)&&(i=r,r=[]),n.isFunction(i)){t=n.isArray(t)?t:[t],r=n.isArray(r)?r:[r];for(var o=a.prototype.config,u=o._f||(o._f={}),l=0,f=t.length;l<f;l++)(o[t[l]]===e||n.isFunction(o[t[l]]))&&(o[t[l]]=i);for(var c=0,s=r.length;c<s;c++)u[r[c]]=t[0]}},a.prototype.config={name:"lazy",chainable:!0,autoDestroy:!0,bind:"load",threshold:500,visibleOnly:!1,appendScroll:t,scrollDirection:"both",imageBase:null,defaultImage:"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",placeholder:null,delay:-1,combined:!1,attribute:"data-src",srcsetAttribute:"data-srcset",sizesAttribute:"data-sizes",retinaAttribute:"data-retina",loaderAttribute:"data-loader",imageBaseAttribute:"data-imagebase",removeAttribute:!0,handledName:"handled",loadedName:"loaded",effect:"show",effectTime:0,enableThrottle:!0,throttle:250,beforeLoad:e,afterLoad:e,onError:e,onFinishedAll:e},n(t).on("load",function(){o=!0})}(window);

/*
 * @preserve
 *
 * Readmore.js jQuery plugin
 * Author: @jed_foster
 * Project home: http://jedfoster.github.io/Readmore.js
 * Licensed under the MIT license
 *
 * Debounce function from http://davidwalsh.name/javascript-debounce-function
 */
 
(function(a){if(typeof define==="function"&&define.amd){define(["jquery"],a)}else{if(typeof exports==="object"){module.exports=a(require("jquery"))}else{a(jQuery)}}}(function(d){var k="readmore",c={speed:100,collapsedHeight:200,heightMargin:16,moreLink:'<a href="#">Read More</a>',lessLink:'<a href="#">Close</a>',embedCSS:true,blockCSS:"display: block; width: 100%;",startOpen:false,blockProcessed:function(){},beforeToggle:function(){},afterToggle:function(){}},b={},g=0;function i(m,o,l){var n;return function(){var s=this,r=arguments;var q=function(){n=null;if(!l){m.apply(s,r)}};var p=l&&!n;clearTimeout(n);n=setTimeout(q,o);if(p){m.apply(s,r)}}}function e(l){var m=++g;return String(l==null?"rmjs-":l)+m}function h(n){var o=n.clone().css({height:"auto",width:n.width(),maxHeight:"none",overflow:"hidden"}).insertAfter(n),m=o.outerHeight(),q=parseInt(o.css({maxHeight:""}).css("max-height").replace(/[^-\d\.]/g,""),10),p=n.data("defaultHeight");o.remove();var l=q||n.data("collapsedHeight")||p;n.data({expandedHeight:m,maxHeight:q,collapsedHeight:l}).css({maxHeight:"none"})}var j=i(function(){d("[data-readmore]").each(function(){var l=d(this),m=(l.attr("aria-expanded")==="true");h(l);l.css({height:l.data((m?"expandedHeight":"collapsedHeight"))})})},100);function a(l){if(!b[l.selector]){var m=" ";if(l.embedCSS&&l.blockCSS!==""){m+=l.selector+" + [data-readmore-toggle], "+l.selector+"[data-readmore]{"+l.blockCSS+"}"}m+=l.selector+"[data-readmore]{transition: height "+l.speed+"ms;overflow: hidden;}";(function(p,n){var o=p.createElement("style");o.type="text/css";if(o.styleSheet){o.styleSheet.cssText=n}else{o.appendChild(p.createTextNode(n))}p.getElementsByTagName("head")[0].appendChild(o)}(document,m));b[l.selector]=true}}function f(m,l){this.element=m;this.options=d.extend({},c,l);a(this.options);this._defaults=c;this._name=k;this.init();if(window.addEventListener){window.addEventListener("load",j);window.addEventListener("resize",j)}else{window.attachEvent("load",j);window.attachEvent("resize",j)}}f.prototype={init:function(){var o=d(this.element);o.data({defaultHeight:this.options.collapsedHeight,heightMargin:this.options.heightMargin});h(o);var l=o.data("collapsedHeight"),n=o.data("heightMargin");if(o.outerHeight(true)<=l+n){if(this.options.blockProcessed&&typeof this.options.blockProcessed==="function"){this.options.blockProcessed(o,false)}return true}else{var p=o.attr("id")||e(),m=this.options.startOpen?this.options.lessLink:this.options.moreLink;o.attr({"data-readmore":"","aria-expanded":this.options.startOpen,id:p});o.after(d(m).on("click",(function(q){return function(r){q.toggle(this,o[0],r)}})(this)).attr({"data-readmore-toggle":p,"aria-controls":p}));if(!this.options.startOpen){o.css({height:l})}if(this.options.blockProcessed&&typeof this.options.blockProcessed==="function"){this.options.blockProcessed(o,true)}}},toggle:function(p,r,s){if(s){s.preventDefault()}if(!p){p=d('[aria-controls="'+this.element.id+'"]')[0]}if(!r){r=this.element}var n=d(r),m="",q="",o=false,l=n.data("collapsedHeight");if(n.height()<=l){m=n.data("expandedHeight")+"px";q="lessLink";o=true}else{m=l;q="moreLink"}if(this.options.beforeToggle&&typeof this.options.beforeToggle==="function"){this.options.beforeToggle(p,n,!o)}n.css({height:m});n.on("transitionend",(function(t){return function(){if(t.options.afterToggle&&typeof t.options.afterToggle==="function"){t.options.afterToggle(p,n,o)}d(this).attr({"aria-expanded":o}).off("transitionend")}})(this));d(p).replaceWith(d(this.options[q]).on("click",(function(t){return function(u){t.toggle(this,r,u)}})(this)).attr({"data-readmore-toggle":n.attr("id"),"aria-controls":n.attr("id")}))},destroy:function(){d(this.element).each(function(){var l=d(this);l.attr({"data-readmore":null,"aria-expanded":null}).css({maxHeight:"",height:""}).next("[data-readmore-toggle]").remove();l.removeData()})}};d.fn.readmore=function(n){var m=arguments,l=this.selector;n=n||{};if(typeof n==="object"){return this.each(function(){if(d.data(this,"plugin_"+k)){var o=d.data(this,"plugin_"+k);o.destroy.apply(o)}n.selector=l;d.data(this,"plugin_"+k,new f(this,n))})}else{if(typeof n==="string"&&n[0]!=="_"&&n!=="init"){return this.each(function(){var o=d.data(this,"plugin_"+k);if(o instanceof f&&typeof o[n]==="function"){o[n].apply(o,Array.prototype.slice.call(m,1))}})}}}}));
/*

 arcticModal — jQuery plugin
 Version: 0.3
 Author: Sergey Predvoditelev (sergey.predvoditelev@gmail.com)
 Company: Arctic Laboratory (http://arcticlab.ru/)

 Docs & Examples: http://arcticlab.ru/arcticmodal/

*/
(function(n){var i={type:"html",content:"",url:"",ajax:{},ajax_request:null,closeOnEsc:!0,closeOnOverlayClick:!0,clone:!1,overlay:{block:void 0,tpl:'<div class="arcticmodal-overlay"></div>',css:{backgroundColor:"#000",opacity:0.6}},container:{block:void 0,tpl:'<div class="arcticmodal-container"><table class="arcticmodal-container_i"><tr><td class="arcticmodal-container_i2"></td></tr></table></div>'},wrap:void 0,body:void 0,errors:{tpl:'<div class="arcticmodal-error arcticmodal-close"></div>',autoclose_delay:2000,ajax_unsuccessful_load:"Error"},openEffect:{type:"fade",speed:400},closeEffect:{type:"fade",speed:400},beforeOpen:n.noop,afterOpen:n.noop,beforeClose:n.noop,afterClose:n.noop,afterLoading:n.noop,afterLoadingOnShow:n.noop,errorLoading:n.noop},b=0,l=n([]),a={isEventOut:function(e,d){var f=!0;n(e).each(function(){n(d.target).get(0)==n(this).get(0)&&(f=!1);0==n(d.target).closest("HTML",n(this).get(0)).length&&(f=!1)});return f}},k={getParentEl:function(e){var d=n(e);return d.data("arcticmodal")?d:(d=n(e).closest(".arcticmodal-container").data("arcticmodalParentEl"))?d:!1},transition:function(f,d,h,g){g=void 0==g?n.noop:g;switch(h.type){case"fade":"show"==d?f.fadeIn(h.speed,g):f.fadeOut(h.speed,g);break;case"none":"show"==d?f.show():f.hide(),g()}},prepare_body:function(e,d){n(".arcticmodal-close",e.body).unbind("click.arcticmodal").bind("click.arcticmodal",function(){d.arcticmodal("close");return !1})},init_el:function(f,d){var o=f.data("arcticmodal");if(!o){o=d;b++;o.modalID=b;o.overlay.block=n(o.overlay.tpl);o.overlay.block.css(o.overlay.css);o.container.block=n(o.container.tpl);o.body=n(".arcticmodal-container_i2",o.container.block);d.clone?o.body.html(f.clone(!0)):(f.before('<div id="arcticmodalReserve'+o.modalID+'" style="display: none" />'),o.body.html(f));k.prepare_body(o,f);o.closeOnOverlayClick&&o.overlay.block.add(o.container.block).click(function(g){a.isEventOut(n(">*",o.body),g)&&f.arcticmodal("close")});o.container.block.data("arcticmodalParentEl",f);f.data("arcticmodal",o);l=n.merge(l,f);n.proxy(c.show,f)();if("html"==o.type){return f}if(void 0!=o.ajax.beforeSend){var h=o.ajax.beforeSend;delete o.ajax.beforeSend}if(void 0!=o.ajax.success){var j=o.ajax.success;delete o.ajax.success}if(void 0!=o.ajax.error){var e=o.ajax.error;delete o.ajax.error}var m=n.extend(!0,{url:o.url,beforeSend:function(){void 0==h?o.body.html('<div class="arcticmodal-loading" />'):h(o,f)},success:function(g){f.trigger("afterLoading");o.afterLoading(o,f,g);void 0==j?o.body.html(g):j(o,f,g);k.prepare_body(o,f);f.trigger("afterLoadingOnShow");o.afterLoadingOnShow(o,f,g)},error:function(){f.trigger("errorLoading");o.errorLoading(o,f);void 0==e?(o.body.html(o.errors.tpl),n(".arcticmodal-error",o.body).html(o.errors.ajax_unsuccessful_load),n(".arcticmodal-close",o.body).click(function(){f.arcticmodal("close");return !1}),o.errors.autoclose_delay&&setTimeout(function(){f.arcticmodal("close")},o.errors.autoclose_delay)):e(o,f)}},o.ajax);o.ajax_request=n.ajax(m);f.data("arcticmodal",o)}},init:function(e){e=n.extend(!0,{},i,e);if(n.isFunction(this)){if(void 0==e){n.error("jquery.arcticmodal: Uncorrect parameters")}else{if(""==e.type){n.error('jquery.arcticmodal: Don\'t set parameter "type"')}else{switch(e.type){case"html":if(""==e.content){n.error('jquery.arcticmodal: Don\'t set parameter "content"');break}var d=e.content;e.content="";return k.init_el(n(d),e);case"ajax":if(""==e.url){n.error('jquery.arcticmodal: Don\'t set parameter "url"');break}return k.init_el(n("<div />"),e)}}}}else{return this.each(function(){k.init_el(n(this),n.extend(!0,{},e))})}}},c={show:function(){var e=k.getParentEl(this);if(!1===e){n.error("jquery.arcticmodal: Uncorrect call")}else{var d=e.data("arcticmodal");d.overlay.block.hide();d.container.block.hide();n("BODY").append(d.overlay.block);n("BODY").append(d.container.block);d.beforeOpen(d,e);e.trigger("beforeOpen");if("hidden"!=d.wrap.css("overflow")){d.wrap.data("arcticmodalOverflow",d.wrap.css("overflow"));var h=d.wrap.outerWidth(!0);d.wrap.css("overflow","hidden");var f=d.wrap.outerWidth(!0);f!=h&&d.wrap.css("marginRight",f-h+"px")}l.not(e).each(function(){n(this).data("arcticmodal").overlay.block.hide()});k.transition(d.overlay.block,"show",1<l.length?{type:"none"}:d.openEffect);k.transition(d.container.block,"show",1<l.length?{type:"none"}:d.openEffect,function(){d.afterOpen(d,e);e.trigger("afterOpen")});return e}},close:function(){if(n.isFunction(this)){l.each(function(){n(this).arcticmodal("close")})}else{return this.each(function(){var e=k.getParentEl(this);if(!1===e){n.error("jquery.arcticmodal: Uncorrect call")}else{var d=e.data("arcticmodal");!1!==d.beforeClose(d,e)&&(e.trigger("beforeClose"),l.not(e).last().each(function(){n(this).data("arcticmodal").overlay.block.show()}),k.transition(d.overlay.block,"hide",1<l.length?{type:"none"}:d.closeEffect),k.transition(d.container.block,"hide",1<l.length?{type:"none"}:d.closeEffect,function(){d.afterClose(d,e);e.trigger("afterClose");d.clone||n("#arcticmodalReserve"+d.modalID).replaceWith(d.body.find(">*"));d.overlay.block.remove();d.container.block.remove();e.data("arcticmodal",null);n(".arcticmodal-container").length||(d.wrap.data("arcticmodalOverflow")&&d.wrap.css("overflow",d.wrap.data("arcticmodalOverflow")),d.wrap.css("marginRight",0))}),"ajax"==d.type&&d.ajax_request.abort(),l=l.not(e))}})}},setDefault:function(d){n.extend(!0,i,d)}};n(function(){i.wrap=n(document.all&&!document.querySelector?"html":"body")});n(document).bind("keyup.arcticmodal",function(e){var d=l.last();d.length&&d.data("arcticmodal").closeOnEsc&&27===e.keyCode&&d.arcticmodal("close")});n.arcticmodal=n.fn.arcticmodal=function(d){if(c[d]){return c[d].apply(this,Array.prototype.slice.call(arguments,1))}if("object"===typeof d||!d){return k.init.apply(this,arguments)}n.error("jquery.arcticmodal: Method "+d+" does not exist")}})(jQuery);

/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
!function(o,i,W,p){function d(e){return e&&e.hasOwnProperty&&e instanceof W}function h(e){return e&&"string"===W.type(e)}function S(e){return h(e)&&0<e.indexOf("%")}function T(e,t){var i=parseInt(e,10)||0;return t&&S(e)&&(i*=j.getViewport()[t]/100),Math.ceil(i)}function L(e,t){return T(e,t)+"px"}var n=W("html"),a=W(o),c=W(i),j=W.fancybox=function(){j.open.apply(this,arguments)},r=navigator.userAgent.match(/msie/i),l=null,s=i.createTouch!==p;W.extend(j,{version:"2.1.5",defaults:{padding:15,margin:20,width:800,height:600,minWidth:100,minHeight:100,maxWidth:9999,maxHeight:9999,pixelRatio:1,autoSize:!0,autoHeight:!1,autoWidth:!1,autoResize:!0,autoCenter:!s,fitToView:!0,aspectRatio:!1,topRatio:.5,leftRatio:.5,scrolling:"auto",wrapCSS:"",arrows:!0,closeBtn:!0,closeClick:!1,nextClick:!1,mouseWheel:!0,autoPlay:!1,playSpeed:3e3,preload:3,modal:!1,loop:!0,ajax:{dataType:"html",headers:{"X-fancyBox":!0}},iframe:{scrolling:"auto",preload:!0},swf:{wmode:"transparent",allowfullscreen:"true",allowscriptaccess:"always"},keys:{next:{13:"left",34:"up",39:"left",40:"up"},prev:{8:"right",33:"down",37:"right",38:"down"},close:[27],play:[32],toggle:[70]},direction:{next:"left",prev:"right"},scrollOutside:!0,index:0,type:null,href:null,content:null,title:null,tpl:{wrap:'<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',image:'<img class="fancybox-image" src="{href}" alt="" />',iframe:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen'+(r?' allowtransparency="true"':"")+"></iframe>",error:'<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',closeBtn:'<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',next:'<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',prev:'<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'},openEffect:"fade",openSpeed:250,openEasing:"swing",openOpacity:!0,openMethod:"zoomIn",closeEffect:"fade",closeSpeed:250,closeEasing:"swing",closeOpacity:!0,closeMethod:"zoomOut",nextEffect:"elastic",nextSpeed:250,nextEasing:"swing",nextMethod:"changeIn",prevEffect:"elastic",prevSpeed:250,prevEasing:"swing",prevMethod:"changeOut",helpers:{overlay:!0,title:!0},onCancel:W.noop,beforeLoad:W.noop,afterLoad:W.noop,beforeShow:W.noop,afterShow:W.noop,beforeChange:W.noop,beforeClose:W.noop,afterClose:W.noop},group:{},opts:{},previous:null,coming:null,current:null,isActive:!1,isOpen:!1,isOpened:!1,wrap:null,skin:null,outer:null,inner:null,player:{timer:null,isActive:!1},ajaxLoad:null,imgPreload:null,transitions:{},helpers:{},open:function(s,c){if(s&&(W.isPlainObject(c)||(c={}),!1!==j.close(!0)))return W.isArray(s)||(s=d(s)?W(s).get():[s]),W.each(s,function(e,t){var i,o,n,a,r,l={};"object"===W.type(t)&&(t.nodeType&&(t=W(t)),d(t)?(l={href:t.data("fancybox-href")||t.attr("href"),title:t.data("fancybox-title")||t.attr("title"),isDom:!0,element:t},W.metadata&&W.extend(!0,l,t.metadata())):l=t),i=c.href||l.href||(h(t)?t:null),o=c.title!==p?c.title:l.title||"",!(a=(n=c.content||l.content)?"html":c.type||l.type)&&l.isDom&&(a=(a=t.data("fancybox-type"))||((a=t.prop("class").match(/fancybox\.(\w+)/))?a[1]:null)),h(i)&&(a||(j.isImage(i)?a="image":j.isSWF(i)?a="swf":"#"===i.charAt(0)?a="inline":h(t)&&(a="html",n=t)),"ajax"===a&&(i=(r=i.split(/\s+/,2)).shift(),r=r.shift())),n||("inline"===a?i?n=W(h(i)?i.replace(/.*(?=#[^\s]+$)/,""):i):l.isDom&&(n=t):"html"===a?n=i:a||i||!l.isDom||(a="inline",n=t)),W.extend(l,{href:i,type:a,content:n,title:o,selector:r}),s[e]=l}),j.opts=W.extend(!0,{},j.defaults,c),c.keys!==p&&(j.opts.keys=!!c.keys&&W.extend({},j.defaults.keys,c.keys)),j.group=s,j._start(j.opts.index)},cancel:function(){var e=j.coming;e&&!1!==j.trigger("onCancel")&&(j.hideLoading(),j.ajaxLoad&&j.ajaxLoad.abort(),j.ajaxLoad=null,j.imgPreload&&(j.imgPreload.onload=j.imgPreload.onerror=null),e.wrap&&e.wrap.stop(!0,!0).trigger("onReset").remove(),j.coming=null,j.current||j._afterZoomOut(e))},close:function(e){j.cancel(),!1!==j.trigger("beforeClose")&&(j.unbindEvents(),j.isActive&&(j.isOpen&&!0!==e?(j.isOpen=j.isOpened=!1,j.isClosing=!0,W(".fancybox-item, .fancybox-nav").remove(),j.wrap.stop(!0,!0).removeClass("fancybox-opened"),j.transitions[j.current.closeMethod]()):(W(".fancybox-wrap").stop(!0).trigger("onReset").remove(),j._afterZoomOut())))},play:function(e){function t(){clearTimeout(j.player.timer)}function i(){t(),j.current&&j.player.isActive&&(j.player.timer=setTimeout(j.next,j.current.playSpeed))}function o(){t(),c.unbind(".player"),j.player.isActive=!1,j.trigger("onPlayEnd")}!0===e||!j.player.isActive&&!1!==e?j.current&&(j.current.loop||j.current.index<j.group.length-1)&&(j.player.isActive=!0,c.bind({"onCancel.player beforeClose.player":o,"onUpdate.player":i,"beforeLoad.player":t}),i(),j.trigger("onPlayStart")):o()},next:function(e){var t=j.current;t&&(h(e)||(e=t.direction.next),j.jumpto(t.index+1,e,"next"))},prev:function(e){var t=j.current;t&&(h(e)||(e=t.direction.prev),j.jumpto(t.index-1,e,"prev"))},jumpto:function(e,t,i){var o=j.current;o&&(e=T(e),j.direction=t||o.direction[e>=o.index?"next":"prev"],j.router=i||"jumpto",o.loop&&(e<0&&(e=o.group.length+e%o.group.length),e%=o.group.length),o.group[e]!==p&&(j.cancel(),j._start(e)))},reposition:function(e,t){var i,o=j.current,n=o?o.wrap:null;n&&(i=j._getPosition(t),e&&"scroll"===e.type?(delete i.position,n.stop(!0,!0).animate(i,200)):(n.css(i),o.pos=W.extend({},o.dim,i)))},update:function(t){var i=t&&t.type,o=!i||"orientationchange"===i;o&&(clearTimeout(l),l=null),j.isOpen&&!l&&(l=setTimeout(function(){var e=j.current;e&&!j.isClosing&&(j.wrap.removeClass("fancybox-tmp"),(o||"load"===i||"resize"===i&&e.autoResize)&&j._setDimension(),"scroll"===i&&e.canShrink||j.reposition(t),j.trigger("onUpdate"),l=null)},o&&!s?0:300))},toggle:function(e){j.isOpen&&(j.current.fitToView="boolean"===W.type(e)?e:!j.current.fitToView,s&&(j.wrap.removeAttr("style").addClass("fancybox-tmp"),j.trigger("onUpdate")),j.update())},hideLoading:function(){c.unbind(".loading"),W("#fancybox-loading").remove()},showLoading:function(){var e,t;j.hideLoading(),e=W('<div id="fancybox-loading"><div></div></div>').click(j.cancel).appendTo("body"),c.bind("keydown.loading",function(e){27===(e.which||e.keyCode)&&(e.preventDefault(),j.cancel())}),j.defaults.fixed||(t=j.getViewport(),e.css({position:"absolute",top:.5*t.h+t.y,left:.5*t.w+t.x}))},getViewport:function(){var e=j.current&&j.current.locked||!1,t={x:a.scrollLeft(),y:a.scrollTop()};return e?(t.w=e[0].clientWidth,t.h=e[0].clientHeight):(t.w=s&&o.innerWidth?o.innerWidth:a.width(),t.h=s&&o.innerHeight?o.innerHeight:a.height()),t},unbindEvents:function(){j.wrap&&d(j.wrap)&&j.wrap.unbind(".fb"),c.unbind(".fb"),a.unbind(".fb")},bindEvents:function(){var t,r=j.current;r&&(a.bind("orientationchange.fb"+(s?"":" resize.fb")+(r.autoCenter&&!r.locked?" scroll.fb":""),j.update),(t=r.keys)&&c.bind("keydown.fb",function(i){var o=i.which||i.keyCode,e=i.target||i.srcElement;if(27===o&&j.coming)return!1;i.ctrlKey||i.altKey||i.shiftKey||i.metaKey||e&&(e.type||W(e).is("[contenteditable]"))||W.each(t,function(e,t){return 1<r.group.length&&t[o]!==p?(j[e](t[o]),i.preventDefault(),!1):-1<W.inArray(o,t)?(j[e](),i.preventDefault(),!1):void 0})}),W.fn.mousewheel&&r.mouseWheel&&j.wrap.bind("mousewheel.fb",function(e,t,i,o){for(var n=W(e.target||null),a=!1;n.length&&!a&&!n.is(".fancybox-skin")&&!n.is(".fancybox-wrap");)a=n[0]&&!(n[0].style.overflow&&"hidden"===n[0].style.overflow)&&(n[0].clientWidth&&n[0].scrollWidth>n[0].clientWidth||n[0].clientHeight&&n[0].scrollHeight>n[0].clientHeight),n=W(n).parent();0!==t&&!a&&1<j.group.length&&!r.canShrink&&(0<o||0<i?j.prev(0<o?"down":"left"):(o<0||i<0)&&j.next(o<0?"up":"right"),e.preventDefault())}))},trigger:function(i,e){var t,o=e||j.coming||j.current;if(o){if(W.isFunction(o[i])&&(t=o[i].apply(o,Array.prototype.slice.call(arguments,1))),!1===t)return!1;o.helpers&&W.each(o.helpers,function(e,t){t&&j.helpers[e]&&W.isFunction(j.helpers[e][i])&&j.helpers[e][i](W.extend(!0,{},j.helpers[e].defaults,t),o)}),c.trigger(i)}},isImage:function(e){return h(e)&&e.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)},isSWF:function(e){return h(e)&&e.match(/\.(swf)((\?|#).*)?$/i)},_start:function(e){var t,i,o={};if(e=T(e),!(t=j.group[e]||null))return!1;if(t=(o=W.extend(!0,{},j.opts,t)).margin,i=o.padding,"number"===W.type(t)&&(o.margin=[t,t,t,t]),"number"===W.type(i)&&(o.padding=[i,i,i,i]),o.modal&&W.extend(!0,o,{closeBtn:!1,closeClick:!1,nextClick:!1,arrows:!1,mouseWheel:!1,keys:null,helpers:{overlay:{closeClick:!1}}}),o.autoSize&&(o.autoWidth=o.autoHeight=!0),"auto"===o.width&&(o.autoWidth=!0),"auto"===o.height&&(o.autoHeight=!0),o.group=j.group,o.index=e,j.coming=o,!1===j.trigger("beforeLoad"))j.coming=null;else{if(i=o.type,t=o.href,!i)return j.coming=null,!(!j.current||!j.router||"jumpto"===j.router)&&(j.current.index=e,j[j.router](j.direction));if(j.isActive=!0,"image"!==i&&"swf"!==i||(o.autoHeight=o.autoWidth=!1,o.scrolling="visible"),"image"===i&&(o.aspectRatio=!0),"iframe"===i&&s&&(o.scrolling="scroll"),o.wrap=W(o.tpl.wrap).addClass("fancybox-"+(s?"mobile":"desktop")+" fancybox-type-"+i+" fancybox-tmp "+o.wrapCSS).appendTo(o.parent||"body"),W.extend(o,{skin:W(".fancybox-skin",o.wrap),outer:W(".fancybox-outer",o.wrap),inner:W(".fancybox-inner",o.wrap)}),W.each(["Top","Right","Bottom","Left"],function(e,t){o.skin.css("padding"+t,L(o.padding[e]))}),j.trigger("onReady"),"inline"===i||"html"===i){if(!o.content||!o.content.length)return j._error("content")}else if(!t)return j._error("href");"image"===i?j._loadImage():"ajax"===i?j._loadAjax():"iframe"===i?j._loadIframe():j._afterLoad()}},_error:function(e){W.extend(j.coming,{type:"html",autoWidth:!0,autoHeight:!0,minWidth:0,minHeight:0,scrolling:"no",hasError:e,content:j.coming.tpl.error}),j._afterLoad()},_loadImage:function(){var e=j.imgPreload=new Image;e.onload=function(){this.onload=this.onerror=null,j.coming.width=this.width/j.opts.pixelRatio,j.coming.height=this.height/j.opts.pixelRatio,j._afterLoad()},e.onerror=function(){this.onload=this.onerror=null,j._error("image")},e.src=j.coming.href,!0!==e.complete&&j.showLoading()},_loadAjax:function(){var i=j.coming;j.showLoading(),j.ajaxLoad=W.ajax(W.extend({},i.ajax,{url:i.href,error:function(e,t){j.coming&&"abort"!==t?j._error("ajax",e):j.hideLoading()},success:function(e,t){"success"===t&&(i.content=e,j._afterLoad())}}))},_loadIframe:function(){var e=j.coming,t=W(e.tpl.iframe.replace(/\{rnd\}/g,(new Date).getTime())).attr("scrolling",s?"auto":e.iframe.scrolling).attr("src",e.href);W(e.wrap).bind("onReset",function(){try{W(this).find("iframe").hide().attr("src","//about:blank").end().empty()}catch(e){}}),e.iframe.preload&&(j.showLoading(),t.one("load",function(){W(this).data("ready",1),s||W(this).bind("load.fb",j.update),W(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show(),j._afterLoad()})),e.content=t.appendTo(e.inner),e.iframe.preload||j._afterLoad()},_preloadImages:function(){for(var e,t=j.group,i=j.current,o=t.length,n=i.preload?Math.min(i.preload,o-1):0,a=1;a<=n;a+=1)"image"===(e=t[(i.index+a)%o]).type&&e.href&&((new Image).src=e.href)},_afterLoad:function(){var i,e,t,o,n,a=j.coming,r=j.current;if(j.hideLoading(),a&&!1!==j.isActive)if(!1===j.trigger("afterLoad",a,r))a.wrap.stop(!0).trigger("onReset").remove(),j.coming=null;else{switch(r&&(j.trigger("beforeChange",r),r.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove()),j.unbindEvents(),i=a.content,e=a.type,t=a.scrolling,W.extend(j,{wrap:a.wrap,skin:a.skin,outer:a.outer,inner:a.inner,current:a,previous:r}),o=a.href,e){case"inline":case"ajax":case"html":a.selector?i=W("<div>").html(i).find(a.selector):d(i)&&(i.data("fancybox-placeholder")||i.data("fancybox-placeholder",W('<div class="fancybox-placeholder"></div>').insertAfter(i).hide()),i=i.show().detach(),a.wrap.bind("onReset",function(){W(this).find(i).length&&i.hide().replaceAll(i.data("fancybox-placeholder")).data("fancybox-placeholder",!1)}));break;case"image":i=a.tpl.image.replace("{href}",o);break;case"swf":i='<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="'+o+'"></param>',n="",W.each(a.swf,function(e,t){i+='<param name="'+e+'" value="'+t+'"></param>',n+=" "+e+'="'+t+'"'}),i+='<embed src="'+o+'" type="application/x-shockwave-flash" width="100%" height="100%"'+n+"></embed></object>"}d(i)&&i.parent().is(a.inner)||a.inner.append(i),j.trigger("beforeShow"),a.inner.css("overflow","yes"===t?"scroll":"no"===t?"hidden":t),j._setDimension(),j.reposition(),j.isOpen=!1,j.coming=null,j.bindEvents(),j.isOpened?r.prevMethod&&j.transitions[r.prevMethod]():W(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove(),j.transitions[j.isOpened?a.nextMethod:a.openMethod](),j._preloadImages()}},_setDimension:function(){var e,t,i,o,n,a,r,l,s,c=j.getViewport(),p=0,d=!1,h=!1,d=j.wrap,f=j.skin,u=j.inner,g=j.current,h=g.width,m=g.height,y=g.minWidth,w=g.minHeight,x=g.maxWidth,v=g.maxHeight,b=g.scrolling,k=g.scrollOutside?g.scrollbarWidth:0,C=g.margin,_=T(C[1]+C[3]),O=T(C[0]+C[2]);if(d.add(f).add(u).width("auto").height("auto").removeClass("fancybox-tmp"),t=_+(C=T(f.outerWidth(!0)-f.width())),i=O+(e=T(f.outerHeight(!0)-f.height())),o=S(h)?(c.w-t)*T(h)/100:h,n=S(m)?(c.h-i)*T(m)/100:m,"iframe"===g.type){if(s=g.content,g.autoHeight&&1===s.data("ready"))try{s[0].contentWindow.document.location&&(u.width(o).height(9999),a=s.contents().find("body"),k&&a.css("overflow-x","hidden"),n=a.outerHeight(!0))}catch(e){}}else(g.autoWidth||g.autoHeight)&&(u.addClass("fancybox-tmp"),g.autoWidth||u.width(o),g.autoHeight||u.height(n),g.autoWidth&&(o=u.width()),g.autoHeight&&(n=u.height()),u.removeClass("fancybox-tmp"));if(h=T(o),m=T(n),l=o/n,y=T(S(y)?T(y,"w")-t:y),x=T(S(x)?T(x,"w")-t:x),w=T(S(w)?T(w,"h")-i:w),a=x,r=v=T(S(v)?T(v,"h")-i:v),g.fitToView&&(x=Math.min(c.w-t,x),v=Math.min(c.h-i,v)),t=c.w-_,O=c.h-O,g.aspectRatio?(x<h&&(m=T((h=x)/l)),v<m&&(h=T((m=v)*l)),h<y&&(m=T((h=y)/l)),m<w&&(h=T((m=w)*l))):(h=Math.max(y,Math.min(h,x)),g.autoHeight&&"iframe"!==g.type&&(u.width(h),m=u.height()),m=Math.max(w,Math.min(m,v))),g.fitToView)if(u.width(h).height(m),d.width(h+C),c=d.width(),_=d.height(),g.aspectRatio)for(;(t<c||O<_)&&y<h&&w<m&&!(19<p++);)m=Math.max(w,Math.min(v,m-10)),(h=T(m*l))<y&&(m=T((h=y)/l)),x<h&&(m=T((h=x)/l)),u.width(h).height(m),d.width(h+C),c=d.width(),_=d.height();else h=Math.max(y,Math.min(h,h-(c-t))),m=Math.max(w,Math.min(m,m-(_-O)));k&&"auto"===b&&m<n&&h+C+k<t&&(h+=k),u.width(h).height(m),d.width(h+C),c=d.width(),_=d.height(),d=(t<c||O<_)&&y<h&&w<m,h=g.aspectRatio?h<a&&m<r&&h<o&&m<n:(h<a||m<r)&&(h<o||m<n),W.extend(g,{dim:{width:L(c),height:L(_)},origWidth:o,origHeight:n,canShrink:d,canExpand:h,wPadding:C,hPadding:e,wrapSpace:_-f.outerHeight(!0),skinSpace:f.height()-m}),!s&&g.autoHeight&&w<m&&m<v&&!h&&u.height("auto")},_getPosition:function(e){var t=j.current,i=j.getViewport(),o=t.margin,n=j.wrap.width()+o[1]+o[3],a=j.wrap.height()+o[0]+o[2],o={position:"absolute",top:o[0],left:o[3]};return t.autoCenter&&t.fixed&&!e&&a<=i.h&&n<=i.w?o.position="fixed":t.locked||(o.top+=i.y,o.left+=i.x),o.top=L(Math.max(o.top,o.top+(i.h-a)*t.topRatio)),o.left=L(Math.max(o.left,o.left+(i.w-n)*t.leftRatio)),o},_afterZoomIn:function(){var t=j.current;t&&(j.isOpen=j.isOpened=!0,j.wrap.css("overflow","visible").addClass("fancybox-opened"),j.update(),(t.closeClick||t.nextClick&&1<j.group.length)&&j.inner.css("cursor","pointer").bind("click.fb",function(e){W(e.target).is("a")||W(e.target).parent().is("a")||(e.preventDefault(),j[t.closeClick?"close":"next"]())}),t.closeBtn&&W(t.tpl.closeBtn).appendTo(j.skin).bind("click.fb",function(e){e.preventDefault(),j.close()}),t.arrows&&1<j.group.length&&((t.loop||0<t.index)&&W(t.tpl.prev).appendTo(j.outer).bind("click.fb",j.prev),(t.loop||t.index<j.group.length-1)&&W(t.tpl.next).appendTo(j.outer).bind("click.fb",j.next)),j.trigger("afterShow"),t.loop||t.index!==t.group.length-1?j.opts.autoPlay&&!j.player.isActive&&(j.opts.autoPlay=!1,j.play()):j.play(!1))},_afterZoomOut:function(e){e=e||j.current,W(".fancybox-wrap").trigger("onReset").remove(),W.extend(j,{group:{},opts:{},router:!1,current:null,isActive:!1,isOpened:!1,isOpen:!1,isClosing:!1,wrap:null,skin:null,outer:null,inner:null}),j.trigger("afterClose",e)}}),j.transitions={getOrigPosition:function(){var e=j.current,t=e.element,i=e.orig,o={},n=50,a=50,r=e.hPadding,l=e.wPadding,s=j.getViewport();return!i&&e.isDom&&t.is(":visible")&&((i=t.find("img:first")).length||(i=t)),d(i)?(o=i.offset(),i.is("img")&&(n=i.outerWidth(),a=i.outerHeight())):(o.top=s.y+(s.h-a)*e.topRatio,o.left=s.x+(s.w-n)*e.leftRatio),"fixed"!==j.wrap.css("position")&&!e.locked||(o.top-=s.y,o.left-=s.x),{top:L(o.top-r*e.topRatio),left:L(o.left-l*e.leftRatio),width:L(n+l),height:L(a+r)}},step:function(e,t){var i,o=t.prop,n=j.current,a=n.wrapSpace,r=n.skinSpace;"width"!==o&&"height"!==o||(i=t.end===t.start?1:(e-t.start)/(t.end-t.start),j.isClosing&&(i=1-i),n=e-(n="width"===o?n.wPadding:n.hPadding),j.skin[o](T("width"===o?n:n-a*i)),j.inner[o](T("width"===o?n:n-a*i-r*i)))},zoomIn:function(){var e=j.current,t=e.pos,i=e.openEffect,o="elastic"===i,n=W.extend({opacity:1},t);delete n.position,o?(t=this.getOrigPosition(),e.openOpacity&&(t.opacity=.1)):"fade"===i&&(t.opacity=.1),j.wrap.css(t).animate(n,{duration:"none"===i?0:e.openSpeed,easing:e.openEasing,step:o?this.step:null,complete:j._afterZoomIn})},zoomOut:function(){var e=j.current,t=e.closeEffect,i="elastic"===t,o={opacity:.1};i&&(o=this.getOrigPosition(),e.closeOpacity&&(o.opacity=.1)),j.wrap.animate(o,{duration:"none"===t?0:e.closeSpeed,easing:e.closeEasing,step:i?this.step:null,complete:j._afterZoomOut})},changeIn:function(){var e,t=j.current,i=t.nextEffect,o=t.pos,n={opacity:1},a=j.direction;o.opacity=.1,"elastic"===i&&(e="down"===a||"up"===a?"top":"left","down"===a||"right"===a?(o[e]=L(T(o[e])-200),n[e]="+=200px"):(o[e]=L(T(o[e])+200),n[e]="-=200px")),"none"===i?j._afterZoomIn():j.wrap.css(o).animate(n,{duration:t.nextSpeed,easing:t.nextEasing,complete:j._afterZoomIn})},changeOut:function(){var e=j.previous,t=e.prevEffect,i={opacity:.1},o=j.direction;"elastic"===t&&(i["down"===o||"up"===o?"top":"left"]=("up"===o||"left"===o?"-":"+")+"=200px"),e.wrap.animate(i,{duration:"none"===t?0:e.prevSpeed,easing:e.prevEasing,complete:function(){W(this).trigger("onReset").remove()}})}},j.helpers.overlay={defaults:{closeClick:!0,speedOut:200,showEarly:!0,css:{},locked:!s,fixed:!0},overlay:null,fixed:!1,el:W("html"),create:function(e){e=W.extend({},this.defaults,e),this.overlay&&this.close(),this.overlay=W('<div class="fancybox-overlay"></div>').appendTo(j.coming?j.coming.parent:e.parent),this.fixed=!1,e.fixed&&j.defaults.fixed&&(this.overlay.addClass("fancybox-overlay-fixed"),this.fixed=!0)},open:function(e){var t=this;e=W.extend({},this.defaults,e),this.overlay?this.overlay.unbind(".overlay").width("auto").height("auto"):this.create(e),this.fixed||(a.bind("resize.overlay",W.proxy(this.update,this)),this.update()),e.closeClick&&this.overlay.bind("click.overlay",function(e){if(W(e.target).hasClass("fancybox-overlay"))return j.isActive?j.close():t.close(),!1}),this.overlay.css(e.css).show()},close:function(){var e,t;a.unbind("resize.overlay"),this.el.hasClass("fancybox-lock")&&(W(".fancybox-margin").removeClass("fancybox-margin"),e=a.scrollTop(),t=a.scrollLeft(),this.el.removeClass("fancybox-lock"),a.scrollTop(e).scrollLeft(t)),W(".fancybox-overlay").remove().hide(),W.extend(this,{overlay:null,fixed:!1})},update:function(){var e,t="100%";this.overlay.width(t).height("100%"),r?(e=Math.max(i.documentElement.offsetWidth,i.body.offsetWidth),c.width()>e&&(t=c.width())):c.width()>a.width()&&(t=c.width()),this.overlay.width(t).height(c.height())},onReady:function(e,t){var i=this.overlay;W(".fancybox-overlay").stop(!0,!0),i||this.create(e),e.locked&&this.fixed&&t.fixed&&(i||(this.margin=c.height()>a.height()&&W("html").css("margin-right").replace("px","")),t.locked=this.overlay.append(t.wrap),t.fixed=!1),!0===e.showEarly&&this.beforeShow.apply(this,arguments)},beforeShow:function(e,t){var i,o;t.locked&&(!1!==this.margin&&(W("*").filter(function(){return"fixed"===W(this).css("position")&&!W(this).hasClass("fancybox-overlay")&&!W(this).hasClass("fancybox-wrap")}).addClass("fancybox-margin"),this.el.addClass("fancybox-margin")),i=a.scrollTop(),o=a.scrollLeft(),this.el.addClass("fancybox-lock"),a.scrollTop(i).scrollLeft(o)),this.open(e)},onUpdate:function(){this.fixed||this.update()},afterClose:function(e){this.overlay&&!j.coming&&this.overlay.fadeOut(e.speedOut,W.proxy(this.close,this))}},j.helpers.title={defaults:{type:"float",position:"bottom"},beforeShow:function(e){var t=j.current,i=t.title,o=e.type;if(W.isFunction(i)&&(i=i.call(t.element,t)),h(i)&&""!==W.trim(i)){switch(t=W('<div class="fancybox-title fancybox-title-'+o+'-wrap">'+i+"</div>"),o){case"inside":o=j.skin;break;case"outside":o=j.wrap;break;case"over":o=j.inner;break;default:o=j.skin,t.appendTo("body"),r&&t.width(t.width()),t.wrapInner('<span class="child"></span>'),j.current.margin[2]+=Math.abs(T(t.css("margin-bottom")))}t["top"===e.position?"prependTo":"appendTo"](o)}}},W.fn.fancybox=function(a){function e(e){var t,i,o=W(this).blur(),n=s;e.ctrlKey||e.altKey||e.shiftKey||e.metaKey||o.is(".fancybox-wrap")||(t=a.groupAttr||"data-fancybox-group",(i=o.attr(t))||(t="rel",i=o.get(0)[t]),i&&""!==i&&"nofollow"!==i&&(n=(o=(o=l.length?W(l):r).filter("["+t+'="'+i+'"]')).index(this)),a.index=n,!1!==j.open(o,a)&&e.preventDefault())}var r=W(this),l=this.selector||"",s=(a=a||{}).index||0;return l&&!1!==a.live?c.undelegate(l,"click.fb-start").delegate(l+":not('.fancybox-item, .fancybox-nav')","click.fb-start",e):r.unbind("click.fb-start").bind("click.fb-start",e),this.filter("[data-fancybox-start=1]").trigger("click"),this},c.ready(function(){var e,t,i;W.scrollbarWidth===p&&(W.scrollbarWidth=function(){var e=W('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),t=(t=e.children()).innerWidth()-t.height(99).innerWidth();return e.remove(),t}),W.support.fixedPosition===p&&(e=W.support,i=20===(t=W('<div style="position:fixed;top:20px;"></div>').appendTo("body"))[0].offsetTop||15===t[0].offsetTop,t.remove(),e.fixedPosition=i),W.extend(j.defaults,{scrollbarWidth:W.scrollbarWidth(),fixed:W.support.fixedPosition,parent:W("body")}),e=W(o).width(),n.addClass("fancybox-lock-test"),t=W(o).width(),n.removeClass("fancybox-lock-test"),W("<style type='text/css'>.fancybox-margin{margin-right:"+(t-e)+"px;}</style>").appendTo("head")})}(window,document,jQuery),function(s){"use strict";var e=s.fancybox;e.helpers.media={defaults:{youtube:{matcher:/(youtube\.com|youtu\.be|youtube-nocookie\.com)\/(watch\?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*)).*/i,params:{autoplay:1,autohide:1,fs:1,rel:0,hd:1,wmode:"opaque",enablejsapi:1},type:"iframe",url:"//www.youtube.com/embed/$3"},vimeo:{matcher:/(?:vimeo(?:pro)?.com)\/(?:[^\d]+)?(\d+)(?:.*)/,params:{autoplay:1,hd:1,show_title:1,show_byline:1,show_portrait:0,fullscreen:1},type:"iframe",url:"//player.vimeo.com/video/$1"},metacafe:{matcher:/metacafe.com\/(?:watch|fplayer)\/([\w\-]{1,10})/,params:{autoPlay:"yes"},type:"swf",url:function(e,t,i){return i.swf.flashVars="playerVars="+s.param(t,!0),"//www.metacafe.com/fplayer/"+e[1]+"/.swf"}},dailymotion:{matcher:/dailymotion.com\/video\/(.*)\/?(.*)/,params:{additionalInfos:0,autoStart:1},type:"swf",url:"//www.dailymotion.com/swf/video/$1"},twitvid:{matcher:/twitvid\.com\/([a-zA-Z0-9_\-\?\=]+)/i,params:{autoplay:0},type:"iframe",url:"//www.twitvid.com/embed.php?guid=$1"},twitpic:{matcher:/twitpic\.com\/(?!(?:place|photos|events)\/)([a-zA-Z0-9\?\=\-]+)/i,type:"image",url:"//twitpic.com/show/full/$1/"},instagram:{matcher:/(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,type:"image",url:"//$1/p/$2/media/?size=l"},google_maps:{matcher:/maps\.google\.([a-z]{2,3}(\.[a-z]{2})?)\/(\?ll=|maps\?)(.*)/i,type:"iframe",url:function(e){return"//maps.google."+e[1]+"/"+e[3]+e[4]+"&output="+(0<e[4].indexOf("layer=c")?"svembed":"embed")}}},beforeLoad:function(e,t){var i,o,n,a,r=t.href||"",l=!1;for(i in e)if(e.hasOwnProperty(i)&&(o=e[i],n=r.match(o.matcher))){l=o.type,a=s.extend(!0,{},o.params,t[i]||(s.isPlainObject(e[i])?e[i].params:null)),r="function"===s.type(o.url)?o.url.call(this,n,a,t):function(i,e,t){return t=t||"","object"===s.type(t)&&(t=s.param(t,!0)),s.each(e,function(e,t){i=i.replace("$"+e,t||"")}),t.length&&(i+=(0<i.indexOf("?")?"&":"?")+t),i}(o.url,n,a);break}l&&(t.href=r,t.type=l,t.autoHeight=!1)}}}(jQuery);

/*!
* jquery.inputmask.bundle.js
* http://github.com/RobinHerbots/jquery.inputmask
* Copyright (c) 2010 - 2016 Robin Herbots
* Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
* Version: 3.2.7
*/
!function(_e){function Me(e,t){return this instanceof Me?(_e.isPlainObject(e)?t=e:(t=t||{}).alias=e,this.el=void 0,this.opts=_e.extend(!0,{},this.defaults,t),this.noMasksCache=t&&void 0!==t.definitions,this.userOptions=t||{},this.events={},void u(this.opts.alias,t,this.opts)):new Me(e,t)}function u(e,t,i){var a=i.aliases[e];return a?(a.alias&&u(a.alias,void 0,i),_e.extend(!0,i,a),_e.extend(!0,i,t),!0):(null===i.mask&&(i.mask=e),!1)}function r(w,n){function r(e){function t(e,t,i,a){this.matches=[],this.isGroup=e||!1,this.isOptional=t||!1,this.isQuantifier=i||!1,this.isAlternator=a||!1,this.quantifier={min:1,max:1}}function n(e,t,i){var a=w.definitions[t];i=void 0!==i?i:e.matches.length;var n=e.matches[i-1];if(a&&!d){a.placeholder=_e.isFunction(a.placeholder)?a.placeholder(w):a.placeholder;for(var r=a.prevalidator,o=r?r.length:0,s=1;s<a.cardinality;s++){var l=s<=o?r[s-1]:[],u=l.validator,c=l.cardinality;e.matches.splice(i++,0,{fn:u?"string"==typeof u?new RegExp(u):new function(){this.test=u}:new RegExp("."),cardinality:c||1,optionality:e.isOptional,newBlockMarker:void 0===n||n.def!==(a.definitionSymbol||t),casing:a.casing,def:a.definitionSymbol||t,placeholder:a.placeholder,mask:t}),n=e.matches[i-1]}e.matches.splice(i++,0,{fn:a.validator?"string"==typeof a.validator?new RegExp(a.validator):new function(){this.test=a.validator}:new RegExp("."),cardinality:a.cardinality,optionality:e.isOptional,newBlockMarker:void 0===n||n.def!==(a.definitionSymbol||t),casing:a.casing,def:a.definitionSymbol||t,placeholder:a.placeholder,mask:t})}else e.matches.splice(i++,0,{fn:null,cardinality:0,optionality:e.isOptional,newBlockMarker:void 0===n||n.def!==t,casing:null,def:w.staticDefinitionSymbol||t,placeholder:void 0!==w.staticDefinitionSymbol?t:void 0,mask:t}),d=!1}function r(e,t){e.isGroup&&(e.isGroup=!1,n(e,w.groupmarker.start,0),!0!==t&&n(e,w.groupmarker.end))}function i(e,t,i,a){0<t.matches.length&&(void 0===a||a)&&r(t.matches[t.matches.length-1]),n(t,e)}function a(){if(0<m.length){if(s=m[m.length-1],i(g,s,0,!s.isAlternator),s.isAlternator){l=m.pop();for(var e=0;e<l.matches.length;e++)l.matches[e].isGroup=!1;0<m.length?(s=m[m.length-1]).matches.push(l):f.matches.push(l)}}else i(g,f)}for(var o,s,l,u,c,p=/(?:[?*+]|\{[0-9\+\*]+(?:,[0-9\+\*]*)?\})|[^.?*+^${[]()|\\]+|./g,d=!1,f=new t,m=[],h=[];k=p.exec(e);)if(g=k[0],d)a();else switch(g.charAt(0)){case w.escapeChar:d=!0;break;case w.optionalmarker.end:case w.groupmarker.end:if(void 0!==(o=m.pop()))if(0<m.length){if((s=m[m.length-1]).matches.push(o),s.isAlternator){l=m.pop();for(var v=0;v<l.matches.length;v++)l.matches[v].isGroup=!1;0<m.length?(s=m[m.length-1]).matches.push(l):f.matches.push(l)}}else f.matches.push(o);else a();break;case w.optionalmarker.start:m.push(new t(!1,!0));break;case w.groupmarker.start:m.push(new t(!0));break;case w.quantifiermarker.start:var g,y,k,x=new t(!1,!1,!0),b=(g=g.replace(/[{}]/g,"")).split(","),P=isNaN(b[0])?b[0]:parseInt(b[0]),S=1===b.length?P:isNaN(b[1])?b[1]:parseInt(b[1]);"*"!==S&&"+"!==S||(P="*"===S?0:1),x.quantifier={min:P,max:S},0<m.length?((k=(y=m[m.length-1].matches).pop()).isGroup||((c=new t(!0)).matches.push(k),k=c),y.push(k),y.push(x)):((k=f.matches.pop()).isGroup||((c=new t(!0)).matches.push(k),k=c),f.matches.push(k),f.matches.push(x));break;case w.alternatormarker:(u=0<m.length?(s=m[m.length-1]).matches.pop():f.matches.pop()).isAlternator?m.push(u):((l=new t(!1,!1,!1,!0)).matches.push(u),m.push(l));break;default:a()}for(;0<m.length;)r(o=m.pop(),!0),f.matches.push(o);return 0<f.matches.length&&(r(u=f.matches[f.matches.length-1]),h.push(f)),w.numericInput&&function e(t){for(var i in t.matches=t.matches.reverse(),t.matches){var a,n=parseInt(i);t.matches[i].isQuantifier&&t.matches[n+1]&&t.matches[n+1].isGroup&&(a=t.matches[i],t.matches.splice(i,1),t.matches.splice(n+1,0,a)),void 0!==t.matches[i].matches?t.matches[i]=e(t.matches[i]):t.matches[i]=((r=t.matches[i])===w.optionalmarker.start?r=w.optionalmarker.end:r===w.optionalmarker.end?r=w.optionalmarker.start:r===w.groupmarker.start?r=w.groupmarker.end:r===w.groupmarker.end&&(r=w.groupmarker.start),r)}var r;return t}(h[0]),h}function e(e,t){var i,a;if(null!==e&&""!==e)return 1===e.length&&!1===w.greedy&&0!==w.repeat&&(w.placeholder=""),(0<w.repeat||"*"===w.repeat||"+"===w.repeat)&&(i="*"===w.repeat?0:"+"===w.repeat?1:w.repeat,e=w.groupmarker.start+e+w.groupmarker.end+w.quantifiermarker.start+i+","+w.repeat+w.quantifiermarker.end),void 0===Me.prototype.masksCache[e]||!0===n?(a={mask:e,maskToken:r(e),validPositions:{},_buffer:void 0,buffer:void 0,tests:{},metadata:t},!0!==n&&(Me.prototype.masksCache[w.numericInput?e.split("").reverse().join(""):e]=a,a=_e.extend(!0,{},Me.prototype.masksCache[w.numericInput?e.split("").reverse().join(""):e]))):a=_e.extend(!0,{},Me.prototype.masksCache[w.numericInput?e.split("").reverse().join(""):e]),a}function i(e){return e.toString()}var t;if(_e.isFunction(w.mask)&&(w.mask=w.mask(w)),_e.isArray(w.mask)){if(1<w.mask.length){w.keepStatic=null===w.keepStatic||w.keepStatic;var a="(";return _e.each(w.numericInput?w.mask.reverse():w.mask,function(e,t){1<a.length&&(a+=")|("),a+=i(void 0===t.mask||_e.isFunction(t.mask)?t:t.mask)}),e(a+=")",w.mask)}w.mask=w.mask.pop()}return w.mask&&(t=void 0===w.mask.mask||_e.isFunction(w.mask.mask)?e(i(w.mask),w.mask):e(i(w.mask.mask),w.mask)),t}function Fe(e,T,C){function i(e,t,i){t=t||0;var a,n,r,o,s=[],l=0,u=R();do{!0===e&&T.validPositions[l]?(r=(n=T.validPositions[l]).match,o=n.locator.slice(),s.push(!0===i?n.input:O(l,r))):(r=(a=j(l,o,l-1)).match,o=a.locator.slice(),(!1===C.jitMasking||l<u||isFinite(C.jitMasking)&&C.jitMasking>l)&&s.push(O(l,r))),l++}while((void 0===$||l-1<$)&&null!==r.fn||null===r.fn&&""!==r.def||l<=t);return""===s[s.length-1]&&s.pop(),s}function E(e){var t=T;!(t.buffer=void 0)!==e&&(t.tests={},t._buffer=void 0,t.validPositions={},t.p=0)}function R(e,t){var i=-1,a=-1,n=T.validPositions;for(var r in void 0===e&&(e=-1),n){var o=parseInt(r);n[o]&&(t||null!==n[o].match.fn)&&(o<=e&&(i=o),e<=o&&(a=o))}return-1!==i&&1<e-i||a<e?i:a}function b(e,t,i){if(C.insertMode&&void 0!==T.validPositions[e]&&void 0===i){for(var a=_e.extend(!0,{},T.validPositions),n=R(),r=e;r<=n;r++)delete T.validPositions[r];T.validPositions[e]=t;var o=!0,s=T.validPositions;for(r=d=e;r<=n;r++){var l=a[r];if(void 0!==l)for(var u=d,c=-1;u<k()&&(null==l.match.fn&&s[r]&&(!0===s[r].match.optionalQuantifier||!0===s[r].match.optionality)||null!=l.match.fn);){if(null===l.match.fn||!C.keepStatic&&s[r]&&(void 0!==s[r+1]&&1<P(r+1,s[r].locator.slice(),r).length||void 0!==s[r].alternation)?u++:u=A(d),f(u,l.match.def)){var p=_(u,l.input,!0,!0),o=!1!==p,d=p.caret||p.insert?R():u;break}if(o=null==l.match.fn,c===u)break;c=u}if(!o)break}if(!o)return T.validPositions=_e.extend(!0,{},a),E(!0),0}else T.validPositions[e]=t;return E(!0),1}function v(e,t,i,a){var n,r=e;for(T.p=e,n=r;n<t;n++)void 0===T.validPositions[n]||!0!==i&&!1===C.canClearPosition(T,n,R(),a,C)||delete T.validPositions[n];for(n=r+1;n<=R();){for(;void 0!==T.validPositions[r];)r++;var o,s=T.validPositions[r];n<r&&(n=r+1),void 0===T.validPositions[n]&&y(n)||void 0!==s?n++:(f(r,(o=j(n)).match.def)?!1!==_(r,o.input||O(n),!0)&&(delete T.validPositions[n],n++):y(n)||(n++,r--),r++)}var l=R(),u=k();for(!0!==a&&!0!==i&&void 0!==T.validPositions[l]&&T.validPositions[l].input===C.radixPoint&&delete T.validPositions[l],n=l+1;n<=u;n++)T.validPositions[n]&&delete T.validPositions[n];E(!0)}function j(e,t,i){var a=T.validPositions[e];if(void 0===a)for(var n=P(e,t,i),r=R(),o=T.validPositions[r]||P(0)[0],s=void 0!==o.alternation?o.locator[o.alternation].toString().split(","):[],l=0;l<n.length&&!((a=n[l]).match&&(C.greedy&&!0!==a.match.optionalQuantifier||(!1===a.match.optionality||!1===a.match.newBlockMarker)&&!0!==a.match.optionalQuantifier)&&(void 0===o.alternation||o.alternation!==a.alternation||void 0!==a.locator[o.alternation]&&g(a.locator[o.alternation].toString().split(","),s)));l++);return a}function c(e){return T.validPositions[e]?T.validPositions[e].match:P(e)[0].match}function f(e,t){for(var i=!1,a=P(e),n=0;n<a.length;n++)if(a[n].match&&a[n].match.def===t){i=!0;break}return i}function N(e,a){var n,r;return(T.tests[e]||T.validPositions[e])&&_e.each(T.tests[e]||[T.validPositions[e]],function(e,t){var i=t.alternation?t.locator[t.alternation].toString().indexOf(a):-1;(void 0===r||i<r)&&-1!==i&&(n=t,r=i)}),n}function P(j,e,t){function _(E,R,e,t){for(var i=0<R.length?R.shift():0;i<E.matches.length;i++)if(!0!==E.matches[i].isQuantifier){var a=function e(t,i,a){function r(i,a){var n=0===_e.inArray(i,a.matches);return n||_e.each(a.matches,function(e,t){return(!0!==t.isQuantifier||!(n=r(i,a.matches[e-1])))&&void 0}),n}if(1e4<F)throw"Inputmask: There is probably an error in your mask definition or in the code. Create an issue on github with an example of the mask you are using. "+T.mask;if(F===j&&void 0===t.matches)return O.push({match:t,locator:i.reverse(),cd:D}),!0;if(void 0!==t.matches){if(t.isGroup&&a!==t){if(t=e(E.matches[_e.inArray(t,E.matches)+1],i))return!0}else if(t.isOptional){var n=t;if(t=_(t,R,i,a)){if(!r(M=O[O.length-1].match,n))return!0;I=!0,F=j}}else if(t.isAlternator){var o,s=t,l=[],u=O.slice(),c=i.length,p=0<R.length?R.shift():-1;if(-1===p||"string"==typeof p){var d=F,f=R.slice(),m=[];if("string"==typeof p)m=p.split(",");else for(g=0;g<s.matches.length;g++)m.push(g);for(var h=0;h<m.length;h++){var v,g=parseInt(m[h]);O=[],C=void 0,C=N(F,g),R=C?C.locator.slice(C.alternation+1):[],!0!==(t=e(s.matches[g]||E.matches[g],[g].concat(i),a)||t)&&void 0!==t&&m[m.length-1]<s.matches.length&&(v=_e.inArray(t,E.matches)+1,E.matches.length>v&&(t=e(E.matches[v],[v].concat(i.slice(1,i.length)),a))&&(m.push(v.toString()),_e.each(O,function(e,t){t.alternation=i.length-1}))),o=O.slice(),F=d,O=[];for(var y=0;y<f.length;y++)R[y]=f[y];for(var k=0;k<o.length;k++){var x=o[k];x.alternation=x.alternation||c;for(var b=0;b<l.length;b++){var P=l[b];if(x.match.def===P.match.def&&("string"!=typeof p||-1!==_e.inArray(x.locator[x.alternation].toString(),m))){x.match.mask===P.match.mask&&(o.splice(k,1),k--),-1===P.locator[x.alternation].toString().indexOf(x.locator[x.alternation])&&(P.locator[x.alternation]=P.locator[x.alternation]+","+x.locator[x.alternation],P.alternation=x.alternation);break}}}l=l.concat(o)}"string"==typeof p&&(l=_e.map(l,function(e,t){if(isFinite(t)){var i=e.alternation,a=e.locator[i].toString().split(",");e.locator[i]=void 0,e.alternation=void 0;for(var n=0;n<a.length;n++)-1!==_e.inArray(a[n],m)&&(void 0!==e.locator[i]?(e.locator[i]+=",",e.locator[i]+=a[n]):e.locator[i]=parseInt(a[n]),e.alternation=i);if(void 0!==e.locator[i])return e}})),O=u.concat(l),F=j,I=0<O.length}else t=e(s.matches[p]||E.matches[p],[p].concat(i),a);if(t)return!0}else if(t.isQuantifier&&a!==E.matches[_e.inArray(t,E.matches)-1])for(var S=t,w=0<R.length?R.shift():0;w<(isNaN(S.quantifier.max)?w+1:S.quantifier.max)&&F<=j;w++){var A=E.matches[_e.inArray(S,E.matches)-1];if(t=e(A,[w].concat(i),A)){if((M=O[O.length-1].match).optionalQuantifier=w>S.quantifier.min-1,r(M,A)){if(w>S.quantifier.min-1){I=!0,F=j;break}return!0}return!0}}else if(t=_(t,R,i,a))return!0}else F++;var C}(E.matches[i],[i].concat(e),t);if(a&&F===j)return a;if(j<F)break}}var M,i,a=T.maskToken,F=e?t:0,n=e||[0],O=[],I=!1,D=e?e.join(""):"";if(-1<j){if(void 0===e){for(var r,o=j-1;void 0===(r=T.validPositions[o]||T.tests[o])&&-1<o;)o--;void 0!==r&&-1<o&&(n=((i=r)[0]||i).locator.slice(),D=n.join(""),r=r[0]||r,F=o)}if(T.tests[j]&&T.tests[j][0].cd===D)return T.tests[j];for(var s=n.shift();s<a.length;s++){if(_(a[s],n,[s])&&F===j||j<F)break}}return 0!==O.length&&!I||O.push({match:{fn:null,cardinality:0,optionality:!0,casing:null,def:""},locator:[]}),T.tests[j]=_e.extend(!0,[],O),T.tests[j]}function p(){return void 0===T._buffer&&(T._buffer=i(!1,1)),T._buffer}function S(e){if(void 0===T.buffer||!0===e){if(!0===e)for(var t in T.tests)void 0===T.validPositions[t]&&delete T.tests[t];T.buffer=i(!0,R(),!0)}return T.buffer}function w(e,t,i){var a;if(!0===e)E(),e=0,t=i.length;else for(a=e;a<t;a++)delete T.validPositions[a],delete T.tests[a];for(a=e;a<t;a++)E(!0),i[a]!==C.skipOptionalPartCharacter&&_(a,i[a],!0,!0)}function g(e,t){for(var i=C.greedy?t:t.slice(0,1),a=!1,n=0;n<e.length;n++)if(-1!==_e.inArray(e[n],i)){a=!0;break}return a}function _(e,t,i,a){function n(p,d,f,m){var h=!1;return _e.each(P(p),function(e,t){for(var i,a=t.match,n=d?1:0,r="",o=a.cardinality;n<o;o--)r+=(i=p-(o-1),void 0===T.validPositions[i]?O(i):T.validPositions[i].input);if(d&&(r+=d),S(!0),!1!==(h=null!=a.fn?a.fn.test(r,T,p,f,C):(d===a.def||d===C.skipOptionalPartCharacter)&&""!==a.def&&{c:a.placeholder||a.def,pos:p})){var s=(s=void 0!==h.c?h.c:d)===C.skipOptionalPartCharacter&&null===a.fn?a.placeholder||a.def:s,l=p,u=S();if(void 0!==h.remove&&(_e.isArray(h.remove)||(h.remove=[h.remove]),_e.each(h.remove.sort(function(e,t){return t-e}),function(e,t){v(t,t+1,!0)})),void 0!==h.insert&&(_e.isArray(h.insert)||(h.insert=[h.insert]),_e.each(h.insert.sort(function(e,t){return e-t}),function(e,t){_(t.pos,t.c,!1,m)})),h.refreshFromBuffer){var c=h.refreshFromBuffer;if(w((f=!0)===c?c:c.start,c.end,u),void 0===h.pos&&void 0===h.c)return h.pos=R(),!1;if((l=void 0!==h.pos?h.pos:p)!==p)return h=_e.extend(h,_(l,s,!0,m)),!1}else if(!0!==h&&void 0!==h.pos&&h.pos!==p&&(l=h.pos,w(p,l,S().slice()),l!==p))return h=_e.extend(h,_(l,s,!0)),!1;return!0!==h&&void 0===h.pos&&void 0===h.c||(0<e&&E(!0),b(l,_e.extend({},t,{input:function(e,t){switch(t.casing){case"upper":e=e.toUpperCase();break;case"lower":e=e.toLowerCase()}return e}(s,a)}),m)||(h=!1)),!1}}),h}i=!0===i;for(var r=S(),o=e-1;-1<o&&!T.validPositions[o];o--);for(o++;o<e;o++)void 0===T.validPositions[o]&&((!y(o)||r[o]!==O(o))&&1<P(o).length||r[o]===C.radixPoint||"0"===r[o]&&_e.inArray(C.radixPoint,r)<o)&&n(o,r[o],!0,a);var s,l,u=e,c=!1,p=_e.extend(!0,{},T.validPositions);if(u<k()&&(c=n(u,t,i,a),(!i||!0===a)&&!1===c)){var d=T.validPositions[u];if(!d||null!==d.match.fn||d.match.def!==t&&t!==C.skipOptionalPartCharacter){if((C.insertMode||void 0===T.validPositions[A(u)])&&!y(u,!0)){var f=j(u).match;n(u,f=f.placeholder||f.def,i,a);for(var m=u+1,h=A(u);m<=h;m++)if(!1!==(c=n(m,t,i,a))){(function(e,t){for(var i,a,n,r=T.validPositions[t].locator,o=r.length,s=e;s<t;s++){void 0!==T.validPositions[s]||y(s,!0)||(i=P(s),a=i[0],n=-1,_e.each(i,function(e,t){for(var i=0;i<o&&void 0!==t.locator[i]&&g(t.locator[i].toString().split(","),r[i].toString().split(","));i++)n<i&&(n=i,a=t)}),b(s,_e.extend({},a,{input:a.match.placeholder||a.match.def}),!0))}})(u,m),u=m;break}}}else c={caret:A(u)}}return!1===c&&C.keepStatic&&(c=function(e,t,i,a){for(var n,r,o,s,l,u,c=_e.extend(!0,{},T.validPositions),p=_e.extend(!0,{},T.tests),d=R();0<=d&&(!(s=T.validPositions[d])||void 0===s.alternation||(n=d,r=T.validPositions[n].alternation,j(n).locator[s.alternation]===s.locator[s.alternation]));d--);if(void 0!==r)for(var f in n=parseInt(n),T.validPositions)if(f=parseInt(f),s=T.validPositions[f],n<=f&&void 0!==s.alternation){0===n?(u=[],_e.each(T.tests[n],function(e,t){void 0!==t.locator[r]&&(u=u.concat(t.locator[r].toString().split(",")))})):u=T.validPositions[n].locator[r].toString().split(",");var m=void 0!==s.locator[r]?s.locator[r]:u[0];0<m.length&&(m=m.split(",")[0]);for(var h=0;h<u.length;h++){var v=[],g=0,y=0;if(m<u[h]){for(var k,x,b=f;0<=b;b--)if(void 0!==(k=T.validPositions[b])){var P=N(b,u[h]);T.validPositions[b].match.def!==P.match.def&&(v.push(T.validPositions[b].input),T.validPositions[b]=P,T.validPositions[b].input=O(b),null===T.validPositions[b].match.fn&&y++,k=P),x=k.locator[r],k.locator[r]=parseInt(u[h]);break}if(m!==k.locator[r]){for(A=f+1;A<R(void 0,!0)+1;A++)(l=T.validPositions[A])&&null!=l.match.fn?v.push(l.input):A<e&&g++,delete T.validPositions[A],delete T.tests[A];for(E(!0),C.keepStatic=!C.keepStatic,o=!0;0<v.length;){var S=v.shift();if(S!==C.skipOptionalPartCharacter&&!(o=_(R(void 0,!0)+1,S,!1,a)))break}if(k.alternation=r,k.locator[r]=x,o){for(var w=R(e)+1,A=f+1;A<R()+1;A++)(void 0===(l=T.validPositions[A])||null==l.match.fn)&&A<e&&y++;o=_(w<(e+=y-g)?w:e,t,i,a)}if(C.keepStatic=!C.keepStatic,o)return o;E(),T.validPositions=_e.extend(!0,{},c),T.tests=_e.extend(!0,{},p)}}}break}return!1}(e,t,i,a)),!0===c&&(c={pos:u}),_e.isFunction(C.postValidation)&&!1!==c&&!i&&!0!==a&&((s=C.postValidation(S(!0),c,C))?s.refreshFromBuffer&&(w(!0===(l=s.refreshFromBuffer)?l:l.start,l.end,s.buffer),E(!0),c=s):(E(!0),T.validPositions=_e.extend(!0,{},p),c=!1)),c}function y(e,t){var i;return t?""==(i=j(e).match).def&&(i=c(e)):i=c(e),null!=i.fn?i.fn:!0!==t&&-1<e&&!C.keepStatic&&void 0===T.validPositions[e]&&2<P(e).length}function k(){-1===($=void 0!==Se?Se.maxLength:void 0)&&($=void 0);for(var e=R(),t=T.validPositions[e],i=void 0!==t?t.locator.slice():void 0,a=e+1;void 0===t||null!==t.match.fn||null===t.match.fn&&""!==t.match.def;a++)i=(t=j(a,i,a-1)).locator.slice();var n=""!==c(a-1).def?a:a-1;return void 0===$||n<$?n:$}function A(e,t){var i=k();if(i<=e)return i;for(var a=e;++a<i&&(!0===t&&(!0!==c(a).newBlockMarker||!y(a))||!0!==t&&!y(a)&&(!0!==C.nojumps||C.nojumpsThreshold>a)););return a}function M(e,t){var i=e;if(i<=0)return 0;for(;0<--i&&(!0===t&&!0!==c(i).newBlockMarker||!0!==t&&!y(i)););return i}function F(e,t,i,a,n){var r,o;a&&_e.isFunction(C.onBeforeWrite)&&((r=C.onBeforeWrite(a,t,i,C))&&(r.refreshFromBuffer&&(w(!0===(o=r.refreshFromBuffer)?o:o.start,o.end,r.buffer||t),t=S(!0)),void 0!==i&&(i=void 0!==r.caret?r.caret:i))),e.inputmask._valueSet(t.join("")),void 0===i||void 0!==a&&"blur"===a.type||I(e,i),!0===n&&(me=!0,_e(e).trigger("input"))}function O(e,t){if(void 0!==(t=t||c(e)).placeholder)return t.placeholder;if(null!==t.fn)return C.placeholder.charAt(e%C.placeholder.length);if(-1<e&&!C.keepStatic&&void 0===T.validPositions[e]){var i,a=P(e),n=0;if(2<a.length)for(var r=0;r<a.length;r++)if(!0!==a[r].match.optionality&&!0!==a[r].match.optionalQuantifier&&(null===a[r].match.fn||void 0===i||!1!==a[r].match.fn.test(i.match.def,T,e,!0,C))&&(n++,null===a[r].match.fn&&(i=a[r]),1<n))return C.placeholder.charAt(e%C.placeholder.length)}return t.def}function d(s,e,l,t){var i,a,n=t.slice(),u="",c=0;E(),T.p=A(-1),l||(!0!==C.autoUnmask?(i=p().slice(0,A(-1)).join(""),(a=n.join("").match(new RegExp("^"+Me.escapeRegex(i),"g")))&&0<a.length&&(n.splice(0,a.length*i.length),c=A(c))):c=A(c)),_e.each(n,function(e,t){var i,a,n,r,o;void 0!==t&&((i=new _e.Event("keypress")).which=t.charCodeAt(0),u+=t,r=j((a=R(void 0,!0))+1,(n=T.validPositions[a])?n.locator.slice():void 0,a),!function(){var e=!1,t=p().slice(c,A(c)).join("").indexOf(u);if(-1!==t&&!y(c)){e=!0;for(var i=p().slice(c,c+t),a=0;a<i.length;a++)if(" "!==i[a]){e=!1;break}}return e}()||l||C.autoUnmask?(o=l?e:null==r.match.fn&&r.match.optionality&&a+1<T.p?a+1:T.p,m.call(s,i,!0,!1,l,o),c=o+1,u=""):m.call(s,i,!0,!1,!0,a+1))}),e&&F(s,S(),document.activeElement===s?A(R(0)):void 0,new _e.Event("checkval"))}function t(e){if(e&&void 0===e.inputmask)return e.value;var t=[],i=T.validPositions;for(var a in i)i[a].match&&null!=i[a].match.fn&&t.push(i[a].input);var n,r=0===t.length?null:(de?t.reverse():t).join("");return null!==r&&(n=(de?S().slice().reverse():S()).join(""),_e.isFunction(C.onUnMask)&&(r=C.onUnMask(n,r,C)||r)),r}function I(e,t,i,a){function n(e){return!0===a||!de||"number"!=typeof e||C.greedy&&""===C.placeholder||(e=S().join("").length-e),e}if("number"!=typeof t)return e.setSelectionRange?(t=e.selectionStart,i=e.selectionEnd):window.getSelection?(o=window.getSelection().getRangeAt(0)).commonAncestorContainer.parentNode!==e&&o.commonAncestorContainer!==e||(t=o.startOffset,i=o.endOffset):document.selection&&document.selection.createRange&&(i=(t=0-(o=document.selection.createRange()).duplicate().moveStart("character",-1e5))+o.text.length),{begin:n(t),end:n(i)};t=n(t),i="number"==typeof(i=n(i))?i:t;var r,o,s,l=parseInt(((e.ownerDocument.defaultView||window).getComputedStyle?(e.ownerDocument.defaultView||window).getComputedStyle(e,null):e.currentStyle).fontSize)*i;e.scrollLeft=l>e.scrollWidth?l:0,Oe||!1!==C.insertMode||t!==i||i++,e.setSelectionRange?(e.selectionStart=t,e.selectionEnd=i):window.getSelection?(o=document.createRange(),void 0!==e.firstChild&&null!==e.firstChild||(r=document.createTextNode(""),e.appendChild(r)),o.setStart(e.firstChild,t<e.inputmask._valueGet().length?t:e.inputmask._valueGet().length),o.setEnd(e.firstChild,i<e.inputmask._valueGet().length?i:e.inputmask._valueGet().length),o.collapse(!0),(s=window.getSelection()).removeAllRanges(),s.addRange(o)):e.createTextRange&&((o=e.createTextRange()).collapse(!0),o.moveEnd("character",i),o.moveStart("character",t),o.select())}function o(e){for(var t,i=S(),a=i.length,n=R(),r={},o=T.validPositions[n],s=void 0!==o?o.locator.slice():void 0,l=n+1;l<i.length;l++)s=(t=j(l,s,l-1)).locator.slice(),r[l]=_e.extend(!0,{},t);var u=o&&void 0!==o.alternation?o.locator[o.alternation]:void 0;for(l=a-1;n<l&&(((t=r[l]).match.optionality||t.match.optionalQuantifier||u&&(u!==r[l].locator[o.alternation]&&null!=t.match.fn||null===t.match.fn&&t.locator[o.alternation]&&g(t.locator[o.alternation].toString().split(","),u.toString().split(","))&&""!==P(l)[0].def))&&i[l]===O(l,t.match));l--)a--;return e?{l:a,def:r[a]?r[a].match:void 0}:a}function n(e){for(var t=o(),i=e.length-1;t<i&&!y(i);i--);return e.splice(t,i+1-t),e}function D(e){if(_e.isFunction(C.isComplete))return C.isComplete(e,C);if("*"!==C.repeat){var t=!1,i=o(!0),a=M(i.l);if(void 0===i.def||i.def.newBlockMarker||i.def.optionality||i.def.optionalQuantifier){t=!0;for(var n=0;n<=a;n++){var r=j(n).match;if(null!==r.fn&&void 0===T.validPositions[n]&&!0!==r.optionality&&!0!==r.optionalQuantifier||null===r.fn&&e[n]!==O(n,r)){t=!1;break}}}return t}}function G(r,e,t,i){var a;(C.numericInput||de)&&(e===Me.keyCode.BACKSPACE?e=Me.keyCode.DELETE:e===Me.keyCode.DELETE&&(e=Me.keyCode.BACKSPACE),de)&&(a=t.end,t.end=t.begin,t.begin=a),e===Me.keyCode.BACKSPACE&&(t.end-t.begin<1||!1===C.insertMode)?(t.begin=M(t.begin),void 0===T.validPositions[t.begin]||T.validPositions[t.begin].input!==C.groupSeparator&&T.validPositions[t.begin].input!==C.radixPoint||t.begin--):e===Me.keyCode.DELETE&&t.begin===t.end&&(t.end=y(t.end)?t.end+1:A(t.end)+1,void 0===T.validPositions[t.begin]||T.validPositions[t.begin].input!==C.groupSeparator&&T.validPositions[t.begin].input!==C.radixPoint||t.end++),v(t.begin,t.end,!1,i),!0!==i&&function(){if(C.keepStatic){E(!0);for(var e=[],t=_e.extend(!0,{},T.validPositions),i=R();0<=i;i--){var a=T.validPositions[i];if(a&&(null!=a.match.fn&&e.push(a.input),delete T.validPositions[i],void 0!==a.alternation&&a.locator[a.alternation]===j(i).locator[a.alternation]))break}if(-1<i)for(;0<e.length;){T.p=A(R());var n=new _e.Event("keypress");n.which=e.pop().charCodeAt(0),m.call(r,n,!0,!1,!1,T.p)}else T.validPositions=_e.extend(!0,{},t)}}();var n=R(t.begin);n<t.begin?(-1===n&&E(),T.p=A(n)):!0!==i&&(T.p=t.begin)}function l(e){var t,i,a,n,r,o=this,s=_e(o),l=e.keyCode,u=I(o);l===Me.keyCode.BACKSPACE||l===Me.keyCode.DELETE||De&&127===l||e.ctrlKey&&88===l&&(i="cut",a=document.createElement("input"),(r=(n="on"+i)in a)||(a.setAttribute(n,"return;"),r="function"==typeof a[n]),a=null,!r)?(e.preventDefault(),88===l&&(W=S().join("")),G(o,l,u),F(o,S(),T.p,e,W!==S().join("")),o.inputmask._valueGet()===p().join("")?s.trigger("cleared"):!0===D(S())&&s.trigger("complete"),C.showTooltip&&(o.title=C.tooltip||T.mask)):l===Me.keyCode.END||l===Me.keyCode.PAGE_DOWN?(e.preventDefault(),t=A(R()),C.insertMode||t!==k()||e.shiftKey||t--,I(o,e.shiftKey?u.begin:t,t,!0)):l===Me.keyCode.HOME&&!e.shiftKey||l===Me.keyCode.PAGE_UP?(e.preventDefault(),I(o,0,e.shiftKey?u.begin:0,!0)):(C.undoOnEscape&&l===Me.keyCode.ESCAPE||90===l&&e.ctrlKey)&&!0!==e.altKey?(d(o,!0,!1,W.split("")),s.trigger("click")):l!==Me.keyCode.INSERT||e.shiftKey||e.ctrlKey?!0===C.tabThrough&&l===Me.keyCode.TAB?(!0===e.shiftKey?(null===c(u.begin).fn&&(u.begin=A(u.begin)),u.end=M(u.begin,!0),u.begin=M(u.end,!0)):(u.begin=A(u.begin,!0),u.end=A(u.begin,!0),u.end<k()&&u.end--),u.begin<k()&&(e.preventDefault(),I(o,u.begin,u.end))):!1!==C.insertMode||e.shiftKey||(l===Me.keyCode.RIGHT?setTimeout(function(){var e=I(o);I(o,e.begin)},0):l===Me.keyCode.LEFT&&setTimeout(function(){var e=I(o);I(o,de?e.begin+1:e.begin-1)},0)):(C.insertMode=!C.insertMode,I(o,C.insertMode||u.begin!==k()?u.begin:u.begin-1)),C.onKeyDown.call(this,e,S(),I(o).begin,C),he=-1!==_e.inArray(l,C.ignorables)}function m(e,t,i,a,n){var r,o,s=this,l=_e(s),u=e.which||e.charCode||e.keyCode;if(!(!0===t||e.ctrlKey&&e.altKey)&&(e.ctrlKey||e.metaKey||he))return u===Me.keyCode.ENTER&&W!==S().join("")&&(W=S().join(""),setTimeout(function(){l.trigger("change")},0)),!0;if(u){46===u&&!1===e.shiftKey&&","===C.radixPoint&&(u=44);var c=t?{begin:n,end:n}:I(s),p=String.fromCharCode(u),d=(r=c.begin,o=c.end,de?1<r-o||r-o==1&&C.insertMode:1<o-r||o-r==1&&C.insertMode);d&&(T.undoPositions=_e.extend(!0,{},T.validPositions),G(s,Me.keyCode.DELETE,c,!0),c.begin=T.p,C.insertMode||(C.insertMode=!C.insertMode,b(c.begin,a),C.insertMode=!C.insertMode),d=!C.multi),T.writeOutBuffer=!0;var f,m,h,v,g,y,k=de&&!d?c.end:c.begin,x=_(k,p,a);if(!1!==x&&(!0!==x&&(k=void 0!==x.pos?x.pos:k,p=void 0!==x.c?x.c:p),E(!0),m=void 0!==x.caret?x.caret:(f=T.validPositions,!C.keepStatic&&(void 0!==f[k+1]&&1<P(k+1,f[k].locator.slice(),k).length||void 0!==f[k].alternation)?k+1:A(k)),T.p=m),!1!==i?(h=this,setTimeout(function(){C.onKeyValidation.call(h,u,x,C)},0),T.writeOutBuffer&&!1!==x?(F(s,v=S(),C.numericInput&&void 0===x.caret?M(m):m,e,!0!==t),!0!==t&&setTimeout(function(){!0===D(v)&&l.trigger("complete")},0)):d&&(T.buffer=void 0,T.validPositions=T.undoPositions)):d&&(T.buffer=void 0,T.validPositions=T.undoPositions),C.showTooltip&&(s.title=C.tooltip||T.mask),t&&_e.isFunction(C.onBeforeWrite)&&(g=C.onBeforeWrite(e,S(),m,C))&&g.refreshFromBuffer&&(w(!0===(y=g.refreshFromBuffer)?y:y.start,y.end,g.buffer),E(!0),g.caret&&(T.p=g.caret)),e.preventDefault(),t)return x}}function a(e){var t=this,i=e.originalEvent||e,a=_e(t),n=t.inputmask._valueGet(!0),r=I(t),o=n.substr(0,r.begin),s=n.substr(r.end,n.length);o===p().slice(0,r.begin).join("")&&(o=""),s===p().slice(r.end).join("")&&(s=""),window.clipboardData&&window.clipboardData.getData?n=o+window.clipboardData.getData("Text")+s:i.clipboardData&&i.clipboardData.getData&&(n=o+i.clipboardData.getData("text/plain")+s);var l=n;if(_e.isFunction(C.onBeforePaste)){if(!1===(l=C.onBeforePaste(n,C)))return e.preventDefault(),!1;l=l||n}return d(t,!1,!1,de?l.split("").reverse():l.toString().split("")),F(t,S(),void 0,e,!0),a.trigger("click"),!0===D(S())&&a.trigger("complete"),!1}function r(e){var t=this,i=t.inputmask._valueGet();if(S().join("")!==i){var a=I(t),i=i.replace(new RegExp("("+Me.escapeRegex(p().join(""))+")*"),"");if(Ie){var n=i.replace(S().join(""),"");if(1===n.length){var r=new _e.Event("keypress");return r.which=n.charCodeAt(0),m.call(t,r,!0,!0,!1,T.validPositions[a.begin-1]?a.begin:a.begin-1),!1}}if(a.begin>i.length&&(I(t,i.length),a=I(t)),S().length-i.length!=1||i.charAt(a.begin)===S()[a.begin]||i.charAt(a.begin+1)===S()[a.begin]||y(a.begin)){for(var o=R()+1,s=S().slice(o).join("");null===i.match(Me.escapeRegex(s)+"$");)s=s.slice(1);d(t,!0,!1,i=(i=i.replace(s,"")).split("")),!0===D(S())&&_e(t).trigger("complete")}else e.keyCode=Me.keyCode.BACKSPACE,l.call(t,e);e.preventDefault()}}function s(e){var t=e.originalEvent||e;W=S().join(""),""===Y||t.data.indexOf(Y)}function u(e){var t=this,i=e.originalEvent||e,a=S().join("");0===i.data.indexOf(Y)&&(E(),T.p=A(-1));for(var n=i.data,r=0;r<n.length;r++){var o=new _e.Event("keypress");o.which=n.charCodeAt(r),m.call(t,o,!(he=fe=!1),!1,!1,T.p)}a!==S().join("")&&setTimeout(function(){var e=T.p;F(t,S(),C.numericInput?M(e):e)},0),Y=i.data}function h(e){}function x(e){var t=this.inputmask._valueGet();d(this,!0,!1,(_e.isFunction(C.onBeforeMask)&&C.onBeforeMask(t,C)||t).split("")),W=S().join(""),(C.clearMaskOnLostFocus||C.clearIncomplete)&&this.inputmask._valueGet()===p().join("")&&this.inputmask._valueSet("")}function B(e){var t=this,i=t.inputmask._valueGet();C.showMaskOnFocus&&(!C.showMaskOnHover||C.showMaskOnHover&&""===i)?t.inputmask._valueGet()!==S().join("")&&F(t,S(),A(R())):!1===ve&&I(t,A(R())),!0===C.positionCaretOnTab&&setTimeout(function(){I(t,A(R()))},0),W=S().join("")}function K(e){var t,i;ve=!1,C.clearMaskOnLostFocus&&document.activeElement!==this&&(t=S().slice(),(i=this.inputmask._valueGet())!==this.getAttribute("placeholder")&&""!==i&&(-1===R()&&i===p().join("")?t=[]:n(t),F(this,t)))}function L(e){var t,i,a,n=this;document.activeElement!==n||(t=I(n)).begin===t.end&&(!function(e){if(C.radixFocus&&""!==C.radixPoint){var t=T.validPositions;if(void 0===t[e]||t[e].input===O(e)){if(e<A(-1))return 1;var i=_e.inArray(C.radixPoint,S());if(-1!==i){for(var a in t)if(i<a&&t[a].input!==O(a))return;return 1}}}}(t.begin)?(i=t.begin)<(a=A(R(i)))?I(n,y(i)||y(i-1)?i:A(i)):(S()[a]===O(a)&&(y(a,!0)||c(a).def!==O(a))||(a=A(a)),I(n,a)):I(n,C.numericInput?A(_e.inArray(C.radixPoint,S())):_e.inArray(C.radixPoint,S())))}function H(e){var t=this;setTimeout(function(){I(t,0,A(R()))},0)}function U(e){var t=this,i=_e(t),a=I(t),n=e.originalEvent||e,r=window.clipboardData||n.clipboardData,o=de?S().slice(a.end,a.begin):S().slice(a.begin,a.end);r.setData("text",de?o.reverse().join(""):o.join("")),document.execCommand&&document.execCommand("copy"),G(t,Me.keyCode.DELETE,a),F(t,S(),T.p,e,W!==S().join("")),t.inputmask._valueGet()===p().join("")&&i.trigger("cleared"),C.showTooltip&&(t.title=C.tooltip||T.mask)}function Q(e){var t,i,a=_e(this);this.inputmask&&(t=this.inputmask._valueGet(),i=S().slice(),W!==i.join("")&&setTimeout(function(){a.trigger("change"),W=i.join("")},0),""!==t&&(C.clearMaskOnLostFocus&&(-1===R()&&t===p().join("")?i=[]:n(i)),!1===D(i)&&(setTimeout(function(){a.trigger("incomplete")},0),C.clearIncomplete&&(E(),i=C.clearMaskOnLostFocus?[]:p().slice())),F(this,i,void 0,e)))}function V(e){ve=!0,document.activeElement!==this&&C.showMaskOnHover&&this.inputmask._valueGet()!==S().join("")&&F(this,S())}function q(e){W!==S().join("")&&we.trigger("change"),C.clearMaskOnLostFocus&&-1===R()&&Se.inputmask._valueGet&&Se.inputmask._valueGet()===p().join("")&&Se.inputmask._valueSet(""),C.removeMaskOnSubmit&&(Se.inputmask._valueSet(Se.inputmask.unmaskedvalue(),!0),setTimeout(function(){F(Se,S())},0))}function z(e){setTimeout(function(){we.trigger("setvalue")},0)}var W,Y,$,Z,J,X,ee,te,ie,ae,ne,re,oe,se,le,ue,ce,pe,de=!1,fe=!1,me=!1,he=!1,ve=!0,ge=!1,ye={on:function(e,t,a){function i(e){if(void 0===this.inputmask&&"FORM"!==this.nodeName){var t=_e.data(this,"_inputmask_opts");t?new Me(t).mask(this):ye.off(this)}else{if("setvalue"===e.type||!(this.disabled||this.readOnly&&!("keydown"===e.type&&e.ctrlKey&&67===e.keyCode||!1===C.tabThrough&&e.keyCode===Me.keyCode.TAB))){switch(e.type){case"input":if(!0===me||!0===ge)return me=ge,e.preventDefault();break;case"keydown":ge=me=fe=!1;break;case"keypress":if(!0===fe)return e.preventDefault();fe=!0;break;case"compositionstart":ge=!0;break;case"compositionupdate":me=!0;break;case"compositionend":ge=!1;break;case"cut":me=!0;break;case"click":if(Ie){var i=this;return setTimeout(function(){a.apply(i,arguments)},0),!1}}return a.apply(this,arguments)}e.preventDefault()}}e.inputmask.events[t]=e.inputmask.events[t]||[],e.inputmask.events[t].push(i),-1!==_e.inArray(t,["submit","reset"])?null!=e.form&&_e(e.form).on(t,i):_e(e).on(t,i)},off:function(a,e){var t;a.inputmask&&a.inputmask.events&&(e?(t=[])[e]=a.inputmask.events[e]:t=a.inputmask.events,_e.each(t,function(e,t){for(;0<t.length;){var i=t.pop();-1!==_e.inArray(e,["submit","reset"])?null!=a.form&&_e(a.form).off(e,i):_e(a).off(e,i)}delete a.inputmask.events[e]}))}};if(void 0!==e)switch(e.action){case"isComplete":return Se=e.el,D(S());case"unmaskedvalue":return void 0!==(Se=e.el)&&void 0!==Se.inputmask?(T=Se.inputmask.maskset,C=Se.inputmask.opts,de=Se.inputmask.isRTL):(Z=e.value,C.numericInput&&(de=!0),Z=(_e.isFunction(C.onBeforeMask)&&C.onBeforeMask(Z,C)||Z).split(""),d(void 0,!1,!1,de?Z.reverse():Z),_e.isFunction(C.onBeforeWrite)&&C.onBeforeWrite(void 0,S(),0,C)),t(Se);case"mask":Se=e.el,T=Se.inputmask.maskset,C=Se.inputmask.opts,de=Se.inputmask.isRTL,W=S().join(""),we=_e(Se=Se),C.showTooltip&&(Se.title=C.tooltip||T.mask),"rtl"!==Se.dir&&!C.rightAlign||(Se.style.textAlign="right"),"rtl"!==Se.dir&&!C.numericInput||(Se.dir="ltr",Se.removeAttribute("dir"),Se.inputmask.isRTL=!0,de=!0),ye.off(Se),(re=Se).inputmask.__valueGet||(Object.getOwnPropertyDescriptor&&void 0===re.value?(oe=function(){return this.textContent},se=function(e){this.textContent=e},Object.defineProperty(re,"value",{get:Re,set:je})):document.__lookupGetter__&&re.__lookupGetter__("value")?(oe=re.__lookupGetter__("value"),se=re.__lookupSetter__("value"),re.__defineGetter__("value",Re),re.__defineSetter__("value",je)):(oe=function(){return re.value},se=function(e){re.value=e},ue=re.type,!_e.valHooks||void 0!==_e.valHooks[ue]&&!0===_e.valHooks[ue].inputmaskpatch||(ce=_e.valHooks[ue]&&_e.valHooks[ue].get?_e.valHooks[ue].get:function(e){return e.value},pe=_e.valHooks[ue]&&_e.valHooks[ue].set?_e.valHooks[ue].set:function(e,t){return e.value=t,e},_e.valHooks[ue]={get:function(e){if(e.inputmask){if(e.inputmask.opts.autoUnmask)return e.inputmask.unmaskedvalue();var t=ce(e),i=e.inputmask.maskset._buffer;return t!==(i=i?i.join(""):"")?t:""}return ce(e)},set:function(e,t){var i=_e(e),a=pe(e,t);return e.inputmask&&i.trigger("setvalue"),a},inputmaskpatch:!0}),le=re,ye.on(le,"mouseenter",function(e){var t=_e(this);this.inputmask._valueGet()!==S().join("")&&0<R()&&t.trigger("setvalue")})),re.inputmask.__valueGet=oe,re.inputmask._valueGet=function(e){return de&&!0!==e?oe.call(this.el).split("").reverse().join(""):oe.call(this.el)},re.inputmask.__valueSet=se,re.inputmask._valueSet=function(e,t){se.call(this.el,null==e?"":!0!==t&&de?e.split("").reverse().join(""):e)}),te=C,ae=(ee=Se).getAttribute("type"),(ne="INPUT"===ee.tagName&&-1!==_e.inArray(ae,te.supportsInputType)||ee.isContentEditable||"TEXTAREA"===ee.tagName)||((ie=document.createElement("input")).setAttribute("type",ae),ne="text"===ie.type,ie=null),ne&&(ye.on(Se,"submit",q),ye.on(Se,"reset",z),ye.on(Se,"mouseenter",V),ye.on(Se,"blur",Q),ye.on(Se,"focus",B),ye.on(Se,"mouseleave",K),ye.on(Se,"click",L),ye.on(Se,"dblclick",H),ye.on(Se,"paste",a),ye.on(Se,"dragdrop",a),ye.on(Se,"drop",a),ye.on(Se,"cut",U),ye.on(Se,"complete",C.oncomplete),ye.on(Se,"incomplete",C.onincomplete),ye.on(Se,"cleared",C.oncleared),ye.on(Se,"keydown",l),ye.on(Se,"keypress",m),ye.on(Se,"input",r),Oe||(ye.on(Se,"compositionstart",s),ye.on(Se,"compositionupdate",u),ye.on(Se,"compositionend",h))),ye.on(Se,"setvalue",x),""===Se.inputmask._valueGet()&&!1!==C.clearMaskOnLostFocus||(J=_e.isFunction(C.onBeforeMask)&&C.onBeforeMask(Se.inputmask._valueGet(),C)||Se.inputmask._valueGet(),d(Se,!0,!1,J.split("")),X=S().slice(),W=X.join(""),!1===D(X)&&C.clearIncomplete&&E(),C.clearMaskOnLostFocus&&(X.join("")===p().join("")?X=[]:n(X)),F(Se,X),document.activeElement===Se&&I(Se,A(R())));break;case"format":return C.numericInput&&(de=!0),Z=(_e.isFunction(C.onBeforeMask)&&C.onBeforeMask(e.value,C)||e.value).split(""),d(void 0,!1,!1,de?Z.reverse():Z),_e.isFunction(C.onBeforeWrite)&&C.onBeforeWrite(void 0,S(),0,C),e.metadata?{value:de?S().slice().reverse().join(""):S().join(""),metadata:Fe({action:"getmetadata"},T,C)}:de?S().slice().reverse().join(""):S().join("");case"isValid":C.numericInput&&(de=!0),e.value?(Z=e.value.split(""),d(void 0,!1,!0,de?Z.reverse():Z)):e.value=S().join("");for(var ke=S(),xe=o(),be=ke.length-1;xe<be&&!y(be);be--);return ke.splice(xe,be+1-xe),D(ke)&&e.value===S().join("");case"getemptymask":return p();case"remove":var Pe,Se=e.el,we=_e(Se);T=Se.inputmask.maskset,C=Se.inputmask.opts,Se.inputmask._valueSet(t(Se)),ye.off(Se),Object.getOwnPropertyDescriptor&&(Pe=Object.getOwnPropertyDescriptor(Se,"value")),Pe&&Pe.get?Se.inputmask.__valueGet&&Object.defineProperty(Se,"value",{get:Se.inputmask.__valueGet,set:Se.inputmask.__valueSet}):document.__lookupGetter__&&Se.__lookupGetter__("value")&&Se.inputmask.__valueGet&&(Se.__defineGetter__("value",Se.inputmask.__valueGet),Se.__defineSetter__("value",Se.inputmask.__valueSet)),Se.inputmask=void 0;break;case"getmetadata":if(_e.isArray(T.metadata)){for(var Ae,Ce=R(),Ee=Ce;0<=Ee;Ee--)if(T.validPositions[Ee]&&void 0!==T.validPositions[Ee].alternation){Ae=T.validPositions[Ee].alternation;break}return void 0!==Ae?T.metadata[T.validPositions[Ce].locator[Ae]]:T.metadata[0]}return T.metadata}function Re(){return this.inputmask?this.inputmask.opts.autoUnmask?this.inputmask.unmaskedvalue():oe.call(this)!==p().join("")?document.activeElement===this&&C.clearMaskOnLostFocus?(de?n(S().slice()).reverse():n(S().slice())).join(""):oe.call(this):"":oe.call(this)}function je(e){se.call(this,e),this.inputmask&&_e(this).trigger("setvalue")}}Me.prototype={defaults:{placeholder:"_",optionalmarker:{start:"[",end:"]"},quantifiermarker:{start:"{",end:"}"},groupmarker:{start:"(",end:")"},alternatormarker:"|",escapeChar:"\\",mask:null,oncomplete:_e.noop,onincomplete:_e.noop,oncleared:_e.noop,repeat:0,greedy:!0,autoUnmask:!1,removeMaskOnSubmit:!1,clearMaskOnLostFocus:!0,insertMode:!0,clearIncomplete:!1,aliases:{},alias:null,onKeyDown:_e.noop,onBeforeMask:null,onBeforePaste:function(e,t){return _e.isFunction(t.onBeforeMask)?t.onBeforeMask(e,t):e},onBeforeWrite:null,onUnMask:null,showMaskOnFocus:!0,showMaskOnHover:!0,onKeyValidation:_e.noop,skipOptionalPartCharacter:" ",showTooltip:!1,tooltip:void 0,numericInput:!1,rightAlign:!1,undoOnEscape:!0,radixPoint:"",groupSeparator:"",radixFocus:!1,nojumps:!1,nojumpsThreshold:0,keepStatic:null,positionCaretOnTab:!1,tabThrough:!1,supportsInputType:["text","tel","password"],definitions:{9:{validator:"[0-9]",cardinality:1,definitionSymbol:"*"},a:{validator:"[A-Za-zА-яЁёÀ-ÿµ]",cardinality:1,definitionSymbol:"*"},"*":{validator:"[0-9A-Za-zА-яЁёÀ-ÿµ]",cardinality:1}},ignorables:[8,9,13,19,27,33,34,35,36,37,38,39,40,45,46,93,112,113,114,115,116,117,118,119,120,121,122,123],isComplete:null,canClearPosition:_e.noop,postValidation:null,staticDefinitionSymbol:void 0,jitMasking:!1},masksCache:{},mask:function(e){var n=this;return"string"==typeof e&&(e=document.getElementById(e)||document.querySelectorAll(e)),e=e.nodeName?[e]:e,_e.each(e,function(e,t){var i=_e.extend(!0,{},n.opts);!function(i,e,a){function t(e,t){null!==(t=void 0!==t?t:i.getAttribute("data-inputmask-"+e))&&("string"==typeof t&&(0===e.indexOf("on")?t=window[t]:"false"===t?t=!1:"true"===t&&(t=!0)),a[e]=t)}var n,r,o,s,l=i.getAttribute("data-inputmask");if(l&&""!==l&&(l=l.replace(new RegExp("'","g"),'"'),r=JSON.parse("{"+l+"}")),r)for(s in o=void 0,r)if("alias"===s.toLowerCase()){o=r[s];break}for(n in t("alias",o),a.alias&&u(a.alias,a,e),e){if(r)for(s in o=void 0,r)if(s.toLowerCase()===n.toLowerCase()){o=r[s];break}t(n,o)}_e.extend(!0,e,a)}(t,i,_e.extend(!0,{},n.userOptions));var a=r(i,n.noMasksCache);void 0!==a&&(void 0!==t.inputmask&&t.inputmask.remove(),t.inputmask=new Me,t.inputmask.opts=i,t.inputmask.noMasksCache=n.noMasksCache,t.inputmask.userOptions=_e.extend(!0,{},n.userOptions),(t.inputmask.el=t).inputmask.maskset=a,t.inputmask.isRTL=!1,_e.data(t,"_inputmask_opts",i),Fe({action:"mask",el:t}))}),e&&e[0]&&e[0].inputmask||this},option:function(e){return"string"==typeof e?this.opts[e]:"object"==typeof e?(_e.extend(this.opts,e),_e.extend(this.userOptions,e),this.el&&(void 0!==e.mask||void 0!==e.alias?this.mask(this.el):(_e.data(this.el,"_inputmask_opts",this.opts),Fe({action:"mask",el:this.el}))),this):void 0},unmaskedvalue:function(e){return Fe({action:"unmaskedvalue",el:this.el,value:e},this.el&&this.el.inputmask?this.el.inputmask.maskset:r(this.opts,this.noMasksCache),this.opts)},remove:function(){return this.el?(Fe({action:"remove",el:this.el}),this.el.inputmask=void 0,this.el):void 0},getemptymask:function(){return Fe({action:"getemptymask"},this.maskset||r(this.opts,this.noMasksCache),this.opts)},hasMaskedValue:function(){return!this.opts.autoUnmask},isComplete:function(){return Fe({action:"isComplete",el:this.el},this.maskset||r(this.opts,this.noMasksCache),this.opts)},getmetadata:function(){return Fe({action:"getmetadata"},this.maskset||r(this.opts,this.noMasksCache),this.opts)},isValid:function(e){return Fe({action:"isValid",value:e},this.maskset||r(this.opts,this.noMasksCache),this.opts)},format:function(e,t){return Fe({action:"format",value:e,metadata:t},this.maskset||r(this.opts,this.noMasksCache),this.opts)}},Me.extendDefaults=function(e){_e.extend(!0,Me.prototype.defaults,e)},Me.extendDefinitions=function(e){_e.extend(!0,Me.prototype.defaults.definitions,e)},Me.extendAliases=function(e){_e.extend(!0,Me.prototype.defaults.aliases,e)},Me.format=function(e,t,i){return Me(t).format(e,i)},Me.unmask=function(e,t){return Me(t).unmaskedvalue(e)},Me.isValid=function(e,t){return Me(t).isValid(e)},Me.remove=function(e){_e.each(e,function(e,t){t.inputmask&&t.inputmask.remove()})},Me.escapeRegex=function(e){return e.replace(new RegExp("(\\"+["/",".","*","+","?","|","(",")","[","]","{","}","\\","$","^"].join("|\\")+")","gim"),"\\$1")},Me.keyCode={ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91};var e=navigator.userAgent,Oe=/mobile/i.test(e),Ie=/iemobile/i.test(e),De=/iphone/i.test(e)&&!Ie;/android.*safari.*/i.test(e),window.Inputmask=Me}(jQuery),function(n,r){void 0===n.fn.inputmask&&(n.fn.inputmask=function(e,t){var i,a=this[0];if(t=t||{},"string"==typeof e)switch(e){case"unmaskedvalue":return a&&a.inputmask?a.inputmask.unmaskedvalue():n(a).val();case"remove":return this.each(function(){this.inputmask&&this.inputmask.remove()});case"getemptymask":return a&&a.inputmask?a.inputmask.getemptymask():"";case"hasMaskedValue":return!(!a||!a.inputmask)&&a.inputmask.hasMaskedValue();case"isComplete":return!a||!a.inputmask||a.inputmask.isComplete();case"getmetadata":return a&&a.inputmask?a.inputmask.getmetadata():void 0;case"setvalue":n(a).val(t),a&&void 0!==a.inputmask&&n(a).triggerHandler("setvalue");break;case"option":if("string"!=typeof t)return this.each(function(){return void 0!==this.inputmask?this.inputmask.option(t):void 0});if(a&&void 0!==a.inputmask)return a.inputmask.option(t);break;default:return t.alias=e,i=new r(t),this.each(function(){i.mask(this)})}else{if("object"==typeof e)return i=new r(e),void 0===e.mask&&void 0===e.alias?this.each(function(){return void 0!==this.inputmask?this.inputmask.option(e):void i.mask(this)}):this.each(function(){i.mask(this)});if(void 0===e)return this.each(function(){(i=new r(t)).mask(this)})}}),n.fn.inputmask}(jQuery,Inputmask),function(o,s){s.extendDefinitions({h:{validator:"[01][0-9]|2[0-3]",cardinality:2,prevalidator:[{validator:"[0-2]",cardinality:1}]},s:{validator:"[0-5][0-9]",cardinality:2,prevalidator:[{validator:"[0-5]",cardinality:1}]},d:{validator:"0[1-9]|[12][0-9]|3[01]",cardinality:2,prevalidator:[{validator:"[0-3]",cardinality:1}]},m:{validator:"0[1-9]|1[012]",cardinality:2,prevalidator:[{validator:"[01]",cardinality:1}]},y:{validator:"(19|20)\\d{2}",cardinality:4,prevalidator:[{validator:"[12]",cardinality:1},{validator:"(19|20)",cardinality:2},{validator:"(19|20)\\d",cardinality:3}]}}),s.extendAliases({"dd/mm/yyyy":{mask:"1/2/y",placeholder:"dd/mm/yyyy",regex:{val1pre:new RegExp("[0-3]"),val1:new RegExp("0[1-9]|[12][0-9]|3[01]"),val2pre:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[1-9]|[12][0-9]|3[01])"+t+"[01])")},val2:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[1-9]|[12][0-9])"+t+"(0[1-9]|1[012]))|(30"+t+"(0[13-9]|1[012]))|(31"+t+"(0[13578]|1[02]))")}},leapday:"29/02/",separator:"/",yearrange:{minyear:1900,maxyear:2099},isInYearRange:function(e,t,i){if(isNaN(e))return!1;var a=parseInt(e.concat(t.toString().slice(e.length))),n=parseInt(e.concat(i.toString().slice(e.length)));return!isNaN(a)&&(t<=a&&a<=i)||!isNaN(n)&&(t<=n&&n<=i)},determinebaseyear:function(e,t,i){var a=(new Date).getFullYear();if(a<e)return e;if(t<a){for(var n=t.toString().slice(0,2),r=t.toString().slice(2,4);t<n+i;)n--;var o=n+r;return o<e?e:o}return a},onKeyDown:function(e,t,i,a){var n,r=o(this);e.ctrlKey&&e.keyCode===s.keyCode.RIGHT&&(n=new Date,r.val(n.getDate().toString()+(n.getMonth()+1).toString()+n.getFullYear().toString()),r.trigger("setvalue"))},getFrontValue:function(e,t,i){for(var a=0,n=0,r=0;r<e.length&&"2"!==e.charAt(r);r++){var o=i.definitions[e.charAt(r)];o?(a+=n,n=o.cardinality):n++}return t.join("").substr(a,n)},definitions:{1:{validator:function(e,t,i,a,n){var r=n.regex.val1.test(e);return a||r||e.charAt(1)!==n.separator&&-1==="-./".indexOf(e.charAt(1))||!(r=n.regex.val1.test("0"+e.charAt(0)))?r:(t.buffer[i-1]="0",{refreshFromBuffer:{start:i-1,end:i},pos:i,c:e.charAt(0)})},cardinality:2,prevalidator:[{validator:function(e,t,i,a,n){var r=e;isNaN(t.buffer[i+1])||(r+=t.buffer[i+1]);var o=1===r.length?n.regex.val1pre.test(r):n.regex.val1.test(r);if(!a&&!o){if(o=n.regex.val1.test(e+"0"))return t.buffer[i]=e,t.buffer[++i]="0",{pos:i,c:"0"};if(o=n.regex.val1.test("0"+e))return t.buffer[i]="0",{pos:++i}}return o},cardinality:1}]},2:{validator:function(e,t,i,a,n){var r=n.getFrontValue(t.mask,t.buffer,n);-1!==r.indexOf(n.placeholder[0])&&(r="01"+n.separator);var o=n.regex.val2(n.separator).test(r+e);if(!a&&!o&&(e.charAt(1)===n.separator||-1!=="-./".indexOf(e.charAt(1)))&&(o=n.regex.val2(n.separator).test(r+"0"+e.charAt(0))))return t.buffer[i-1]="0",{refreshFromBuffer:{start:i-1,end:i},pos:i,c:e.charAt(0)};if(n.mask.indexOf("2")===n.mask.length-1&&o){if(t.buffer.join("").substr(4,4)+e!==n.leapday)return!0;var s=parseInt(t.buffer.join("").substr(0,4),10);return s%4==0&&(s%100!=0||s%400==0)}return o},cardinality:2,prevalidator:[{validator:function(e,t,i,a,n){isNaN(t.buffer[i+1])||(e+=t.buffer[i+1]);var r=n.getFrontValue(t.mask,t.buffer,n);-1!==r.indexOf(n.placeholder[0])&&(r="01"+n.separator);var o=1===e.length?n.regex.val2pre(n.separator).test(r+e):n.regex.val2(n.separator).test(r+e);return a||o||!(o=n.regex.val2(n.separator).test(r+"0"+e))?o:(t.buffer[i]="0",{pos:++i})},cardinality:1}]},y:{validator:function(e,t,i,a,n){if(n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear)){if(t.buffer.join("").substr(0,6)!==n.leapday)return!0;var r=parseInt(e,10);return r%4==0&&(r%100!=0||r%400==0)}return!1},cardinality:4,prevalidator:[{validator:function(e,t,i,a,n){var r=n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear);if(!a&&!r){var o=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e+"0").toString().slice(0,1);if(r=n.isInYearRange(o+e,n.yearrange.minyear,n.yearrange.maxyear))return t.buffer[i++]=o.charAt(0),{pos:i};if(o=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e+"0").toString().slice(0,2),r=n.isInYearRange(o+e,n.yearrange.minyear,n.yearrange.maxyear))return t.buffer[i++]=o.charAt(0),t.buffer[i++]=o.charAt(1),{pos:i}}return r},cardinality:1},{validator:function(e,t,i,a,n){var r=n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear);if(!a&&!r){var o,s=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e).toString().slice(0,2);if(r=n.isInYearRange(e[0]+s[1]+e[1],n.yearrange.minyear,n.yearrange.maxyear))return t.buffer[i++]=s.charAt(1),{pos:i};if(s=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e).toString().slice(0,2),r=!!n.isInYearRange(s+e,n.yearrange.minyear,n.yearrange.maxyear)&&(t.buffer.join("").substr(0,6)!==n.leapday||(o=parseInt(e,10))%4==0&&(o%100!=0||o%400==0)))return t.buffer[i-1]=s.charAt(0),t.buffer[i++]=s.charAt(1),t.buffer[i++]=e.charAt(0),{refreshFromBuffer:{start:i-3,end:i},pos:i}}return r},cardinality:2},{validator:function(e,t,i,a,n){return n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear)},cardinality:3}]}},insertMode:!1,autoUnmask:!1},"mm/dd/yyyy":{placeholder:"mm/dd/yyyy",alias:"dd/mm/yyyy",regex:{val2pre:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[13-9]|1[012])"+t+"[0-3])|(02"+t+"[0-2])")},val2:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+t+"(0[1-9]|[12][0-9]))|((0[13-9]|1[012])"+t+"30)|((0[13578]|1[02])"+t+"31)")},val1pre:new RegExp("[01]"),val1:new RegExp("0[1-9]|1[012]")},leapday:"02/29/",onKeyDown:function(e,t,i,a){var n,r=o(this);e.ctrlKey&&e.keyCode===s.keyCode.RIGHT&&(n=new Date,r.val((n.getMonth()+1).toString()+n.getDate().toString()+n.getFullYear().toString()),r.trigger("setvalue"))}},"yyyy/mm/dd":{mask:"y/1/2",placeholder:"yyyy/mm/dd",alias:"mm/dd/yyyy",leapday:"/02/29",onKeyDown:function(e,t,i,a){var n,r=o(this);e.ctrlKey&&e.keyCode===s.keyCode.RIGHT&&(n=new Date,r.val(n.getFullYear().toString()+(n.getMonth()+1).toString()+n.getDate().toString()),r.trigger("setvalue"))}},"dd.mm.yyyy":{mask:"1.2.y",placeholder:"dd.mm.yyyy",leapday:"29.02.",separator:".",alias:"dd/mm/yyyy"},"dd-mm-yyyy":{mask:"1-2-y",placeholder:"dd-mm-yyyy",leapday:"29-02-",separator:"-",alias:"dd/mm/yyyy"},"mm.dd.yyyy":{mask:"1.2.y",placeholder:"mm.dd.yyyy",leapday:"02.29.",separator:".",alias:"mm/dd/yyyy"},"mm-dd-yyyy":{mask:"1-2-y",placeholder:"mm-dd-yyyy",leapday:"02-29-",separator:"-",alias:"mm/dd/yyyy"},"yyyy.mm.dd":{mask:"y.1.2",placeholder:"yyyy.mm.dd",leapday:".02.29",separator:".",alias:"yyyy/mm/dd"},"yyyy-mm-dd":{mask:"y-1-2",placeholder:"yyyy-mm-dd",leapday:"-02-29",separator:"-",alias:"yyyy/mm/dd"},datetime:{mask:"1/2/y h:s",placeholder:"dd/mm/yyyy hh:mm",alias:"dd/mm/yyyy",regex:{hrspre:new RegExp("[012]"),hrs24:new RegExp("2[0-4]|1[3-9]"),hrs:new RegExp("[01][0-9]|2[0-4]"),ampm:new RegExp("^[a|p|A|P][m|M]"),mspre:new RegExp("[0-5]"),ms:new RegExp("[0-5][0-9]")},timeseparator:":",hourFormat:"24",definitions:{h:{validator:function(e,t,i,a,n){if("24"===n.hourFormat&&24===parseInt(e,10))return t.buffer[i-1]="0",{refreshFromBuffer:{start:i-1,end:i},c:t.buffer[i]="0"};var r=n.regex.hrs.test(e);if(!a&&!r&&(e.charAt(1)===n.timeseparator||-1!=="-.:".indexOf(e.charAt(1)))&&(r=n.regex.hrs.test("0"+e.charAt(0))))return t.buffer[i-1]="0",t.buffer[i]=e.charAt(0),{refreshFromBuffer:{start:++i-2,end:i},pos:i,c:n.timeseparator};if(r&&"24"!==n.hourFormat&&n.regex.hrs24.test(e)){var o=parseInt(e,10);return t.buffer[i+5]=24===o?"a":"p",t.buffer[i+6]="m",(o-=12)<10?(t.buffer[i]=o.toString(),t.buffer[i-1]="0"):(t.buffer[i]=o.toString().charAt(1),t.buffer[i-1]=o.toString().charAt(0)),{refreshFromBuffer:{start:i-1,end:i+6},c:t.buffer[i]}}return r},cardinality:2,prevalidator:[{validator:function(e,t,i,a,n){var r=n.regex.hrspre.test(e);return a||r||!(r=n.regex.hrs.test("0"+e))?r:(t.buffer[i]="0",{pos:++i})},cardinality:1}]},s:{validator:"[0-5][0-9]",cardinality:2,prevalidator:[{validator:function(e,t,i,a,n){var r=n.regex.mspre.test(e);return a||r||!(r=n.regex.ms.test("0"+e))?r:(t.buffer[i]="0",{pos:++i})},cardinality:1}]},t:{validator:function(e,t,i,a,n){return n.regex.ampm.test(e+"m")},casing:"lower",cardinality:1}},insertMode:!1,autoUnmask:!1},datetime12:{mask:"1/2/y h:s t\\m",placeholder:"dd/mm/yyyy hh:mm xm",alias:"datetime",hourFormat:"12"},"mm/dd/yyyy hh:mm xm":{mask:"1/2/y h:s t\\m",placeholder:"mm/dd/yyyy hh:mm xm",alias:"datetime12",regex:{val2pre:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[13-9]|1[012])"+t+"[0-3])|(02"+t+"[0-2])")},val2:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+t+"(0[1-9]|[12][0-9]))|((0[13-9]|1[012])"+t+"30)|((0[13578]|1[02])"+t+"31)")},val1pre:new RegExp("[01]"),val1:new RegExp("0[1-9]|1[012]")},leapday:"02/29/",onKeyDown:function(e,t,i,a){var n,r=o(this);e.ctrlKey&&e.keyCode===s.keyCode.RIGHT&&(n=new Date,r.val((n.getMonth()+1).toString()+n.getDate().toString()+n.getFullYear().toString()),r.trigger("setvalue"))}},"hh:mm t":{mask:"h:s t\\m",placeholder:"hh:mm xm",alias:"datetime",hourFormat:"12"},"h:s t":{mask:"h:s t\\m",placeholder:"hh:mm xm",alias:"datetime",hourFormat:"12"},"hh:mm:ss":{mask:"h:s:s",placeholder:"hh:mm:ss",alias:"datetime",autoUnmask:!1},"hh:mm":{mask:"h:s",placeholder:"hh:mm",alias:"datetime",autoUnmask:!1},date:{alias:"dd/mm/yyyy"},"mm/yyyy":{mask:"1/y",placeholder:"mm/yyyy",leapday:"donotuse",separator:"/",alias:"mm/dd/yyyy"},shamsi:{regex:{val2pre:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+t+"[0-3])")},val2:function(e){var t=s.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+t+"(0[1-9]|[12][0-9]))|((0[1-9]|1[012])"+t+"30)|((0[1-6])"+t+"31)")},val1pre:new RegExp("[01]"),val1:new RegExp("0[1-9]|1[012]")},yearrange:{minyear:1300,maxyear:1499},mask:"y/1/2",leapday:"/12/30",placeholder:"yyyy/mm/dd",alias:"mm/dd/yyyy",clearIncomplete:!0}})}(jQuery,Inputmask),function(e){e.extendDefinitions({A:{validator:"[A-Za-zА-яЁёÀ-ÿµ]",cardinality:1,casing:"upper"},"&":{validator:"[0-9A-Za-zА-яЁёÀ-ÿµ]",cardinality:1,casing:"upper"},"#":{validator:"[0-9A-Fa-f]",cardinality:1,casing:"upper"}}),e.extendAliases({url:{definitions:{i:{validator:".",cardinality:1}},mask:"(\\http://)|(\\http\\s://)|(ftp://)|(ftp\\s://)i{+}",insertMode:!1,autoUnmask:!1},ip:{mask:"i[i[i]].i[i[i]].i[i[i]].i[i[i]]",definitions:{i:{validator:function(e,t,i,a,n){return e=-1<i-1&&"."!==t.buffer[i-1]?(e=t.buffer[i-1]+e,-1<i-2&&"."!==t.buffer[i-2]?t.buffer[i-2]+e:"0"+e):"00"+e,new RegExp("25[0-5]|2[0-4][0-9]|[01][0-9][0-9]").test(e)},cardinality:1}},onUnMask:function(e,t,i){return e}},email:{mask:"*{1,64}[.*{1,64}][.*{1,64}][.*{1,64}]@*{1,64}[.*{2,64}][.*{2,6}][.*{1,2}]",greedy:!1,onBeforePaste:function(e,t){return(e=e.toLowerCase()).replace("mailto:","")},definitions:{"*":{validator:"[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",cardinality:1,casing:"lower"}},onUnMask:function(e,t,i){return e}},mac:{mask:"##:##:##:##:##:##"}})}((jQuery,Inputmask)),function(v,g){g.extendAliases({numeric:{mask:function(a){function e(e){for(var t="",i=0;i<e.length;i++)t+=a.definitions[e.charAt(i)]?"\\"+e.charAt(i):e.charAt(i);return t}var t,i;0!==a.repeat&&isNaN(a.integerDigits)&&(a.integerDigits=a.repeat),a.repeat=0,a.groupSeparator===a.radixPoint&&("."===a.radixPoint?a.groupSeparator=",":","===a.radixPoint?a.groupSeparator=".":a.groupSeparator="")," "===a.groupSeparator&&(a.skipOptionalPartCharacter=void 0),a.autoGroup=a.autoGroup&&""!==a.groupSeparator,a.autoGroup&&("string"==typeof a.groupSize&&isFinite(a.groupSize)&&(a.groupSize=parseInt(a.groupSize)),isFinite(a.integerDigits))&&(t=Math.floor(a.integerDigits/a.groupSize),i=a.integerDigits%a.groupSize,a.integerDigits=parseInt(a.integerDigits)+(0==i?t-1:t),a.integerDigits<1&&(a.integerDigits="*")),1<a.placeholder.length&&(a.placeholder=a.placeholder.charAt(0)),a.radixFocus=a.radixFocus&&""!==a.placeholder&&!0===a.integerOptional,a.definitions[";"]=a.definitions["~"],a.definitions[";"].definitionSymbol="~",1==a.numericInput&&(a.radixFocus=!1,a.digitsOptional=!1,isNaN(a.digits)&&(a.digits=2),a.decimalProtect=!1);var n=e(a.prefix);return n+="[+]",n+=!0===a.integerOptional?"~{1,"+a.integerDigits+"}":"~{"+a.integerDigits+"}",void 0!==a.digits&&(isNaN(a.digits)||0<parseInt(a.digits))&&(n+=a.digitsOptional?"["+(a.decimalProtect?":":a.radixPoint)+";{1,"+a.digits+"}]":(a.decimalProtect?":":a.radixPoint)+";{"+a.digits+"}"),""!==a.negationSymbol.back&&(n+="[-]"),n+=e(a.suffix),a.greedy=!1,n},placeholder:"",greedy:!1,digits:"*",digitsOptional:!0,radixPoint:".",radixFocus:!0,groupSize:3,groupSeparator:"",autoGroup:!1,allowPlus:!0,allowMinus:!0,negationSymbol:{front:"-",back:""},integerDigits:"+",integerOptional:!0,prefix:"",suffix:"",rightAlign:!0,decimalProtect:!0,min:null,max:null,step:1,insertMode:!0,autoUnmask:!1,unmaskAsNumber:!1,postFormat:function(e,t,i,a){!0===a.numericInput&&(e=e.reverse(),isFinite(t)&&(t=e.join("").length-t-1));var n,r,o=!1;e.length>=a.suffix.length&&e.join("").indexOf(a.suffix)===e.length-a.suffix.length&&(e.length=e.length-a.suffix.length,o=!0);var s=!1,l=e[t=t>=e.length?e.length-1:t<a.prefix.length?a.prefix.length:t];if(""===a.groupSeparator||!0!==a.numericInput&&-1!==v.inArray(a.radixPoint,e)&&t>v.inArray(a.radixPoint,e)||new RegExp("["+g.escapeRegex(a.negationSymbol.front)+"+]").test(l)){if(o)for(n=0,r=a.suffix.length;n<r;n++)e.push(a.suffix.charAt(n));return{pos:t}}var u=e.slice();l===a.groupSeparator&&(u.splice(t--,1),l=u[t]),i?l!==a.radixPoint&&(u[t]="?"):u.splice(t,0,"?");var c=p=u.join("");if(0<p.length&&a.autoGroup||i&&-1!==p.indexOf(a.groupSeparator)){var p,d=g.escapeRegex(a.groupSeparator),s=0===p.indexOf(a.groupSeparator),f=(p=p.replace(new RegExp(d,"g"),"")).split(a.radixPoint);if((p=""===a.radixPoint?p:f[0])!==a.prefix+"?0"&&p.length>=a.groupSize+a.prefix.length)for(var m=new RegExp("([-+]?[\\d?]+)([\\d?]{"+a.groupSize+"})");m.test(p);)p=(p=p.replace(m,"$1"+a.groupSeparator+"$2")).replace(a.groupSeparator+a.groupSeparator,a.groupSeparator);""!==a.radixPoint&&1<f.length&&(p+=a.radixPoint+f[1])}for(s=c!==p,e.length=p.length,n=0,r=p.length;n<r;n++)e[n]=p.charAt(n);var h=v.inArray("?",e);if(-1===h&&l===a.radixPoint&&(h=v.inArray(a.radixPoint,e)),i?e[h]=l:e.splice(h,1),!s&&o)for(n=0,r=a.suffix.length;n<r;n++)e.push(a.suffix.charAt(n));return h=a.numericInput&&isFinite(t)?e.join("").length-h-1:h,a.numericInput&&(e=e.reverse(),v.inArray(a.radixPoint,e)<h&&e.join("").length-a.suffix.length!==h&&--h),{pos:h,refreshFromBuffer:s,buffer:e}},onBeforeWrite:function(e,t,i,a){if(e&&("blur"===e.type||"checkval"===e.type)){var n=t.join(""),r=n.replace(a.prefix,"");if(r=(r=r.replace(a.suffix,"")).replace(new RegExp(g.escapeRegex(a.groupSeparator),"g"),""),","===a.radixPoint&&(r=r.replace(g.escapeRegex(a.radixPoint),".")),isFinite(r)&&isFinite(a.min)&&parseFloat(r)<parseFloat(a.min))return v.extend(!0,{refreshFromBuffer:!0,buffer:(a.prefix+a.min).split("")},a.postFormat((a.prefix+a.min).split(""),0,!0,a));if(!0!==a.numericInput){var o=""!==a.radixPoint?t.join("").split(a.radixPoint):[t.join("")],s=o[0].match(a.regex.integerPart(a)),l=2===o.length?o[1].match(a.regex.integerNPart(a)):void 0;if(s){s[0]!==a.negationSymbol.front+"0"&&s[0]!==a.negationSymbol.front&&"+"!==s[0]||void 0!==l&&!l[0].match(/^0+$/)||t.splice(s.index,1);var u=v.inArray(a.radixPoint,t);if(-1!==u){if(isFinite(a.digits)&&!a.digitsOptional){for(var c=1;c<=a.digits;c++)void 0!==t[u+c]&&t[u+c]!==a.placeholder.charAt(0)||(t[u+c]="0");return{refreshFromBuffer:n!==t.join(""),buffer:t}}if(u===t.length-a.suffix.length-1)return t.splice(u,1),{refreshFromBuffer:!0,buffer:t}}}}}if(a.autoGroup){var p=a.postFormat(t,a.numericInput?i:i-1,!0,a);return p.caret=i<=a.prefix.length?p.pos:p.pos+1,p}},regex:{integerPart:function(e){return new RegExp("["+g.escapeRegex(e.negationSymbol.front)+"+]?\\d+")},integerNPart:function(e){return new RegExp("[\\d"+g.escapeRegex(e.groupSeparator)+"]+")}},signHandler:function(e,t,i,a,n){if(!a&&n.allowMinus&&"-"===e||n.allowPlus&&"+"===e){var r=t.buffer.join("").match(n.regex.integerPart(n));if(r&&0<r[0].length)return t.buffer[r.index]===("-"===e?"+":n.negationSymbol.front)?"-"===e?""!==n.negationSymbol.back?{pos:r.index,c:n.negationSymbol.front,remove:r.index,caret:i,insert:{pos:t.buffer.length-n.suffix.length-1,c:n.negationSymbol.back}}:{pos:r.index,c:n.negationSymbol.front,remove:r.index,caret:i}:""!==n.negationSymbol.back?{pos:r.index,c:"+",remove:[r.index,t.buffer.length-n.suffix.length-1],caret:i}:{pos:r.index,c:"+",remove:r.index,caret:i}:t.buffer[r.index]===("-"===e?n.negationSymbol.front:"+")?"-"===e&&""!==n.negationSymbol.back?{remove:[r.index,t.buffer.length-n.suffix.length-1],caret:i-1}:{remove:r.index,caret:i-1}:"-"===e?""!==n.negationSymbol.back?{pos:r.index,c:n.negationSymbol.front,caret:i+1,insert:{pos:t.buffer.length-n.suffix.length,c:n.negationSymbol.back}}:{pos:r.index,c:n.negationSymbol.front,caret:i+1}:{pos:r.index,c:e,caret:i+1}}return!1},radixHandler:function(e,t,i,a,n){if(!a&&(-1!==v.inArray(e,[",","."])&&(e=n.radixPoint),e===n.radixPoint&&void 0!==n.digits&&(isNaN(n.digits)||0<parseInt(n.digits)))){var r=v.inArray(n.radixPoint,t.buffer),o=t.buffer.join("").match(n.regex.integerPart(n));if(-1!==r&&t.validPositions[r])return t.validPositions[r-1]?{caret:r+1}:{pos:o.index,c:o[0],caret:r+1};if(!o||"0"===o[0]&&o.index+1!==i)return t.buffer[o?o.index:i]="0",{pos:(o?o.index:i)+1,c:n.radixPoint}}return!1},leadingZeroHandler:function(e,t,i,a,n){if(!0===n.numericInput){if("0"===t.buffer[t.buffer.length-n.prefix.length-1])return{pos:i,remove:t.buffer.length-n.prefix.length-1}}else{var r=t.buffer.join("").match(n.regex.integerNPart(n)),o=v.inArray(n.radixPoint,t.buffer);if(r&&!a&&(-1===o||i<=o))if(0===r[0].indexOf("0")){i<n.prefix.length&&(i=r.index);var s=v.inArray(n.radixPoint,t._buffer),l=t._buffer&&t.buffer.slice(o).join("")===t._buffer.slice(s).join("")||0===parseInt(t.buffer.slice(o+1).join("")),u=t._buffer&&t.buffer.slice(r.index,o).join("")===t._buffer.slice(n.prefix.length,s).join("")||"0"===t.buffer.slice(r.index,o).join("");if(-1===o||l&&u)return t.buffer.splice(r.index,1),{pos:i=i>r.index?i-1:r.index,remove:r.index};if(r.index+1===i||"0"===e)return t.buffer.splice(r.index,1),{pos:i=r.index,remove:r.index}}else if("0"===e&&i<=r.index&&r[0]!==n.groupSeparator)return!1}return!0},postValidation:function(e,t,i){var a=!0,n=(i.numericInput?e.slice().reverse().join(""):e.join("")).replace(i.prefix,"");return n=(n=n.replace(i.suffix,"")).replace(new RegExp(g.escapeRegex(i.groupSeparator),"g"),""),","===i.radixPoint&&(n=n.replace(g.escapeRegex(i.radixPoint),".")),n=(n=(n=n.replace(new RegExp("^"+g.escapeRegex(i.negationSymbol.front)),"-")).replace(new RegExp(g.escapeRegex(i.negationSymbol.back)+"$"),""))===i.negationSymbol.front?n+"0":n,isFinite(n)&&(null!==i.max&&isFinite(i.max)&&(n=parseFloat(n)>parseFloat(i.max)?i.max:n,a=i.postFormat((i.prefix+n).split(""),0,!0,i)),null!==i.min&&isFinite(i.min)&&(n=parseFloat(n)<parseFloat(i.min)?i.min:n,a=i.postFormat((i.prefix+n).split(""),0,!0,i))),a},definitions:{"~":{validator:function(e,t,i,a,n){var r,o=n.signHandler(e,t,i,a,n);return o||((o=n.radixHandler(e,t,i,a,n))||(!0!==(o=a?new RegExp("[0-9"+g.escapeRegex(n.groupSeparator)+"]").test(e):new RegExp("[0-9]").test(e))||!0!==(o=n.leadingZeroHandler(e,t,i,a,n))))||(o=-1!==(r=v.inArray(n.radixPoint,t.buffer))&&!1===n.digitsOptional&&!0!==n.numericInput&&r<i&&!a?{pos:i,remove:i}:{pos:i}),o},cardinality:1,prevalidator:null},"+":{validator:function(e,t,i,a,n){var r=n.signHandler(e,t,i,a,n);return!r&&(a&&n.allowMinus&&e===n.negationSymbol.front||n.allowMinus&&"-"===e||n.allowPlus&&"+"===e)&&(r="-"!==e||(""!==n.negationSymbol.back?{pos:i,c:"-"===e?n.negationSymbol.front:"+",caret:i+1,insert:{pos:t.buffer.length,c:n.negationSymbol.back}}:{pos:i,c:"-"===e?n.negationSymbol.front:"+",caret:i+1})),r},cardinality:1,prevalidator:null,placeholder:""},"-":{validator:function(e,t,i,a,n){var r=n.signHandler(e,t,i,a,n);return!r&&a&&n.allowMinus&&e===n.negationSymbol.back&&(r=!0),r},cardinality:1,prevalidator:null,placeholder:""},":":{validator:function(e,t,i,a,n){var r,o=n.signHandler(e,t,i,a,n);return o||(r="["+g.escapeRegex(n.radixPoint)+",\\.]",(o=new RegExp(r).test(e))&&t.validPositions[i]&&t.validPositions[i].match.placeholder===n.radixPoint&&(o={caret:i+1})),o?{c:n.radixPoint}:o},cardinality:1,prevalidator:null,placeholder:function(e){return e.radixPoint}}},onUnMask:function(e,t,i){var a=e.replace(i.prefix,"");return a=(a=a.replace(i.suffix,"")).replace(new RegExp(g.escapeRegex(i.groupSeparator),"g"),""),i.unmaskAsNumber?(""!==i.radixPoint&&-1!==a.indexOf(i.radixPoint)&&(a=a.replace(g.escapeRegex.call(this,i.radixPoint),".")),Number(a)):a},isComplete:function(e,t){var i=e.join(""),a=e.slice();if(t.postFormat(a,0,!0,t),a.join("")!==i)return!1;var n=i.replace(t.prefix,"");return n=(n=n.replace(t.suffix,"")).replace(new RegExp(g.escapeRegex(t.groupSeparator),"g"),""),","===t.radixPoint&&(n=n.replace(g.escapeRegex(t.radixPoint),".")),isFinite(n)},onBeforeMask:function(e,t){var i,a,n,r;return e=""!==t.radixPoint&&isFinite(e)?e.toString().replace(".",t.radixPoint):(i=e.match(/,/g),(a=e.match(/\./g))&&i?a.length>i.length?(e=e.replace(/\./g,"")).replace(",",t.radixPoint):i.length>a.length?(e=e.replace(/,/g,"")).replace(".",t.radixPoint):e.indexOf(".")<e.indexOf(",")?e.replace(/\./g,""):e=e.replace(/,/g,""):e.replace(new RegExp(g.escapeRegex(t.groupSeparator),"g"),"")),0===t.digits&&(-1!==e.indexOf(".")?e=e.substring(0,e.indexOf(".")):-1!==e.indexOf(",")&&(e=e.substring(0,e.indexOf(",")))),""!==t.radixPoint&&isFinite(t.digits)&&-1!==e.indexOf(t.radixPoint)&&(n=e.split(t.radixPoint)[1].match(new RegExp("\\d*"))[0],parseInt(t.digits)<n.toString().length&&(r=Math.pow(10,parseInt(t.digits)),e=e.replace(g.escapeRegex(t.radixPoint),"."),e=(e=Math.round(parseFloat(e)*r)/r).toString().replace(".",t.radixPoint))),e.toString()},canClearPosition:function(e,t,i,a,n){var r=e.validPositions[t].input,o=r!==n.radixPoint||null!==e.validPositions[t].match.fn&&!1===n.decimalProtect||isFinite(r)||t===i||r===n.groupSeparator||r===n.negationSymbol.front||r===n.negationSymbol.back;if(o&&isFinite(r)){var s,l=v.inArray(n.radixPoint,e.buffer),u=!1;if(void 0===e.validPositions[l]&&(e.validPositions[l]={input:n.radixPoint},u=!0),!a&&e.buffer){var c=t+1;if(null==(s=e.buffer.join("").substr(0,t).match(n.regex.integerNPart(n)))||0===parseInt(s[0].replace(new RegExp(g.escapeRegex(n.groupSeparator),"g"),"")))for(;e.validPositions[c]&&(e.validPositions[c].input===n.groupSeparator||"0"===e.validPositions[c].input);)delete e.validPositions[c],c++}var p,d,f,m=[];for(var h in e.validPositions)void 0!==e.validPositions[h].input&&m.push(e.validPositions[h].input);u&&delete e.validPositions[l],0<l&&(s=(p=m.join("")).match(n.regex.integerNPart(n)))&&(t<=l?0===s[0].indexOf("0")?o=s.index!==t||"0"===n.placeholder:(d=parseInt(s[0].replace(new RegExp(g.escapeRegex(n.groupSeparator),"g"),"")),f=parseInt(p.split(n.radixPoint)[1]),d<10&&e.validPositions[t]&&("0"!==n.placeholder||0<f)&&(e.validPositions[t].input="0",e.p=n.prefix.length+1,o=!1)):0===s[0].indexOf("0")&&3===p.length&&(o=!(e.validPositions={})))}return o},onKeyDown:function(e,t,i,a){var n=v(this);if(e.ctrlKey)switch(e.keyCode){case g.keyCode.UP:n.val(parseFloat(this.inputmask.unmaskedvalue())+parseInt(a.step)),n.trigger("setvalue");break;case g.keyCode.DOWN:n.val(parseFloat(this.inputmask.unmaskedvalue())-parseInt(a.step)),n.trigger("setvalue")}}},currency:{prefix:"$ ",groupSeparator:",",alias:"numeric",placeholder:"0",autoGroup:!0,digits:2,digitsOptional:!1,clearMaskOnLostFocus:!1},decimal:{alias:"numeric"},integer:{alias:"numeric",digits:0,radixPoint:""},percentage:{alias:"numeric",digits:2,radixPoint:".",placeholder:"0",autoGroup:!1,min:0,max:100,suffix:" %",allowPlus:!1,allowMinus:!1}})}(jQuery,Inputmask),function(e,t){t.extendAliases({phone:{url:"phone-codes/phone-codes.js",countrycode:"",phoneCodeCache:{},mask:function(a){var t;return void 0===a.phoneCodeCache[a.url]&&(t=[],a.definitions["#"]=a.definitions[9],e.ajax({url:a.url,async:!1,type:"get",dataType:"json",success:function(e){t=e},error:function(e,t,i){alert(i+" - "+a.url)}}),a.phoneCodeCache[a.url]=t.sort(function(e,t){return(e.mask||e)<(t.mask||t)?-1:1})),a.phoneCodeCache[a.url]},keepStatic:!1,nojumps:!0,nojumpsThreshold:1,onBeforeMask:function(e,t){var i=e.replace(/^0{1,2}/,"").replace(/[\s]/g,"");return(1<i.indexOf(t.countrycode)||-1===i.indexOf(t.countrycode))&&(i="+"+t.countrycode+i),i}},phonebe:{alias:"phone",url:"phone-codes/phone-be.js",countrycode:"32",nojumpsThreshold:4}})}(jQuery,Inputmask),function(k,e){e.extendAliases({Regex:{mask:"r",greedy:!1,repeat:"*",regex:null,regexTokens:null,tokenizer:/\[\^?]?(?:[^\\\]]+|\\[\S\s]?)*]?|\\(?:0(?:[0-3][0-7]{0,2}|[4-7][0-7]?)?|[1-9][0-9]*|x[0-9A-Fa-f]{2}|u[0-9A-Fa-f]{4}|c[A-Za-z]|[\S\s]?)|\((?:\?[:=!]?)?|(?:[?*+]|\{[0-9]+(?:,[0-9]*)?\})\??|[^.?*+^${[()|\\]+|./g,quantifierFilter:/[0-9]+[^,]/,isComplete:function(e,t){return new RegExp(t.regex).test(e.join(""))},definitions:{r:{validator:function(e,t,i,a,u){function c(e,t){this.matches=[],this.isGroup=e||!1,this.isQuantifier=t||!1,this.quantifier={min:1,max:1},this.repeaterPart=void 0}var v,p,n=t.buffer.slice(),g="",r=!1,y=0;null===u.regexTokens&&function(){var e=new c,t=[];for(u.regexTokens=[];n=u.tokenizer.exec(u.regex);)switch(i=n[0],i.charAt(0)){case"(":t.push(new c(!0));break;case")":p=t.pop(),0<t.length?t[t.length-1].matches.push(p):e.matches.push(p);break;case"{":case"+":case"*":var i,a,n,r=new c(!1,!0),o=(i=i.replace(/[{}]/g,"")).split(","),s=isNaN(o[0])?o[0]:parseInt(o[0]),l=1===o.length?s:isNaN(o[1])?o[1]:parseInt(o[1]);r.quantifier={min:s,max:l},0<t.length?((n=(a=t[t.length-1].matches).pop()).isGroup||((p=new c(!0)).matches.push(n),n=p),a.push(n),a.push(r)):((n=e.matches.pop()).isGroup||((p=new c(!0)).matches.push(n),n=p),e.matches.push(n),e.matches.push(r));break;default:0<t.length?t[t.length-1].matches.push(i):e.matches.push(i)}0<e.matches.length&&u.regexTokens.push(e)}(),n.splice(i,0,e),v=n.join("");for(var o=0;o<u.regexTokens.length;o++){var s=u.regexTokens[o];if(r=function e(t,i){var a=!1;i&&(g+="(",y++);for(var n=0;n<t.matches.length;n++){var r,o=t.matches[n];if(!0===o.isGroup)a=e(o,!0);else if(!0===o.isQuantifier){var s=k.inArray(o,t.matches),l=t.matches[s-1],u=g;if(isNaN(o.quantifier.max)){for(;o.repeaterPart&&o.repeaterPart!==g&&o.repeaterPart.length>g.length&&!(a=e(l,!0)););(a=a||e(l,!0))&&(o.repeaterPart=g),g=u+o.quantifier.max}else{for(var c=0,p=o.quantifier.max-1;c<p&&!(a=e(l,!0));c++);g=u+"{"+o.quantifier.min+","+o.quantifier.max+"}"}}else if(void 0!==o.matches)for(var d=0;d<o.length&&!(a=e(o[d],i));d++);else{if("["==o.charAt(0)){r=g,r+=o;for(var f=0;f<y;f++)r+=")";a=new RegExp("^("+r+")$").test(v)}else for(var m=0,h=o.length;m<h;m++)if("\\"!==o.charAt(m)){for(r=g,r=(r+=o.substr(0,m+1)).replace(/\|$/,""),f=0;f<y;f++)r+=")";if(a=new RegExp("^("+r+")$").test(v))break}g+=o}if(a)break}return i&&(g+=")",y--),a}(s,s.isGroup))break}return r},cardinality:1}}}})}(jQuery,Inputmask);

/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
!function(a,b,c,d){function e(b,c){this.settings=null,this.options=a.extend({},e.Defaults,c),this.$element=a(b),this._handlers={},this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._widths=[],this._invalidated={},this._pipe=[],this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null},this._states={current:{},tags:{initializing:["busy"],animating:["busy"],dragging:["interacting"]}},a.each(["onResize","onThrottledResize"],a.proxy(function(b,c){this._handlers[c]=a.proxy(this[c],this)},this)),a.each(e.Plugins,a.proxy(function(a,b){this._plugins[a.charAt(0).toLowerCase()+a.slice(1)]=new b(this)},this)),a.each(e.Workers,a.proxy(function(b,c){this._pipe.push({filter:c.filter,run:a.proxy(c.run,this)})},this)),this.setup(),this.initialize()}e.Defaults={items:3,loop:!1,center:!1,rewind:!1,checkVisibility:!0,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:b,fallbackEasing:"swing",slideTransition:"",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",refreshClass:"owl-refresh",loadedClass:"owl-loaded",loadingClass:"owl-loading",rtlClass:"owl-rtl",responsiveClass:"owl-responsive",dragClass:"owl-drag",itemClass:"owl-item",stageClass:"owl-stage",stageOuterClass:"owl-stage-outer",grabClass:"owl-grab"},e.Width={Default:"default",Inner:"inner",Outer:"outer"},e.Type={Event:"event",State:"state"},e.Plugins={},e.Workers=[{filter:["width","settings"],run:function(){this._width=this.$element.width()}},{filter:["width","items","settings"],run:function(a){a.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){this.$stage.children(".cloned").remove()}},{filter:["width","items","settings"],run:function(a){var b=this.settings.margin||"",c=!this.settings.autoWidth,d=this.settings.rtl,e={width:"auto","margin-left":d?b:"","margin-right":d?"":b};!c&&this.$stage.children().css(e),a.css=e}},{filter:["width","items","settings"],run:function(a){var b=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,c=null,d=this._items.length,e=!this.settings.autoWidth,f=[];for(a.items={merge:!1,width:b};d--;)c=this._mergers[d],c=this.settings.mergeFit&&Math.min(c,this.settings.items)||c,a.items.merge=c>1||a.items.merge,f[d]=e?b*c:this._items[d].width();this._widths=f}},{filter:["items","settings"],run:function(){var b=[],c=this._items,d=this.settings,e=Math.max(2*d.items,4),f=2*Math.ceil(c.length/2),g=d.loop&&c.length?d.rewind?e:Math.max(e,f):0,h="",i="";for(g/=2;g>0;)b.push(this.normalize(b.length/2,!0)),h+=c[b[b.length-1]][0].outerHTML,b.push(this.normalize(c.length-1-(b.length-1)/2,!0)),i=c[b[b.length-1]][0].outerHTML+i,g-=1;this._clones=b,a(h).addClass("cloned").appendTo(this.$stage),a(i).addClass("cloned").prependTo(this.$stage)}},{filter:["width","items","settings"],run:function(){for(var a=this.settings.rtl?1:-1,b=this._clones.length+this._items.length,c=-1,d=0,e=0,f=[];++c<b;)d=f[c-1]||0,e=this._widths[this.relative(c)]+this.settings.margin,f.push(d+e*a);this._coordinates=f}},{filter:["width","items","settings"],run:function(){var a=this.settings.stagePadding,b=this._coordinates,c={width:Math.ceil(Math.abs(b[b.length-1]))+2*a,"padding-left":a||"","padding-right":a||""};this.$stage.css(c)}},{filter:["width","items","settings"],run:function(a){var b=this._coordinates.length,c=!this.settings.autoWidth,d=this.$stage.children();if(c&&a.items.merge)for(;b--;)a.css.width=this._widths[this.relative(b)],d.eq(b).css(a.css);else c&&(a.css.width=a.items.width,d.css(a.css))}},{filter:["items"],run:function(){this._coordinates.length<1&&this.$stage.removeAttr("style")}},{filter:["width","items","settings"],run:function(a){a.current=a.current?this.$stage.children().index(a.current):0,a.current=Math.max(this.minimum(),Math.min(this.maximum(),a.current)),this.reset(a.current)}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var a,b,c,d,e=this.settings.rtl?1:-1,f=2*this.settings.stagePadding,g=this.coordinates(this.current())+f,h=g+this.width()*e,i=[];for(c=0,d=this._coordinates.length;c<d;c++)a=this._coordinates[c-1]||0,b=Math.abs(this._coordinates[c])+f*e,(this.op(a,"<=",g)&&this.op(a,">",h)||this.op(b,"<",g)&&this.op(b,">",h))&&i.push(c);this.$stage.children(".active").removeClass("active"),this.$stage.children(":eq("+i.join("), :eq(")+")").addClass("active"),this.$stage.children(".center").removeClass("center"),this.settings.center&&this.$stage.children().eq(this.current()).addClass("center")}}],e.prototype.initializeStage=function(){this.$stage=this.$element.find("."+this.settings.stageClass),this.$stage.length||(this.$element.addClass(this.options.loadingClass),this.$stage=a("<"+this.settings.stageElement+">",{class:this.settings.stageClass}).wrap(a("<div/>",{class:this.settings.stageOuterClass})),this.$element.append(this.$stage.parent()))},e.prototype.initializeItems=function(){var b=this.$element.find(".owl-item");if(b.length)return this._items=b.get().map(function(b){return a(b)}),this._mergers=this._items.map(function(){return 1}),void this.refresh();this.replace(this.$element.children().not(this.$stage.parent())),this.isVisible()?this.refresh():this.invalidate("width"),this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)},e.prototype.initialize=function(){if(this.enter("initializing"),this.trigger("initialize"),this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl),this.settings.autoWidth&&!this.is("pre-loading")){var a,b,c;a=this.$element.find("img"),b=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:d,c=this.$element.children(b).width(),a.length&&c<=0&&this.preloadAutoWidthImages(a)}this.initializeStage(),this.initializeItems(),this.registerEventHandlers(),this.leave("initializing"),this.trigger("initialized")},e.prototype.isVisible=function(){return!this.settings.checkVisibility||this.$element.is(":visible")},e.prototype.setup=function(){var b=this.viewport(),c=this.options.responsive,d=-1,e=null;c?(a.each(c,function(a){a<=b&&a>d&&(d=Number(a))}),e=a.extend({},this.options,c[d]),"function"==typeof e.stagePadding&&(e.stagePadding=e.stagePadding()),delete e.responsive,e.responsiveClass&&this.$element.attr("class",this.$element.attr("class").replace(new RegExp("("+this.options.responsiveClass+"-)\\S+\\s","g"),"$1"+d))):e=a.extend({},this.options),this.trigger("change",{property:{name:"settings",value:e}}),this._breakpoint=d,this.settings=e,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}})},e.prototype.optionsLogic=function(){this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},e.prototype.prepare=function(b){var c=this.trigger("prepare",{content:b});return c.data||(c.data=a("<"+this.settings.itemElement+"/>").addClass(this.options.itemClass).append(b)),this.trigger("prepared",{content:c.data}),c.data},e.prototype.update=function(){for(var b=0,c=this._pipe.length,d=a.proxy(function(a){return this[a]},this._invalidated),e={};b<c;)(this._invalidated.all||a.grep(this._pipe[b].filter,d).length>0)&&this._pipe[b].run(e),b++;this._invalidated={},!this.is("valid")&&this.enter("valid")},e.prototype.width=function(a){switch(a=a||e.Width.Default){case e.Width.Inner:case e.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},e.prototype.refresh=function(){this.enter("refreshing"),this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$element.addClass(this.options.refreshClass),this.update(),this.$element.removeClass(this.options.refreshClass),this.leave("refreshing"),this.trigger("refreshed")},e.prototype.onThrottledResize=function(){b.clearTimeout(this.resizeTimer),this.resizeTimer=b.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)},e.prototype.onResize=function(){return!!this._items.length&&(this._width!==this.$element.width()&&(!!this.isVisible()&&(this.enter("resizing"),this.trigger("resize").isDefaultPrevented()?(this.leave("resizing"),!1):(this.invalidate("width"),this.refresh(),this.leave("resizing"),void this.trigger("resized")))))},e.prototype.registerEventHandlers=function(){a.support.transition&&this.$stage.on(a.support.transition.end+".owl.core",a.proxy(this.onTransitionEnd,this)),!1!==this.settings.responsive&&this.on(b,"resize",this._handlers.onThrottledResize),this.settings.mouseDrag&&(this.$element.addClass(this.options.dragClass),this.$stage.on("mousedown.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("dragstart.owl.core selectstart.owl.core",function(){return!1})),this.settings.touchDrag&&(this.$stage.on("touchstart.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("touchcancel.owl.core",a.proxy(this.onDragEnd,this)))},e.prototype.onDragStart=function(b){var d=null;3!==b.which&&(a.support.transform?(d=this.$stage.css("transform").replace(/.*\(|\)| /g,"").split(","),d={x:d[16===d.length?12:4],y:d[16===d.length?13:5]}):(d=this.$stage.position(),d={x:this.settings.rtl?d.left+this.$stage.width()-this.width()+this.settings.margin:d.left,y:d.top}),this.is("animating")&&(a.support.transform?this.animate(d.x):this.$stage.stop(),this.invalidate("position")),this.$element.toggleClass(this.options.grabClass,"mousedown"===b.type),this.speed(0),this._drag.time=(new Date).getTime(),this._drag.target=a(b.target),this._drag.stage.start=d,this._drag.stage.current=d,this._drag.pointer=this.pointer(b),a(c).on("mouseup.owl.core touchend.owl.core",a.proxy(this.onDragEnd,this)),a(c).one("mousemove.owl.core touchmove.owl.core",a.proxy(function(b){var d=this.difference(this._drag.pointer,this.pointer(b));a(c).on("mousemove.owl.core touchmove.owl.core",a.proxy(this.onDragMove,this)),Math.abs(d.x)<Math.abs(d.y)&&this.is("valid")||(b.preventDefault(),this.enter("dragging"),this.trigger("drag"))},this)))},e.prototype.onDragMove=function(a){var b=null,c=null,d=null,e=this.difference(this._drag.pointer,this.pointer(a)),f=this.difference(this._drag.stage.start,e);this.is("dragging")&&(a.preventDefault(),this.settings.loop?(b=this.coordinates(this.minimum()),c=this.coordinates(this.maximum()+1)-b,f.x=((f.x-b)%c+c)%c+b):(b=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum()),c=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum()),d=this.settings.pullDrag?-1*e.x/5:0,f.x=Math.max(Math.min(f.x,b+d),c+d)),this._drag.stage.current=f,this.animate(f.x))},e.prototype.onDragEnd=function(b){var d=this.difference(this._drag.pointer,this.pointer(b)),e=this._drag.stage.current,f=d.x>0^this.settings.rtl?"left":"right";a(c).off(".owl.core"),this.$element.removeClass(this.options.grabClass),(0!==d.x&&this.is("dragging")||!this.is("valid"))&&(this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(this.closest(e.x,0!==d.x?f:this._drag.direction)),this.invalidate("position"),this.update(),this._drag.direction=f,(Math.abs(d.x)>3||(new Date).getTime()-this._drag.time>300)&&this._drag.target.one("click.owl.core",function(){return!1})),this.is("dragging")&&(this.leave("dragging"),this.trigger("dragged"))},e.prototype.closest=function(b,c){var e=-1,f=30,g=this.width(),h=this.coordinates();return this.settings.freeDrag||a.each(h,a.proxy(function(a,i){return"left"===c&&b>i-f&&b<i+f?e=a:"right"===c&&b>i-g-f&&b<i-g+f?e=a+1:this.op(b,"<",i)&&this.op(b,">",h[a+1]!==d?h[a+1]:i-g)&&(e="left"===c?a+1:a),-1===e},this)),this.settings.loop||(this.op(b,">",h[this.minimum()])?e=b=this.minimum():this.op(b,"<",h[this.maximum()])&&(e=b=this.maximum())),e},e.prototype.animate=function(b){var c=this.speed()>0;this.is("animating")&&this.onTransitionEnd(),c&&(this.enter("animating"),this.trigger("translate")),a.support.transform3d&&a.support.transition?this.$stage.css({transform:"translate3d("+b+"px,0px,0px)",transition:this.speed()/1e3+"s"+(this.settings.slideTransition?" "+this.settings.slideTransition:"")}):c?this.$stage.animate({left:b+"px"},this.speed(),this.settings.fallbackEasing,a.proxy(this.onTransitionEnd,this)):this.$stage.css({left:b+"px"})},e.prototype.is=function(a){return this._states.current[a]&&this._states.current[a]>0},e.prototype.current=function(a){if(a===d)return this._current;if(0===this._items.length)return d;if(a=this.normalize(a),this._current!==a){var b=this.trigger("change",{property:{name:"position",value:a}});b.data!==d&&(a=this.normalize(b.data)),this._current=a,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current},e.prototype.invalidate=function(b){return"string"===a.type(b)&&(this._invalidated[b]=!0,this.is("valid")&&this.leave("valid")),a.map(this._invalidated,function(a,b){return b})},e.prototype.reset=function(a){(a=this.normalize(a))!==d&&(this._speed=0,this._current=a,this.suppress(["translate","translated"]),this.animate(this.coordinates(a)),this.release(["translate","translated"]))},e.prototype.normalize=function(a,b){var c=this._items.length,e=b?0:this._clones.length;return!this.isNumeric(a)||c<1?a=d:(a<0||a>=c+e)&&(a=((a-e/2)%c+c)%c+e/2),a},e.prototype.relative=function(a){return a-=this._clones.length/2,this.normalize(a,!0)},e.prototype.maximum=function(a){var b,c,d,e=this.settings,f=this._coordinates.length;if(e.loop)f=this._clones.length/2+this._items.length-1;else if(e.autoWidth||e.merge){if(b=this._items.length)for(c=this._items[--b].width(),d=this.$element.width();b--&&!((c+=this._items[b].width()+this.settings.margin)>d););f=b+1}else f=e.center?this._items.length-1:this._items.length-e.items;return a&&(f-=this._clones.length/2),Math.max(f,0)},e.prototype.minimum=function(a){return a?0:this._clones.length/2},e.prototype.items=function(a){return a===d?this._items.slice():(a=this.normalize(a,!0),this._items[a])},e.prototype.mergers=function(a){return a===d?this._mergers.slice():(a=this.normalize(a,!0),this._mergers[a])},e.prototype.clones=function(b){var c=this._clones.length/2,e=c+this._items.length,f=function(a){return a%2==0?e+a/2:c-(a+1)/2};return b===d?a.map(this._clones,function(a,b){return f(b)}):a.map(this._clones,function(a,c){return a===b?f(c):null})},e.prototype.speed=function(a){return a!==d&&(this._speed=a),this._speed},e.prototype.coordinates=function(b){var c,e=1,f=b-1;return b===d?a.map(this._coordinates,a.proxy(function(a,b){return this.coordinates(b)},this)):(this.settings.center?(this.settings.rtl&&(e=-1,f=b+1),c=this._coordinates[b],c+=(this.width()-c+(this._coordinates[f]||0))/2*e):c=this._coordinates[f]||0,c=Math.ceil(c))},e.prototype.duration=function(a,b,c){return 0===c?0:Math.min(Math.max(Math.abs(b-a),1),6)*Math.abs(c||this.settings.smartSpeed)},e.prototype.to=function(a,b){var c=this.current(),d=null,e=a-this.relative(c),f=(e>0)-(e<0),g=this._items.length,h=this.minimum(),i=this.maximum();this.settings.loop?(!this.settings.rewind&&Math.abs(e)>g/2&&(e+=-1*f*g),a=c+e,(d=((a-h)%g+g)%g+h)!==a&&d-e<=i&&d-e>0&&(c=d-e,a=d,this.reset(c))):this.settings.rewind?(i+=1,a=(a%i+i)%i):a=Math.max(h,Math.min(i,a)),this.speed(this.duration(c,a,b)),this.current(a),this.isVisible()&&this.update()},e.prototype.next=function(a){a=a||!1,this.to(this.relative(this.current())+1,a)},e.prototype.prev=function(a){a=a||!1,this.to(this.relative(this.current())-1,a)},e.prototype.onTransitionEnd=function(a){if(a!==d&&(a.stopPropagation(),(a.target||a.srcElement||a.originalTarget)!==this.$stage.get(0)))return!1;this.leave("animating"),this.trigger("translated")},e.prototype.viewport=function(){var d;return this.options.responsiveBaseElement!==b?d=a(this.options.responsiveBaseElement).width():b.innerWidth?d=b.innerWidth:c.documentElement&&c.documentElement.clientWidth?d=c.documentElement.clientWidth:console.warn("Can not detect viewport width."),d},e.prototype.replace=function(b){this.$stage.empty(),this._items=[],b&&(b=b instanceof jQuery?b:a(b)),this.settings.nestedItemSelector&&(b=b.find("."+this.settings.nestedItemSelector)),b.filter(function(){return 1===this.nodeType}).each(a.proxy(function(a,b){b=this.prepare(b),this.$stage.append(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)},this)),this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},e.prototype.add=function(b,c){var e=this.relative(this._current);c=c===d?this._items.length:this.normalize(c,!0),b=b instanceof jQuery?b:a(b),this.trigger("add",{content:b,position:c}),b=this.prepare(b),0===this._items.length||c===this._items.length?(0===this._items.length&&this.$stage.append(b),0!==this._items.length&&this._items[c-1].after(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)):(this._items[c].before(b),this._items.splice(c,0,b),this._mergers.splice(c,0,1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)),this._items[e]&&this.reset(this._items[e].index()),this.invalidate("items"),this.trigger("added",{content:b,position:c})},e.prototype.remove=function(a){(a=this.normalize(a,!0))!==d&&(this.trigger("remove",{content:this._items[a],position:a}),this._items[a].remove(),this._items.splice(a,1),this._mergers.splice(a,1),this.invalidate("items"),this.trigger("removed",{content:null,position:a}))},e.prototype.preloadAutoWidthImages=function(b){b.each(a.proxy(function(b,c){this.enter("pre-loading"),c=a(c),a(new Image).one("load",a.proxy(function(a){c.attr("src",a.target.src),c.css("opacity",1),this.leave("pre-loading"),!this.is("pre-loading")&&!this.is("initializing")&&this.refresh()},this)).attr("src",c.attr("src")||c.attr("data-src")||c.attr("data-src-retina"))},this))},e.prototype.destroy=function(){this.$element.off(".owl.core"),this.$stage.off(".owl.core"),a(c).off(".owl.core"),!1!==this.settings.responsive&&(b.clearTimeout(this.resizeTimer),this.off(b,"resize",this._handlers.onThrottledResize));for(var d in this._plugins)this._plugins[d].destroy();this.$stage.children(".cloned").remove(),this.$stage.unwrap(),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$stage.remove(),this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class",this.$element.attr("class").replace(new RegExp(this.options.responsiveClass+"-\\S+\\s","g"),"")).removeData("owl.carousel")},e.prototype.op=function(a,b,c){var d=this.settings.rtl;switch(b){case"<":return d?a>c:a<c;case">":return d?a<c:a>c;case">=":return d?a<=c:a>=c;case"<=":return d?a>=c:a<=c}},e.prototype.on=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,d):a.attachEvent&&a.attachEvent("on"+b,c)},e.prototype.off=function(a,b,c,d){a.removeEventListener?a.removeEventListener(b,c,d):a.detachEvent&&a.detachEvent("on"+b,c)},e.prototype.trigger=function(b,c,d,f,g){var h={item:{count:this._items.length,index:this.current()}},i=a.camelCase(a.grep(["on",b,d],function(a){return a}).join("-").toLowerCase()),j=a.Event([b,"owl",d||"carousel"].join(".").toLowerCase(),a.extend({relatedTarget:this},h,c));return this._supress[b]||(a.each(this._plugins,function(a,b){b.onTrigger&&b.onTrigger(j)}),this.register({type:e.Type.Event,name:b}),this.$element.trigger(j),this.settings&&"function"==typeof this.settings[i]&&this.settings[i].call(this,j)),j},e.prototype.enter=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]===d&&(this._states.current[b]=0),this._states.current[b]++},this))},e.prototype.leave=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]--},this))},e.prototype.register=function(b){if(b.type===e.Type.Event){if(a.event.special[b.name]||(a.event.special[b.name]={}),!a.event.special[b.name].owl){var c=a.event.special[b.name]._default;a.event.special[b.name]._default=function(a){return!c||!c.apply||a.namespace&&-1!==a.namespace.indexOf("owl")?a.namespace&&a.namespace.indexOf("owl")>-1:c.apply(this,arguments)},a.event.special[b.name].owl=!0}}else b.type===e.Type.State&&(this._states.tags[b.name]?this._states.tags[b.name]=this._states.tags[b.name].concat(b.tags):this._states.tags[b.name]=b.tags,this._states.tags[b.name]=a.grep(this._states.tags[b.name],a.proxy(function(c,d){return a.inArray(c,this._states.tags[b.name])===d},this)))},e.prototype.suppress=function(b){a.each(b,a.proxy(function(a,b){this._supress[b]=!0},this))},e.prototype.release=function(b){a.each(b,a.proxy(function(a,b){delete this._supress[b]},this))},e.prototype.pointer=function(a){var c={x:null,y:null};return a=a.originalEvent||a||b.event,a=a.touches&&a.touches.length?a.touches[0]:a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:a,a.pageX?(c.x=a.pageX,c.y=a.pageY):(c.x=a.clientX,c.y=a.clientY),c},e.prototype.isNumeric=function(a){return!isNaN(parseFloat(a))},e.prototype.difference=function(a,b){return{x:a.x-b.x,y:a.y-b.y}},a.fn.owlCarousel=function(b){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){var d=a(this),f=d.data("owl.carousel");f||(f=new e(this,"object"==typeof b&&b),d.data("owl.carousel",f),a.each(["next","prev","to","destroy","refresh","replace","add","remove"],function(b,c){f.register({type:e.Type.Event,name:c}),f.$element.on(c+".owl.carousel.core",a.proxy(function(a){a.namespace&&a.relatedTarget!==this&&(this.suppress([c]),f[c].apply(this,[].slice.call(arguments,1)),this.release([c]))},f))})),"string"==typeof b&&"_"!==b.charAt(0)&&f[b].apply(f,c)})},a.fn.owlCarousel.Constructor=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._interval=null,this._visible=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoRefresh&&this.watch()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={autoRefresh:!0,autoRefreshInterval:500},e.prototype.watch=function(){this._interval||(this._visible=this._core.isVisible(),this._interval=b.setInterval(a.proxy(this.refresh,this),this._core.settings.autoRefreshInterval))},e.prototype.refresh=function(){this._core.isVisible()!==this._visible&&(this._visible=!this._visible,this._core.$element.toggleClass("owl-hidden",!this._visible),this._visible&&this._core.invalidate("width")&&this._core.refresh())},e.prototype.destroy=function(){var a,c;b.clearInterval(this._interval);for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoRefresh=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel resized.owl.carousel":a.proxy(function(b){if(b.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(b.property&&"position"==b.property.name||"initialized"==b.type)){var c=this._core.settings,e=c.center&&Math.ceil(c.items/2)||c.items,f=c.center&&-1*e||0,g=(b.property&&b.property.value!==d?b.property.value:this._core.current())+f,h=this._core.clones().length,i=a.proxy(function(a,b){this.load(b)},this);for(c.lazyLoadEager>0&&(e+=c.lazyLoadEager,c.loop&&(g-=c.lazyLoadEager,e++));f++<e;)this.load(h/2+this._core.relative(g)),h&&a.each(this._core.clones(this._core.relative(g)),i),g++}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={lazyLoad:!1,lazyLoadEager:0},e.prototype.load=function(c){var d=this._core.$stage.children().eq(c),e=d&&d.find(".owl-lazy");!e||a.inArray(d.get(0),this._loaded)>-1||(e.each(a.proxy(function(c,d){var e,f=a(d),g=b.devicePixelRatio>1&&f.attr("data-src-retina")||f.attr("data-src")||f.attr("data-srcset");this._core.trigger("load",{element:f,url:g},"lazy"),f.is("img")?f.one("load.owl.lazy",a.proxy(function(){f.css("opacity",1),this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("src",g):f.is("source")?f.one("load.owl.lazy",a.proxy(function(){this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("srcset",g):(e=new Image,e.onload=a.proxy(function(){f.css({"background-image":'url("'+g+'")',opacity:"1"}),this._core.trigger("loaded",{element:f,url:g},"lazy")},this),e.src=g)},this)),this._loaded.push(d.get(0)))},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this._core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Lazy=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(c){this._core=c,this._previousHeight=null,this._handlers={"initialized.owl.carousel refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&"position"===a.property.name&&this.update()},this),"loaded.owl.lazy":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&a.element.closest("."+this._core.settings.itemClass).index()===this._core.current()&&this.update()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._intervalId=null;var d=this;a(b).on("load",function(){d._core.settings.autoHeight&&d.update()}),a(b).resize(function(){d._core.settings.autoHeight&&(null!=d._intervalId&&clearTimeout(d._intervalId),d._intervalId=setTimeout(function(){d.update()},250))})};e.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},e.prototype.update=function(){var b=this._core._current,c=b+this._core.settings.items,d=this._core.settings.lazyLoad,e=this._core.$stage.children().toArray().slice(b,c),f=[],g=0;a.each(e,function(b,c){f.push(a(c).height())}),g=Math.max.apply(null,f),g<=1&&d&&this._previousHeight&&(g=this._previousHeight),this._previousHeight=g,this._core.$stage.parent().height(g).addClass(this._core.settings.autoHeightClass)},e.prototype.destroy=function(){var a,b;for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoHeight=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._videos={},this._playing=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.register({type:"state",name:"playing",tags:["interacting"]})},this),"resize.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.video&&this.isInFullScreen()&&a.preventDefault()},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.is("resizing")&&this._core.$stage.find(".cloned .owl-video-frame").remove()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"===a.property.name&&this._playing&&this.stop()},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find(".owl-video");c.length&&(c.css("display","none"),this.fetch(c,a(b.content)))}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",a.proxy(function(a){this.play(a)},this))};e.Defaults={video:!1,videoHeight:!1,videoWidth:!1},e.prototype.fetch=function(a,b){var c=function(){return a.attr("data-vimeo-id")?"vimeo":a.attr("data-vzaar-id")?"vzaar":"youtube"}(),d=a.attr("data-vimeo-id")||a.attr("data-youtube-id")||a.attr("data-vzaar-id"),e=a.attr("data-width")||this._core.settings.videoWidth,f=a.attr("data-height")||this._core.settings.videoHeight,g=a.attr("href");if(!g)throw new Error("Missing video URL.");if(d=g.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/),d[3].indexOf("youtu")>-1)c="youtube";else if(d[3].indexOf("vimeo")>-1)c="vimeo";else{if(!(d[3].indexOf("vzaar")>-1))throw new Error("Video URL not supported.");c="vzaar"}d=d[6],this._videos[g]={type:c,id:d,width:e,height:f},b.attr("data-video",g),this.thumbnail(a,this._videos[g])},e.prototype.thumbnail=function(b,c){var d,e,f,g=c.width&&c.height?"width:"+c.width+"px;height:"+c.height+"px;":"",h=b.find("img"),i="src",j="",k=this._core.settings,l=function(c){e='<div class="owl-video-play-icon"></div>',d=k.lazyLoad?a("<div/>",{class:"owl-video-tn "+j,srcType:c}):a("<div/>",{class:"owl-video-tn",style:"opacity:1;background-image:url("+c+")"}),b.after(d),b.after(e)};if(b.wrap(a("<div/>",{class:"owl-video-wrapper",style:g})),this._core.settings.lazyLoad&&(i="data-src",j="owl-lazy"),h.length)return l(h.attr(i)),h.remove(),!1;"youtube"===c.type?(f="//img.youtube.com/vi/"+c.id+"/hqdefault.jpg",l(f)):"vimeo"===c.type?a.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a[0].thumbnail_large,l(f)}}):"vzaar"===c.type&&a.ajax({type:"GET",url:"//vzaar.com/api/videos/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a.framegrab_url,l(f)}})},e.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null,this._core.leave("playing"),this._core.trigger("stopped",null,"video")},e.prototype.play=function(b){var c,d=a(b.target),e=d.closest("."+this._core.settings.itemClass),f=this._videos[e.attr("data-video")],g=f.width||"100%",h=f.height||this._core.$stage.height();this._playing||(this._core.enter("playing"),this._core.trigger("play",null,"video"),e=this._core.items(this._core.relative(e.index())),this._core.reset(e.index()),c=a('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>'),c.attr("height",h),c.attr("width",g),"youtube"===f.type?c.attr("src","//www.youtube.com/embed/"+f.id+"?autoplay=1&rel=0&v="+f.id):"vimeo"===f.type?c.attr("src","//player.vimeo.com/video/"+f.id+"?autoplay=1"):"vzaar"===f.type&&c.attr("src","//view.vzaar.com/"+f.id+"/player?autoplay=true"),a(c).wrap('<div class="owl-video-frame" />').insertAfter(e.find(".owl-video")),this._playing=e.addClass("owl-video-playing"))},e.prototype.isInFullScreen=function(){var b=c.fullscreenElement||c.mozFullScreenElement||c.webkitFullscreenElement;return b&&a(b).parent().hasClass("owl-video-frame")},e.prototype.destroy=function(){var a,b;this._core.$element.off("click.owl.video");for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Video=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this.core=b,this.core.options=a.extend({},e.Defaults,this.core.options),this.swapping=!0,this.previous=d,this.next=d,this.handlers={"change.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&(this.previous=this.core.current(),this.next=a.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":a.proxy(function(a){a.namespace&&(this.swapping="translated"==a.type)},this),"translate.owl.carousel":a.proxy(function(a){a.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};e.Defaults={animateOut:!1,
animateIn:!1},e.prototype.swap=function(){if(1===this.core.settings.items&&a.support.animation&&a.support.transition){this.core.speed(0);var b,c=a.proxy(this.clear,this),d=this.core.$stage.children().eq(this.previous),e=this.core.$stage.children().eq(this.next),f=this.core.settings.animateIn,g=this.core.settings.animateOut;this.core.current()!==this.previous&&(g&&(b=this.core.coordinates(this.previous)-this.core.coordinates(this.next),d.one(a.support.animation.end,c).css({left:b+"px"}).addClass("animated owl-animated-out").addClass(g)),f&&e.one(a.support.animation.end,c).addClass("animated owl-animated-in").addClass(f))}},e.prototype.clear=function(b){a(b.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.onTransitionEnd()},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this.core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Animate=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._call=null,this._time=0,this._timeout=0,this._paused=!0,this._handlers={"changed.owl.carousel":a.proxy(function(a){a.namespace&&"settings"===a.property.name?this._core.settings.autoplay?this.play():this.stop():a.namespace&&"position"===a.property.name&&this._paused&&(this._time=0)},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoplay&&this.play()},this),"play.owl.autoplay":a.proxy(function(a,b,c){a.namespace&&this.play(b,c)},this),"stop.owl.autoplay":a.proxy(function(a){a.namespace&&this.stop()},this),"mouseover.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"mouseleave.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.play()},this),"touchstart.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"touchend.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this.play()},this)},this._core.$element.on(this._handlers),this._core.options=a.extend({},e.Defaults,this._core.options)};e.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},e.prototype._next=function(d){this._call=b.setTimeout(a.proxy(this._next,this,d),this._timeout*(Math.round(this.read()/this._timeout)+1)-this.read()),this._core.is("interacting")||c.hidden||this._core.next(d||this._core.settings.autoplaySpeed)},e.prototype.read=function(){return(new Date).getTime()-this._time},e.prototype.play=function(c,d){var e;this._core.is("rotating")||this._core.enter("rotating"),c=c||this._core.settings.autoplayTimeout,e=Math.min(this._time%(this._timeout||c),c),this._paused?(this._time=this.read(),this._paused=!1):b.clearTimeout(this._call),this._time+=this.read()%c-e,this._timeout=c,this._call=b.setTimeout(a.proxy(this._next,this,d),c-e)},e.prototype.stop=function(){this._core.is("rotating")&&(this._time=0,this._paused=!0,b.clearTimeout(this._call),this._core.leave("rotating"))},e.prototype.pause=function(){this._core.is("rotating")&&!this._paused&&(this._time=this.read(),this._paused=!0,b.clearTimeout(this._call))},e.prototype.destroy=function(){var a,b;this.stop();for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.autoplay=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(b){this._core=b,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":a.proxy(function(b){b.namespace&&this._core.settings.dotsData&&this._templates.push('<div class="'+this._core.settings.dotClass+'">'+a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot")+"</div>")},this),"added.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,0,this._templates.pop())},this),"remove.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,1)},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&this.draw()},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&!this._initialized&&(this._core.trigger("initialize",null,"navigation"),this.initialize(),this.update(),this.draw(),this._initialized=!0,this._core.trigger("initialized",null,"navigation"))},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._initialized&&(this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation"))},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers)};e.Defaults={nav:!1,navText:['<span aria-label="Previous">&#x2039;</span>','<span aria-label="Next">&#x203a;</span>'],navSpeed:!1,navElement:'button type="button" role="presentation"',navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1},e.prototype.initialize=function(){var b,c=this._core.settings;this._controls.$relative=(c.navContainer?a(c.navContainer):a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled"),this._controls.$previous=a("<"+c.navElement+">").addClass(c.navClass[0]).html(c.navText[0]).prependTo(this._controls.$relative).on("click",a.proxy(function(a){this.prev(c.navSpeed)},this)),this._controls.$next=a("<"+c.navElement+">").addClass(c.navClass[1]).html(c.navText[1]).appendTo(this._controls.$relative).on("click",a.proxy(function(a){this.next(c.navSpeed)},this)),c.dotsData||(this._templates=[a('<button role="button">').addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]),this._controls.$absolute=(c.dotsContainer?a(c.dotsContainer):a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled"),this._controls.$absolute.on("click","button",a.proxy(function(b){var d=a(b.target).parent().is(this._controls.$absolute)?a(b.target).index():a(b.target).parent().index();b.preventDefault(),this.to(d,c.dotsSpeed)},this));for(b in this._overrides)this._core[b]=a.proxy(this[b],this)},e.prototype.destroy=function(){var a,b,c,d,e;e=this._core.settings;for(a in this._handlers)this.$element.off(a,this._handlers[a]);for(b in this._controls)"$relative"===b&&e.navContainer?this._controls[b].html(""):this._controls[b].remove();for(d in this.overides)this._core[d]=this._overrides[d];for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},e.prototype.update=function(){var a,b,c,d=this._core.clones().length/2,e=d+this._core.items().length,f=this._core.maximum(!0),g=this._core.settings,h=g.center||g.autoWidth||g.dotsData?1:g.dotsEach||g.items;if("page"!==g.slideBy&&(g.slideBy=Math.min(g.slideBy,g.items)),g.dots||"page"==g.slideBy)for(this._pages=[],a=d,b=0,c=0;a<e;a++){if(b>=h||0===b){if(this._pages.push({start:Math.min(f,a-d),end:a-d+h-1}),Math.min(f,a-d)===f)break;b=0,++c}b+=this._core.mergers(this._core.relative(a))}},e.prototype.draw=function(){var b,c=this._core.settings,d=this._core.items().length<=c.items,e=this._core.relative(this._core.current()),f=c.loop||c.rewind;this._controls.$relative.toggleClass("disabled",!c.nav||d),c.nav&&(this._controls.$previous.toggleClass("disabled",!f&&e<=this._core.minimum(!0)),this._controls.$next.toggleClass("disabled",!f&&e>=this._core.maximum(!0))),this._controls.$absolute.toggleClass("disabled",!c.dots||d),c.dots&&(b=this._pages.length-this._controls.$absolute.children().length,c.dotsData&&0!==b?this._controls.$absolute.html(this._templates.join("")):b>0?this._controls.$absolute.append(new Array(b+1).join(this._templates[0])):b<0&&this._controls.$absolute.children().slice(b).remove(),this._controls.$absolute.find(".active").removeClass("active"),this._controls.$absolute.children().eq(a.inArray(this.current(),this._pages)).addClass("active"))},e.prototype.onTrigger=function(b){var c=this._core.settings;b.page={index:a.inArray(this.current(),this._pages),count:this._pages.length,size:c&&(c.center||c.autoWidth||c.dotsData?1:c.dotsEach||c.items)}},e.prototype.current=function(){var b=this._core.relative(this._core.current());return a.grep(this._pages,a.proxy(function(a,c){return a.start<=b&&a.end>=b},this)).pop()},e.prototype.getPosition=function(b){var c,d,e=this._core.settings;return"page"==e.slideBy?(c=a.inArray(this.current(),this._pages),d=this._pages.length,b?++c:--c,c=this._pages[(c%d+d)%d].start):(c=this._core.relative(this._core.current()),d=this._core.items().length,b?c+=e.slideBy:c-=e.slideBy),c},e.prototype.next=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!0),b)},e.prototype.prev=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!1),b)},e.prototype.to=function(b,c,d){var e;!d&&this._pages.length?(e=this._pages.length,a.proxy(this._overrides.to,this._core)(this._pages[(b%e+e)%e].start,c)):a.proxy(this._overrides.to,this._core)(b,c)},a.fn.owlCarousel.Constructor.Plugins.Navigation=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(c){this._core=c,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":a.proxy(function(c){c.namespace&&"URLHash"===this._core.settings.startPosition&&a(b).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");if(!c)return;this._hashes[c]=b.content}},this),"changed.owl.carousel":a.proxy(function(c){if(c.namespace&&"position"===c.property.name){var d=this._core.items(this._core.relative(this._core.current())),e=a.map(this._hashes,function(a,b){return a===d?b:null}).join();if(!e||b.location.hash.slice(1)===e)return;b.location.hash=e}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers),a(b).on("hashchange.owl.navigation",a.proxy(function(a){var c=b.location.hash.substring(1),e=this._core.$stage.children(),f=this._hashes[c]&&e.index(this._hashes[c]);f!==d&&f!==this._core.current()&&this._core.to(this._core.relative(f),!1,!0)},this))};e.Defaults={URLhashListener:!1},e.prototype.destroy=function(){var c,d;a(b).off("hashchange.owl.navigation");for(c in this._handlers)this._core.$element.off(c,this._handlers[c]);for(d in Object.getOwnPropertyNames(this))"function"!=typeof this[d]&&(this[d]=null)},a.fn.owlCarousel.Constructor.Plugins.Hash=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){function e(b,c){var e=!1,f=b.charAt(0).toUpperCase()+b.slice(1);return a.each((b+" "+h.join(f+" ")+f).split(" "),function(a,b){if(g[b]!==d)return e=!c||b,!1}),e}function f(a){return e(a,!0)}var g=a("<support>").get(0).style,h="Webkit Moz O ms".split(" "),i={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},j={csstransforms:function(){return!!e("transform")},csstransforms3d:function(){return!!e("perspective")},csstransitions:function(){return!!e("transition")},cssanimations:function(){return!!e("animation")}};j.csstransitions()&&(a.support.transition=new String(f("transition")),a.support.transition.end=i.transition.end[a.support.transition]),j.cssanimations()&&(a.support.animation=new String(f("animation")),a.support.animation.end=i.animation.end[a.support.animation]),j.csstransforms()&&(a.support.transform=new String(f("transform")),a.support.transform3d=j.csstransforms3d())}(window.Zepto||window.jQuery,window,document);



var allTovar = [
  {picture:"page_B260.1.jpg", name:"Бизиборд Большая развивайка", count:3, comment:""},
  {picture:"page_DK59.1.jpg", name:"Кубики зайцева собранные (методики н. зайцева)", count:5, comment:""},
  {picture:"page_B535.1.jpg", name:"Бизидом «я умею» 30х30х40 см", count:10, comment:""},
  {picture:"mpuzl.jpg", name:"Конструктор Магникон МК-68 «Электропоезд»", count:15, comment:""},
  {picture:"page_Kd60.1.jpg", name:"Вундеркинд с пеленок Мегачемодан", count:20, comment:""},
  {picture:"page_MI10.1.jpg", name:"Детское пианино с микрофоном и стульчиком", count:25, comment:""},
  {picture:"page_KOV32.1.jpg", name:"Коврик-пазл ортопедический Микс Универсальный", count:30, comment:""},
  {picture:"page_Sor06.1.jpg", name:"Деревянный сортер Веселые фигурки", count:50, comment:""},
  {picture:"page_Kk01.1.jpg", name:"Конструктор - каталка 'Паровозик' 7 деталей", count:75, comment:""},
  {picture:"page_DK98.1.jpg", name:"КОНСТРУКТОР ГОРОД МАСТЕРОВ СМЕШАРИКИ ", count:120, comment:""},
  {picture:"page_DK48.1.jpg", name:"Музыкальная книга Бременские музыканты", count:250, comment:""},
  {picture:"page_2000.jpg", name:"Вы можете оплатить до 20% от стоимости следующей покупки", count:500, comment:"2000 р."},
  {picture:"page_1000.jpg", name:"Вы можете оплатить до 20% от стоимости следующей покупки", count:1000, comment:"1000 р."},
  {picture:"page_500.jpg", name:"Вы можете оплатить до 20% от стоимости следующей покупки", count:2000, comment:"500 р."},
  {picture:"nakl.jpg", name:"Сказки с наклейками", count:2500, comment:""},
  {picture:"page_r.jpg", name:"Раскраски на выбор", count:13000, comment:""},
  {picture:"puziri.jpg", name:"Мыльные пузыри", count:10400, comment:""}
];

		
var allTovar1 = [
	{picture:"rsmalish.jpg", name:"Раскраска малышарики"},
	{picture:"rsmmm.jpg", name:"Раскраска мимишки"},
	{picture:"rsazb.jpg", name:"Раскраска азбука сказок"},
	{picture:"paravoz.jpg", name:"Каталка паровозик"},
	{picture:"20dost.jpg", name:"Скидка 20% на доставку"},
	{picture:"doskales.jpg", name:"Доска-Вкладыш - Лес"},
	{picture:"mk14.jpg", name:"МК-14 Старт"},
	{picture:"piramidka.jpg", name:"Пирамидка медвежонок"},
	{picture:"azbuka.jpg", name:"Азбука Жуковой"},
	{picture:"100r.jpg", name:"Вы можете оплатить до 20% стоимости заказа"},
	{picture:"300r.jpg", name:"Вы можете оплатить до 20% стоимости заказа"},
	{picture:"500r.jpg", name:"Вы можете оплатить до 20% стоимости заказа"},

];

var allTovar2 = [
	{index:0,picture:"mpuzl.jpg", name:"Мягкий пазл"},
	{index:1,picture:"500r.jpg", name:"Вы можете оплатить до 20% стоимости заказа"},
	{index:2,picture:"1000r.jpg", name:"Вы можете оплатить до 20% стоимости заказа"},
	{index:3,picture:"2000r.jpg", name:"Вы можете оплатить до 20% стоимости заказа"},
	{index:4,picture:"30d.jpg", name:"Скидка 33% на доставку"},
	{index:5,picture:"freed.jpg", name:"Бесплатная доставка"},
	{index:6,picture:"mslon.jpg", name:"Бизиборд мятный слоник"},
	{index:7,picture:"sstol.jpg", name:"Столярный стол, 44 элемента"},
	{index:8,picture:"3000r.jpg", name:"Вы можете оплатить до 20% стоимости заказа"},
	{index:9,picture:"kuhnia.jpg", name:"Кухня со звуком и светом"},
	{index:10,picture:"rusYz.jpg", name:"Комплект карточек МИНИ-рус. яз"},
	{index:11,picture:"knNakl.jpg", name:"Развивающая книга наклейки"},

];

function befor_open_win() {
	podarok1 = localStorage.getItem("lot1");
	if (podarok1 != null)
	{
		jQuery('#present-modal').addClass("lot1-new");
		
		jQuery('.lot1-new .present-modal__title_top').hide();
		
		jQuery('.present-modal__text').hide();
		jQuery('.present-modal__win').show();
		
		jQuery(".present-modal__present_mini").css("display", "flex");
		
		if ((podarok1 == 9)||(podarok1 == 10)||(podarok1 == 11) ) {
			jQuery(".present-modal__present_mini .present-modal__present-wrap .present-modal__title_bot").hide();
			
		}
		
		jQuery(".present-modal__present_mini .present-modal__present-wrap .present-modal__present-title").html(allTovar[podarok1].name);
		jQuery(".present-modal__present_mini .present-modal__present-wrap .present-modal__present-img").css("background-image","url(https://xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/gift/"+allTovar[podarok1].picture+")");
	} else {
		jQuery( ".present-cart__item" ).each(function( index ) {
				
				jQuery( this ).css("visibility","visible");
				jQuery( this ).css("animation-name","flipInY");

			});
	}
	
}

function shuffle(arr){
	var j, temp;
	for(var i = arr.length - 1; i > 0; i--){
		j = Math.floor(Math.random()*(i + 1));
		temp = arr[j];
		arr[j] = arr[i];
		arr[i] = temp;
	}
	return arr;
}


function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function get_gift_index(index) {

	prizmass = [];
	for (i = 0; i<allTovar.length; i++) {
		for (j = 0; j<allTovar[i].count; j++) {
			prizmass.push(i);
		}
	}
	
	var priz = getRandomInt(prizmass.length);
	
	priz = getRandomInt(prizmass.length);
	priz = getRandomInt(prizmass.length);
	
	
	return prizmass[priz];
}

get_gift_index(0);

function get_gift_index2(index) {
	var priz = getRandomInt(10000);
	
	priz = getRandomInt(10000);
	priz = getRandomInt(10000);
	
	if ((priz > 0)&&(priz <= 50)) return 10;
	if ((priz > 50)&&(priz <= 70)) return 5;
	if ((priz > 70)&&(priz <= 370)) return 4;
	if ((priz > 370)&&(priz <= 470)) return 3;
	if ((priz > 470)&&(priz <= 1070)) return 2;
	if ((priz > 1070)&&(priz <= 3570)) return 1;
	if (priz > 3570) return 0;
}


		function initr(places) {		
											var dummyMap, myPlacemark;
											
											if (places.Pvz.length > 0) {
												var centerContactLat = places.Pvz[0]["@attributes"].coordY;
												var centerContactLng = places.Pvz[0]["@attributes"].coordX;
											} else {
												var centerContactLat = places.Pvz["@attributes"].coordY;
												var centerContactLng = places.Pvz["@attributes"].coordX;
											}
											
										
											
											return function init_mm() {
												dummyMap = new ymaps.Map('map_pvt', {center: [parseFloat(centerContactLat), parseFloat(centerContactLng)], zoom: 10});
												
												console.log(places);
												
												if (places.Pvz.length > 0) {
													for (var i = 0; i < places.Pvz.length; i++) {
														
														myPlacemark = new ymaps.Placemark([parseFloat(places.Pvz[i]["@attributes"].coordY), parseFloat(places.Pvz[i]["@attributes"].coordX)], {
															hintContent: places.Pvz[i]["@attributes"].FullAddress,
															balloonContent: places.Pvz[i]["@attributes"].FullAddress
														}, {
															preset: 'islands#greenIcon'
														});
														dummyMap.geoObjects.add(myPlacemark);
													}
												} else {
														myPlacemark = new ymaps.Placemark([parseFloat(places.Pvz["@attributes"].coordY), parseFloat(places.Pvz["@attributes"].coordX)], {
															hintContent: places.Pvz["@attributes"].FullAddress,
															balloonContent: places.Pvz["@attributes"].FullAddress
														}, {
															preset: 'islands#greenIcon'
														});
												}
											}
									}


function get_delivery_data(naspunkt, state, province) {
					console.log(naspunkt+" "+state+" "+province);
					var  jqXHR = jQuery.post(
						allAjax.ajaxurl,
						{
							action: 'get_delivery_data',		
							nonce: allAjax.nonce,
							naspunktm: naspunkt,
							statem: state,
							provincem: province,
						}
						
					);
					
					
					jqXHR.done(function (responce) {
						//console.log(responce);
						var rezm = responce.split("|");
						
						if (rezm[0] != "Неопределено") {
							jQuery("#cityElem_top .value").html(rezm[0]);
							jQuery("#cityElem .value").html(rezm[0]);
							jQuery("#deliveryDeyElem .value").html(rezm[1]);
							jQuery("#deliveryPriceElem .value").html(rezm[2]);
							
							jQuery ("#map_pvt").html("");
							//if (JSON.parse(rezm[3]).length != 0)
							if (rezm[2] != "По запросу")
							{
								jQuery (".viev_map").show();
								ymaps.ready(initr(JSON.parse(rezm[3])));
							
							} else {
								jQuery (".viev_map").hide();
								jQuery(".new_delivery_elem").hide();
							}
						} else {
							console.log("11111!!!");
							jQuery(".new_delivery_elem").hide();
							jQuery(".not__city_finde").show();
							
						}
					});
					
					jqXHR.fail(function (responce) {
						console.log("ERROR!");
					});
}




(function ($) {
    $(function () {
        'use strict';
        $('html').removeClass('no-js');
        console.log('APP START');

        $('#showForm').on('click',function () {
            $('#block_id').show();
            $('#block_idd').hide();
            return false;
        });

        $('#add-file').on('click',function () {
            var input = $('#designer-file').parent().clone();

            $('#file-duplicate').append(input);

            console.log('file');
            return false;
        })

        var Base64 = {
            _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
            encode: function (input) {
                var output = "";
                var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
                var i = 0;

                input = Base64._utf8_encode(input);

                while (i < input.length) {

                    chr1 = input.charCodeAt(i++);
                    chr2 = input.charCodeAt(i++);
                    chr3 = input.charCodeAt(i++);

                    enc1 = chr1 >> 2;
                    enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
                    enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
                    enc4 = chr3 & 63;

                    if (isNaN(chr2)) {
                        enc3 = enc4 = 64;
                    } else if (isNaN(chr3)) {
                        enc4 = 64;
                    }

                    output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

                }

                return output;
            },
            decode: function (input) {
                var output = "";
                var chr1, chr2, chr3;
                var enc1, enc2, enc3, enc4;
                var i = 0;

                input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

                while (i < input.length) {
                    enc1 = this._keyStr.indexOf(input.charAt(i++));
                    enc2 = this._keyStr.indexOf(input.charAt(i++));
                    enc3 = this._keyStr.indexOf(input.charAt(i++));
                    enc4 = this._keyStr.indexOf(input.charAt(i++));

                    chr1 = (enc1 << 2) | (enc2 >> 4);
                    chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                    chr3 = ((enc3 & 3) << 6) | enc4;

                    output = output + String.fromCharCode(chr1);

                    if (enc3 != 64) {
                        output = output + String.fromCharCode(chr2);
                    }
                    if (enc4 != 64) {
                        output = output + String.fromCharCode(chr3);
                    }
                }
                output = Base64._utf8_decode(output);
                return output;
            },
            _utf8_encode: function (string) {
                string = string.replace(/\r\n/g, "\n");
                var utftext = "";

                for (var n = 0; n < string.length; n++) {
                    var c = string.charCodeAt(n);

                    if (c < 128) {
                        utftext += String.fromCharCode(c);
                    }
                    else if ((c > 127) && (c < 2048)) {
                        utftext += String.fromCharCode((c >> 6) | 192);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                    else {
                        utftext += String.fromCharCode((c >> 12) | 224);
                        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                }
                return utftext;
            },
            _utf8_decode: function (utftext) {
                var string = "";
                var i = 0;
                var c = 0;
                var c1 = 0;
                var c2 = 0;

                while (i < utftext.length) {

                    c = utftext.charCodeAt(i);

                    if (c < 128) {
                        string += String.fromCharCode(c);
                        i++;
                    }
                    else if ((c > 191) && (c < 224)) {
                        c2 = utftext.charCodeAt(i + 1);
                        string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                        i += 2;
                    }
                    else {
                        c2 = utftext.charCodeAt(i + 1);
                        c3 = utftext.charCodeAt(i + 2);
                        string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                        i += 3;
                    }

                }
                return string;
            }
        }

        $('.base64').each(function (key, val) {
            var el = $(val);
            var url = el.attr('href');
            el.attr('href', Base64.decode(url)+'#tovar');
        });

        function number_format( number, decimals, dec_point, thousands_sep ) {

            var i, j, kw, kd, km;

            // input sanitation & defaults
            if( isNaN(decimals = Math.abs(decimals)) ){
                decimals = 2;
            }
            if( dec_point == undefined ){
                dec_point = ",";
            }
            if( thousands_sep == undefined ){
                thousands_sep = ".";
            }

            i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

            if( (j = i.length) > 3 ){
                j = j % 3;
            } else{
                j = 0;
            }

            km = (j ? i.substr(0, j) + thousands_sep : "");
            kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
            //kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
            kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


            return km + kw + kd;
        }


        function addToCart(product_id, product_price, product_name, product_category) {
			console.log(product_price);
            product_category = typeof product_category !== 'undefined' ? product_category : '';

            window.criteo_q = window.criteo_q || [];
            window.criteo_q.push(
                {event: "setAccount", account: 27568},
                {event: "setSiteType", type: "d"},
                {
                    event: "viewBasket", item: [
                    {id: product_id, price: product_price, quantity: 1},
                ]
                });

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                "ecommerce": {
                    "add": {
                        "products": [
                            {
                                "id": product_id,
                                "name": product_name,
                                "price": parseInt(String(product_price).replace(' ', '')),
                                "category": product_category,
                                "quantity": 1
                            }
                        ]
                    }
                }
            });

            //ga('set', 'dimension2','cart');

        }

        function removeFromCart(product_id, product_name, product_category) {
            product_category = typeof product_category !== 'undefined' ? product_category : '';
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                "ecommerce": {
                    "remove": {
                        "products": [
                            {
                                "id": product_id,
                                "name": product_name,
                                "category": product_category
                            }
                        ]
                    }
                }
            });

        }

        var phoneError2 = $("form#order_form .field-order-client_tel .help-block-error");
        phoneError2.css({
            'line-height':'32px',
            'outline':'1px solid red',
            'outline-offset':'-1px',
            'padding-left':'5px',
            'margin-bottom':'-32px',
            'display':'none',
            'background':'white'
        });
        phoneError2.hover(function(){
            $(this).text('');
            $(this).css('display','none');
            $(this).prev().prev().focus();
        });
        $('#order_form').on('submit', function(){
            setTimeout(function(){
                if(phoneError2.text().length>0){
                    phoneError2.css({'margin-bottom':'-32px','display':'block'});
                }
            }, 300);
        });

        var phoneError3 = $("form#callback_form .field-call-client_tel .help-block-error");
        phoneError3.css({
            'line-height':'32px',
            'outline':'1px solid red',
            'outline-offset':'-1px',
            'padding-left':'5px',
            'margin-bottom':'-32px',
            'display':'none',
            'background':'white'
        });
        phoneError3.hover(function(){
            $(this).text('');
            $(this).css('display','none');
            $(this).prev().prev().focus();
        });
        $('#callback_form').on('submit', function(){
            setTimeout(function(){
                if(phoneError3.text().length>0){
                    phoneError3.css({'margin-bottom':'-32px','display':'block'});
                }
            }, 300);
        });

        $('#resend').on('click', function () {
            $(this).hide();
            $('#resend-form').show();
        });

      /*
		$('.audio-review-widget audio').mediaelementplayer({
            audioWidth: 240
        });

		
        $('#tab-audio audio').mediaelementplayer({
            audioWidth: 240
        });
*/

        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            $('#tab-audio audio').mediaelementplayer({
                audioWidth: 240
            });
        });

        if (!Date.now) {
            Date.now = function () {
                return new Date().getTime();
            }
        }

        $('#showdopcat').on('click', function () {
            $('.dopcat').show();
            $(this).hide();
            return false;
        });

        $('#tabs a').on('click', function () {

            var $el = $($(this).attr('href'));

            $('.tabs_x').hide();
            $('#tabs a').removeClass('selected');
            $(this).addClass('selected');
            $el.show();
            return false;
        });

        $('a[href^="#content"]').on('click', function () {
            var el = $(this).attr('href');
            $('body').animate({scrollTop: $(el).offset().top}, 500);
            return false;
        });

        var top_show = 500;
        var delay = 1000;

        $(window).scroll(function () {
            if ($(this).scrollTop() > top_show) $('#top').fadeIn();
            else $('#top').fadeOut();
        });
        $('#top').click(function () {
            $('body, html').animate({
                scrollTop: 0
            }, delay);
        });

		/*
        $('#timer1').countdown('2020/10/10', function (event) {
            $(this).html(event.strftime('<span class="countdown-section">' +
                                                '<span class="countdown-amount">%H</span>' +
                                                '<span class="countdown-period"> Часов </span>' +
                                            '</span> ' +
                                            '<span class="countdown-section">' +
                                                '<span class="countdown-amount">%M</span>' +
                                                '<span class="countdown-period"> Минут </span>' +
                                            '</span> ' +
                                            '<span class="countdown-section">' +
                                                '<span class="countdown-amount">%S</span>' +
                                                '<span class="countdown-period"> Секунд </span>' +
                                            '</span> ' +
                                        '</span>'));

        });
*/
		
        $('.fancybox, .fancybox-menu a, .gallery-item a').fancybox();

        var $cat = $('.minicat');
        var $cat_text = $('.minicat .minicat-text');
        var $cat_lap = $('.minicat .cat-lap');
        $('.fancybox-order').fancybox({
            wrapCSS: 'order-wrapper',
            padding: 0,
            beforeLoad: function () {
                $cat.css('z-index', '-1');
                $cat_text.css({'display':'none', 'width':'190px', 'left':'-85px'}).html('Как к Вам обратиться?');
                $cat_lap.css({'left':'70px'});

                $('.order-form form').trigger('reset');

                $('.order-form .size').removeClass('active');
                $('.order-form .size:first').addClass('active');

                var $content = $(this.content);
                var $image = $content.find('.order-img');
                var $title = $content.find('.title');
                var $price = $content.find('.price-count');
                var $pricet = $content.find('.price-t-count');

                var $size_s = $content.find('#size-s');
                var $size_m = $content.find('#size-m');
                var $size_l = $content.find('#size-l');
                var $size_xl = $content.find('#size-xl');

                var $size_price_s = $content.find('#size-price-s');
                var $size_price_m = $content.find('#size-price-m');
                var $size_price_l = $content.find('#size-price-l');
                var $size_price_xl = $content.find('#size-price-xl');
				
				if (($(this.element).data('price') > 5000)||($(this.element).data('postid') == 10330)){
					$('.bonus2').show();
					$('.podNadpSmInZ1').hide();
					$('.podNadpSmInZ2').show();
					console.log(1);
				}
					else 
					{	
						$('.bonus2').hide();
						$('.podNadpSmInZ2').hide();
						$('.podNadpSmInZ1').show();
						
					}
				console.log($(this));
				
				$('.order-form ._pname').val($price);				 
				$('.order-form ._pprice').val($title);				 
				
                $('#order-product_id').val($(this.element).data('product'));
               // $('#order-client_time').val(Math.floor(Date.now() / 1000));
                $('#order-client_time').val(Date.now().toString());
                $('#order-product_title').val($(this.element).data('title'));
                $('#order-product_title').css("font-size", "12px");
				
				if ($(this.element).data('title').length > 30)
					$content.find('.title').css("font-size", "16px");
				
				$('#order-product_price').val($(this.element).data('price'));
                $('#order-post_id').val($(this.element).data('postid'));
				
				$('.prodPok').data("postid",$(this.element).data('postid'));
				
                $('#order-image-block .discount').html($(this.element).data('sale'));

                $image.html($("<img/>", {
                    'src': $(this.element).data('image'),
                    'alt': $(this.element).data('title')
                }));
				
				
				
                $title.html($(this.element).data('title'));
                $price.html($(this.element).data('price') + ' <span>руб.</span>');
				
				if (($(this.element).data('price') != $(this.element).data('price-old'))&&($(this.element).data('price-old') != "")) {
					$pricet.html($(this.element).data('price-old') + ' <span>руб.</span>');
				} else {
					$(".price-tomorrow").hide();
					$(".discount").hide();
				}

                var price_int = parseInt($(this.element).data('size-price-s'));


                if ($(this.element).data('size-s')===undefined){
                    $content.find('#s').hide();
                }else{
                    $size_s.html($(this.element).data('size-s'));
                    $('#s').attr('data-price',$(this.element).data('size-price-s'));
                    $('#s').attr('data-price-old',$(this.element).data('size-price-old-s'));
                    $content.find('#s').show();
                }

                if ($(this.element).data('size-m')===undefined){
                    $content.find('#m').hide();
                }else{
                    $size_m.html($(this.element).data('size-m'));

                    $('#m').attr('data-price',$(this.element).data('size-price-m'));
                    $('#m').attr('data-price-old',$(this.element).data('size-price-old-m'));

                    var price_m = parseInt($(this.element).data('size-price-m'))-price_int;
                    $size_price_m.html('+'+price_m+' руб.');
                    $content.find('#m').show();
                }

                if ($(this.element).data('size-l')===undefined){
                    $content.find('#l').hide();
                }else{
                    $size_l.html($(this.element).data('size-l'));

                    $('#l').attr('data-price',$(this.element).data('size-price-l'));
                    $('#l').attr('data-price-old',$(this.element).data('size-price-old-l'));

                    var price_l = parseInt($(this.element).data('size-price-l'))-price_int;
                    $size_price_l.html('+'+price_l+' руб.');
                    $content.find('#l').show();
                }

                if ($(this.element).data('size-xl')===undefined){
                    $content.find('#xl').hide();
                }else{
                    $size_xl.html($(this.element).data('size-xl'));

                    $('#xl').attr('data-price',$(this.element).data('size-price-xl'));
                    $('#xl').attr('data-price-old',$(this.element).data('size-price-old-xl'));

                    var price_xl = parseInt($(this.element).data('size-price-xl'))-price_int;

                    $size_price_xl.html('+'+price_xl+' руб.');
                    $content.find('#xl').show();
                }


                addToCart($(this.element).data('product'), $(this.element).data('price'), $(this.element).data('title'));

               // $content.find('#order-client_name').on('change', function () {
                $content.find('#order-client_name').on('click', function () {
                    $cat_text.hide().html('Напишите Ваш телефон. Мяу!');
                    $cat_text.css("height","120px").css("top","-110px").css("width","200px").css("left","-90px");
					$cat.css({'z-index':'-1', 'top':'230px', 'left':'0'})
                        .stop()
                        .animate({left:'-116px'},1300,function () {
                            $cat.css('z-index', '1');
                            $cat_text.fadeIn();
                        });

                    $content.find('#order-client_tel').on('change', function () {
                        $cat_text.hide().html('НАЖМИТЕ ЗАКАЗАТЬ!');
						$cat_text.css("height","85px").css("top","-85px");
                        $cat.css({'z-index':'-1', 'top':'265px', 'left':'0'})
                            .stop()
                            .animate({'left':'-116px'},1300,function () {
                                $cat.css('z-index', '1');
                                $cat_text.fadeIn();
                            });
                    });
                });
            },
			
			
            afterClose: function () {
                removeFromCart($(this.element).data('product'), $(this.element).data('title'));
				//$('.prodPok').trigger('click');
				
				//toBascetFnk (this.element);	
				//jQuery(".tobascetInCatC").hide();
				//jQuery(".tobascetInCatB").show();
            },
            afterShow: function () {
                //fbq('track', 'AddToCart');

                $cat.css({'z-index':'-1', 'top':'140px', 'left':'0'})
                    .stop()
                    .animate({left:'-116px'},1300,function () {
                        $cat.css('z-index', '1');
                        $cat_text.fadeIn();
                    });
            }
        });


        var $cat2 = $('.minicat2');
        var $cat_text2 = $('.minicat2 .minicat-text');
        var $cat_lap2 = $('.minicat2 .cat-lap');
        $('.fancybox-callback').fancybox({
            wrapCSS: 'order-wrapper',
            padding: 0,
            beforeLoad: function () {
                var $content = $(this.content);

                $('.order-form form').trigger('reset');

                $cat2.css({'z-index':'-1', 'left':'0'});
                $cat_text2.css({'display':'none', 'width':'190px', 'left':'-85px'}).html('Как к Вам обратиться?');
                $cat_lap2.css({'left':'70px'});

                $('#order-client_time').val(Math.floor(Date.now() / 1000));

                $content.find('#call-client_name').on('change', function () {
                    $cat_text2.hide().html('Мы свяжемся с Вами и уточним детали, Мяу!2');
                    $cat2.css({'z-index': '-1', 'top': '16px', 'left': '0'})
                        .stop()
                        .animate({left: '-116px'}, 1300, function () {
                            $cat2.css('z-index', '1');
                            $cat_text2.fadeIn();
                        });

                    $content.find('#call-client_tel').on('change', function () {
                        $cat_text2.hide().html('НАЖМИТЕ ПОЗВОНИТЕ МНЕ!');
                        $cat2.css({'z-index': '-1', 'top': '98px', 'left': '0'})
                            .stop()
                            .animate({'left': '-116px'}, 1300, function () {
                                $cat2.css('z-index', '1');
                                $cat_text2.fadeIn();
                            });
                    });
                });

            },
            afterShow: function () {
                $cat2.stop()
                    .animate({left:'-116px'},1300,function () {
                        $cat2.css('z-index', '1');
                        $cat_text2.fadeIn();
                    });
            }
        });


        $('.knopkadesign1').fancybox({
            wrapCSS: 'order-wrapper',
            padding: 0,
            beforeLoad: function () {
                $('.minicat3').css('z-index', '-1');
                var $content = $(this.content);
                $('.minicat3 .cat-lap').css('left', '70px');
            },
            afterClose: function () {
                $('.order-form form').trigger('reset');

                $('.minicat3').css('z-index', '-1').css('top', '-19px').hide();
                $('.minicat3 .minicat-text').hide().html('Как к Вам обратиться?');

                var $cat = $(this.content,'.minicat3');
                $cat.hide();
                var $catClone = $cat.clone(true);
                //$catClone.css('z-index', '-1').css('top', '-19px');
                $cat.before($catClone);
                $cat.remove();
                $('.minicat3 .minicat-text').hide().css('width', '190px').css('left', '-85px').html('Как к Вам обратиться?');

            },
            afterShow: function () {
                $('.minicat3').css('z-index', '-1');
                $('.minicat3').show();

                setTimeout(function () {
                    $('.minicat3').css('z-index', '1');
                    $('.minicat3 .minicat-text').fadeIn();
                }, 1300);
            }
        });

        $('#designer-name').on('change', function () {

            var $cat = $('.minicat3');
            $cat.hide();
            var $catClone = $cat.clone(true);
            $catClone.css('z-index', '-1').css('top', '120px');
            $cat.before($catClone);
            $cat.remove();
            $('.minicat3 .minicat-text').hide().css('z-index', '-1').css('width', '190px').css('height', '120px').css('left', '-85px').html('Мы свяжемся с Вами и уточним детали, Мяу!3');
            $('.minicat3').show();

            setTimeout(function () {
                $('.minicat3').css('z-index', '1');
                $('.minicat3 .minicat-text').fadeIn();
            }, 1300);


            $('#designer-phone').on('change', function () {

                var $cat = $('.minicat3');
                $cat.hide();
                var $catClone = $cat.clone(true);
                $catClone.css('z-index', '-1').css('top', '190px');
                $cat.before($catClone);
                $cat.remove();
                $('.minicat3 .minicat-text').hide().css('z-index', '-1').css('width', '190px').css('left', '-85px').html('ВВЕДИТЕ ВАШ АДРЕС');
                $('.minicat3').show();

                setTimeout(function () {
                    $('.minicat3').css('z-index', '1');
                    $('.minicat3 .minicat-text').fadeIn();
                }, 1300);

            });


        });

        $('.b-video a, .fancyvideo, .fancybox-video').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });

        $('.fancybox-pager').fancybox({
            beforeLoad: function () {
                this.href = $(this.element).data("href");
            }
        });

        $('#show-more-cats').on('click', function () {
            $('.b-front-categories__e-item.hidden').removeClass('hidden');
            return false;
        });

/*
        $('.bxslider1').bxSlider({
            pagerCustom: '#bx-pager16',
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager',
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        $('.wow-slider').bxSlider({
            pager: false,
            mode: 'fade',
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });
*/

/*
        var slide = $('.imgslider').waterwheelCarousel({
            speed: 300,
            flankingItems: 1
        });
*/
        $('.imgsl1 .prev').on('click', function () {
            slide.prev();
        });

        $('.imgsl1 .next').on('click', function () {
            slide.next();
        });

        var sliderSets = $('.slider_boxes');

        function initSliders(targetSlider, targetPager) {
/*           
		   $(targetSlider).bxSlider({
                pagerCustom: targetPager,
                nextText: '<i class="icon"></i>',
                prevText: '<i class="icon"></i>'
            });
			*/
        }

        $(sliderSets).each(function () {
            var targetSlider = "#" + $(this).children('.bx-slider').attr('id');
            var targetPager = "#" + $(this).children('.bxslider-pager').attr('id');

            initSliders(targetSlider, targetPager);
        });

/*
        $('.bxslider-pager').bxSlider({
            minSlides: 4,
            maxSlides: 4,
            slideWidth: 150,
            slideMargin: 32,
            pager: false,
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        $('.about-slider').bxSlider({
            //minSlides: 3,
            //maxSlides: 3,
            //slideWidth: 275,
            //slideMargin: 32,
            //moveSlides: 1,
            auto: true,
            pager: false,
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });
*/
        //Клик на кнопке заказать
        $('.fancybox-order').on('click', function () {
            console.log('ORDER START');
			//yaCounter25515350.reachGoal('click_order');
           // ga('send', 'event', 'button', 'click_order');
            console.log('ORDER END');
        });

        $('.menu-button').on('click', function (e) {

            $('#r-menu-title, #r-menu').toggle();

        });

      //new WOW().init();
     
		/*$('.product-gallery').bxSlider({
            minSlides: 2,
            maxSlides: 5,
            slideWidth: 176,
            slideMargin: 7,
            pager: false
        });

        $('.product-gallery').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
        });

         */

        $('.sub-menu a').on('click',function(){

            $(this).next().slideToggle();

        });

        $('.responsive-menu-button .btn').on('click',function(){

            $('.responsive-menu-2').stop().slideToggle();
            return false;

        });

		/*
        $.ajax({
            type: 'POST',
            url: '/review/sidebar/',
            dataType: 'html',
            success: function (data) {
                $('#ajax-reviews').html(data);
            }
        });
*/

/*
        var discount = $('#discount-products');

        if(discount.length){
            $.ajax({
                type: 'POST',
                url: '/product/discount/'+discount.data('category')+'/'+discount.data('product')+'/',
                dataType: 'html',
                success: function (data) {
                    discount.html(data);
                }
            });
        }
*/


       // var ctimer = parseInt($.cookie('utimer'));
        var ctimer = 27000;

        var inter;
        function interval() {
            inter = setInterval(function () {
                ctimer = ctimer-1000;
                $.cookie('utimer',ctimer);
                console.log(ctimer);
            },1000);
        }

        var names3 = ['Александр','Александра','Алексей','Алёна','Алина','Алихан','Алла','Анастасия','Анатолий','Андрей','Анна','Антон','Арсен','Артём','Артур','Вадим','Валентин','Валерий','Валерия','Василий','Вероника','Виктор','Виктория','Виталий','Владимир','Вячеслав','Георгий','Глеб','Гульназ','Гульнара','Давид','Дамир','Даниил','Дарья','Денис','Диана','Динара','Дмитрий','Евгений','Евгения','Егор','Екатерина','Елена','Иван','Игорь','Илья','Индира','Инна','Ирина','Кирилл','Константин','Кристина','Ксения','Лариса','Людмила','Максим','Маргарита','Марина','Мария','Михаил','Наталья','Николай','Оксана','Олег','Ольга','Павел','Полина','Роман','Руслан','Светлана','Сергей','Станислав','Татьяна','Ульяна','Юлия','Юрий','Яна'];
        var city = ['Москвы','Казани','Сочи','Нижний','Ярославля','Калининграда','Екатеринбурга','Анапы','Владимира','Геленджика','Суздаля','Костромы','Воронежа','Тулы','Самары','Новосибирска','Волгограда','Краснодара','Великого Новгорода','Ростова-На-Дону','Твери','Пскова','Уфы','Смоленска','Сергиева Посада','Выборга','Рязани','Красноярска','Коломны','Челябинска','Перми','Кисловодска','Тольятти','Саратова','Тюмени','Омска','Мурома','Пятигорска','Новороссийска','Иркутска','Иваново','Вологды','Владивостока','Йошкар-Олы','Калуги','Углича','Ростова Великого','Астрахани','Чебоксаров'];
        var items = ['Забавный бегемот','Веселый крокодил','Загадочный медведь','Важный слон','Супер-пупер дом','Зайка с лабиринтами','Бизикуб развивающий','Средний классический','Я умею','Развивай-ка','Домик Смайлик','Голубое небо','Яркий домик','Оранжевый куб','Радуга цифр','Весёлое время','Красный Телефон','Домик волшебное детство','Яркий автобус','Жёлтый сундучок','Маленький домик с цифрами','Маленький деревянный домик','Весёлый слоник','Красная машинка','Множество красок','Весёлые фрукты','Розовая рыбка','Разноцветные стрелки','Яблочный лабиринт','Желтая улитка','Разноцветные детали','Громкий звонок','Маленький совёнок', 'Смешной Буратино'];
        var hrefs = [
		'http://xn--80ablmoh8a2h.xn--p1ai/zabavnyj-begemot/',
		'http://xn--80ablmoh8a2h.xn--p1ai/veselyj-krokodil/',
		'http://xn--80ablmoh8a2h.xn--p1ai/zagadochnyj-medved/',
		'http://xn--80ablmoh8a2h.xn--p1ai/vazhnyj-slon/',
		'http://xn--80ablmoh8a2h.xn--p1ai/super-puper-dom/',
		'http://xn--80ablmoh8a2h.xn--p1ai/zajka-s-labirintami/',
		'http://xn--80ablmoh8a2h.xn--p1ai/bizikub-razvivayushhij/',
		'http://xn--80ablmoh8a2h.xn--p1ai/srednij-klassicheskij/',
		'http://xn--80ablmoh8a2h.xn--p1ai/bizibord-ya-umeyu/',
		'http://xn--80ablmoh8a2h.xn--p1ai/bizibord-razvivaj-ka/',
		' http://xn--80ablmoh8a2h.xn--p1ai/domik-smajlik/',
		'',
		'http://xn--80ablmoh8a2h.xn--p1ai/bolshoj-yarkij-domik/',
		'http://xn--80ablmoh8a2h.xn--p1ai/oranzhevyj-pultik/',
		'',
		'',
		'',
		'http://xn--80ablmoh8a2h.xn--p1ai/domik-volshebnoe-detstvo/',
		'http://xn--80ablmoh8a2h.xn--p1ai/yarkij-avtobus/',
		'',
		'',
		'',
		'http://xn--80ablmoh8a2h.xn--p1ai/vesyolyj-slonik/',
		'http://xn--80ablmoh8a2h.xn--p1ai/krasnaya-mashinka/',
		'http://xn--80ablmoh8a2h.xn--p1ai/mnozhestvo-krasok/',
		'http://xn--80ablmoh8a2h.xn--p1ai/vesyolye-frukty/',
		'http://xn--80ablmoh8a2h.xn--p1ai/rozovaya-rybka/',
		'http://xn--80ablmoh8a2h.xn--p1ai/raznocvetnye-strelki/',
		'http://xn--80ablmoh8a2h.xn--p1ai/yablochnyj-labirint/',
		'http://xn--80ablmoh8a2h.xn--p1ai/zheltaya-ulitka/',
		'http://xn--80ablmoh8a2h.xn--p1ai/raznocvetnye-detali/',
		'http://xn--80ablmoh8a2h.xn--p1ai/gromkij-zvonok/',
		'http://xn--80ablmoh8a2h.xn--p1ai/malenkij-sovyonok/',
		'http://xn--80ablmoh8a2h.xn--p1ai/smeshnoj-buratino/',
		];

		var counter = 0;
        var times;
        times = [83000, 85000, 101000, 119000, 66000, 133000, 127000, 109000, 127000, 125000, 120000];

        var show = false;

        setInterval(function () {
            if(ctimer > 0){
                ctimer = ctimer-1000;
                $.cookie('utimer',ctimer);

            }else{
                //Берём
                var rand = Math.floor(Math.random() * names3.length);
                var rand2 = Math.floor(Math.random() * city.length);
                var rand3 = Math.floor(Math.random() * times.length);
                var rand4 = Math.floor(Math.random() * items.length);

                var link = $('a:contains("'+items[rand4].toLowerCase()+'")');
                var text = names3[rand]+' из '+city[rand2]+' заказал(а) бизиборд '+items[rand4];
                $('.border-u').html(text);
               // $('.popup-u').attr('href',link.attr('href')).fadeIn();
                $('.popup-u').attr('href',hrefs[rand4]).fadeIn();
				
				

                if (counter<=2)
					ctimer = 43000;
				else
					ctimer = times[rand3];
                show = true;
				counter++;
            }
        },1000);

		
		 setInterval(function () {
					if(show){
						$('.popup-u').fadeOut();
						show = false;
					}
				},12000);
       

        $(".order-form .size, .order-form .size-v2").on('click',function () {
            $(".order-form .size, .order-form .size-v2").removeClass('active');
            $(this).addClass('active');

            $('.order-form .price-count').html(number_format($(this).data('price'),0,'',' ')+' <span>руб.</span>');
            $('.order-form .price-t-count').html(number_format($(this).data('price-old'),0,'',' ')+' <span>руб.</span>');

            //Меняем цены
        });


        if(!$.cookie('promopopup')){
            setTimeout(function () {
                if($('body').data('variant') == 'v3'){
                    $.fancybox($('#promo-popup'),{
                        padding: '0',
                        tpl: {
                            closeBtn: '<a class="fancybox-item fancybox-close myClose" href="javascript:;" style="background: transparent; top: 0; right: 0; width: 32px; height: 30px;"></a>'
                        }
                    });
                }else{
                    $.fancybox($('#promo-popup'),{
                        padding: '0',
                        width: "100%",
                        maxWidth: 950,
                        height: 476,
                        autoSize: false,
                        scrolling: false
                    });
                }

                $.cookie('promopopup',true);
            }, 5000);
        }

  		$(".ooft").fancybox({
			maxWidth	: 1200,
			maxHeight	: 1000,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
			});
        
        
        console.log('APP END');
    });

    jQuery(document).ready(function($) {
      
    $('.sub-clear').click(function(e) {
        e.preventDefault();
        $('#s').val('');
        $(".preSearchWrap").hide();
        $(this).hide();
    });

    $('.mm_overley').click(function(e) {
        $('.btnClodeMenu').trigger('click');
    });

//----------МОбильное меню
    jQuery("#menuBtnOpen").click(function() {
        jQuery(".btnClodeMenu").show();
        jQuery(".newMenuMob").show();
        jQuery(".mm_overley").show();
      });

      jQuery(".btnClodeMenu").click(function() {
        jQuery(".newMenuMob").hide();
        jQuery(".btnClodeMenu").hide();
        jQuery(".mm_overley").hide();
      });

      jQuery(".mobile-menu a").click(function() {
        jQuery(".mobile-menu a").each(function() {
          jQuery(this).next('.sub-menu').slideUp();
        });
        if (jQuery(this).next('.sub-menu').is(':visible')) {
          jQuery(this).next('.sub-menu').slideUp();
        } else {
          jQuery(this).next('.sub-menu').slideDown();
        }

      });
//------


    $('#s').focus(function(){
        if ($(".preSearchWrap").find('*').length != 0)
        $(".preSearchWrap").show();
    });

    $('.search-widget, #searchform').mouseleave(function(){
        $(".preSearchWrap").hide();
    });
        
    $("#s").keydown(function() {
        $val_current = $(this).val();
        if ($val_current.length > 3)
        {
            var  jqXHR = jQuery.post(
                allAjax.ajaxurl,
                {
                  action: 'pre_serch',    
                  nonce: allAjax.nonce,
                  value: $val_current,
                }
                
              );
              
              jqXHR.done(function (responce) {
                  var elements = JSON.parse(responce);
                  console.log(elements);
                  console.log(elements.sdata.length);
                  var reaStr = "";
                  for (i = 0; i<elements.sdata.length; i++)
                  {
                    reaStr += "<a class = 'preSearchElemLnk' href = '"+elements.sdata[i].lnk+"'>";
                        reaStr += "<div class = 'preSearchElem'>";
                            reaStr += "<div class = 'img' style = 'background-image:url("+elements.sdata[i].picture+")'></div>";
                            reaStr += "<div class = 'text'><span>"+elements.sdata[i].title+"</span></div>";
                            reaStr += "<div class = 'price'>";
                                reaStr += "<span class = 'cur'>"+elements.sdata[i].priceCur+" руб.</span>";
                                //if (elements.sdata[i].priceOld != "")
                                //    reaStr += "<span class = 'old'>"+elements.sdata[i].priceOld+" руб.</span>";
                               
                            reaStr += "</div>";
                        reaStr += "</div>";
                    reaStr += "</a>";
                  }

                  $(".preSearchWrap").html(reaStr);
                  $(".preSearchWrap").show();
                  $('.sub-clear').show();
              });
                      
              jqXHR.fail(function (responce) {
                $(".preSearchWrap").hide();
              });
        }  else {
            $(".preSearchWrap").hide();
        }

    });

    $("#reviewStars-input input").change(function() {
        $val_current = $(this).val();
        console.log($val_current);
    });
    
        $(".product-specifications__tab-item").not(":first").hide();
        $(".product-specifications-tab").click(function () {
            $(".product-specifications-tab").removeClass("active").eq($(this).index()).addClass("active");
            $(".product-specifications__tab-item").hide().eq($(this).index()).fadeIn()
        }).eq(0).addClass("active");
	
	/*
		$("#contentjscroll").jscroll({
            debug: true,
			nextSelector: ".aloadet",
			callback:function() {}
        });
*/
		console.log("jsw");

		$('.content-rev').readmore({
            speed: 10,
            collapsedHeight: 112,
            heightMargin: 20,
            moreLink: '<a href="" class="morelink-review">Показать полностью...</a>',
            lessLink: '<a href="" class="morelink-review">Свернуть</a>'
        });
        
		$('.review-body').readmore({
            speed: 10,
            collapsedHeight: 243,
            heightMargin: 20,
            moreLink: '<a href="" class="morelink-review">Показать полностью...</a>',
            lessLink: '<a href="" class="morelink-review">Свернуть</a>'
        });
		
		$('.slide-toggle-link').click(function(e) {
            e.preventDefault();
            if($(this).parent().siblings('.smileText').is(':visible')) {
                $(this).text('Подробнее...');
                $(this).parent().siblings('.smileText').slideToggle();
            } else {
                $(this).text('Скрыть');
                $(this).parent().siblings('.smileText').slideToggle();
            }
        })
		
		//-------------------------------Населенные пункты
		console.log(jQuery("#cityElem_top .value:first").text());
		if (jQuery("#cityElem_top .value:first").text() != "")
			get_delivery_data(jQuery("#cityElem_top .value:first").text(), stait, province);
		
		/*
		$('.nas_tunkt_in_win .city_sel_elem').click(function(e) {
			get_delivery_data(jQuery(this).text(), stait, province);
			jQuery(".new_delivery_elem").show();
			jQuery(".not__city_finde").hide();
			$("#nsapunkts").arcticmodal("close");
		});
		*/
        


		$('.nas_tunkt_in_win').on( "click", ".city_sel_elem", function(e) {
            e.preventDefault();
			get_delivery_data(jQuery(this).text(), stait, province);
			jQuery(".new_delivery_elem").show();
			jQuery(".not__city_finde").hide();
			$("#nsapunkts").arcticmodal("close");
		});
		
        


		$('#city_all').keydown(function() {
			var searchStr = jQuery(this).val();
			if (searchStr.length < 2) return;
			
			
			
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'search_nas_punkts',		
					nonce: allAjax.nonce,
					naspunktm: searchStr,

				}
				
			);
			
			
			jqXHR.done(function (responce) {
				var cityinfo = JSON.parse(responce);
				var rezstrpunkt = "";
				for (i = 0; i<cityinfo.length; i++)
					rezstrpunkt += "<li class='city_sel_elem'>"+cityinfo[i].punktname+"</li>";
				
				jQuery(".nas_tunkt_in_win").html(rezstrpunkt);
			});
			
			jqXHR.fail(function (responce) {
				console.log("ERROR!");
			});
			
		});
		
	
		$('.city_vsp_vin .qq_btn .yes_btn').click(function(e) {
			$.cookie('cwclose', "closed", { expires: 30, path: '/' });
			jQuery(".city_vsp_vin").hide();
		});
		
		$('.not__city_finde').click(function(e) {
            $("#nsapunkts").arcticmodal();
        });
		
		$('.city_vsp_vin .qq_btn .no_btn').click(function(e) {
			jQuery(".city_vsp_vin").hide();
            $("#nsapunkts").arcticmodal();
			$.cookie('cwclose', "closed", { expires: 30, path: '/' });
        });
        
        $('.header-top__map').click(function(e) {
            $("#nsapunkts").arcticmodal();
		});

		$('#cityElem_top .city_sel_elem').click(function(e) {
            $("#nsapunkts").arcticmodal();
        });
		
		$('#cityElem').click(function(e) {
            $("#nsapunkts").arcticmodal();
        });
    });



    jQuery(document).on('click', '#load_more_main', function(event) {
        event.preventDefault();
        var el = jQuery(this);
        var container = jQuery(el.data('container'));
        var paged = Number(el.attr('data-paged'));
        
        var max = Number(el.attr('max'));
        paged++;

        el.attr('data-paged', paged);
        container.animate({"opacity": "0.5"}, 400);
        var  jqXHR = jQuery.post(
            allAjax.ajaxurl,
            {
                action: 'load_more_main',
                nonce: allAjax.nonce,
                query: el.data('query'),
                max: el.data('max'),
                paged: paged,
            }
        );
        jqXHR.done(function (responce) {
            var json = JSON.parse(responce);
            container.append(json.content);
            // jQuery(json.content).appendTo(container);
            container.animate({"opacity": "1"}, 100);
            el.text("Показать еще " + json.count_posts + '...');
            if (!json.button) el.remove();
        });
    });


    $('.present-cart__item').click(function() {

		if (jQuery( this ).hasClass("pOpen")) return;
		if (jQuery( this ).hasClass("pSelected")) return;
		
		zakId = jQuery(this).data("zakid");
		
		jQuery(this).addClass("pSelected");
		
		jQuery(this).css("animation-name","");
		jQuery(this).css("box-shadow","rgba(229, 229, 42, 0.75) 0px 0px 19px 10px");
		jQuery(this).css("animation-delay","0s");	
		
		indexPict = get_gift_index(0);
		
		localStorage.setItem("lot1", indexPict);
		jQuery(this).css("background-size", "100%");
		jQuery(this).css("background-image","url(https://xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/gift/"+allTovar[indexPict].picture+")");
		jQuery(this).html("");
		
		jQuery(this).css("animation-name","flipInY");
		
		jQuery(".present-modal__present_mini").css("display", "flex");
		
		jQuery(".present-modal__present_mini .present-modal__present-wrap .present-modal__present-title").html(allTovar[indexPict].name);
		jQuery(".present-modal__present_mini .present-modal__present-wrap .present-modal__present-img").css("background-image","url(https://xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/gift/"+allTovar[indexPict].picture+")");
		
		if ((indexPict == 9)||(indexPict == 10)||(indexPict == 11) )
			jQuery(".present-modal__present_mini .present-modal__present-wrap .present-modal__title_bot").hide()
		
		jQuery('.arcticmodal-container').animate({scrollTop: 0},500);
		
		jQuery(".bascetWriper").show();	
		jQuery(".countInCart-gift").show();	
		
		var  jqXHR = jQuery.post(
		  allAjax.ajaxurl,
		  {
			action: 're_comment',    
			nonce: allAjax.nonce,
			zid: zakId,
			msgst: allTovar[indexPict].name+" "+allTovar[indexPict].comment
		  }
		  
		);
		
		jqXHR.done(function (responce) {
			console.log(responce);
		});
				
		jqXHR.fail(function (responce) {
			
		});
				
				
		
		setTimeout(function() {
			 randomTov = allTovar.slice();
			
			randomTov.splice(indexPict, 1);
			shuffle(randomTov);
			
			console.log(indexPict);
			console.log(randomTov);
			
			indexMas = 0;
			jQuery( ".present-cart__item" ).each(function( index ) {
				if (jQuery( this ).hasClass("pSelected")) return;
				
				var imgindex = indexMas;
				
				jQuery(this).css("background-image","url(https://xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/gift/"+randomTov[imgindex].picture+")");
				
				jQuery(this).addClass("pOpen");
				jQuery(this).css("background-size", "100%");
				
				jQuery(this).html("");
				
				jQuery( this ).css("animation-name","flipInY");
				
				
				jQuery('.present-modal__text').hide();
				jQuery('.present-modal__win').show();
				
				indexMas++;
			});
		
		}, 1000);
		
    });
	
	
	$('.vip_present-cart__item').click(function() {

		if (jQuery( this ).hasClass("pOpen")) return;
		
		jQuery(this).addClass("pSelected");
		
		jQuery(this).css("animation-name","");
		jQuery(this).css("box-shadow","rgba(229, 229, 42, 0.75) 0px 0px 19px 10px");
		jQuery(this).css("animation-delay","0s");	
		
		indexPict2 = get_gift_index2(0);
		
		localStorage.setItem("lot2", indexPict2);
		
		jQuery(this).css("background-size", "100%");
		jQuery(this).css("background-image","url(https://xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/gift/"+allTovar2[indexPict2].picture+")");
		jQuery(this).html("");
		
		jQuery(this).css("animation-name","flipInY");
		
		jQuery(".vip_present-modal__present_mini").css("display", "flex");
		
		jQuery(".vip_present-modal__present_mini .present-modal__present-wrap .present-modal__present-title").html(allTovar2[indexPict2].name);
		jQuery(".vip_present-modal__present_mini .present-modal__present-wrap .present-modal__present-img").css("background-image","url(https://xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/gift/"+allTovar2[indexPict2].picture+")");
		
		/*
		if ((indexPict == 9)||(indexPict == 10)||(indexPict == 11) )
			jQuery(".vip_present-modal__present_mini .present-modal__present-wrap .present-modal__title_bot").hide()
		*/
		
		jQuery('.arcticmodal-container').animate({scrollTop: 0},500);
		
		jQuery(".bascetWriper").show();	
		jQuery(".countInCart-gift").show();	
		
		setTimeout(function() {
			
			randomTov = allTovar2.slice();
			
			randomTov.splice(indexPict2, 1);
			shuffle(randomTov);
			
			
			indexMas = 0;
			jQuery( ".vip_present-cart__item" ).each(function( index ) {
				if (jQuery( this ).hasClass("pSelected")) return;
				
				var imgindex = indexMas;
				
				jQuery(this).css("background-color","#FFFFFF");
				jQuery(this).css("background-image","url(https://xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/gift/"+randomTov[imgindex].picture+")");
				
				jQuery(this).addClass("pOpen");
				jQuery(this).css("background-size", "100%");
				
				jQuery(this).html("");
				
				jQuery( this ).css("animation-name","flipInY");
				
				
				jQuery('.vip_present-modal__text').hide();
				jQuery('.vip_present-modal__win').show();
				
				indexMas++;
			});
		
		}, 1000);
		
    });
	
	
	
	
    jQuery(document).on('click', '.load-more', function(event) {
        event.preventDefault();
        var el = jQuery(this);
        var container = jQuery(el.data('container'));
        var paged = Number(el.attr('data-paged'));
        var max = Number(el.attr('max'));
        paged++;

        el.attr('data-paged', paged);
        container.animate({"opacity": "0.5"}, 400);
        var  jqXHR = jQuery.post(
            allAjax.ajaxurl,
            {
                action: 'load_more',
                nonce: allAjax.nonce,
                query: el.data('query'),
                max: el.data('max'),
                paged: paged,
            }
        );
        jqXHR.done(function (responce) {
            var json = JSON.parse(responce);
            container.append(json.content);
            container.animate({"opacity": "1"}, 100);
            el.text("Показать еще " + json.count_posts + '...');
            if (!json.button) el.remove();
        });
        // jQuery.ajax({
        //     type: 'POST',
        //     url: el.data('ajaxurl'),
        //     data: data,
        //     );
        //     beforeSend: function() {
        //         container.animate({'opacity': '0.5'}, 400);
        //     },
        //     success: function(result) {
        //         // var json = JSON.parse(result);
        //         // container.animate({"opacity": "1"}, 100)
        //         // if (json.content) {
        //         //     container.append(json.content);
        //         // }
        //         // if (!json.button) el.remove();
        //         container.append(result);
        //     }
        // });
    });

})(jQuery);
jQuery(document).ready(function ($) {
    jQuery(".delivery-maps__wrapper .tab-item").not(":first").hide();
    jQuery(".delivery-maps__wrapper .tab").click(function () {
        jQuery(".delivery-maps__wrapper .tab").removeClass("active").eq(jQuery(this).index()).addClass("active");
        jQuery(".delivery-maps__wrapper .tab-item").hide().eq(jQuery(this).index()).fadeIn()
    }).eq(0).addClass("active");
    $(".tab_item").not(":first").hide();
    $(".wrapper .tab").click(function () {
        $(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".tab_item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");

    $(".review-modal-link").click(function(e) {
        e.preventDefault();
        $("#review-modal").arcticmodal();
    });
    
	$('.ppWin1').click(function(e) {
		 $('#present-modal').arcticmodal("close");
	});

	
	podarok1 = localStorage.getItem("lot1");
	if (podarok1 != null)
	{	
		$('.bascetWriper').show();
		jQuery(".countInCart-gift").show();	
	}

	
	
    $('.present-modal').click(function(e) {
        e.preventDefault();
        $('#present-modal').arcticmodal({
				beforeOpen: function(data, el) {
					befor_open_win();
				}		
			}
		);
    });
    
    $('.vip_present-modal').click(function(e) {
        e.preventDefault();
        $('#vip_present-modal').arcticmodal({
				beforeClose: function(data, el) {
					podarok2 = localStorage.getItem("lot2");
					if (podarok2 != null)
					{
						var  jqXHR = jQuery.post(
						  allAjax.ajaxurl,
						  {
							action: 're_comment',    
							nonce: allAjax.nonce,
							zid: "13926A",
							msgst: allTovar2[podarok2].name
						  }
						  
						);
						
						jqXHR.done(function (responce) {
							console.log(responce);
						});
								
						jqXHR.fail(function (responce) {
							
						});
					}
				}
			});
    });

    // $('.present-cart__item').click(function(e) {
    //     $('.present-modal__carts').hide();
    //     $('.present-modal__text').hide();
    //     $(".present-modal__present").css('display', 'flex');
    //     $('.present-modal__win').show();
    //     $('#present-modal .modalline').addClass('active');
    // });

    $(".product-desc .round-awerage").click(function(e) {
        e.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });


    jQuery("#review-modal .uniSendBtn").click(function(e){ 
      e.preventDefault();
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var product_title = $(this).data('product');
      var product_link = $(this).data('link');
      var product_id = $(this).data('id');
      var review_text = $(this).parent().siblings('textarea[name=review]').val();
      var name = $(this).parent().siblings('input[name=name]').val();
      var stars = $(this).parent().parent().find('input[name=reviewStars]:checked').val();
      var photo = $(this).parent().siblings('input[name=photo]').val();
      var vk = $(this).parent().siblings('input[name=vk]').val();
      var file_path = $(this).parent().siblings('.file-path').val();
      console.log(photo);
      var form = $(this).parent().parent().serialize();
      if ((review_text == "")||(review_text.indexOf("_")>0)) {
        jQuery(this).siblings('textarea[name=review]').css("background-color","#ff91a4");
      } else if((vk == "")||(vk.indexOf("_")>0)) {
        $(this).parent().siblings('input[name=vk]').css("background-color","#ff91a4");
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'review_send',    
            nonce: allAjax.nonce,
            msg: message,
            product_title: product_title,
            product_link: product_link,
            product_id: product_id,
            name: name,
            // message: message,
            review_text: review_text,
            stars: stars,
            vk: vk,
            file: file_path,
            form: form
          }
        );
        
        jqXHR.done(function (responce) {
          console.log(responce);
          jQuery('#messgeModal #lineMsg').html("Спасибо Вам за отзыв! Скоро он отобразится на сайте.");
          jQuery('#messgeModal').arcticmodal();
          jQuery('#review-modal').arcticmodal('close');
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html(responce);
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });

jQuery('input[type=file]').change(function(){
    var file_data = jQuery(this).prop('files')[0];
    var form_data = new FormData();
    var file_span = $(this).next();
    form_data.append('file', file_data);
    form_data.append('action', "main_load_file");
    form_data.append('nonce', allAjax.nonce);
    form_data.append('zakid', jQuery(this).siblings(".elZakId").html());

    var spiner = jQuery(this).siblings(".loadet");
    var fnel = jQuery(this).siblings(".elFn");
    var idel = jQuery(this).siblings(".elId");
    spiner.show();

    var  jqXHR = jQuery.ajax({      
        url: allAjax.ajaxurl,
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,      
        nonce: allAjax.nonce,
        type: 'post'    
    });

    jqXHR.done(function (responce) {
        file_span.val(responce);
        elems = responce.split('|');
        spiner.hide();
        fnel.html(elems[0]);
        idel.html(elems[1]);
    });
            
    jqXHR.fail(function (responce) {
        // spiner.hide();
        if (responce.responseText == "0")
            file_span.html("<span style = 'color:red;'>Большой файл!</span>");
        else
            file_span.html(responce.responseText);
    });
});

    $(".review-usefull__yes").click(function() {
        var this_elem = this;
        var review_nubmer = $(this).parent().parent().data('inc');
        var postid = $(this).parent().parent().data('postid');
		var qty = $(this).text();
		
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'review_usefull',    
            nonce: allAjax.nonce,
            reviewnubmer: review_nubmer,
            postid: postid,
            qty: qty
          }
          
        );
        jqXHR.done(function (responce) {
		
          $(this_elem).text(responce);
        });        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
    });
	
	$(".review-usefull__no").click(function() {
        var this_elem = this;
        var review_nubmer = $(this).parent().parent().data('inc');
        var postid = $(this).parent().parent().data('postid');
		var qty = $(this).text();
	
		
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'review_usefull_no',    
            nonce: allAjax.nonce,
            reviewnubmer: review_nubmer,
            postid: postid,
            qty: qty
          }
          
        );
        jqXHR.done(function (responce) {
		
          $(this_elem).text(responce);
        });        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
    });
	
	$(".baner-new__link_phone_a").click(function(e) {
        e.preventDefault();
        $("#recalWin").arcticmodal();
    });

    

    $(".sendRecall").click(function(e) {
        e.preventDefault();
        let phone = $("#call-client_tel").val();
        if ((phone=="")||(phone.indexOf("_")>=0)) {
            console.log(phone);
            $(".field-call-client_tel .control-label").css("color","red");
            return;
        }
        var  jqXHR = jQuery.post(
            allAjax.ajaxurl,
            {
              action: 'send_recall',    
              nonce: allAjax.nonce,
              name: $("#call-client_name").val(),
              phone: phone
            }
            
          );
          jqXHR.done(function (responce) {
              console.log(1);
            $(".sendetMsgForm").hide();
            $(".msgSendet").show();
          });        
          jqXHR.fail(function (responce) {
            alert("Произошла ошибка попробуйте позднее!");
          });
    });

	$(".viev_map").click(function(e) {
        $("#map_pvt").toggle();
    });
	
});

