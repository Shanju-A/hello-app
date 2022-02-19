
<meta charset="utf-8">
        <meta content="LEDGERS GST software is designed to help businesses easily raise invoices, track expenses and file GST returns online." name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="https://devapp.ledgers.cloud/favicon.ico" />
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script type="text/javascript">
        ;window.NREUM||(NREUM={});NREUM.init={distributed_tracing:{enabled:true},privacy:{cookies_enabled:true},ajax:{deny_list:["bam.eu01.nr-data.net"]}};
        window.NREUM||(NREUM={}),_nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(32),s={};try{o=localStorage.getItem("_nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(33),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError";if(!c.disabled){var l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(14),t(13),"addEventListener"in window&&t(7),c.xhrWrappable&&t(15),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})}},{}],3:[function(t,e,n){var r=t("loader");r.disabled||(r.features.ins=!0)},{}],4:[function(t,e,n){function r(){U++,L=g.hash,this[u]=y.now()}function o(){U--,g.hash!==L&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable&&!y.disabled){var x=t(11),b=t(12),E=t(9),R=t(7),O=t(14),T=t(8),P=t(15),S=t(10),M=t("ee"),N=M.get("tracer"),C=t(23);t(17),y.features.spa=!0;var L,U=0;M.on(u,r),b.on(p,r),S.on(p,r),M.on(d,o),b.on(l,o),S.on(l,o),M.buffer([u,d,"xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+c,"clearTimeout"+s,u]),P.buffer([u,"new-xhr","send-xhr"+s]),T.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),x.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+s]),N.buffer([u,"no-"+u]),S.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(T,m+s),a(T,m+"-done"),a(S,"new-jsonp"),a(S,"jsonp-end"),a(S,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,C(!0)),w[v]("load",i,C(!0)),w[v]("popstate",function(){i(0,U>1)},C(!0))}},{}],5:[function(t,e,n){function r(){var t=new PerformanceObserver(function(t,e){var n=t.getEntries();s(v,[n])});try{t.observe({entryTypes:["resource"]})}catch(e){}}function o(t){if(s(v,[window.performance.getEntriesByType(w)]),window.performance["c"+p])try{window.performance[h](m,o,!1)}catch(t){}else try{window.performance[h]("webkit"+m,o,!1)}catch(t){}}function i(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var a=t("ee"),s=t("handle"),c=t(14),f=t(13),u=t(6),d=t(23),p="learResourceTimings",l="addEventListener",h="removeEventListener",m="resourcetimingbufferfull",v="bstResource",w="resource",g="-start",y="-end",x="fn"+g,b="fn"+y,E="bstTimer",R="pushState",O=t("loader");if(!O.disabled){O.features.stn=!0,t(9),"addEventListener"in window&&t(7);var T=NREUM.o.EV;a.on(x,function(t,e){var n=t[0];n instanceof T&&(this.bstStart=O.now())}),a.on(b,function(t,e){var n=t[0];n instanceof T&&s("bst",[n,e,this.bstStart,O.now()])}),c.on(x,function(t,e,n){this.bstStart=O.now(),this.bstType=n}),c.on(b,function(t,e){s(E,[e,this.bstStart,O.now(),this.bstType])}),f.on(x,function(){this.bstStart=O.now()}),f.on(b,function(t,e){s(E,[e,this.bstStart,O.now(),"requestAnimationFrame"])}),a.on(R+g,function(t){this.time=O.now(),this.startPath=location.pathname+location.hash}),a.on(R+y,function(t){s("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),u()?(s(v,[window.performance.getEntriesByType("resource")]),r()):l in window.performance&&(window.performance["c"+p]?window.performance[l](m,o,d(!1)):window.performance[l]("webkit"+m,o,d(!1))),document[l]("scroll",i,d(!1)),document[l]("keypress",i,d(!1)),document[l]("click",i,d(!1))}}},{}],6:[function(t,e,n){e.exports=function(){return"PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver}},{}],7:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],8:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var s=r.apply(this,t);return o.emit(n+"start",[t,a],s),s.then(function(t){return o.emit(n+"end",[null,t],s),t},function(t){throw o.emit(n+"end",[t],s),t})})}var o=t("ee").get("fetch"),i=t(33),a=t(32);e.exports=o;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,p=s.Response,l=s.fetch,h="prototype",m="nr@context";d&&p&&l&&(a(u,function(t,e){r(d[h],e,f),r(p[h],e,f)}),r(s,"fetch",c),o.on(c+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(c+"done",[null,e],n)}else o.emit(c+"done",[t],n)}))},{}],9:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],10:[function(t,e,n){function r(t){function e(){f.emit("jsonp-end",[],l),t.removeEventListener("load",e,c(!1)),t.removeEventListener("error",n,c(!1))}function n(){f.emit("jsonp-error",[],l),f.emit("jsonp-end",[],l),t.removeEventListener("load",e,c(!1)),t.removeEventListener("error",n,c(!1))}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var d=s(a),p="function"==typeof d.parent[d.key];if(p){var l={};u.inPlace(d.parent,[d.key],"cb-",l),t.addEventListener("load",e,c(!1)),t.addEventListener("error",n,c(!1)),f.emit("new-jsonp",[t.src],l)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(d);return e?e[1]:null}function a(t,e){var n=t.match(l),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(p);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t(23),f=t("ee").get("jsonp"),u=t("wrap-function")(f);if(e.exports=f,o()){var d=/[?&](?:callback|cb)=([^&#]+)/,p=/(.)\.([^.]+)/,l=/^(\w+)(\.|$)(.)$/,h=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?u.inPlace(Node.prototype,h,"dom-"):(u.inPlace(HTMLElement.prototype,h,"dom-"),u.inPlace(HTMLHeadElement.prototype,h,"dom-"),u.inPlace(HTMLBodyElement.prototype,h,"dom-")),f.on("dom-start",function(t){r(t[0])})}},{}],11:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],12:[function(t,e,n){function r(t){var e=i.context(),n=s(t,"executor-",e,null,!1),r=new f(n);return i.context(r).getCtx=function(){return e},r}var o=t("wrap-function"),i=t("ee").get("promise"),a=t("ee").getOrSetContext,s=o(i),c=t(32),f=NREUM.o.PR;e.exports=i,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){i.emit("propagate",[null,!o],a,!1,!1),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var a=e.apply(f,arguments),s=f.resolve(a);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&i.emit("propagate",[t,!0],n,!1,!1),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),o.wrapInPlace(f.prototype,"then",function(t){return function(){var e=this,n=o.argsToArray.apply(this,arguments),r=a(e);r.promise=e,n[0]=s(n[0],"cb-",r,null,!1),n[1]=s(n[1],"cb-",r,null,!1);var c=t.apply(this,n);return r.nextPromise=c,i.emit("propagate",[e,!0],c,!1,!1),c}}),i.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this,null,!1),t[1]=s(t[1],"resolve-",this,null,!1)}),i.on("executor-err",function(t,e,n){t[1](n)}),i.on("cb-end",function(t,e,n){i.emit("propagate",[n,!0],this.nextPromise,!1,!1)}),i.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=i.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],13:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],14:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],15:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){x.push(t),m&&(E?E.then(a):w?w(a):(R=-R,O.data=R))}function a(){for(var t=0;t<x.length;t++)r([],x[t]);x.length&&(x=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(7);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),p=t(23),l=NREUM.o,h=l.XHR,m=l.MO,v=l.PR,w=l.SI,g="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],x=[];e.exports=u;var b=window.XMLHttpRequest=function(t){var e=new h(t);try{u.emit("new-xhr",[e],e),e.addEventListener(g,o,p(!1))}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(h,b),b.prototype=h.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),m){var E=v&&v.resolve();if(!w&&!v){var R=1,O=document.createTextNode(R);new m(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===g||a()})},{}],16:[function(t,e,n){function r(t){if(!s(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=l.generateSpanId(),m=l.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||c(t)&&p())&&(w.traceContextParentHeader=o(h,m),w.traceContextStateHeader=i(h,v,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&c(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,f)),w}function o(t,e){return"00-"+e+"-"+t+"-01"}function i(t,e,n,r,o){var i=0,a="",s=1,c="",f="";return o+"@nr="+i+"-"+s+"-"+n+"-"+r+"-"+t+"-"+a+"-"+c+"-"+f+"-"+e}function a(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(s.d.tk=i),btoa(JSON.stringify(s))}function s(t){return f()&&c(t)}function c(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var o=h(n.allowed_origins[r]);if(t.hostname===o.hostname&&t.protocol===o.protocol&&t.port===o.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function p(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var l=t(29),h=t(18);e.exports={generateTracePayload:r,shouldGenerateTrace:s}},{}],17:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,s("xhr",[e,n,this.startTime,this.endTime,"xhr"],this))}}function o(t,e){var n=c(e),r=t.params;r.hostname=n.hostname,r.port=n.port,r.protocol=n.protocol,r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=n,t.sameOrigin=n.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable&&!a.disabled){var s=t("handle"),c=t(18),f=t(16).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],p=d.length,l=t("id"),h=t(24),m=t(22),v=t(19),w=t(23),g=NREUM.o.REQ,y=window.XMLHttpRequest;a.features.xhr=!0,t(15),t(8),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,e.params=this.params||{},e.metrics=this.metrics||{},t.addEventListener("load",function(n){i(e,t)},w(!1)),h&&(h>34||h<10)||t.addEventListener("progress",function(t){e.lastSize=t.loaded},w(!1))}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;s<p;s++)e.addEventListener(d[s],this.listener,w(!1))}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("xhr-resolved",function(){this.endTime=a.now()}),u.on("addEventListener-end",function(t,e){e instanceof y&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof y&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof y&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=c(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var o=f(this.parsedOrigin);if(o&&(o.newrelicHeader||o.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),e(i.headers,o)&&(this.dt=o),t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&e(t[0].headers,o)&&(this.dt=o)}),u.on("fetch-start",function(t,e){this.params={},this.metrics={},this.startTime=a.now(),this.dt=e,t.length>=1&&(this.target=t[0]),t.length>=2&&(this.opts=t[1]);var n,r=this.opts||{},i=this.target;"string"==typeof i?n=i:"object"==typeof i&&i instanceof g?n=i.url:window.URL&&"object"==typeof i&&i instanceof URL&&(n=i.href),o(this,n);var s=(""+(i&&i instanceof g&&i.method||r.method||"GET")).toUpperCase();this.params.method=s,this.txSize=m(r.body)||0}),u.on("fetch-done",function(t,e){this.endTime=a.now(),this.params||(this.params={}),this.params.status=e?e.status:0;var n;"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var r={txSize:this.txSize,rxSize:n,duration:a.now()-this.startTime};s("xhr",[this.params,r,this.startTime,this.endTime,"fetch"],this)})}},{}],18:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,s=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||s),"/"===o.pathname&&(r[t]=o),o}},{}],19:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(22);e.exports=r},{}],20:[function(t,e,n){function r(){}function o(t,e,n,r){return function(){return u.recordSupportability("API/"+e+"/called"),i(t+e,[f.now()].concat(s(arguments)),n?null:this,r),n?void 0:this}}var i=t("handle"),a=t(32),s=t(33),c=t("ee").get("tracer"),f=t("loader"),u=t(25),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",h=l+"ixn-";a(p,function(t,e){d[e]=o(l,e,!0,"api")}),d.addPageAction=o(l,"addPageAction",!0),d.setCurrentRouteName=o(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(h+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=o(h,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),u.recordSupportability("API/noticeError/called"),i("err",[t,f.now(),!1,e])}},{}],21:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],22:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],23:[function(t,e,n){var r=!1;try{var o=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,o),window.removeEventListener("testPassive",null,o)}catch(i){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],24:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],25:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return i("storeMetric",n,null,"api"),n}function o(t,e){var n=[s,t,{name:t},e];return i("storeEventMetrics",n,null,"api"),n}var i=t("handle"),a="sm",s="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:s},recordSupportability:r,recordCustom:o}},{}],26:[function(t,e,n){function r(){return s.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,s=t(34);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=o},{}],27:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],28:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?p("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&p("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(c&&c<r.startTime)return;p("lcp",[r])}}function i(t){t.getEntries().forEach(function(t){t.hadRecentInput||p("cls",[t])})}function a(t){if(t instanceof v&&!g){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),g=!0,p("timing",["fi",e,n])}}function s(t){"hidden"===t&&(c=l.now(),p("pageHide",[c]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var c,f,u,d,p=t("handle"),l=t("loader"),h=t(31),m=t(23),v=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(w){}u=new PerformanceObserver(o);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(w){}d=new PerformanceObserver(i);try{d.observe({type:"layout-shift",buffered:!0})}catch(w){}}if("addEventListener"in document){var g=!1,y=["click","keydown","mousedown","pointerdown","touchstart"];y.forEach(function(t){document.addEventListener(t,a,m(!1))})}h(s)}},{}],29:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){return a(16)}function i(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,o=window.crypto||window.msCrypto;o&&o.getRandomValues&&Uint8Array&&(n=o.getRandomValues(new Uint8Array(31)));for(var i=[],a=0;a<t;a++)i.push(e().toString(16));return i.join("")}e.exports={generateUuid:r,generateSpanId:o,generateTraceId:i}},{}],30:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],31:[function(t,e,n){function r(t){function e(){t(s&&document[s]?document[s]:document[i]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,o(!1))}var o=t(23);e.exports=r;var i,a,s;"undefined"!=typeof document.hidden?(i="hidden",a="visibilitychange",s="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",a="webkitvisibilitychange",s="webkitVisibilityState")},{}],32:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],33:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],34:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?f(t,c,a):a()}function n(n,r,o,i,a){if(a!==!1&&(a=!0),!l.aborted||i){t&&a&&t(n,r,o);for(var s=e(o),c=m(n),f=c.length,u=0;u<f;u++)c[u].apply(s,r);var p=d[y[n]];return p&&p.push([x,n,r,s]),s}}function i(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return p[t]=p[t]||o(n)}function w(t,e){l.aborted||u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:i,addEventListener:i,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:s,aborted:!1};return x}function i(t){return f(t,c,a)}function a(){return new r}function s(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var c="nr@context",f=t("gos"),u=t(32),d={},p={},l=e.exports=o();e.exports.getOrSetContext=i,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!P++){var t=T.info=NREUM.info,e=v.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();c(R,function(e,n){t[e]||(t[e]=n)});var n=a();s("mark",["onload",n+T.offset],null,"api"),s("timing",["load",n]);var r=v.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=h+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function o(){"complete"===v.readyState&&i()}function i(){s("mark",["domContent",a()+T.offset],null,"api")}var a=t(26),s=t("handle"),c=t(32),f=t("ee"),u=t(30),d=t(27),p=t(21),l=t(23),h=p.getConfiguration("ssl")===!1?"http":"https",m=window,v=m.document,w="addEventListener",g="attachEvent",y=m.XMLHttpRequest,x=y&&y.prototype,b=!d(m.location);NREUM.o={ST:setTimeout,SI:m.setImmediate,CT:clearTimeout,XHR:y,REQ:m.Request,EV:m.Event,PR:m.Promise,MO:m.MutationObserver};var E=""+location,R={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1212.min.js"},O=y&&x&&x[w]&&!/CriOS/.test(navigator.userAgent),T=e.exports={offset:a.getLastTimestamp(),now:a,origin:E,features:{},xhrWrappable:O,userAgent:u,disabled:b};if(!b){t(20),t(28),v[w]?(v[w]("DOMContentLoaded",i,l(!1)),m[w]("load",r,l(!1))):(v[g]("onreadystatechange",o),m[g]("onload",r)),s("mark",["firstbyte",a.getLastTimestamp()],null,"api");var P=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,c,f){function nrWrapper(){var i,a,u,p;try{a=this,i=d(arguments),u="function"==typeof r?r(i,a):r||{}}catch(l){o([l,"",[i,a,c],u],t)}s(n+"start",[i,a,c],u,f);try{return p=e.apply(a,i)}catch(h){throw s(n+"err",[i,a,h],u,f),h}finally{s(n+"end",[i,a,p],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,i(e,nrWrapper,t),nrWrapper)}function r(t,e,r,o,i){r||(r="");var s,c,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)c=e[f],s=t[c],a(s)||(t[c]=n(s,u?c+r:r,o,c,i))}function s(n,r,i,a){if(!h||e){var s=h;h=!0;try{t.emit(n,r,i,e,a)}catch(c){o([c,n,r,i],t)}h=s}}return t||(t=u),n.inPlace=r,n.flag=p,n}function o(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function i(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(i){o([i],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function s(t,e){var n=e(t);return n[p]=t,i(t,n,u),n}function c(t,e,n){var r=t[e];t[e]=s(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(33),p="nr@original",l=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=s,e.exports.wrapInPlace=c,e.exports.argsToArray=f},{}]},{},["loader",2,17,5,3,4]);
        ;NREUM.loader_config={accountID:"3400058",trustKey:"3400058",agentID:"322550679",licenseKey:"NRJS-d96b2d024d6e0083bbb",applicationID:"322550679"}
        ;NREUM.info={beacon:"bam.eu01.nr-data.net",errorBeacon:"bam.eu01.nr-data.net",licenseKey:"NRJS-d96b2d024d6e0083bbb",applicationID:"322550679",sa:1}
        </script>
                    <link href="css/plugins.bundle.css" rel="stylesheet" type="text/css" />
            <link href="css/style.bundle.css" rel="stylesheet" type="text/css" />
            <link href="css/base/light.css" rel="stylesheet" type="text/css">
            <link href="css/menu/light.css" rel="stylesheet" type="text/css">
            <link href="css/brand/light.css" rel="stylesheet" type="text/css">
            <link href="css/aside/light.css" rel="stylesheet" type="text/css">
            <link href="css/common_new_cs.css" rel="stylesheet" type="text/css">
                <script>
          WebFont.load({
            google: {
              "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
              sessionStorage.fonts = true;
            }
          });
        </script>
        <script>
            var loadedflag = false;
            function Global() {
                this.bstate = '';
                this.self = new function() {
                    this.domain = "https://devapp.ledgers.cloud/";
                    this.page = window.location.href.split(/[?#]/)[0];
                    this.pagename = window.location.pathname.split("/").pop();
                    this.params = [];
                    this.paramname = [];
                    if (window.location.href.indexOf("?") >= 0) {
                        var paramlist = window.location.href.split("?").pop().split("&");
                        for (var i = 0; i < paramlist.length; i++) {
                            var parameter = paramlist[i].split("=");
                            this.paramname[i] = parameter[0];
                            this.params[i] = new Array(parameter[0], paramlist[i].slice(paramlist[i].indexOf("=") + 1));
                        }
                    }
                };
                this.user = new function() {
                    this.username = "shanju a";
                    this.gid = "1307959575";
                    this.email = "shanju@indiafilings.com";
                    this.bid = "10653721";
                    this.bmaster = "4";
                    this.bmaster_encode = "Q1BHRHV4ZjMvc1IyUFJzZjdneThNUT09";
                    this.gstin = "33AABCL3984G2ZH";
                                        this.control = {"ip":["110.227.255.109 ","122.176.74.165","14.98.44.138","10.225.9.115","10.225.8.1","106.51.152.115","123.201.136.110","219.91.197.70","103.48.182.213","14.99.11.66","219.91.197.66","182.156.238.170","182.156.209.182","103.48.182.213","123.201.137.234","106.51.1.191","103.96.96.69","122.165.184.113","172.168.1.34","182.156.202.242","192.168.1.1","103.219.205.124","103.66.78.135","10.225.4.185","210.18.141.154","120.63.185.19","210.18.179.156","103.66.78.165","182.156.238.170","117.216.44.172","103.219.205.33","103.246.242.162","103.246.242.163","103.246.242.164","103.246.242.165","103.246.242.166","183.82.249.185","103.221.68.234","210.18.179.175","120.138.14.196","219.91.197.65"],"export":0,"automation":1,"subscription":{"plan":5,"expiry":"2030-12-30"},"online_payments":1,"subscription_partner":{"status":1}};
                };
                this.basepath = this.self.domain + "m/";
                this.export = "lfrtip";
                this.APP = this.self.domain + "m/app/";
                this.API = this.self.domain + "m/api/";
                this.thispage = window.location.pathname.split("/").pop();

            } 
            var Ledgers = new Global();

            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    if(loadedflag===false){
                        var pagelod = document.getElementsByClassName("page-loader");
                        var mainbdy = document.getElementsByClassName("main_body");
                        if(pagelod.length>0) pagelod[0].style.display = 'none';
                        if(mainbdy.length>0) mainbdy[0].style.visibility = 'visible';
                        loadedflag = true;
                    }
                }, 10000)
            }, false);

            Array.prototype.forEach||(Array.prototype.forEach=function(r){var t,n;if(null==this)throw new TypeError("this is null or not defined");var o=Object(this),e=o.length>>>0;if("function"!=typeof r)throw new TypeError(r+" is not a function");for(arguments.length>1&&(t=arguments[1]),n=0;e>n;){var i;n in o&&(i=o[n],r.call(t,i,n,o)),n++}});
            window.MODULE="ledgers";
        </script>
                    <script>
                var KTAppOptions = {
                    "colors": {
                        "state": {
                            "brand": "#5d78ff",
                            "dark": "#282a3c",
                            "light": "#ffffff",
                            "primary": "#5867dd",
                            "success": "#34bfa3",
                            "info": "#36a3f7",
                            "warning": "#ffb822",
                            "danger": "#fd3995"
                        },
                        "base": {
                            "label": [
                                "#c5cbe3",
                                "#a1a8c3",
                                "#3d4465",
                                "#3e4466"
                            ],
                            "shape": [
                                "#f0f3ff",
                                "#d9dffa",
                                "#afb4d4",
                                "#646c9a"
                            ]
                        }
                    }
                };
            </script>
	        <script src="js/plugins.bundle.js"></script>
            <script src="js/scripts.bundle.js"></script>
            <script src="js/common_news.js" type="text/javascript"></script>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&types=(cities)&key=AIzaSyANqJobRvzfZ-hl4nUcKSCWTCrPOeo4diQ" type="text/javascript"></script>
