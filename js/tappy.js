(function(b,d,e){var c=function(f){return f.each(function(){var o=d(this),n,k,m,g=15,h;function j(p){p.preventDefault();d(p.target).trigger("tap",[p])}function i(){m=b.document.body.scrollTop;if(o.is("a")){h=o[0].href;o[0].href="#"}}function l(p){p.preventDefault();if(n&&n!==p.type){return false}n=p.type;clearTimeout(k);k=setTimeout(function(){n=null},1000);if(p.type==="touchend"&&Math.abs(b.document.body.scrollTop-m)>g){return false}if(h){o[0].href=h}h=null;j(p)}o.bind("touchstart",i).bind("touchend",l).bind("click",l)})};var a=d.fn.bind;d.fn.bind=function(f,g){if(/(^| )tap( |$)/.test(f)){c(this)}return a.apply(this,[f,g])}}(this,jQuery));