<script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/jquery.easy-autocomplete.min.js" type="text/javascript"></script>
<link href="https://devapp.ledgers.cloud/m/app/assets/custom-css/easy-autocomplete.min.css" rel="stylesheet" type="text/css" />
<script src="/m/app/employee/js/employee.js?v=1.1" type="text/javascript"></script>
<link href="https://devapp.ledgers.cloud/m/app/assets/custom-css/common.css" rel="stylesheet" type="text/css" />
<!-- modal fade modal-scroll mCustomScrollbar _mCS_5 mCS-autoHide -->

<form action="post" class="userEditForm " >
    <div class=""  data-keyboard="false" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="" role="document">
            <div class="dynbody">
                <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid" >
                    <div class="kt-sec kt-container--fluid kt-grid__item kt-grid__item--fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="kt-portlet kt-portlet--responsive-mobile mb-2 mt-2">
                                    <div class="kt-portlet__body p-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="ul_filter pl-0 mb-0" style="justify-content: flex-start;">
                                                    <div class="col-lg-9 pl-0">
                                                        <li>
                                                            <div class="btn-group btn-group-sm btn_filter" role="group" aria-label="Large button group">
                                                                <button type="button"  class="btn btn-outline-primary add_cust_filter a1 san info_li active">Insurance</button>
                                                                <!-- <button type="button"  class="btn btn-outline-primary add_cust_filter a1 san addr_li">Address</button>--> 
                                                            </div>
                                                        </li>
                                                    </div>
                                                    <div class="col-lg-3 pr-0">
                                                        <li style="float: right;">
                                                            <button type="button" class="btn btn-danger btn-sm" class="close" onclick="parent.iframe_close();">
                                                                <i class="fa fa-close"></i> Cancel
                                                            </button>
                                                            <input type="hidden" value="0" id="employee_status" name="employee_status">
                                                            <input type="hidden" value="" id="gid" name="gid">
                                                            <input type="hidden" value="" id="bid" name="bid">
                                                            <button type="submit" class="btn btn-primary btn-sm cust_add " id="btval" >
                                                                <i class="fa fa-plus"></i> Add Insurance
                                                            </button>
                                                        </li>
                                                    </div>
                                                    <!-- <li>
                                                        <div class='input-group' id='invoice_daterange'>
                                                            <input type='text' class="form-control  form-control-sm  m-input date_filter" readonly placeholder="Date range" />
                                                            <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </li> -->
                                                </ul>    
                                            </div>
                                                            
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="kt-portlet kt-portlet--responsive-mobile">
                                    <div class="kt-portlet__body " style="padding:20px;">
                                        <div class="info_addr">
                                            <div class="tab-pane active" id="m_portlet_tab_info" aria-expanded="false">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <span class="required m--font-danger" aria-required="true" style="display:none;"> * </span>
                                                            <a style="float: right; "target="_blank" href="https://ledgers.indiafilings.com/m/api/contact_connect/auth-transfer?auth=google&amp;operation=import-contacts">
                                                            </a>
                                                            <div class="input-group" style="width:100%;">
                                                                <!-- <select class="form-control" name="title" id="title" style="width:25%;">
                                                                    <option value="">Title</option>
                                                                    <option value="MR.">MR.</option>
                                                                    <option value="MRS.">MRS.</option>
                                                                    <option value="MISS.">MISS.</option>
                                                                    <option value="MS.">MS.</option>
                                                                </select> -->
                                                                <input type="text" class="form-control customer-name" name="name" style="width:75%;" placeholder ="Employee Name"  id="name" oninput="this.value=this.value.replace(/[^A-Za-z_@.!#$%&*-+\s]/g,'');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- <div class="form-group">
                                                            <span class="required m--font-danger mbck" aria-required="true" style="display:none;"> * </span>
                                                                <label style="display: none;float:right;" class="m--font-danger mobile_exists">Mobile already exists</label>
                                                                <a style="float: right; "target="_blank" href="https://ledgers.indiafilings.com/m/api/contact_connect/auth-transfer?auth=google&amp;operation=import-contacts">
                                                                </a>
                                                            <input type="tel"  maxlength="10" class="form-control" name="mobile" placeholder ="Mobile Number" id="mobile">
                                                        </div> -->
                                                        <div class="form-group">
                                                        <input type="number" class="form-control" name="age" placeholder="Age" id="age">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Search</label> 
                                                            <a style="float: right; "target="_blank" href="https://ledgers.indiafilings.com/m/api/contact_connect/auth-transfer?auth=google&amp;operation=import-contacts">
                                                                Sync from Google Contacts
                                                            </a>
                                                            <input type="text" class="form-control"  id="search" name="" placeholder="Search Email or Mobile or Name">
                                                        </div>
                                                    </div> -->
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="dob" placeholder="Date of Birth formate(dd/mm/yyyy)" id="dob">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="aadhaar" id="aadhaar" placeholder="Enter Aadhaar Number" maxlength="14">  
                                                        </div>
                                                    </div>
                                            
                                                    <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <span class="required m--font-danger" aria-required="true" style="display:none;"> * </span>
                                                            <select class="form-control" name="entity" id="entity" style="width:100%;" title="Choose Type">
                                                                <option selected=""> - Select Type - </option>
                                                                <option value="Individual" >Individual</option>
                                                                <option value="Proprietorship">Proprietorship</option>
                                                                <option value="Partnership">Partnership</option>
                                                                <option value="Hindu Undivided Family">Hindu Undivided Family</option>
                                                                <option value="Private Limited Company">Private Limited Company</option>
                                                                <option value="Public Limited Company">Public Limited Company</option>
                                                                <option value="One Person Company">One Person Company</option>
                                                                <option value="Society/Club/Trust/Association of Persons">Society/Club/Trust/Association of Persons</option>
                                                                <option value="Government Department">Government Department</option>
                                                                <option value="Public Sector Undertaking">Public Sector Undertaking</option>
                                                                <option value="Unlimited Company">Unlimited Company</option>
                                                                <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                                                <option value="Local Authority">Local Authority</option>
                                                                <option value="Statutory Body">Statutory Body</option>
                                                                <option value="Foreign Limited Liability Partnership">Foreign Limited   Liability Partnership</option>
                                                                <option value="Foreign Company Registered (in India)">Foreign Company   Registered  (in India)</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Designation"  name="designation" id="designation">
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="tab-pane active mt-5" id="m_portlet_tab_info" aria-expanded="false">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group" style="width:100%;">
                                                              <input type="text" class="form-control customer-name" name="name" style="width:75%;" placeholder ="SPouce Name"  id="name" oninput="this.value=this.value.replace(/[^A-Za-z_@.!#$%&*-+\s]/g,'');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                           <input type="number"  class="form-control" name="age" placeholder="Age" id="age">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="dob" placeholder="Date of Birth formate(dd/mm/yyyy)" id="dob">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="aadhaar" id="aadhaar" placeholder="Enter Aadhaar Number" maxlength="14">  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane active mt-5 children" id="children" aria-expanded="false">
                                                
                                            </div>
                                            <button type="button"  class="btn btn-outline-primary add_cust  children_no active">Add children Details</button>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<style>
    .kt-datatable.kt-datatable--default > .kt-datatable__table > .kt-datatable__body .kt-datatable__row > .kt-datatable__cell{ 
        font-size:13px; 
    }
    .kt-datatable__cell .dropdown .btn.btn-icon {
        height: 2rem;
        width: 2rem;
    }
    .dropdown-toggle:hover + ul.dropdown-menu {
        display: block;
    }
    .status_drop{
        top:unset;
        left:unset;
        right:0;
    }
    .dropdown-toggle:after{
        display:none;
    }
    ul.dropdown-menu.drop_est_det{
        width:450px;
        padding:10px;
    }
    .ul_filter{
        display:flex;
        justify-content:flex-end;
        list-style:none;
        align-items:center;
    }
    .ul_filter li {
        margin-right: 8px;
    }
    .ul_filter li:last-child {
        margin-right: 0px;
    }
    *::-webkit-scrollbar {
        width: 4px!important;
        height: 0px!important;
        background-color: #F5F5F5;
    }
     #m_portlet_tab_bank, #m_portlet_tab_group{
        display:none;
    }
    /* #toast-container > .quickview_sec{
        z-index: 16777002!important;
    } */
    /* alert */
    
</style>
<script type="text/javascript" src="https://ifpayment.s3-accelerate.amazonaws.com/notes/psl.min.js "></script>
<link href="/m/app/assets/custom-css/common_new_cs.css" rel="stylesheet" type="text/css">
<script src="/m/app/assets/custom-js/common_news.js" type="text/javascript"></script>
<script src="/n/app/assets/js/pages/custom/user/profile.js" type="text/javascript"></script>
<script src="/m/app/assets/custom-js/qrious.js"></script>
<script type="text/javascript" src="https://ifpayment.s3-accelerate.amazonaws.com/notes/psl.min.js "></script>
<script type="text/javascript" src="https://auth.workid.global/auth.js"></script>
<script src="/m/app/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/m/app/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script src="/m/app/assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/m/app/assets/custom-js/metronic-alerts.min.js" type="text/javascript"></script>    <script src="/m/app/assets/custom-js/url.min.js" type="text/javascript"></script>
<script src="/m/app/assets/custom-js/moment.min.js" type="text/javascript"></script>
<script src="/m/app/assets/custom-js/shortcut.js" type="text/javascript"></script>
<script type="text/javascript">
var count=1;
$(document).on('click','.children_no', function(){
   
   
   $('.children').append('<h5>'+count+++'.Children Details<h5><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" class="form-control customer-name" name="name"  placeholder ="Children Name"  id="name""></div></div> <div class="col-md-6"><div class="form-group"><input type="number" class="form-control" name="age" placeholder="Age" id="age"></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" class="form-control" name="dob" placeholder="Date of Birth formate(dd/mm/yyyy)" id="dob"></div></div><div class="col-md-6"><div class="form-group"> <input type="number" class="form-control" name="aadhaar" id="aadhaar" placeholder="Enter Aadhaar Number" maxlength="14"></div></div></div>');
  
    
});
 

$(document).on('click','.info_li', function(){
    $(".info_addr").css('display','block');
    // $("#m_portlet_tab_addr").css('display','none');
    $("#m_portlet_tab_bank").css('display','none');
    $("#m_portlet_tab_group").css('display','none');
    
});
// $(document).on('click','.addr_li', function(){
//     $(".info_addr").css('display','none');
//     $("#m_portlet_tab_addr").css('display','block');
//     $("#m_portlet_tab_bank").css('display','none');
//     $("#m_portlet_tab_group").css('display','none');
//     $('#type-btn').html("Address");
// });
$(document).on('click','.group_li', function(){
    $(".info_addr").css('display','none');
    // $("#m_portlet_tab_addr").css('display','none');
    $("#m_portlet_tab_bank").css('display','none'); 
    $("#m_portlet_tab_group").css('display','block');
    
});
$(document).on('click','.bank_li', function(){
    $(".info_addr").css('display','none');
    //$("#m_portlet_tab_addr").css('display','none');
    $("#m_portlet_tab_bank").css('display','block');
    $("#m_portlet_tab_group").css('display','none');
    
});
$(document).on('click', '.add_cust_filter', function(){
    $('.add_cust_filter').removeClass('active');
    $(this).addClass('active');
});
// $(document).on('click', '.add_addr_filter', function(){
//     $('.add_addr_filter').removeClass('active');
//     $(this).addClass('active');
// });

//Tabclick 
var tab_id = getUrlVars()['tab'];
var focus = getUrlVars()['focus'];
if(tab_id == 1){
    $('.info_li').trigger('click');
}
else if(tab_id == 2){
    $('.addr_li').trigger('click');
}else if(tab_id == 3){
    $('.bank_li').trigger('click');
}

if(focus == 'name'){
    $('input[name="name"]').focus();
}else if(focus == 'email'){
    $('input[name="email"]').focus();
}else if(focus == 'mobile'){
    $('input[name="mobile"]').focus();
}else if(focus == 'pan'){
    $('input[name="pan"]').focus();
}else if(focus == 'pf'){
    $('select[name="pf"]').focus();
}else if(focus == 'esi'){
    $('select[name="esi"]').focus();
}else if(focus == 'aadhaar'){
    $('select[name="aadhaar_number"]').focus();
}else if(focus == 'designation'){
    $('select[name="designation"]').focus();
}

$('#name').blur(function (event) { 
    $("#group_emp_name").val($("#name").val());
});
$('#dob').blur(function (event) {   
  var date = $(this).val(); 
  var datearray = date.split("/");

  var d = new Date();
  var n = d.getFullYear();
  var diff=n-datearray[2];
  if(diff>0)
  {
  $("#age").val(diff-1);
  }
  else
  {
    parent.alert({
                'msg': 'Please enter the valid formate for date of birth',
                'type': 'danger'
            });
     
  }




});
initAuth(function(){});
var bid="10653721";
      var options = {

        url: function(phrase) {
           // return Ledgers.API + "customer/list-customer"
           return "https://egfnybjikh.execute-api.ap-south-1.amazonaws.com/ledgers-api/m/api"

        },

        getValue: function(element) {
            var result=element.name+' | '+element.email+' | '+element.mobile;
            return result;

        },
        requestDelay: 500,
        ajaxSettings: {
            dataType: "json",
            method: "GET",
            crossDomain: true,
            data: {
              //  dataType: "json",
                "operation": "employee-search",
                "bid":bid
            },
            beforeSend: function(xhr) {
                     xhr.setRequestHeader('idtoken', GetCookie('workid_token'));
             }
        },
        list: {
            // enabled: false,
            onClickEvent: function() {
                var selectedItemValue =  $("#search").getSelectedItemData();
                 var out=selectedItemValue.name+' | '+selectedItemValue.email+' | '+selectedItemValue.mobile;
                $("#search").val(out);
                if(selectedItemValue!=''){
                    var cust_name=$.trim(selectedItemValue.name);
                    var cust_email=$.trim(selectedItemValue.email);
                    var cust_mobile=$.trim(selectedItemValue.mobile);
                    $("#name").val(cust_name);
                    $("#email").val(cust_email);
                    $("#mobile").val(parseInt(cust_mobile));
                    
                }
                          
            },
            onHideListEvent: function() {
                
            }
        },
        preparePostData: function(data) {
            data.qdata = $("#search").val().toLowerCase();
            return data;
        },

        requestDelay: 400
    };
    $("#search").easyAutocomplete(options);
	
	
$("#account_number").change(function(){
	
var account_number=this.value;

if(account_number==1)
{	
	$("#bank_acc_name").val("");
	$("#bank_acc_no").val("");
	$("#bank_name").val("");    
	$("#branch_name").val("");
	$("#bank_city").val("");
	$("#ifsc_code").val("");
	$("#account_type").val("2");
}
else
{
	var id="3638";
	
	 $.ajax({
        type: "POST",
        url: Ledgers.API + "employee/get-employee",
        data: {
            'id': id
        },
        async: async,
        dataType: "JSON",
        success: function(result) {
            
            
            var bank_details=Object.keys(result.employee[0].bank);
            var bank_acc_details=Object.values(result.employee[0].bank);
            
			         
           
				 if(bank_details){
					$("#bank_acc_name").val(result.employee[0].bank[account_number]['name']);
					$("#bank_acc_no").val(result.employee[0].bank[account_number]['acc_no']);
					$("#bank_name").val(result.employee[0].bank[account_number]['bank']);    
					$("#branch_name").val(result.employee[0].bank[account_number]['branch']);
					$("#bank_city").val(result.employee[0].bank[account_number]['city']);
					$("#ifsc_code").val(result.employee[0].bank[account_number]['ifsc']);
					$("#account_type").val(result.employee[0].bank[account_number]['type']);
					
				//    if(result.employee[0].bank.branch!=undefined || result.employee[0].bank.branch!='undefined'){
				//          if ( $("#branch_name option[value='"+result.employee[0].bank.branch+"']").length == 0 ){
				//          $("#branch_name").append('<option selected>'+result.employee[0].bank.branch+'</option>');
				//     }else{
				//          $("#branch_name").val(result.employee[0].bank.branch);
				//     }
				//    }
				  
					

				}
			
        }
    });
	
}


        
    }); 
    </script>