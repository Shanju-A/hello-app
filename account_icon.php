
<!DOCTYPE html>
    <html lang="en">
      <head>
        <title>LEDGERS - GST Software</title>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MSH2BFC');</script>
        <!-- End Google Tag Manager -->
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
                    this.username = "Sai Vignesh M";
                    this.gid = "1247442552";
                    this.email = "saivignesh@indiafilings.com";
                    this.bid = "1538826243457";
                    this.bmaster = "13804";
                    this.bmaster_encode = "K09PMi9waEtGMFlwUmIxbU9QQ005QT09";
                    this.gstin = "AADCI6142A";
                                        this.control = {"ip":[],"export":1,"automation":{"inv_fllwups":1},"subscription":{"plan":"4","expiry":"2019-10-06"},"online_payments":1};
                };
                this.basepath = this.self.domain + "m/";
                this.export = "Blfrtip";
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
                    <style> .main_body { visibility: hidden; } *::-webkit-scrollbar-track {-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);border-radius: 10px;background-color: #F5F5F5;}*::-webkit-scrollbar {width: 5px;height: 7px;background-color: #F5F5F5;}*::-webkit-scrollbar-thumb {border-radius: 10px;-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);background-color: rgba(85, 85, 85, 0.3);}body::-webkit-scrollbar-track,body::-webkit-scrollbar-thumb {margin-top: 70px;}@-webkit-keyframes pound{to{transform: scale(1.1);}}@keyframes pound{to{transform:scale(1.1);}}</style>
      </head>
            <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed  kt-page--loading">
            <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
                <div class="kt-header-mobile__toolbar">
                    <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
                    <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
                </div>
            </div>
            <div class="kt-grid kt-grid--hor kt-grid--root">
			    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed">
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
            <div class="kt-header-logo mr-0">
                <a href="#">
                                            <img alt="Logo" src="https://ledgers.s3.ap-south-1.amazonaws.com/13804/1629699631.png" style="width:120px;" />
                                    </a>
            </div>
            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ml-0">
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="kt-menu__link kt-menu__toggle" ><span class="kt-menu__link-text">Business</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/business/dashboard" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">My Business</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/payments/manage-online-transactions" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Payment Gateway</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Accounting</span>
                                        <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="/m/app/chart-of-accounts/manage-smart-accounting" class="kt-menu__link ">
                                                    <span class="kt-menu__link-text">Accounting</span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="javascript:;" onclick="popup('accounting-partner')" class="kt-menu__link ">
                                                    <span class="kt-menu__link-text">Support</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="kt-menu__item kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Data Port</span>
                                        <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                                <a href="javascript:;" class="kt-menu__link ">
                                                    <span class="kt-menu__link-text">Import Data</span>
                                                </a>
                                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                    <ul class="kt-menu__subnav">
                                                        
                                                        <li class="kt-menu__item " aria-haspopup="true">
                                                            <a href="/m/app/import/import-purchase-invoice-standard" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="kt-menu__link-text">Import Purchase Invoices</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-menu__item " aria-haspopup="true">
                                                            <a href="/m/app/import/import-product-standard" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                                <span class="kt-menu__link-text">Import Goods Services</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-menu__item " aria-haspopup="true">
                                                            <a href="/m/app/import/import-customer" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                                <span class="kt-menu__link-text">Import Customers</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-menu__item " aria-haspopup="true">
                                                            <a href="/m/app/import/import-supplier" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                                <span class="kt-menu__link-text">Import Suppliers</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-menu__item " aria-haspopup="true">
                                                            <a href="/m/app/import/import-invoice-amazon" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                                <span class="kt-menu__link-text">Import Amazon Invoices</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-menu__item " aria-haspopup="true">
                                                            <a href="/m/app/import/import-receipt" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                                <span class="kt-menu__link-text">Import Receipt</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-menu__item " aria-haspopup="true">
                                                            <a href="/m/app/import/import-voucher" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                                <span class="kt-menu__link-text">Import Voucher</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="kt-menu__item" aria-haspopup="true">
                                                <a href="/m/app/export/manage-export" class="kt-menu__link" id="">
                                                    <span class="kt-menu__link-text">Export Data</span></span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item" aria-haspopup="true">
                                                <a href="/m/app/user/report-list" class="kt-menu__link" id="">
                                                    <span class="kt-menu__link-text">Download Reports</span></span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item" aria-haspopup="true">
                                                <a href="javascript:;" class="kt-menu__link" id="">
                                                    <span class="kt-menu__link-text">Tally Integration</span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="kt-menu__item kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Settings</span>
                                        <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="/m/app/business/manage-business" class="kt-menu__link" id="">
                                                    <span class="kt-menu__link-text">Basic Settings</span></span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="https://dbiz.ledgers.cloud/" target= "_blank" class="kt-menu__link" id="">
                                                    <span class="kt-menu__link-text">Advanced Settings</span></span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item" aria-haspopup="true">
                                                <a href="/m/app/place/manage-place" class="kt-menu__link" id="">
                                                    <span class="kt-menu__link-text">Branch Management</span></span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item" aria-haspopup="true">
                                                <a href="/m/app/user/manage-user" class="kt-menu__link" id="">
                                                    <span class="kt-menu__link-text">User Management</span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="javascript:;" onclick="popup('accounting-partner')" class="kt-menu__link ">
                                        <span class="kt-menu__link-text">Support</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Contacts</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/connectors/list-contacts?tab=customer" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Customers</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/connectors/list-contacts?tab=supplier" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Suppliers</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/connectors/list-contacts?tab=employee" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Employees</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/connectors/list-contacts" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">All Contacts</span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Catalog</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/product/manage-product?type=1&mode=1" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Sales</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/product/manage-product?type=1&mode=2" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Purchases</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/module/?m=inventory" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Inventory</span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Revenue</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/invoice/manage-invoice" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Invoice</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/invoice/manage-estimate" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Estimate</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/invoice/manage-receipt" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Receipt</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/invoice/manage-bos" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Bill of Supply</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/invoice/manage-receivable" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Receivable</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/invoice/manage-creditnote" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Credit Note</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/invoice/manage-dc" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">DC</span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Expenses</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/purchase/purchase-invoice?operation=create-purchase-invoice" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Create Purchase Invoice</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/purchase/manage-purchaseorder" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Purchase Orders</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/purchase/manage-purchase" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Purchase Invoices</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/cash/manage-vouchers" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Vouchers & Payroll</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/purchase/manage-payable" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Accounts Payable</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/purchase/manage-debitnote" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Debit Note</span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Banking</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="javascript:;" onclick="Payments.init({contact:{cid:'', type:''}});" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Initiate IMPS/NEFT/RTGS</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/banking/connect-bank" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Bank Accounts</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/icici/dashboard" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">ICICI Bank</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/payments/manage-online-transactions" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Payment Gateway</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/module/?m=eql&amp;path=YWRtaW4vaG9tZQ" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">EQL Business Cards</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/cheque/manage-cheque" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Cheque Register</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="https://kyc.ledgers.cloud/bank-account.php?token=" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Open Bank Account</span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Taxation</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/gst/gst-consolidated-view" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">GST Return Filing</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/gst/dashboard" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">GST Payment</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/gst/itc-reconciliation" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Input Tax Credit</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">	
                                        <span class="kt-menu__link-text">GST eWay Bill</span>
                                        <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="/m/app/ewaybill/create-ewaybill" class="kt-menu__link ">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="kt-menu__link-text">Generate eWay Bill</span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="/m/app/ewaybill/create-ewaybill-interbranch" class="kt-menu__link ">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="kt-menu__link-text">Branch Transfer eWay Bill</span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="/m/app/ewaybill/manage-ewaybill" class="kt-menu__link ">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="kt-menu__link-text">Manage eWay Bill</span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="javascript:;" class="kt-menu__link " onclick="popup('ewaybill-setup')">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="kt-menu__link-text">eWay Bill Settings</span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="/m/app/module/?m=ipaperless&data=EWAY" class="kt-menu__link ">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="kt-menu__link-text">Upload eWay Bill</span>
                                                </a>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true">
                                                <a href="https://ewaybill.nic.in/" class="kt-menu__link ">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="kt-menu__link-text">eWay Bill Portal</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/module/?m=tds-dashboard&p=index.php" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">TDS Compliance</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/business/pan/pan-verification" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Income Tax eFiling</span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">HR</span><i class="kt-menu__ver-arrow la la-angle-down"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/user/attendance-register" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Attendance</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/module/?m=conqhr-employer&data=employer" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Employer Portal</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="/m/app/module/?m=conqhr-employer&amp;data=employee" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Employee Portal</span></span>
                                    </a>
                                </li>
                                <li class="kt-menu__item" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link" id="">
                                        <span class="kt-menu__link-text">Payroll</span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="kt-header__topbar">
            <!--begin: Quick panel toggler -->
            <div class="kt-header__topbar-item">
                <span class="d-flex align-items-center" id="">
                    <div class="input-group-sm d-flex" style="width:140px;">
                        <input type="text" class="form-control" placeholder="Search" id="quicksearch" name="q">
                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i
                                    class="la la-search"></i></span></div>
                    </div>
                </span>
            </div>
            <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(901px, 5px, 0px);">
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="/m/api/business/change" class="kt-nav__link">
                                <i class="flaticon-reply"></i>
                                <span class="kt-nav__link-text">&nbsp;&nbsp;Switch Business</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="/m/app/new/welcome" class="kt-nav__link">
                                <i class="flaticon-plus"></i>
                                <span class="kt-nav__link-text">&nbsp;&nbsp;Create Ledgers</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="/m/api/business/logout" class="kt-nav__link">
                                <i class="flaticon-logout"></i>
                                <span class="kt-nav__link-text">&nbsp;&nbsp;Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor " id="kt_content">    <style>*::-webkit-scrollbar-track {-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);border-radius: 10px;background-color: #F5F5F5;}*::-webkit-scrollbar {width: 5px;height: 7px;background-color: #F5F5F5;}*::-webkit-scrollbar-thumb {border-radius: 10px;-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);background-color: rgba(85, 85, 85, 0.3);}body::-webkit-scrollbar-track,body::-webkit-scrollbar-thumb {margin-top: 70px;}</style>
    <script src="https://devapp.ledgers.cloud/m/app/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="https://devapp.ledgers.cloud/m/app/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    <script src="https://devapp.ledgers.cloud/m/app/assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/metronic-alerts.min.js" type="text/javascript"></script>    <script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/url.min.js" type="text/javascript"></script>
    <script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/moment.min.js" type="text/javascript"></script>
    <script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/shortcut.js" type="text/javascript"></script>
    <style>
.kt-timeline-1:after {
  content: '';
  position: absolute;
  width: .0rem;
  top: 0;
  bottom: 3rem;
  left: -50% !important;
  margin-left: -.142rem;
}
.kt-timeline-1::after {
  background-color: none !important;
}
.kt-tabs-line .kt-tabs__item {
    margin-right: 10px !important;
   
}
.vert_tab{
    float:left;
    width:100%;
    position:relative;
}
.vert_tab .nav{
    flex-direction:column;
}
.vert_tab .nav.nav-pills .nav-link.active {
color: #5867DD;
}
.vert_tab .nav-pills .nav-link.active{
    background-color: #F2F6F9;
}
.vert_tab .nav.nav-pills .nav-item{
    
    margin-bottom: 10px;
}
.vert_tab .nav.nav-pills .nav-link{
    font-size:13px;
}
.user_name{
    font-weight:600;
}
.user_dtl{
    font-size:13px;
    font-weight:400;
}
.kt-portlet .kt-portlet__head{
    padding:0px 0px;
    height: 3.1rem;
}
.ul_filter{
    display:flex;
    justify-content:flex-end;
    list-style:none;
    align-items:center;
}
.rec_sec{
    display:none;
}
.table.tax_table thead tr th{
    font-size:1rem;
    font-weight:600;
}
.table.tax_table tbody tr td{
    font-size:13px;
    font-weight:400;
}
</style>
<script src="/m/app/assets/demo/default/custom/components/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>

        <!-- New Section Start-->
    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid" >
        
        <div class="kt-sec kt-container--fluid kt-grid__item kt-grid__item--fluid">

            <div class="row">
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="kt-portlet sticky "  style="background: transparent;box-shadow: none;margin-bottom:0px!important;">
                            <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                                <i class="la la-close"></i>
                            </button>
                            <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside" style="box-shadow: none;">

                                <div class="kt-portlet kt-portlet--height-fluid-" style="background:transparent;box-shadow: none;margin-bottom:0px!important;">
                                    <div class="kt-portlet__body kt-portlet__body--fit-y p-0">
                                        <div class="kt-widget kt-widget--user-profile-1 pb-0 mt-0">
                                            <div class="kt-widget__body">
                                                <div class="kt-portlet mb-2">
                                                    <div class="kt-portlet__body p-3">
                                                        <div class="kt-widget__head mb-222">
                                                            <!-- <div class="kt-widget__media pr-3">
                                                                <div class="kt-badge kt-badge--xl kt-badge--primary kt-badge--rounded hname_let" style="font-size:25px;"></div>          
                                                            </div> -->
                                                            <div class="kt-widget__content pt-0 pb-3">
                                                                <div class="kt-widget__section">
                                                                    <a href="javascript:;" class="kt-widget__username hname1">    </a>  
                                                                    <span class="kt-widget__subtitle hbus1" style="font-size:14px;">  </span>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget__content pb-3 pt-0">
                                                            
                                                            <div >
                                                                
                                                                <a href="#" class="hemail " style=" font-size:14px;"></a>
                                                            </div>
                                                            <div >
                                                                
                                                                <a href="#" class="hmobile " style=" font-size:14px;"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-widget__items mt-0 p-4 mb-3" style="background: #fff;border-radius:4px;">
                                                    <a class="kt-widget__item kt-widget__item--active tab_li new_dash_li" onClick="window.scrollTo(0, 0)">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                            <i class="fa fa-check-circle text-success new_dash_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                &nbsp;Dashboard
                                                            </span>
                                                        </span>
                                                    </a>
                                                    
                                                    <a class="kt-widget__item kt-widget__item tab_li home_lii" onClick="window.scrollTo(0, 0)">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-check-circle note_icon text-success notes_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                &nbsp;Notes
                                                            </span>
                                                        </span>
                                                    </a>
                                                    
                                                    <a class="kt-widget__item  tab_li bank_li" >
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-times-circle bank_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                &nbsp;Bank Statement
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <a class="kt-widget__item tab_li account_li">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-times-circle acct_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                &nbsp;Account Statement
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <a class="kt-widget__item tab_li salary_li" >
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-times-circle salary_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                &nbsp;Salary Payments
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <!-- <a class="kt-widget__item  com_menu_li einv_li">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-times-circle einv_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                GST eInvoices
                                                            </span>
                                                        </span>
                                                    </a> -->
                                                    <!-- <a class="kt-widget__item  tab_li acct_li">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-times-circle acct_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                Account Statement
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <a class="kt-widget__item  tab_li gst_li">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-times-circle gst_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                GST Compliance
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <a class="kt-widget__item  tab_li bnk_li">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <i class="fa fa-times-circle bank_icon"></i>
                                                            </span>
                                                            <span class="kt-widget__desc">
                                                                Bank Statement
                                                            </span>
                                                        </span>
                                                    </a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="kt-portlet sticky">
                            <div class="kt-portlet__body pt-3 pb-3 pl-4 pr-4">
                                <div class="kt-widget4">
                                    <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon pr-2">
                                            <span class="btn btn-label-success pt-2 pb-2 pr-2"><i class="fa fa-plus"></i></span>
                                        </span>
                                        <div class="kt-widget4__info">
                                            <a href="javascript:;" class="kt-widget4__username">
                                                Early
                                            </a>
                                        </div>
                                        <span class="kt-widget4__status" id="early_count">
                                            0
                                        </span>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon pr-2">
                                            <span class="btn btn-label-info pt-2 pb-2 pr-2"><i class="fa fa-plus"></i></span>
                                        </span>
                                        <div class="kt-widget4__info">
                                            <a href="javascript:;" class="kt-widget4__username">
                                                Ontime
                                            </a>
                                        </div>
                                        <span class="kt-widget4__status" id="ontime_count">
                                            0
                                        </span>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon pr-2">
                                            <span class="btn btn-label-danger pt-2 pb-2 pr-2"><i class="fa fa-minus"></i></span>
                                        </span>
                                        <div class="kt-widget4__info">
                                            <a href="javascript:;" class="kt-widget4__username">
                                                Late
                                            </a>
                                        </div>
                                        <span class="kt-widget4__status" id="late_count">
                                            0
                                        </span>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon pr-2">
                                            <span class="btn btn-label-info pt-2 pb-2 pr-2"><i class="fa fa-plus"></i></span>
                                        </span>
                                        <div class="kt-widget4__info">
                                            <a href="javascript:;" class="kt-widget4__username">
                                                Onduty
                                            </a>
                                        </div>
                                        <span class="kt-widget4__status" id="onduty_count">
                                            0
                                        </span>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon pr-2">
                                            <span class="btn btn-label-danger pt-2 pb-2 pr-2"><i class="fa fa-minus"></i></span>
                                        </span>
                                        <div class="kt-widget4__info">
                                            <a href="javascript:;" class="kt-widget4__username">
                                                Leave
                                            </a>
                                        </div>
                                        <span class="kt-widget4__status" id="leave_count">
                                            0
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Center Section Start-->
                <div class="col-lg-9 dash_sec">
                    <div class="kt-portlet kt-portlet--responsive-mobile page_1">
                        <div class="kt-portlet__body p-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Contact Name</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','name');"><span class="hname tabl_size tabl_b1" ></span></a></td>
                                            <tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','email');"><span class="hemail tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>Mobile</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','mobile');"><span class="hmobile tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>Designation</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','designation');"><span class="desgin_emp tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>eKYC</th>
                                                <td><a href="javascript:;"><span class="kyc_emp tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>PAN</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','pan');"><span class="pan_list tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>Aadhaar</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','aadhaar');"><span class="aadhaar_list tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','address');"><span class="tabl_size tabl_b1" id="address"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>Bank<div class="row add_banks"><div class="col-md-12"><a class="tabl_size tabl_b1"  onclick="popup('employee','','1041','1','bank');" href="javascript:;" style="color:#b6b4b4;">Add Bank</a></div></div>
                                                </th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','bank');"><span class="tabl_size tabl_b1" id="bank_list"></span></a></td>
                                            </tr>
                                            
                                            <tr>
                                                <th>PF Number</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','pf');"><span class="pf_list tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>ESI Number</th>
                                                <td><a href="javascript:;" onclick="popup('employee','','1041','1','esi');"><span class="esi_list tabl_size tabl_b1"></span></a></td>
                                            </tr>
                                            <tr>
                                                <th>Access</th>
                                                <td><span class="access_list tabl_size tabl_b1"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Created by</th>
                                                <td class=""><span class="add_by tabl_size tabl_b1"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Created on</th>
                                                <td class=""><span class="add_on tabl_size tabl_b1"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>          
                                </div>              
                            </div>   
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-9 notes_sec">
                    <div class="kt-portlet kt-portlet--responsive-mobile page_1">
                        <div class="kt-portlet__body">
                            <div id="addnotes">
                                <div class="input-group " >
                                    <textarea class="form-control notes-content" placeholder="Create Notes" id="add_notes" title="Please use Ctrl+Enter to create notes." rows="1" aria-describedby="btnGroupAddon" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 35px; border: 3px solid #CED4DA;"></textarea>
                                        <a href="javascript:;" class="btn btn-primary btn-icon put-notes" id="add_notes_btn" style="height:34px; border-radius:0">
                                        <i class="fa fa-check"></i>
                                        </a>
                                </div>
                            </div>
                            <div class="note_height" style="overflow-y:auto;overflow-x:hidden;">
                                <div class="no_note" style="min-height:430px;">
                                    <div class="row align-items-center" style="min-height:430px;"> 
                                        <div class="col-md-12 text-center">      
                                            <img src="/m/app/customer/image/customer_nodata_new.jpeg" class="img-fluid" style="width:230px;">
                                            
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <h6 class="mt-0">No Notes</h6>
                                            <p class="">There are no notes available for this account yet.</p>
                                        </div>
                                    </div>       
                                </div>                    
                                <div class="m-timeline-1 m-timeline-1--fixed">
                                    <div class="m-timeline-1__items" style="margin-top:60px;">
                                        <div id="notes" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 bank_sec">
                    <div class="online_note" style="min-height:435px;">
                        <div class="kt-portlet kt-portlet--responsive-mobile page_1">
                            <div class="kt-portlet__body">
                            <div class="col-md-12" style="text-align:right; float:right;" id="bank-excel">
                                        <div class="dt-buttons btn-group" style="text-align:right; float:right;"> 
                                            <button class="btn btn-secondary " id="buttons-excel-bank" tabindex="0" aria-controls="DataTables_Table_0"><span><i class="fa fa-file-excel-o"></i> Excel</span></button>                                         
                                        </div>
                                    </div>
                                    <table class="table table-stripe "  style="width:100.3%;  font-size:0.85rem;"  >
                                        <thead style="background:#F7F7F7; padding:10px;" class="bankcnf">
                                            <tr style="border-bottom:1px solid #111;border-left:1px solid #111;border-right:1px solid #111;"> 
                                                <th style="padding:15px; font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;" >
                                                    Date
                                                </th > 
                                                <th  style="padding:15px;width:20%; font-size:14px;border-right:1px solid #111; border-bottom:1px solid #111;border-top:1px solid #111;">
                                                Bank
                                                </th>  
                                                <th  style="padding:15px; font-size:14px;border-right:1px solid #111; border-bottom:1px solid #111;border-top:1px solid #111;">
                                                Description
                                                </th>  
                                                <th style="padding:15px; text-align:right   !important;width:15%; font-size:14px;border-right:1px solid #111; border-bottom:1px solid #111;border-top:1px solid #111;">
                                                    Debit
                                                </th> 
                                                <th style="padding:15px; text-align:right   !important;width:15%; font-size:14px; border-bottom:1px solid #111;border-top:1px solid #111;">
                                                    Credit
                                                </th> 

                                            </tr>
                                        </thead>                            
                                        <tbody id="bank_stmt"> 
                                            
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-9 acct_sec">
                    <div class="kt-portlet kt-portlet--responsive-mobile page_1">
                        <div class="kt-portlet__body p-4">

                            <ul class="ul_filter mb-3 pl-0" style="text-align:right;"> 
                                <li style="margin-right:auto;" class="mnt_yr_li">
                                    <p class="mb-0"><b class="tabl_b">Month & Year: </b><span class="mnt_yr_sp"></span></p>
                                </li>
                                <li>
                                    <div class="input-group">
                                        <input type="text" class="form-control m-input" readonly="" placeholder="Select month & Year" id="month_year">
                                        <div class="input-group-append sel_mon_year">
                                            <span class="input-group-text">
                                                <i class="fa fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dt-buttons btn-group accts_btns mb-0" style="text-align:right; float:right;"> 
                                        <button class="btn btn-secondary buttons-print btn_prnt" tabindex="0" aria-controls="DataTables_Table_0"><span><i class="fa fa-print"></i> Print</span></button> 
                                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0"><span><i class="fa fa-file-pdf-o"></i> PDF</span></button> 
                                            
                                    </div>
                                </li>
                            </ul>
                            <table class="table table-bordered acct_tables"  style="width:100%;"  >
                                <thead>
                                    <tr style="border-bottom:1px solid #111;border-left:1px solid #111;border-right:1px solid #111;">
                                        <th colspan="3" style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Earnings</th>
                                        <th colspan="2" style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Deduction</th>
                                    </tr>
                                    <tr style="border-bottom:1px solid #111;border-left:1px solid #111;border-right:1px solid #111;">
                                        <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Particulars</th>
                                        <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Gross</th>
                                        <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Actual Earnings</th>
                                        <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Particulars</th>
                                        <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Amount</th>
                                    </tr>
                                </thead>
                                <tbody id="acct_stmt">
                                    
                                </tbody>	
                            </table>

                            <div style="display:none;" class="dataloader">
                                
                                <table class="table table-bordered acct_tables"   style="width:90.1%; margin-right:50px;margin-left:50px; font-size:13px;"  >
                                    <thead>
                                        <tr style="border-bottom:1px solid #111;border-left:1px solid #111;border-right:1px solid #111;">
                                            <th colspan="3" style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Earnings</th>
                                            <th colspan="2" style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Deduction</th>
                                        </tr>
                                        <tr style="border-bottom:1px solid #111;border-left:1px solid #111;border-right:1px solid #111;">
                                            <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Particulars</th>
                                            <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Gross</th>
                                            <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Actual Earnings</th>
                                            <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Particulars</th>
                                            <th style="font-size:14px;border-right:1px solid #111; width:120px; border-bottom:1px solid #111;border-top:1px solid #111;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="acct_stmts">
                                        
                                    </tbody>	
                                </table>
                            </div>
                        </div>
                    </div>
                            
                </div> 
                <div class="col-lg-9 salary1_sec">
                    <div class="kt-portlet kt-portlet--responsive-mobile page_1">
                        <div class="kt-portlet__body p-4">

                            <div class="no_note_salary" style="min-height:435px;">
                                <div class="row align-items-center" style="min-height:430px;">
                                    <div class="col-md-12 text-center">
                                        <img src="/m/app/customer/image/customer_nodata_new.jpeg" class="img-fluid" style="width:230px;">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <h6 class="mt-3">No Data Available</h6>
                                        <p class="">This data is not yet available for this employee.</p>
                                        <ul class="pl-0 mt-2 nodata_btn">
                                            <li><a class="btn btn-outline-primary btn-sm" href="javascript:;" onclick="popup('salary-expense')">Create Salary Voucher</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="salary_sec">
                                <ul class="ul_filter mb-3 pl-0" style="text-align:right;"> 
                                    <li style="margin-right:auto;">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control  form-control-sm  m-input" placeholder="Search" id="generalSearch_salary">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                                <span><i class="la la-search"></i></span>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="btn btn-outline-primary btn-sm" href="javascript:;" onclick="popup('salary-expense')">Create Salary Voucher</a>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-sm btn_filter" role="group" aria-label="Large button group">
                                            <button type="button"  class="btn btn-outline-primary quick_filter_salary active" data-filter="All">All</button>
                                            <button type="button"  class="btn btn-outline-primary quick_filter_salary" data-filter="Cash">Cash In Hand</button> 
                                            <button type="button"  class="btn btn-outline-primary quick_filter_salary" data-filter="Bank">Bank Transfer</button>
                                            <button type="button"  class="btn btn-outline-primary quick_filter_salary" data-filter="Payable">Pending</button>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="m_datatable3" id="locked_empsalary_left"></div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                <div class="col-lg-9 invrecp_sec">
                    <div class="no_note_inv" style="min-height:435px;">
                        <div class="kt-portlet kt-portlet--responsive-mobile page_1">
                            <div class="kt-portlet__body">
                                <div class="row align-items-center" style="min-height:430px;">
                                    <div class="col-md-12 text-center">
                                        <img src="/m/app/customer/image/customer_nodata_new.jpeg" class="img-fluid" style="width:230px;">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <h6 class="mt-3">No Data Available</h6>
                                        <p class="">This data is not yet available for this customer.you can update GSTIN or issue invoice or collect payment to start viewing these tabs.</p>
                                        <ul class="pl-0 mt-2 nodata_btn">
                                            <li><a class="btn btn-outline-primary btn-sm" href="/m/app/invoice/create-invoice?cust_id=" target="_blank">Create Invoice</a></li>
                                            <li><a class="btn btn-outline-primary btn-sm" href="javascript:;" onclick="popup('quick-receipt','','')" >Record Payment</a></li>
                                            <li><a class="btn btn-outline-primary btn-sm" href="/m/app/banking/connect-bank?loc=reconciliation" target="_blank">Reconcile Bank Statement</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inv_sec">
                        <div class="kt-portlet kt-portlet--responsive-mobile mb-2">
                            <div class="kt-portlet__body p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="ul_filter mb-0 pl-2" style="text-align:right;">
                                            <li style="margin-right:auto;">
                                                <a href="/m/app/invoice/create-invoice?cust_id=" target="_blank" class="btn btn-outline-primary  btn-sm" >Create Invoice</a>
                                                <a href="javascript:;" onclick="popup('quick-receipt','','')" class="btn btn-outline-primary  btn-sm" >Record Payment</a>
                                                <!-- <a class="btn btn-outline-primary btn-sm" href="/m/app/banking/connect-bank?loc=reconciliation" target="_blank">Reconcile Bank Statement</a> -->
                                            </li> 
                                            <li>
                                                <div class="btn-group btn-group-sm btn_filter" role="group" aria-label="Large button group">
                                                    <button type="button" style="" class="btn btn-outline-primary  active" >Invoices</button>
                                                    <button type="button" style="" class="btn btn-outline-primary rec_btn">Receipts</button>
                                                    <button type="button" style="" class="btn btn-outline-primary einv_btn">eInvoice</button>
                                                </div> 
                                            <li>
                                                <div class="btn-group btn-group-sm btn_filter" role="group" aria-label="Large button group">
                                                    <button type="button" style="" class="btn btn-outline-primary quick_filter active" data-filter="ALL">All</button>
                                                    <button type="button" style="" class="btn btn-outline-primary quick_filter" data-filter="UNPAID">Open</button>
                                                    <button type="button" style="" class="btn btn-outline-primary quick_filter" data-filter="PAID">Paid</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet kt-portlet--responsive-mobile">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="row">
                                    <div class="col-md-12 pt-1">    
                                        <div class="m_datatable kt-datatable" id="locked_custinv_left"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rec_sec">
                        <div class="kt-portlet kt-portlet--responsive-mobile mb-2">
                            <div class="kt-portlet__body p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="ul_filter mb-0 pl-0" style="text-align:right;"> 
                                            <li style="margin-right:auto;">
                                                <a href="/m/app/invoice/create-invoice?cust_id=" target="_blank" class="btn btn-outline-primary  btn-sm" >Create Invoice</a>
                                                <a href="javascript:;" onclick="popup('quick-receipt','','')" class="btn btn-outline-primary  btn-sm" >Record Payment</a>
                                                <!-- <a class="btn btn-outline-primary btn-sm" href="/m/app/banking/connect-bank?loc=reconciliation" target="_blank">Reconcile Bank Statement</a> -->
                                            </li>
                                            <li>
                                                <div class="btn-group btn-group-sm btn_filter" role="group" aria-label="Large button group">
                                                    <button type="button" style="" class="btn btn-outline-primary bck_inv_btn">Invoices</button>
                                                    <button type="button" style="" class="btn btn-outline-primary active">Receipts</button>
                                                    <button type="button" style="" class="btn btn-outline-primary einv_btn">eInvoice</button>
                                                </div>         
                                                
                                            </li>
                                            <li>
                                                <div class="btn-group btn-group-sm btn_filter" role="group" aria-label="Large button group">
                                                    <button type="button" style="" class="btn btn-outline-primary quick_filter_1 active" data-filter="All">All</button>
                                                    <button type="button" style="" class="btn btn-outline-primary quick_filter_1" data-filter="Credit_Available">Unreconciled</button>
                                                    <button type="button" style="" class="btn btn-outline-primary quick_filter_1" data-filter="Fully_Utilized">Reconciled</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet kt-portlet--responsive-mobile">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="row">
                                    <div class="col-md-12">    
                                        <div class="m_datatable2 kt-datatable" id="locked_custrec_left"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="einv_sec">
                        <div class="" style="min-height:521px;">
                            <div class="kt-portlet kt-portlet--responsive-mobile mb-2">
                                <div class="kt-portlet__body p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="ul_filter mb-0 pl-0" style="text-align:right;"> 
                                                <li>
                                                    <div class="btn-group btn-group-sm btn_filter" role="group" aria-label="Large button group">
                                                        <button type="button" style="" class="btn btn-outline-primary bck_inv_btn">Invoices</button>
                                                        <button type="button" style="" class="btn btn-outline-primary rec_btn">Receipts</button>
                                                        <button type="button" style="" class="btn btn-outline-primary einv_btn active">eInvoice</button>
                                                    </div> 
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet kt-portlet--responsive-mobile mb-2">
                                <div class="kt-portlet__body p-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="einv_note" style="min-height:435px;">
                                                <div class="row align-items-center" style="min-height:430px;">
                                                    <div class="col-md-12 text-center">
                                                        <img src="/m/app/customer/image/customer_nodata_new.jpeg" class="img-fluid" style="width:230px;">
                                                        <h6 class="mt-3">No Data Available</h6>
                                                        <p class="">There are no eInvoices available for this account yet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="einvoice_sec">
                                                <table class="table table-bordered m-table mb-3 mt-3 einv_tables">
                                                    <thead class="" style="background:#f7f7f7;">
                                                        <th>Invoice&nbsp;Date</th>
                                                        <th>Invoice&nbsp;No.</th>
                                                        <th>Amount</th>
                                                        <th>Ack No.</th>
                                                        <th>Ack Date</th>
                                                        <th>Status</th>
                                                        
                                                    </thead>
                                                    <tbody id="einv_table">
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                
                <!-- Right Section Start-->
                <!-- <div class="col-lg-3 count_sec">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body pt-3 pb-3 pl-4 pr-4">
                            <div class="kt-widget4">
                                <div class="kt-widget4__item">
                                    <span class="kt-widget4__icon pr-2">
                                        <span class="btn btn-label-success pt-2 pb-2 pr-2"><i class="fa fa-check"></i></span>
                                    </span>
                                    <div class="kt-widget4__info">
                                        <a href="javascript:;" class="kt-widget4__username">
                                            Early
                                        </a>
                                    </div>
                                    <span class="kt-widget4__status" id="early_count">
                                        0
                                    </span>
                                </div>
                                <div class="kt-widget4__item">
                                    <span class="kt-widget4__icon pr-2">
                                        <span class="btn btn-label-info pt-2 pb-2 pr-2"><i class="fa fa-check"></i></span>
                                    </span>
                                    <div class="kt-widget4__info">
                                        <a href="javascript:;" class="kt-widget4__username">
                                            Ontime
                                        </a>
                                    </div>
                                    <span class="kt-widget4__status" id="ontime_count">
                                        0
                                    </span>
                                </div>
                                <div class="kt-widget4__item">
                                    <span class="kt-widget4__icon pr-2">
                                        <span class="btn btn-label-danger pt-2 pb-2 pr-2"><i class="fa fa-check"></i></span>
                                    </span>
                                    <div class="kt-widget4__info">
                                        <a href="javascript:;" class="kt-widget4__username">
                                            Late
                                        </a>
                                    </div>
                                    <span class="kt-widget4__status" id="late_count">
                                        0
                                    </span>
                                </div>
                                <div class="kt-widget4__item">
                                    <span class="kt-widget4__icon pr-2">
                                        <span class="btn btn-label-info pt-2 pb-2 pr-2"><i class="fa fa-check"></i></span>
                                    </span>
                                    <div class="kt-widget4__info">
                                        <a href="javascript:;" class="kt-widget4__username">
                                            Onduty
                                        </a>
                                    </div>
                                    <span class="kt-widget4__status" id="onduty_count">
                                        0
                                    </span>
                                </div>
                                <div class="kt-widget4__item">
                                    <span class="kt-widget4__icon pr-2">
                                        <span class="btn btn-label-danger pt-2 pb-2 pr-2"><i class="fa fa-check"></i></span>
                                    </span>
                                    <div class="kt-widget4__info">
                                        <a href="javascript:;" class="kt-widget4__username">
                                            Leave
                                        </a>
                                    </div>
                                    <span class="kt-widget4__status" id="leave_count">
                                        0
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Right Section End -->
            </div>

        </div>
    </div>
        <!-- New Section End -->

		<!--Begin::Section-->
        

        <!--End::Section-->
    
<a href="https://led.indiafilings.com/m/gst/tempFiles/employee_bank_statement.xlsx" download="bank_statement.xlsx" id="download_excel_bank" style="display:none;" >Download Link</a>

<!-- Modal start -->

<!-- Modal End -->

<!-- <link href="https://devapp.ledgers.cloud/m/app/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> -->
<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
         <!--  <div class="modal-header" style="padding: 15px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div> -->
           <p class="text-center" style="margin:0px;" ><img src="/m/app/assets/images/upi-logo.png" alt="UPI Logo" style="width:150px;margin-top:25px;"></p>
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
<!--                         <label for="recipient-name" class="form-control-label">UPI</label>
 -->                        <input type="text" class="form-control" name="upi" id="upi_id" placeholder="UPI ID (upi id@bank)">
                    </div>
                   <div class="form-group">
<!--                         <label for="recipient-name" class="form-control-label">UPI</label>
 -->                        <input type="text" class="form-control" name="vpa_name" id="vpa_name" placeholder="VPA Name (Business Name)">
 <input type="hidden" id="update_id" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save">Save</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
<!-- QR CODE MODAL -->
<!--begin::Modal-->
<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 15px;">
                <h5 style="margin:auto;font-weight: bold;" class="modal-title" id="exampleModalLabel">QRCODE</h5>
               
            </div>
            <div class="modal-body">
               <img src="" style="width: 250px; height: 250px;" id="qrious">
            </div>
            <div class="modal-footer" style="padding: 15px;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<style type="text/css">


    .right_section{
        border-left: 1px solid #EBEDF2;
    }
    .profile_name{
        width: 60px;
        height: 55px;
        margin-bottom: 0px;
        font-size: 2.5rem;
        align-items: center;
        display: flex;
        justify-content: center;
        background: #F7F7F7;
        border-radius: 5px;
    }
    .user_mgmt .kt-widget4 .kt-widget4__item .kt-widget4__info .kt-widget4__title {
        font-size: 1rem;
        font-weight: 600;
    }
    .user_mgmt .kt-widget4 .kt-widget4__item .kt-widget4__info .kt-widget4__sub {
        font-size: 13px;
        font-weight: 400;
    }
    .user_mgmt .kt-widget4__item.border_item{
        border-bottom:1px solid #EBEDF2;
    }
    .user_mgmt .kt-tabs-line .kt-tabs__item{
        margin-right:11px;
    }
    .user_mgmt .nav.nav-tabs .nav-item{
        margin-left:0px;
    }
    .ul_filter {
        display: flex;
        list-style: none;
        justify-content: flex-end;
    }
    .ul_filter li {
        margin-right: 8px;
    }
    .ul_filter li:last-child {
        margin-right: 0px;
    }
    .kt-tabs-line .kt-tabs__link{
        font-size: 1rem;
    }
    @media (max-width: 767px){
        .right_section{
            border-top: 1px solid #ebedf2;
            border-bottom:0px;
        }
        .live_transfer, .all_transfer, .success_transfer, .pos_sec,
        .right_tab_col, .control_sec, .payee_sec{
            padding-left:30px;
        }
    }
    .notes_sec, .online_sec, .estimate_sec, .invrecp_sec, .acct_sec, .bank_sec, .salary1_sec,
    .einv_sec, .gst_sec{
        display:none;
    }
</style>

<style type="text/css">
   @media(min-width: 1200px) {
        .kt-widget24 .kt-widget24__item .kt-widget24__title {
            margin-top: 0px;
        }
    }
    #locked_left td.kt-datatable__cell{
        font-size:13px;
    }
    #locked_left .kt-datatable__body .kt-datatable__row,
    .kt-datatable.kt-datatable--default.kt-datatable--scroll>.kt-datatable__table>.kt-datatable__head .kt-datatable__row{
        height: 45px !important;
    }
    #locked_left .kt-datatable__body .kt-datatable__row>.kt-datatable__cell{
        padding: 2px 10px;
    }
    #locked_left .kt-datatable__table>.kt-datatable__head .kt-datatable__row>.kt-datatable__cell{
        font-size:13px;
    }
    .kt-datatable.kt-datatable--default>.kt-datatable__table>.kt-datatable__head .kt-datatable__row>.kt-datatable__cell {
        padding: 10px 10px;
    }
    .kt-datatable__lock .kt-datatable__lock--scroll .mCustomScrollbar
    {
        /*height: -webkit-fill-available !important;*/
    }
    tbody .kt-datatable__lock--left{
         /*height: -webkit-fill-available !important; */
    }

   /*.kt-datatable__lock.kt-datatable__lock--scroll.mCustomScrollbar._mCS_6.mCS-autoHide{
        height:450px !important;
   }
   table.kt-datatable__table{
        max-height: 495px !important;
   }*/
   /*New Css*/
   .tabl_size{
        font-size:13px;
        font-weight:400;
    }
    .tabl_sizes{
        font-size:13px;
        
    }
    .tabl_b{
        font-weight:600;
        font-size:13px;
    }
    .tabl_b1{
        font-weight:500;
    }
    .nodata_btn li{
        list-style:none;
    }
    .acct_tables.table-bordered td, .acct_tables.table-bordered th {
        border: 1px solid #111;
    }
    .acct_tables.table thead th{
        vertical-align: middle;
    }
</style>





<script src="/m/app/assets/custom-js/qrious.js"></script>
<!-- <script src="/m/app/employee/js/print.js?v=1.0" type="text/javascript"></script> -->

<script type="text/javascript">
    var invoice_count;
    var estimate_count;
    var receipt_count;
    var customer_id = 1041; 
    // var dates = '';
    // var dates_one = dates.split('-');
    var year_month="";
    //console.log("onload year month");
    //console.log(year_month);
    jQuery(document).ready(function() {

        var customer_id = getUrlVars()['id'];  
        employeechange(customer_id);
        metrics_details_one(customer_id,year_month);      
        //count_details(customer_id);
        bank_counts(customer_id);
        emp_gid(customer_id);
        salary_cont();
        $('#month_year').datepicker( {
        	format: "mm-yyyy",
   		 	viewMode: "months",
               minViewMode: "months",
               autoclose:true
		});
    });
    function emp_gid(customer_id){
        $.ajax({
            type: "POST",
            url: Ledgers.API+"employee/dashboard-employee",
            dataType: "JSON",
            data: {
                'id': customer_id,
                'operation': 'get-gid'
            },
            success: function(result) {
                // console.log("gid");
                // console.log(result);
                if(result.gid != ''){
                    var gid = result.gid;
                    emp_attend(gid);
                }
            }   
        });
    }

    function emp_attend(gid){
        $('.img_sec').html('');
        $.ajax({
            type: "POST",
            url: "/m/app/employee/employee-attendance.php",
            dataType: "JSON",
            data: {
                'gid': gid,
                'operation': 'attendance'
            },
            success: function(result) {
                // console.log("Attendance Count");
                // console.log(result);
                if(result.status == '0' && result.msg =='Business Not Linked with Attendance'){
                    $('.attend_sec').css('display','none');
                    $('.img_sec').css('display','block');
                    $('.img_sec').html('<a href="/m/app/user/manage-user" target="_blank"><img src="/m/app/user/img/multiuser.jpeg" class="img-fluid"></a>');
                }else{
                    $('.attend_sec').css('display','block');
                    $('.img_sec').css('display','none');
                    var data = result[gid];
                    //console.log(data);
                    $('#early_count').html(result[gid]['earily']);
                    $('#ontime_count').html(result[gid]['ontime']);
                    $('#late_count').html(result[gid]['late']);
                    $('#onduty_count').html(result[gid]['Onduty']);
                    $('#leave_count').html(result[gid]['leave']);
                }
                
                
            }   
        });
    }

    function employeechange(customer_id){

        $.ajax({
            type: "POST",
            url: Ledgers.API+"employee/get-employee",
            dataType: "JSON",
            data: {
                'id': customer_id,
                'token': 'session'
            },
            success: function(result) {
            
                if (result.status == '1') {

                    var name = (result.employee[0].name) ? result.employee[0].name : "-";
                    var mobile = (result.employee[0].mobile) ? result.employee[0].mobile : "";
                    var email = (result.employee[0].email) ? result.employee[0].email : "-";
                    var designation = (result.employee[0].designation) ? result.employee[0].designation : "-";
                    var access = (result.user[0].user_level) ? result.user[0].user_level : "-";
                    var lastlogin = (result.emplogin) ? result.emplogin : "-";
                    var addr1 = (result.employee[0].addr1) ? result.employee[0].addr1 : "-";
                    var addr2 = (result.employee[0].addr2) ? result.employee[0].addr2 : "-";
                    var city = (result.employee[0].city) ? result.employee[0].city : "-";
                    var state = (result.employee[0].state) ? result.employee[0].state : "-";
                    var pincode = (result.employee[0].pincode) ? result.employee[0].pincode : "-";
                    var country = (result.employee[0].country) ? result.employee[0].country : "-";
                    var branch_name = (result.employee[0].branch_name) ? result.employee[0].branch_name : "-";
                    var pan = (result.employee[0].pan) ? result.employee[0].pan : "";
                    var gid = (result.employee[0].gid) ? result.employee[0].gid : "";
                    var aadhaar = (result.employee[0].aadhaar_number) ? result.employee[0].aadhaar_number : "";
                    var pf = (result.employee[0].pf) ? result.employee[0].pf : "";
                    var esi = (result.employee[0].esi) ? result.employee[0].esi : "";

                    if(designation != '-')
                    {
                        
                        $(".desgin_emp").html(designation);
                    }
                    else
                    {
                        
                        $('.desgin_emp').html(`Update`); 
                        $('.esi_list').css('color','#b6b4b4');
                    }
                    if(mobile)
                    {
                        mobile =  mobile ; 
                        $(".hmobile").html(mobile);
                        $(".hmobile1").html(mobile);
                    }
                    else
                    {
                        $('.hmobile').html(`Update`); 
                        $('.hmobile1').html(`Update`); 
                        $('.hmobile').css('color','#b6b4b4');
                        $('.hmobile1').css('color','#b6b4b4');
                    }
                    if(aadhaar)
                    {

                        aadhaar =  aadhaar.slice(-4); 
                        aadhaar = "XXXX-XXXX-"+aadhaar;
                        $('.aadhaar_list').html(aadhaar);
                        $('#aadhar_list').html(aadhaar);
                       
                    }
                    else
                    {
                        // aadhaar = `<a href="javascript:void(0);"  onclick="popup('employee','',`+id+`);">Update </a>`; 
                        $('.aadhaar_list').html('Update');
                        $('#aadhar_list').html(`Update`);
                        $('.aadhaar_list').css('color','#b6b4b4');
                        $('#aadhar_list').css('color','#b6b4b4');
                    }
                    if(pf)
                    {
                        $('.pf_list').html(pf); 
                    }
                    else
                    {
                        $('.pf_list').html(`Update`); 
                        $('.pf_list').css('color','#b6b4b4'); 
                    }
                    if(esi)
                    {
                        $('.esi_list').html(esi); 
                    }
                    else
                    {
                        $('.esi_list').html(`Update`); 
                        $('.esi_list').css('color','#b6b4b4');
                    }
                    if(pan)
                    {
                        $('.pan_list').html(pan); 
                        $('#pan_list').html(pan);
                    }
                    else
                    {
                        $('.pan_list').html(`Update`); 
                        $('#pan_list').html(`Update`); 
                        $('.pan_list').css('color','#b6b4b4');
                        $('#pan_list').css('color','#b6b4b4');
                    }

                    if(result.employee[0].added_on)
                    {
                        var date;
                        var dates;
                        if(result.employee[0].added_on != '' && result.employee[0].added_on != null){
                            date = result.employee[0].added_on.split(' ');
                            dates = date[0].split('-');
                            $('.add_on').html(dates[2]+'-'+dates[1]+'-'+dates[0]);
                        }
                        
                    } 
                    else
                    {
                        $('.add_on').html(`Update`); 
                        
                        $('.add_on').css('color','#b6b4b4');
                    }
                    if(result.employee[0].added_by_name)
                    {
                        
                        if(result.employee[0].added_by_name != '' || result.employee[0].added_by_name != null){
                            $('.add_by').html(result.employee[0].added_by_name);
                        }else{
                            $('.add_by').html(`Update`);
                            $('.add_by').css('color','#b6b4b4');
                        }
                        
                       
                        
                    } 
                    else
                    {
                        $('.add_by').html(`Update`); 
                        
                        $('.add_by').css('color','#b6b4b4');
                    }
                    //top
                    $(".hname").html(name);
                    $(".hname1").html(name);
                    $(".hemail").html(email);
                    $(".hemail1").html(email);
                    // $("#hmobile").html(mobile);
                    $("#init_name").html(name[0]);
                    let kyc=result.employee[0].kyc;
                
                //console.log("kyc",kyc);
                if(kyc['status']==1)
                {
                    kyc_sts=`eKYC Verified`;
                    
                }
                else if(kyc['status']==2)
                {
                    kyc_sts=`Request for eKYC Created`;
                }
                else
                {
                    kyc_sts=`<a href='javascript:void(0);' onclick="ekyc_request(`+gid+`);"  > eKYC Not Verified</a>`;
                }
                $('.kyc_emp').html(kyc_sts);

                    
                        
                
                    
                // console.log(result.employee[0].bank.bank+'bank');

                var bank_details=Object.keys(result.employee[0].bank);
                var bank_acc_details=Object.values(result.employee[0].bank);
                    
                    var bankername=(result.employee[0].bank.name) ?result.employee[0].bank.name : "-";
                    var bankname=(result.employee[0].bank.bank) ?result.employee[0].bank.bank : "-";
                    var branchname=(result.employee[0].bank.branch) ?result.employee[0].bank.branch : "-";
                    var bankcity=(result.employee[0].bank.city) ?result.employee[0].bank.city : "-";
                    var ifsccode=(result.employee[0].bank.ifsc) ?result.employee[0].bank.ifsc : "-";

                    var bank_acc_type;
                if(result.employee[0].bank.type==1){
                    bank_acc_type='Current';
                }else if(result.employee[0].bank.type==2){
                    bank_acc_type='Savings';
                }else if(result.employee[0].bank.type==3){
                bank_acc_type='Overdraft';
                }else{
                    bank_acc_type='-';
                }
                    var branchn='-';
                if(branchname!=undefined && branchname!='undefined'){
                        branchn=branchname;
                }
                
                //console.log(branchn+'branchn')

                    var userlevel;
                    if(access!=''){
                        if(access==2)
                            userlevel='Administrator';
                        else if(access==3)
                            userlevel='Billing';
                        else if(access==4)
                            userlevel='Sales Team';
                        else if(access==5)
                            userlevel='Purchase';
                        else if(access==6)
                            userlevel='Sales BA';
                        else
                            userlevel='Super Admin';
                    }else{
                        userlevel='-';
                    }
                    $('.access_list').html(userlevel);

                   

                if(addr1=='-')   
                {                
                    datas = `Update`;     
            
                }
                else
                {
                    datas = '<p style="margin-bottom: 0rem;">' + addr1 +', ' + addr2 + '</p><p style="margin-bottom: 0rem;">' + city  + ', ' + state  + ' - ' + pincode  + '</p>';     
            
                }         
                $("#address").html(datas);

                    

                
                var cust_status=result.employee[0].status;
                let btn=`<a class="btn btn-sm btn-outline-primary"  onclick="popup('employee','',`+customer_id+`)" style="margin-top: -10px;margin-bottom: 10px; float:right; "> Add Bank Accounts </a><br>`;
                $("#add_bank").html(btn);   
                var datas;
                var fulldata='';             
            if(result.employee[0].bank['type']==0)
            {
                        var data2 = '<td colspan="10" style="text-align:center;">No bank records found</td>';
                        $("#customer_details_bank").html(data2);

                        
            }
            else{   
                if(bank_details)
                    {
                        var c=0;
                        let sts=0;
                    
                        bank_acc_details.forEach(function(value,key){

                            if(value['status']!=undefined)
                            {
                                sts=value['status'];
                            }
                            else
                            {
                                sts=1;
                            }
                            
                            if(value['acc_no']!='' & sts!=0)
                            { 

                                
                            
                                c +=1;
                                if(value['type']==1){
                                    bank_acc_type='Current';
                                }else if(value['type']==2){
                                    bank_acc_type='Savings';
                                }else if(value['type']==3){
                                bank_acc_type='Overdraft';
                                }else{
                                    bank_acc_type='-';
                                }

                                                
                                
                                head = `<div style="float:left; width:75%;"><h6 style="font-size:13px!important">`+ value['acc_no'] +` | `+  value['ifsc'] +`<h6></div><div style="float:right; width:25%;"><a style="float:right;" onClick="delete_acc('` + value['acc_no'] + `',` + customer_id + `)"  class="kt-portlet__nav-link btn kt-btn kt-btn--icon kt-btn--icon-only kt-btn--pill" title="Delete"><i class="la la-trash"></i></a></div>`;                   
                                datas = '<p style="margin-bottom: 0rem; font-size:13px!important;">' +  value['bank'] + '</p><p style="margin-bottom: 0rem; font-size:13px!important;">' +  value['city']   + '</p>';     
                                hline=`<div style="margin-top:10px; margin-bottom:10px;" id="div-line"></div>`;
                                fdata=head+datas+hline;
                                fulldata += fdata;
                                
                                $("#bank_list").html(fulldata);
                                $('.add_banks').css('display','flex');
                            
                            }else{
                                $("#bank_list").html('Update');
                                $('#bank_list').css('color','#b6b4b4');
                                $('.add_banks').css('display','none');
                            }
                            
                        });
                    
                    
                        
                    }
            }
                
                    var cust_status=result.employee[0].status;
                    if(cust_status==1){
                        $("#status_id").html('<i class="fa fa-cogs"></i>Disable');
                        $("#status_id").attr('onclick', 'statuschange('+customer_id+',0)');
                        $("#act_but").removeClass("btn-danger ");
                        $("#act_but").addClass("btn-success ");
                        $("#act_but").html("Active");
                    }else{
                        $("#status_id").html('<i class="fa fa-cogs"></i>Active');
                        $("#status_id").attr('onclick', 'statuschange('+customer_id+',1)');
                        $("#act_but").removeClass("btn-success ");
                        $("#act_but").addClass("btn-danger ");
                        $("#act_but").html("Inactive");
                        
                    }

                } else {
                    var data = '<td colspan="10" style="text-align:center;">No records found</td>';
                    var data1 = '<td colspan="10" style="text-align:center;">No records found</td>';
                    var data2 = '<td colspan="10" style="text-align:center;">No records found</td>';
                }


                $("#customer_details").html(data);
                $("#customer_details_address").html(data1);
                
            }
        });

    }
    
    $(document).on('click','.account_li', function(){
        
        metrics_details(customer_id,year_month);
    });
    $(document).on('click','.sel_mon_year', function(){
        year_month = $('#month_year').val();
        console.log(year_month);
        metrics_details(customer_id,year_month)
    });
    
    function metrics_details(customer_id,year_month){
        var data;   
            if(year_month==''){
                    data =  {
                        'recent'  : 'recent'
                    }
                }
                else{
                    data = {
                        'year_month'  : year_month
                    }
                }    
            $.ajax({
                type: "POST",
                url: Ledgers.API + "cash/list-cash-in?operation=salary-metrics&contact_id="+customer_id,
                dataType: "JSON",
                async:false,
                data:data,
                success: function(result) {
                    console.log("metrics count");
                    console.log(result);
                    var datas;
                    var data_two;
                    if(result.status == 0){
                        $('.accts_btns').css('display','none');
                        $('.acct_tables thead').css('display','none');
                        
                        

                        $('#acct_stmt').html('<tr>  <td  style="border:none;text-align:center" colspan="5" ><div class="no_note1" style="min-height:350px;"><div class="row align-items-center" style="min-height:400px;"><div class="col-md-12 text-center"><img src="/m/app/customer/image/customer_nodata_new.jpeg" class="img-fluid" style="width:230px;"></div><div class="col-md-12 text-center"><h6 class="mt-3">No Data Available</h6></div></div></div></td></tr>');
                    }else{
                        
                        $('.accts_btns').css('display','flex');
                        $('.acct_tables thead').css('display','table-header-group');
                        
                        var debit_tot = Math.abs(parseInt(result.p_tax)+parseInt(result.pf)+parseInt(result.esi)+parseInt(result.tds)+parseInt(result.others));
                        var tot = Math.abs(parseInt(debit_tot)+parseInt(result.net_pay));
                        
                        datas += '<tr><td rowspan="5" style="font-size:13px;font-weight:400;">Earnings</td><td rowspan="5" style="font-size:13px;font-weight:400;" class="text-right">Rs. '+result.ctc_pay+'</td><td rowspan="5" class="text-right" style="font-size:13px;font-weight:400;">Rs. '+tot+'</td><td style="font-size:13px;font-weight:400;">TDS</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.tds+'</td></tr><tr><td style="font-size:13px;font-weight:400;">Professional Tax</td><td style="font-size:13px;font-weight:400;" class="text-right">Rs. '+result.p_tax+'</td></tr><tr><td style="font-size:13px;font-weight:400;">ESI</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.esi+'</td></tr><tr><td style="font-size:13px;font-weight:400;">PF</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.pf+'</td></tr><tr><td style="font-size:13px;font-weight:400;">Others</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.others+'</td></tr><tr><td class="tabl_b">Total</td><td class="tabl_b text-right">Rs. '+result.ctc_pay+'</td><td class="tabl_b text-right">Rs. '+tot+'</td><td class="tabl_b">Net pay for month</td><td class="tabl_b text-right">Rs. '+result.net_pay+'</td></tr>';

                        data_two += '<tr><td rowspan="5" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Earnings</td><td rowspan="5" class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Rs. '+result.ctc_pay+'</td><td rowspan="5" class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Rs. '+tot+'</td><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">TDS</td><td class="text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111; border-right: 1px solid #111;"font-weight:400;">Rs. '+result.tds+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Professional Tax</td><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;" class="text-right">Rs. '+result.p_tax+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">ESI</td><td class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;">Rs. '+result.esi+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">PF</td><td class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;">Rs. '+result.pf+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Others</td><td class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;">Rs. '+result.others+'</td></tr><tr><td class="tabl_b" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111;border-bottom: 1px solid #111;">Total</td><td class="tabl_b text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111;border-bottom: 1px solid #111;">Rs. '+result.ctc_pay+'</td><td class="tabl_b text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111; border-bottom: 1px solid #111;">Rs. '+tot+'</td><td class="tabl_b" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111; border-bottom: 1px solid #111;">Net pay for month</td><td class="tabl_b text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111;border-bottom: 1px solid #111;border-right: 1px solid #111;">Rs. '+result.net_pay+'</td></tr>';

                        $('#acct_stmt').html(datas);
                        $('#acct_stmts').html(data_two);
                        $('.mnt_yr_li').css('display','block');
                        $('.mnt_yr_sp').html(result.year_month);

                    }
                } 
            });  

            // core = $('.dataloader').html();
            // console.log('corecore');
            // console.log(core);
        core = $('.dataloader').html().replace(/^\s+|\s+$/gm,'').replace(/\s+/g, ' ').trim().replace(/href=\"+/g, ' ').trim().replace(/target=\"_blank\"+/g, 'style="text-decoration:none"').trim().replace(/<th>+/g, '<th style="text-align:left">').trim().replace(/(?:https?|ftp):\/\/[\n\S]+/g, '');
        
    } 

    function metrics_details_one(customer_id,year_month){    
           
        $.ajax({
            type: "POST",
            url: Ledgers.API + "cash/list-cash-in?operation=salary-metrics&contact_id="+customer_id,
            dataType: "JSON",
            data:{
                'recent'  : 'recent' 
            },
            success: function(result) {                
                if(result.status == 0){
                    console.log("hello");
                    $('.account_li').addClass('account_li_new');
                    $('.acct_icon').addClass('fa-close');
                    $('.acct_icon').removeClass('fa-check');
                    $('.acct_icon').addClass('text-danger');
                    $('.acct_icon').removeClass('text-success');
                    $('.acct_tables thead').css('display','none');
                }else{
                    $('.acct_tables thead').css('display','table-header-group');
                    $('.acct_icon').addClass('fa-check');
                    $('.acct_icon').removeClass('fa-close');
                    $('.acct_icon').addClass('text-success');
                    $('.acct_icon').removeClass('text-danger');
                }
            } 
        });  
    }

    $(document).on('click','.tab_li', function(){
        $('.tab_li').removeClass('kt-widget__item--active');
        $(this).addClass('kt-widget__item--active');
    });

    //Bank Statement
    function bank_counts(customer_id){
        
        $.ajax({
            type: "POST",
            url: Ledgers.API+"employee/dashboard-employee",
            dataType: "JSON",
            async:false,
            data: {
                'cust_id': customer_id,
                'operation': 'banking'
            },
            success: function(result) {
                console.log("hello");
                
                if (result.status == '1') {
                    if(result.data.length == 0 || result.data == undefined){
                        $('.bank_icon').removeClass('fa-check');
                        $('.bank_icon').removeClass('text-success');
                        $('.bank_icon').addClass('fa-close');
                        $('.bank_icon').addClass('text-danger');
                        $('.bank_li').addClass('bank_li_new');
                    }else if(result.data.length > 0){
                        $('.bank_icon').addClass('fa-check');
                        $('.bank_icon').addClass('text-success');
                        $('.bank_icon').removeClass('fa-close');
                        $('.bank_icon').removeClass('text-danger');
                    }
                }else{
                    $('.bank_icon').removeClass('fa-check');
                    $('.bank_icon').removeClass('text-success');
                    $('.bank_icon').addClass('fa-close');
                    $('.bank_icon').addClass('text-danger');
                    $('.bank_li').addClass('bank_li_new');
                }
            }
        });
    }

    //Salary
    
    function salary_cont(){
        $.ajax({
            type: "POST",
            url: Ledgers.API + "cash/list-cash-in?operation=listing-salary-voucher&empid=1041&filter",
            dataType: "JSON",           
            success: function(result) {
                //console.log(result);                
                if(result.data.length == 0){
                    $('.salary_icon').removeClass('fa-check');
                    $('.salary_icon').removeClass('text-success');
                    $('.salary_icon').addClass('fa-close');
                    $('.salary_icon').addClass('text-danger');
                    $('.salary_li').addClass('salary_li_new');
                }else if(result.data.length > 0){
                    $('.salary_icon').addClass('fa-check');
                    $('.salary_icon').addClass('text-success');
                    $('.salary_icon').removeClass('fa-close');
                    $('.salary_icon').removeClass('text-danger');
                }
                
            }
        });
    }

    // $(function(){  
    //     $('.buttons-print').click(function(){  
    //         $('').printThis({  debug: false,  footer: $("#table").clone().children().find('table').css('display','block').get(0),  
    //         });  
    //     }); 	
    // });
   

</script>

<script src="/m/app/employee/js/employee-dashboard-new3.js?v=1.0" type="text/javascript"></script>


<script type="text/javascript">
$("#kyc").click(function() {
   
    window.open('https://kyc.ledgers.cloud/', '_blank');
});
$("#addupiclk").click(function() {
    console.log(111);
              $("#update_id").val("");
              $("#kt_modal_5").modal("show");
        });

function delete_acc(acc_no,id)
{
    swal({
                title: "Remove Bank Account",
                text:  "Are you sure you want to remove this bank account?",
                type: "info",
                showCancelButton: true,
                confirmButtonText: "Remove",
                cancelButtonText: "No",
            }).then(function(e) {
                
                if(e.value)
                {
                    $.ajax({
                        type: "POST",
                        url: Ledgers.API+"customer/dashboard-customer",
                        dataType: "JSON",
                        data: {
                                'operation':"delete_bank_account",
                                "acc_no":acc_no,
                                "id":id
                        },
                        success: function(result) {

                            if(result.status==1){
                                alert({
                                    'msg': 'Bank Account Removed Successfully',
                                    'type': 'success'
                                });
                                location.reload();
                            }                           

                        }
                    });

                }
                else{
                    alert({
                                    'msg': 'Bank account not removed',
                                    'type': 'danger'
                                });
                }
               
            });

}



    $(document).on('click','.estimate_li', function(){
        if($(this).hasClass('estimate_check')){
            $('.no_note_estimate').css('display','none');
            $('.est_sec').css('display','block');
            $('.count_sec').css('display','none');
            $('.estimate_sec').removeClass('col-lg-6');
            $('.estimate_sec').addClass('col-lg-9');
            $('.dash_sec').css('display','none');
            $('.notes_sec').css('display','none');
            $('.order_sec').css('display','none');
            $('.acct_sec').css('display','none');
            $('.salary1_sec').css('display','none');
            
            $('.online_sec').css('display','none');
            $('.estimate_sec').css('display','block');
            $('.invrecp_sec').css('display','none');
            
            $('.bank_sec').css('display','none');
            $('.gst_sec').css('display','none');
        DefaultDatatableDemo5.init();
        }else{
            $('.no_note_estimate').css('display','block');
            $('.est_sec').css('display','none');
            $('.count_sec').css('display','block');
            $('.estimate_sec').removeClass('col-lg-9');
            $('.estimate_sec').addClass('col-lg-6');
            $('.dash_sec').css('display','none');
            $('.notes_sec').css('display','none');
            $('.order_sec').css('display','none');
            $('.acct_sec').css('display','none');
            $('.salary1_sec').css('display','none');
            
            $('.online_sec').css('display','none');
            $('.estimate_sec').css('display','block');
            $('.invrecp_sec').css('display','none');
            
            $('.einv_sec').css('display','none');
            $('.bank_sec').css('display','none');
            $('.gst_sec').css('display','none');
        }
    });

    $(document).on('click','.home_lii', function(){
        $('.dash_sec').css('display','none');
        $('.notes_sec').css('display','block');
        $('.online_sec').css('display','none');
        $('.order_sec').css('display','none');
        $('.acct_sec').css('display','none');
        $('.salary1_sec').css('display','none');
        
        $('.estimate_sec').css('display','none');
        $('.invrecp_sec').css('display','none');
        
        $('.einv_sec').css('display','none');
        $('.bank_sec').css('display','none');
        $('.gst_sec').css('display','none');
        $('.count_sec').css('display','block');
        // $('.notes_sec').addClass('col-lg-9');
        // $('.left_sec').removeClass('col-md-12');
        // $('.left_sec_one').addClass('col-md-4');
        // $('.left_sec_one').removeClass('col-md-3');
        // $('.left_sec_two').addClass('col-md-8');
        // $('.left_sec_two').removeClass('col-md-9');
        let cus_gid="";
        notes_list(cust_id);
    });
    
    $(document).on('click','.new_dash_li', function(){
        $('.dash_sec').css('display','block');
        $('.notes_sec').css('display','none');
        $('.online_sec').css('display','none');
        $('.order_sec').css('display','none');
        $('.acct_sec').css('display','none');
        $('.salary1_sec').css('display','none');
        
        $('.estimate_sec').css('display','none');
        $('.invrecp_sec').css('display','none');
        
        $('.einv_sec').css('display','none');
        $('.bank_sec').css('display','none');
        $('.gst_sec').css('display','none');
        $('.count_sec').css('display','block');
        // $('.left_sec').addClass('col-md-9');
        // $('.left_sec').removeClass('col-md-12');
        // $('.left_sec_one').addClass('col-md-4');
        // $('.left_sec_one').removeClass('col-md-3');
        // $('.left_sec_two').addClass('col-md-8');
        // $('.left_sec_two').removeClass('col-md-9');
    });
    $(document).on('click','.bank_li', function(){
        $('.bank_sec').css('display','block');
        $('.dash_sec').css('display','none');
        $('.acct_sec').css('display','none');
        $('.notes_sec').css('display','none');
        $('.salary1_sec').css('display','none');
        
        $('.online_sec').css('display','none');
        $('.estimate_sec').css('display','none');
        $('.invrecp_sec').css('display','none');
        
        $('.einv_sec').css('display','none');
        $('.order_sec').css('display','none');
        $('.gst_sec').css('display','none');
        $('.count_sec').css('display','block');
    });
    $(document).on('click','.account_li', function(){
        $('.acct_sec').css('display','block');
        $('.dash_sec').css('display','none');
        $('.notes_sec').css('display','none');
        $('.order_sec').css('display','none');
        $('.salary1_sec').css('display','none');
        
        $('.online_sec').css('display','none');
        $('.estimate_sec').css('display','none');
        $('.invrecp_sec').css('display','none');
        
        $('.einv_sec').css('display','none');
        $('.bank_sec').css('display','none');
        $('.gst_sec').css('display','none');
        $('.count_sec').css('display','block');
    });
    $(document).on('click','.salary_li', function(){
        $('.salary1_sec').css('display','block');
        $('.dash_sec').css('display','none');
        $('.notes_sec').css('display','none');
        $('.acct_sec').css('display','none');
        $('.order_sec').css('display','none');
        
        $('.online_sec').css('display','none');
        $('.estimate_sec').css('display','none');
        $('.invrecp_sec').css('display','none');
        
        $('.einv_sec').css('display','none');
        $('.bank_sec').css('display','none');
        $('.gst_sec').css('display','none');
        $('.count_sec').css('display','block');
    });
    




jQuery(document).ready(function() {
        var customer_id = getUrlVars()['id'];
        $('.page-loader').hide();
        $(".main_body").css("visibility", "visible");
        $('#act_tab').trigger('click');
        
        //count_details(customer_id);
    });

var customer_id = getUrlVars()['id'];
var lgid = getUrlVars()['gid'];
var ledgers_gid ='';
var cust_id ='';

if(customer_id!=undefined || lgid!=undefined ){
    $("#widget_style").hide();

    if(customer_id!=undefined)
        cust_id=customer_id;
    else
        cust_id='';

    if(lgid!=undefined)
      ledgers_gid=lgid;
  else
      ledgers_gid='';


}else{
    $("#widget_style").show();
}



    var a = moment().subtract(29, "days"),
        t1 = moment();
    var datajson = {
        filter: '',
        search: {
            value: ''
        },
        from: '',
        to: ''
    };

    
     
     $(".salary_li").click(function(){         
         if($(this).hasClass('salary_li_new')){
            
            $('.no_note_salary').css('display','block');
            $('.salary_sec').css('display','none');
         }else{    
            
            $('.no_note_salary').css('display','none');
            $('.salary_sec').css('display','block');     
            var datajson = {
                filter: '',
                search: {
                    value: ''
                },
                from: '',
                to: ''
            };
            var stroage = localStorage.getItem('locked_empsalary_left-1-meta');
            if (stroage != null) {
                var emptydata = JSON.parse(stroage);
                emptydata.filter = '';
                emptydata.search = {
                    value: ''
                };
                emptydata.from = '';
                emptydata.to = '';
                localStorage.setItem('locked_empsalary_left-1-meta', JSON.stringify(emptydata));
            } else {
                localStorage.setItem('locked_empsalary_left-1-meta', JSON.stringify(datajson));
            }

            var versionnew = localStorage.getItem('locked_empsalary_left-1-meta');
            var version_data = JSON.parse(versionnew);
            version_data.version = 2;
            localStorage.setItem('locked_empsalary_left-1-meta', JSON.stringify(version_data));

            
            DefaultDatatableDemo3.init();
        }
});    

 	//salary//
var DefaultDatatableDemo3 = {
        init: function() {
            var t, e;
            t = $(".m_datatable3").mDatatable({ 
                data: {
                    type: "remote",
                    source: {
                        read: {
                            url: Ledgers.API + "cash/list-cash-in?operation=listing-salary-voucher&empid=1041",
                            map: function(raw){
                                var dataSet = raw;
                                if (typeof raw.data !== 'undefined') {
                                     dataSet = raw.data;
                                }
                                return dataSet;
                            }
                        }
                    },
                    pageSize: 10,
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true
                },
                layout: {
                    theme: "default",
                    class: "kt-datatable--brand",
                    scrollX: false,
                    scrollY: true,
                    height: 580,
                    footer: !1
                },
                sortable: !0,
                filterable: !1,
                pagination: true,
                columns: [                                       
                
               
                
                {
                    field: "payment_date",
                    title: "Payment Date",
                    width: 110,
                    template: function(row) {
                        var d=row.payment_date.split("-");
                        var date=d[2]+"-"+d[1]+"-"+d[0];
                        return '<span class="tabl_b tabl_size">'+date+'</span>';

                    }
                }, {
                    field: "payment_mode",
                    title: "Payment Mode",
                    width: 120,
                    template: function(row){
                        return '<span class="tabl_size">'+row.payment_mode+'</span>'
                    }
                    
                },{
                    field: "amount",
                    title: "Paid Amount",
                    width: 100,
                    template: function(row){
                        return '<span class="tabl_b tabl_size">Rs.'+parseInt(row.amount)+'</span>'
                    }
                },
                {
                    field: "voucher_number",
                    title: "Voucher Number",
                    sortable: !1,
                    width: 130,
                    template: function (row) {
                        return '<span style="width: 100px;"><a class="highlight tabl_size" href=' +
                            Ledgers.APP + 'cash/view-cash-entry?rec_number=' + row.voucher_number +
                            '&type=4 target="_blank"><span class="highlight kt--font-info tabl_size">#' + row.voucher_number +
                            '</span></a></span>';
                    }
                },
                {
                    field: "notes",
                    title: "Description",                   
                    width: 180,
                    template: function(row){
                        return '<span class="tabl_b tabl_size">'+row.notes+'</span>'
                    }
                   
                }
                
            ]
            });
            $('#generalSearch_salary').on('keyup', function() {
                var search = $(this).val();
                var localstroage = localStorage.getItem('locked_empsalary_left-1-meta');
                var loacldata = JSON.parse(localstroage);
                loacldata.search = {
                    value: search
                };
                loacldata.pagination.page=1;
                localStorage.setItem('locked_empsalary_left-1-meta', JSON.stringify(loacldata));
                t.search(search, "search");
            });
            $('.quick_filter_salary').on('click', function () {
                var filter = $(this).attr("data-filter");
                $('.quick_filter_salary').removeClass('active');
                $(this).addClass("active");
                var localstroage = localStorage.getItem('locked_empsalary_left-1-meta');
                var loacldata = JSON.parse(localstroage);
                loacldata.filter = filter;
                localStorage.setItem('locked_empsalary_left-1-meta', JSON.stringify(loacldata));
                t.search(filter, "filter");
            }); 
            
        }
    };


    function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

    function estimate_metrics(from=moment().format('YYYY-MM-DD'),to=moment().format('YYYY-MM-DD')) {
        var date_range = [from,to];
        $.ajax({
          type: "POST",
          url: Ledgers.API+"invoice/invoice-helper-service-api",
          dataType : "JSON",
          data: {
            operation:'get-est-metrics',
            date_range :date_range
            },
          async:false,
          success: function(data)
          { 
            $('#total_amt').html(data['total_amt']);
            $('#paid_amt').html(data['paid_amt']);
            $('#con_rat').html(data['conversion']+'%');
            $('#total_no').html(data['total_count']);
            $('#paid_no').html(data['paid_count']);           
          }

        });
    }
//notes API

let cus_gid="1338121520";

$("#add_notes_btn").click(function(){
    let notes=$('#add_notes').val();
    //console.log(notes);
    $.ajax({
    type: "POST",
        url: Ledgers.API+"customer/dashboard-customer",
        dataType: "JSON",
        data: {
            'cust_id': cus_gid,
            'notes': notes,
            'operation': 'add_notes'
        },
        success: function(result) {
            //console.log(result);
            let data='';
            if(result.status == '1' | result.status == 1)
            {
                //console.log("new data",result.data[0]);
                alert({
                 'msg': "Internal Notes Added Successfully",
                 'type': 'success'
                });
                let added=result.data[0]._source.added_on.slice(0, 19).replace("T", " ");
               
                        let date=added.substring(0,10);
                        date=date.split("-");
                        let time=added.substring(10,16);

                        data = `<div class="kt-timeline-1__item kt-timeline-1__item--right" style="left: -16%;width: 100%; margin-top:10px;">													
                                <div class="kt-timeline-1__item-arrow"></div>													
                                <div class="kt-timeline-1__item-content" style="min-height: 60px;padding: 1rem !important; display:inline-block;">
                                    <div class="kt-timeline-1__item-body">
                                    <div class="col-lg-8 col-md-8" style="width:75% !important; float:left;">
                                                <p style="font-size:0.9rem; margin-bottom: 0px; font-weight:600; margin-left:-13px;">`+result.data[0]._source.added_by.name+`</p>
                                            </div>
                                            <div class="col-lg-4 col-md-4" style="width:25% !important; float:right; padding-right:0px; text-align:right;">
                                                <p style="float:right; font-size:0.8rem; margin-bottom:0px; min-width:100px ">`+ date[2]+`-`+date[1]+`-`+date[0] + ` `+ time  +`</p>
                                            </div>  <br>                   
                                            <p style="font-size:0.9rem; margin-bottom: 0; border-top: 1px solid #ebedf2;">`+result.data[0]._source.notes +`</p>
 
                                    </div>
                                </div>
                            </div>`;   
                $('#add_notes').val('');                            
                $("#notes").html(data);      
            }
           
        }
    });
});
function notes_list(cus_gid){
    $.ajax({
        type: "POST",
            url: Ledgers.API+"customer/dashboard-customer",
            dataType: "JSON",
            data: {
                'cust_id': cus_gid,
                'operation': 'notes_list'
            },
            success: function(result) {
                //console.log(result);
                if(result.status == '1' | result.status == 1)
                {
                    let data='';
                    if(result.data.hits.hits.length>0)
                    {                
                        for (var i = 0; i < result.data.hits.hits.length; i++) { 
                            let added=result.data.hits.hits[i]._source.added_on.slice(0, 19).replace("T", " ");
                            let date=added.substring(0,10);
                            date=date.split("-");
                            let time=added.substring(10,16);

                            data += `<div class="kt-timeline-1__item kt-timeline-1__item--right" style="left: -16%;width: 100%; margin-top:10px;">													
                                    <div class="kt-timeline-1__item-arrow"></div>													
                                    <div class="kt-timeline-1__item-content" style="min-height: 60px;padding: 1rem !important; display:inline-block;">
                                        <div class="kt-timeline-1__item-body">
                                        
                                                <div class="col-lg-8 col-md-8" style="width:75% !important; float:left;">
                                                    <p style="font-size:0.9rem; margin-bottom: 0px; font-weight:600; margin-left:-13px;">`+result.data.hits.hits[i]._source.added_by.name+`</p>
                                                </div>
                                                <div class="col-lg-4 col-md-4" style="width:25% !important; float:right; padding-right:0px; text-align:right;">
                                                    <p style="float:right; font-size:0.8rem; margin-bottom:0px; min-width:100px ">`+ date[2]+`-`+date[1]+`-`+date[0] + ` `+ time  +`</p>
                                                </div>  <br>                   
                                                <p style="font-size:0.9rem; margin-bottom: 0; border-top: 1px solid #ebedf2;">`+result.data.hits.hits[i]._source.notes +`</p>
                                        
                                        </div>
                                    </div>
                                </div>`;                
                        
                        
                        }
                        $("#notes").html(data); 
                        
                                    
                    }
                
                }
                
                    
            
            
            }
        });
        let id="1041";
        
    $("#init_payment, #init_payment1, #init_payment2").click(function() {
        var cid="1041";
        Payments.init({contact:{cid:cid, type:3}});
        
        
    });
}

$('#buttons-excel-bank').click(function(){
    //console.log(111);
    var cust_id="1041";
    $.ajax({
    
    type: "POST",
    url: Ledgers.API+"customer/excel-export",
    dataType: "JSON",
    async : false,
    data : {
              operation : 'employee_bank_statement',              
              cust_id : cust_id

            },
    success: function(result) {      
        if (result.status == '1') {
            document.getElementById("download_excel_bank").click();
            $('#download_excel_bank').trigger('click');
            parent.alert({
                'msg': 'Excel Exported',
                'type': 'success'
            });
            return false;
            
        } else {
            parent.alert({
                'msg': 'Sorry Excel Not Exported',
                'type': 'danger'
            });
            return false;
            
          }
          
      }
  }); 
}); 
</script>






<div id="forprint" style="display:none"><div style="width:90%; float:left; border-left:1px solid #111;border-right:1px solid #111;border-top:1px solid #111; margin-top:50px; margin-right:50px;margin-left:50px;"><div style="width:20%; float:left; border-right:1px solid #111;"><img src="https://ledgers.s3.ap-south-1.amazonaws.com/13804/1629699631.png" style="width:120px; margin-top:0px; margin-left:10px;"></div><div style="width:78%; float:right; padding-top:20px !important;"><center><span>Demo Ledgers</span><br><span>Name: sai vignesh | Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="116270786778767f746279272451767c70787d3f727e7c">[email&#160;protected]</a> | Mobile: </span></center> </div></div></div>
<a style="display:none" id="filetodownload" download="Accounts Statement">download</a>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>

    $(document).keydown(function(e) { 
        if (e.keyCode == 80 && e.ctrlKey) {
            $('.buttons-print').click(); 
            return false;
        }
    });

    var  core ='';
   
    function PrintElem(title, body, fontvari='13px')
    {  
        var mywindow = window.open('',  'height=500,width=1000');//'PRINT',
        //border: 1px solid #f7f7f7;
        mywindow.document.write('<html> <head><title>'+document.title+'</title>  <style> @media print{ .hideandseek{display:none}} th{text-align: left !important;} table{width:100%} a{ text-decoration: none; color: black } .rightborder{ border-right: 1px solid #e6e6e6 } table, th, td {  font-family: Poppins; border-collapse:collapse;  padding: 2px 5px; font-size: '+fontvari+'; color: black } .vline{ border-left: 1px solid black !important;text-align: right} .opstr{ border-right: 1px solid black !important;text-align: right} </style> </head> <body style="padding:20px; font-size:13px;"> '+title+body+' </body> </html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        //mywindow.close();

        return true;
    }
    function PrintpdfElem(title, body)
    {   
        mywindow.document.write('<html> <head><title>werwerew</title>  <style> @media print{ } th{text-align: left !important;} table{ margin:0 50%} a{ text-decoration: none; color: black } table, th, td { font-family: Poppins; border-collapse:collapse;  padding: 2px 5px; font-size: 13px; color: black } .vline{ border-left: 1px solid black !important;text-align: right} .opstr{ border-right: 1px solid black !important;text-align: right} .rightborder{ border-right: 1px solid #e6e6e6 }</style> </head> <body style="padding:20px; font-size:13px;"> '+title+body+' </body> </html>');
    }
   


    $('.buttons-print').click(function(){
        /*window.print();*/
        // console.log("cores");
        // console.log($('#forprint').html());
        // console.log("core");
        // console.log(core);
        PrintElem( $('#forprint').html(),' <table> ' +core+'</table>', $('.buttons-print').attr('fontvari') );

    });



    $('.buttons-pdf').click(function(){ 
        var ths = $(this);
        var curhtml =  ths.html();
        
        ths.html( ' <i class="fa fa-refresh fa-spin"></i>');

        $.ajax({ 
            url :'pdf.php',
            type:"post", 
            data:"title="+ $('#forprint').html() + "&body=" + core, 
            success : function(data) {  
                $('#filetodownload').attr('href',"data:application/pdf;base64," + data);
                $('#filetodownload').get(0).click();
                ths.html(curhtml);
            }
        });
    });
    

    var queryparm = (function(a) {
        if (a == "") return {};
        var b = {};
        for (var i = 0; i < a.length; ++i)
        {
            var p=a[i].split('=', 2);
            if (p.length == 1)
                b[p[0]] = "";
            else
                b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
        }
        return b;
    })(window.location.search.substr(1).split('&'));

    


    var exptitle = exptitle ? exptitle : '';
    
    $(document).on('click','.sel_mon_year', function(){
        year_month = $('#month_year').val();
        console.log(year_month);
        metrics_details(customer_id,year_month)
    });

    $(document).on('click','.account_li', function(){
        if($(this).hasClass('account_li_new')){
            $('.count_sec').css('display','block');
            $('.left_sec').addClass('col-md-9');
            $('.left_sec').removeClass('col-md-12');
            $('.left_sec_one').addClass('col-md-4');
            $('.left_sec_one').removeClass('col-md-3');
            $('.left_sec_two').addClass('col-md-8');
            $('.left_sec_two').removeClass('col-md-9');
            
        }else{
            $('.count_sec').css('display','none');
            $('.left_sec').removeClass('col-md-9');
            $('.left_sec').addClass('col-md-12');
            $('.left_sec_one').removeClass('col-md-4');
            $('.left_sec_one').addClass('col-md-3');
            $('.left_sec_two').removeClass('col-md-8');
            $('.left_sec_two').addClass('col-md-9');
        
        }
        metrics_details(customer_id,year_month);
    });



function metrics_details(customer_id,year_month){
    var data;   
        if(year_month==''){
                data =  {
                    'recent'  : 'recent'
                }
            }
            else{
                data = {
                    'year_month'  : year_month
                }
            }    
        $.ajax({
            type: "POST",
            url: Ledgers.API + "cash/list-cash-in?operation=salary-metrics&contact_id="+customer_id,
            dataType: "JSON",
            async:false,
            data:data,
            success: function(result) {
                console.log("metrics count");
                console.log(result);
                var datas;
                var data_two;
                if(result.status == 0){
                    $('.accts_btns').css('display','none');
                    $('.acct_tables thead').css('display','none');
                    $('.count_sec').css('display','block');
                    $('.left_sec').addClass('col-md-9');
                    $('.left_sec').removeClass('col-md-12');
                    $('.left_sec_one').addClass('col-md-4');
                    $('.left_sec_one').removeClass('col-md-3');
                    $('.left_sec_two').addClass('col-md-8');
                    $('.left_sec_two').removeClass('col-md-9');
                    

                    $('#acct_stmt').html('<tr>  <td  style="border:none;text-align:center" colspan="5" ><div class="no_note1" style="min-height:350px;"><div class="row align-items-center" style="min-height:400px;"><div class="col-md-12 text-center"><img src="/m/app/customer/image/customer_nodata_new.jpeg" class="img-fluid" style="width:230px;"></div><div class="col-md-12 text-center"><h6 class="mt-3">No Data Available</h6></div></div></div></td></tr>');
                }else{
                    
                    $('.accts_btns').css('display','flex');
                    $('.acct_tables thead').css('display','table-header-group');
                    $('.count_sec').css('display','none');
                    $('.left_sec').removeClass('col-md-9');
                    $('.left_sec').addClass('col-md-12');
                    $('.left_sec_one').removeClass('col-md-4');
                    $('.left_sec_one').addClass('col-md-3');
                    $('.left_sec_two').removeClass('col-md-8');
                    $('.left_sec_two').addClass('col-md-9');
                    var debit_tot = Math.abs(parseInt(result.p_tax)+parseInt(result.pf)+parseInt(result.esi)+parseInt(result.tds)+parseInt(result.others));
                    var tot = Math.abs(parseInt(debit_tot)+parseInt(result.net_pay));
                    
                    datas += '<tr><td rowspan="5" style="font-size:13px;font-weight:400;">Earnings</td><td rowspan="5" style="font-size:13px;font-weight:400;" class="text-right">Rs. '+result.ctc_pay+'</td><td rowspan="5" class="text-right" style="font-size:13px;font-weight:400;">Rs. '+tot+'</td><td style="font-size:13px;font-weight:400;">TDS</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.tds+'</td></tr><tr><td style="font-size:13px;font-weight:400;">Professional Tax</td><td style="font-size:13px;font-weight:400;" class="text-right">Rs. '+result.p_tax+'</td></tr><tr><td style="font-size:13px;font-weight:400;">ESI</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.esi+'</td></tr><tr><td style="font-size:13px;font-weight:400;">PF</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.pf+'</td></tr><tr><td style="font-size:13px;font-weight:400;">Others</td><td class="text-right" style="font-size:13px;font-weight:400;">Rs. '+result.others+'</td></tr><tr><td class="tabl_b">Total</td><td class="tabl_b text-right">Rs. '+result.ctc_pay+'</td><td class="tabl_b text-right">Rs. '+tot+'</td><td class="tabl_b">Net pay for month</td><td class="tabl_b text-right">Rs. '+result.net_pay+'</td></tr>';

                    data_two += '<tr><td rowspan="5" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Earnings</td><td rowspan="5" class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Rs. '+result.ctc_pay+'</td><td rowspan="5" class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Rs. '+tot+'</td><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">TDS</td><td class="text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111; border-right: 1px solid #111;"font-weight:400;">Rs. '+result.tds+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Professional Tax</td><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;" class="text-right">Rs. '+result.p_tax+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">ESI</td><td class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;">Rs. '+result.esi+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">PF</td><td class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;">Rs. '+result.pf+'</td></tr><tr><td style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;font-weight:400;">Others</td><td class="text-right" style="font-size:13px;border-top:none;padding:10px; border-left: 1px solid #111;border-right: 1px solid #111;font-weight:400;">Rs. '+result.others+'</td></tr><tr><td class="tabl_b" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111;border-bottom: 1px solid #111;">Total</td><td class="tabl_b text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111;border-bottom: 1px solid #111;">Rs. '+result.ctc_pay+'</td><td class="tabl_b text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111; border-bottom: 1px solid #111;">Rs. '+tot+'</td><td class="tabl_b" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111; border-bottom: 1px solid #111;">Net pay for month</td><td class="tabl_b text-right" style="font-size:13px;border-top:1px solid #111;padding:10px; border-left: 1px solid #111;border-bottom: 1px solid #111;border-right: 1px solid #111;">Rs. '+result.net_pay+'</td></tr>';

                    $('#acct_stmt').html(datas);
                    $('#acct_stmts').html(data_two);
                    $('.mnt_yr_li').css('display','block');
                    $('.mnt_yr_sp').html(result.year_month);

                }
            } 
        });  

        // core = $('.dataloader').html();
        // console.log('corecore');
        // console.log(core);
    core = $('.dataloader').html().replace(/^\s+|\s+$/gm,'').replace(/\s+/g, ' ').trim().replace(/href=\"+/g, ' ').trim().replace(/target=\"_blank\"+/g, 'style="text-decoration:none"').trim().replace(/<th>+/g, '<th style="text-align:left">').trim().replace(/(?:https?|ftp):\/\/[\n\S]+/g, '');
    
} 

setTimeout(function(){
    $('.loadcon').hide();
},500);

$('#mybusinesstitle').html("Accounts Statement");



</script>
<!--begin::Modal-->
<div class="modal fade" id="m_modal_4" style="display: none; z-index: 9999;" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div id="modal_dialog" class="modal-dialog" role="document">
        <div class="modal-content">



            <button type="button" class="close led_email" data-dismiss="modal" aria-label="Close"
                style="position: absolute;z-index: 10000;text-align: right;LEFT: 96%;">
                <span aria-hidden="true" style="float: right;padding: 5px 10px;">×</span>
            </button>

            <iframe class="modalif" allowfullscreen height="578" style="border: none;"></iframe>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf-8" async defer>
    function popup(type, name = '', id = '', servicetype = '', mode = '', display_name = '', baddr1 = '', bpincode = '',
        bstate = '', saddr1 = '', spincode = '', sstate = '', baddr2 = '', saddr2 = '', sgstin = '', email = '',bank_name = '',
        acc_no = '', ifsc = '',branch = '',city = '',type_account = '',bcity = '',scity = '' ) {
        var url;
        var height;
        $(".led_email").hide();


        if (type == 'customer') {
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "customer/edit-customer?id=" + id + "&tab=" + servicetype + "&focus=" + mode;
                height = '625px';
            } else {
                url = Ledgers.APP + "customer/add-customer?name=" + name + "&email=" + servicetype + "&phone=" + mode +
                    "&display_name=" + display_name + "&baddr1=" + baddr1 + "&bpincode=" + bpincode + "&bstate=" +
                    bstate + "&saddr1=" + saddr1 + "&spincode=" + spincode + "&sstate=" + sstate + "&baddr2=" + baddr2 +
                    "&saddr2=" + saddr2 + "&gstin=" + sgstin + "&pan=" + email + "&bank_name=" + bank_name + "&acc_no=" + acc_no + 
                    "&ifsc=" + ifsc + "&branch=" + branch + "&city=" + city + "&type_account=" + type_account + "&bcity=" + bcity + "&scity=" + scity;
                height = '695px';

            }


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');


            $('iframe.modalif').css('height', height);


            // console.log(name+'name')
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#email").val('');
                    $("iframe").contents().find("#mobile").val('');
                    $("iframe").contents().find("#name").val('');
                    var n = name.search("@");
                    if (n != -1) {
                        $("iframe").contents().find("#email").val(name);
                    } else if (!isNaN(name)) {
                        $("iframe").contents().find("#mobile").val(name);
                    } else {
                        $("iframe").contents().find("#name").val(name);
                    }

                });
            }
        } else if (type == 'add_supplier') {
            console.log(111);
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "customer/add-supplier?id=" + id + "&tab=" + servicetype + "&focus=" + mode;
                height = '625px';
            } else {
                url = Ledgers.APP + "customer/add-customer?name=" + name + "&email=" + servicetype + "&phone=" + mode +
                    "&display_name=" + display_name + "&baddr1=" + baddr1 + "&bpincode=" + bpincode + "&bstate=" +
                    bstate + "&saddr1=" + saddr1 + "&spincode=" + spincode + "&sstate=" + sstate + "&baddr2=" + baddr2 +
                    "&saddr2=" + saddr2 + "&gstin=" + sgstin;
                height = '695px';

            }


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');


            $('iframe.modalif').css('height', height);


            // console.log(name+'name')
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#email").val('');
                    $("iframe").contents().find("#mobile").val('');
                    $("iframe").contents().find("#name").val('');
                    var n = name.search("@");
                    if (n != -1) {
                        $("iframe").contents().find("#email").val(name);
                    } else if (!isNaN(name)) {
                        $("iframe").contents().find("#mobile").val(name);
                    } else {
                        $("iframe").contents().find("#name").val(name);
                    }

                });
            }
        } else if (type == 'add_customer') {
            console.log(111);
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "supplier/add-customer?id=" + id;
                height = '625px';
            } else {
                url = Ledgers.APP + "customer/add-customer?name=" + name + "&email=" + servicetype + "&phone=" + mode +
                    "&display_name=" + display_name + "&baddr1=" + baddr1 + "&bpincode=" + bpincode + "&bstate=" +
                    bstate + "&saddr1=" + saddr1 + "&spincode=" + spincode + "&sstate=" + sstate + "&baddr2=" + baddr2 +
                    "&saddr2=" + saddr2 + "&gstin=" + sgstin;
                height = '695px';

            }


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');


            $('iframe.modalif').css('height', height);


            // console.log(name+'name')
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#email").val('');
                    $("iframe").contents().find("#mobile").val('');
                    $("iframe").contents().find("#name").val('');
                    var n = name.search("@");
                    if (n != -1) {
                        $("iframe").contents().find("#email").val(name);
                    } else if (!isNaN(name)) {
                        $("iframe").contents().find("#mobile").val(name);
                    } else {
                        $("iframe").contents().find("#name").val(name);
                    }

                });
            }
        } else if (type == 'add-pro-service') {
            var types = servicetype;
            var gname = name;
            if (!mode) mode = 1;
            url = Ledgers.APP + "product/add-product?gname=" + gname + "&type=" + types + "&mode=" + mode;
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('iframe.modalif').css('height', "617");
            $('#m_modal_4').modal('show');
        } else if (type == 'product') {
            var gname = display_name;
            var gdesc = baddr1;
            var ghsn = bpincode;
            var gprice = bstate;
            var grate = saddr1;
            var gunits = spincode;

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "product/add-product?type=" + servicetype + "&id=" + id + "&mode=" + mode;
            else
                url = Ledgers.APP + "product/add-product?type=" + servicetype + "&mode=" + mode + "&gname=" + gname +
                "&gdesc=" + gdesc + "&ghsn=" + ghsn + "&gprice=" + gprice + "&grate=" + grate + "&gunits=" + gunits +
                "&data=" + sstate;


            //url=Ledgers.APP +"product/add-product?type="+servicetype;
            $('iframe.modalif').attr('src', url);
            $(".modal-dialog").css("max-width", "1020px");

            // var height = $(window).height();
            // $('iframe').css('height', height * 0.9 | 0);

            if (id)
                $('iframe.modalif').css('height', "585");
            else
                $('iframe.modalif').css('height', "617");



            $('#m_modal_4').modal('show');


        } else if (type == 'add_product') {
            var gname = display_name;
            var gdesc = baddr1;
            var ghsn = bpincode;
            var gprice = bstate;
            var grate = saddr1;
            var gunits = spincode;

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "product/add-product?type=" + servicetype + "&id=" + id + "&mode=" + mode +
                "&add_pro=1";
            else
                url = Ledgers.APP + "product/add-product?type=" + servicetype + "&mode=" + mode + "&gname=" + gname +
                "&gdesc=" + gdesc + "&ghsn=" + ghsn + "&gprice=" + gprice + "&grate=" + grate + "&gunits=" + gunits +
                "&data=" + sstate;


            //url=Ledgers.APP +"product/add-product?type="+servicetype;
            $('iframe.modalif').attr('src', url);
            $(".modal-dialog").css("max-width", "1020px");

            // var height = $(window).height();
            // $('iframe').css('height', height * 0.9 | 0);

            if (id)
                $('iframe.modalif').css('height', "585");
            else
                $('iframe.modalif').css('height', "617");



            $('#m_modal_4').modal('show');


        } else if (type == 'invproduct') {

            var gname = display_name;
            var gdesc = baddr1;
            var ghsn = bpincode;
            var gprice = bstate;
            var grate = saddr1;
            var gunits = spincode;

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "product/add-product?type=" + servicetype + "&id=" + id + "&mode=" + mode +
                "&invedit=1";
            else
                url = Ledgers.APP + "product/add-product?type=" + servicetype + "&mode=" + mode + "&gname=" + gname +
                "&gdesc=" + gdesc + "&ghsn=" + ghsn + "&gprice=" + gprice + "&grate=" + grate + "&gunits=" + gunits +
                "&data=" + sstate;


            //url=Ledgers.APP +"product/add-product?type="+servicetype;
            $('iframe.modalif').attr('src', url);
            $(".modal-dialog").css("max-width", "1020px");

            // var height = $(window).height();
            // $('iframe').css('height', height * 0.9 | 0);

            if (id)
                $('iframe.modalif').css('height', "585");
            else
                $('iframe.modalif').css('height', "617");

            //$('li:nth-child(3)').trigger( 'click' );

            $('#m_modal_4').modal('show');



        } else if (type == 'supplier') {
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "supplier/edit-supplier?id=" + id  + "&tab=" + servicetype + "&focus=" + mode;;
                height = '623px';
            } else {
                //url = Ledgers.APP + "supplier/add-supplier";
                url = Ledgers.APP + "supplier/add-supplier?name=" + name + "&email=" + servicetype + "&phone=" + mode +
                    "&display_name=" + display_name + "&baddr1=" + baddr1 + "&bpincode=" + bpincode + "&bstate=" +
                    bstate + "&saddr1=" + saddr1 + "&spincode=" + spincode + "&sstate=" + sstate + "&baddr1=" + baddr2 +
                    "&saddr2=" + saddr2 + "&gstin=" + sgstin + "&pan=" + email + "&bank_name=" + bank_name + "&acc_no=" + acc_no + 
                    "&ifsc=" + ifsc + "&branch=" + branch + "&city=" + city + "&type_account=" + type_account + "&bcity=" + bcity + "&scity=" + scity;
                height = '695px';
            }


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');


            $('iframe.modalif').css('height', height);
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'regulator') {
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "regulator/edit-regulator?id=" + id;
                height = '623px';
            } else {
                //url = Ledgers.APP + "supplier/add-supplier";
                url = Ledgers.APP + "regulator/add-regulator?name=" + name + "&email=" + servicetype + "&phone=" + mode +
                    "&display_name=" + display_name + "&baddr1=" + baddr1 + "&bpincode=" + bpincode + "&bstate=" +
                    bstate + "&saddr1=" + saddr1 + "&spincode=" + spincode + "&sstate=" + sstate + "&baddr1=" + baddr2 +
                    "&saddr2=" + saddr2 + "&gstin=" + sgstin;
                height = '695px';
            }


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');


            $('iframe.modalif').css('height', height);
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'supplier_mismatch') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "supplier/add-supplier";
            height = '690px';

            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', height);
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#custgstin").val(name);
                    $("iframe").contents().find("#bgstin").val(name);
                    $("iframe").contents().find("#mismatchs").val("1");
                    //$("#iframe").contents().find("a:first").click();
                    // $("iframe").contents().$("input[name = 'gstin']").trigger("focusout");
                });
            }

        } else if (type == 'tally_supplier') {
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "supplier/add-supplier?id=" + id;
                height = '693px';
            }
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', height);
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'import_customer') {
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "customer/add-customer?id=" + id;
                height = '695px';
            }
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', height);
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'import_supplier') {
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "supplier/add-supplier?id=" + id;
                height = '695px';
            }
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', height);
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'operator') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "ecomm-operators/edit-operator?id=" + id;
            else
                url = Ledgers.APP + "ecomm-operators/add-operator";


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', "500px");
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'user') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "user/add-user?id=" + id;
            else
                url = Ledgers.APP + "user/add-user";


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '440px');



        } else if (type == 'employee') {
            $('#modal_dialog').addClass('modal-lg');
            if (id) {
                url = Ledgers.APP + "employee/add-employee?id=" + id + "&tab=" + servicetype + "&focus=" + mode;
                height = '735px';
            } else {

                url = Ledgers.APP + "employee/add-employee?email=" + name + "&phone=" + servicetype + "&name=" + mode + "&designation=" + display_name + 
                        "&user_level=" + baddr1 + "&user_status=" + bpincode + "&baddr1=" + bstate + "&baddr2=" + saddr1 + "&bpincode=" + spincode + 
                        "&bstate=" + sstate + "&bcity=" + baddr2 +"&aadhar=" + saddr2 + "&pan=" + sgstin + "&bank_name=" + email + "&acc_no=" + bank_name + 
                        "&ifsc=" + acc_no + "&branch=" + ifsc + "&type_account=" + branch + "&city=" + city;
                height = '735px';

            }


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', height);

        } else if (type == 'business-bank') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "business/add-business-bank-account?id=" + id;
            else
                url = Ledgers.APP + "business/add-business-bank-account";


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '550px');

        } else if (type == 'promoter') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "promoter/add-promoter?id=" + id;
            else
                url = Ledgers.APP + "promoter/add-promoter";

            $("iframe.modalif").css('height', '574px');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');



            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'authorized-signatory') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "promoter/add-promoter?authorized_signatory=1&id=" + id;
            else
                url = Ledgers.APP + "promoter/add-promoter?authorized_signatory=1 ";

            $("iframe.modalif").css('height', '574px');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
            
        } else if (type == 'creditor') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "creditor/add-creditor?id=" + id;
            else
                url = Ledgers.APP + "creditor/add-creditor";

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '460px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'debtor') {

                $('#modal_dialog').addClass('modal-lg');
                if (id)
                    url = Ledgers.APP + "debtor/add-debtor?id=" + id;
                else
                    url = Ledgers.APP + "debtor/add-debtor";

                $('iframe.modalif').attr('src', url);

                $('#m_modal_4').modal('show');
                $("iframe.modalif").css('height', '460px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'partner') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "ledgers-plus/add-partner?id="+id;
            else
                url = Ledgers.APP + "ledgers-plus/add-partner";

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '460px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'partner-access') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "ledgers-plus/partner-access?bid="+name+"&id="+id;
            else
                url = Ledgers.APP + "ledgers-plus/partner-access?bid="+name;;

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '460px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }

        } else if (type == 'business') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "business/add-business?id=" + id;
            else
                url = Ledgers.APP + "business/add-business";

            $('iframe.modalif').attr('src', url);
            $("iframe.modalif").css('height', '495px');

            $('#m_modal_4').modal('show');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'business-update') {
            //console.log('called');
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "business/update-business?bmaster=" + id;
            else
                url = Ledgers.APP + "business/update-business";

            $('iframe.modalif').attr('src', url);
            $("iframe.modalif").css('height', '490px');

            $('#m_modal_4').modal('show');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'bank') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "banking/add-bank?id=" + id;
            else
                url = Ledgers.APP + "banking/add-bank";

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');



            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'cheque_status') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "cheque/cheque-update?id=" + id;

            $("iframe.modalif").css('height', '415px');

            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
        } else if (type == 'place') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "place/add-place?id=" + id;
            else
                url = Ledgers.APP + "place/add-place";

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '490px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'ezpay') {
            url = Ledgers.APP + "icici/ezpay-registration";
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', "550px");
        } else if (type == 'partner-business-create') {
            if(!name) name = {};
            if(name && name.pan_gstin && name.pan_gstin!="") name.pan_gstin = name.pan_gstin.toUpperCase().trim();
            url = Ledgers.APP + "new/business?partner-business-create&"+$.param(name);
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', "545px");
        } else if (type == 'card') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "business/showcard?id=" + id;
            else
                url = Ledgers.APP + "business/showcard?id=" + id;

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '590px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'expense') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "expense/add-expense?id=" + id;
            else
                url = Ledgers.APP + "expense/add-expense";

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '595px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'view-expense') {

            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "expense/view-expense?id=" + id;
            else
                url = Ledgers.APP + "expense/view-expense";

            $('iframe.modalif').attr('src', url);

            $('#m_modal_4').modal('show');
            //  $("iframe.modalif").css('height', '585px');


        } else if (type == 'shortcut') {
            url = Ledgers.APP + "business/shortcut-modal"
            $('#modal_dialog').removeClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '600px');

            if (name != '' && name != null) {
                $('body iframe').on('load', function () {
                    $("iframe").contents().find("#name").val(name);
                });
            }
        } else if (type == 'onboarding') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "onboarding/customer?id=" + id;


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');


            $('iframe.modalif').css('height', "630");
            if (name != '' && name != null) {

                $('body iframe.modalif').on('load', function () {
                    $("iframe.modalif").contents().find("#max_text").html(name);
                });
            }
        } else if (type == 'address') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "address/add-address?id=" + id +"&type="+ mode;
            else
                url = Ledgers.APP + "address/add-address?add_id=" + servicetype +"&type="+ mode;


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '550px');

        } else if (type == 'address1') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "address/add-address1?id=" + id +"&type="+ mode;
            else
                url = Ledgers.APP + "address/add-address1?add_id=" + servicetype +"&type="+ mode;


            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '550px');

        } else if (type == 'update_employee') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "connectors/update-employee?id=" + id;

            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '355px');

        } else if (type == 'gst-challan-create') {
            $('#modal_dialog').addClass('modal-lg');
            url = "http://dev.indiafilings.net/customer/create_challan.php";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
        } else if (type == 'salary-expense') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "cash/quick-salary?contact_id=" + id;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('#modal_dialog').css('width', '500');
            $("iframe.modalif").css('height', '578px');
        } else if (type == 'add-ip') {
            $('#modal_dialog').addClass('modal-lg');
            if (id)
                url = Ledgers.APP + "security/add-ip?id=" + id;
            else
                url = Ledgers.APP + "security/add-ip";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '355px');

        } else if (type == 'add-ticket') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "business/add-ticket";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '550px');

        } else if (type == 'add-payment-request') {
            //$('#modal_dialog').addClass('modal');
            url = Ledgers.APP + "payments/request-payment";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('#modal_dialog').css('width', '350');
            $("iframe.modalif").css('height', '610px');

        } else if (type == 'discount_calculator') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "business/discount-calculator";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '300px');

        } else if (type == 'public_business') {
            $('#modal_dialog').addClass('modal-lg');

            url = Ledgers.APP + "business/add-business-public?ledgers_public=1&style_close=1&token=" + id;

            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');

            $("iframe").contents().find(".close_btn_popup").append(
                '<button style="padding-right:5px;position:absolute;right: 5px;top: 5px;" type="button" class="close" onclick="parent.iframe_close();" ><span aria-hidden="true" class="la la-remove closepopup" style=" padding-top: 0px;color:#fff;font-size: 14px;"></span></button>'
                );

            $("iframe.modalif").css('height', '500px');

        } else if (type == 'public_business_listing') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "customer/public-business-listing.php?id=" + name + "&gidtoken=" + id;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '400px');
        } else if (type == 'whatsapp_modal') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "payments/whatsapp_modal.php?token=" + id;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '600px');
        } else if (type == 'paperless_modal') {
            $('#modal_dialog').addClass('modal-lg');
            url =
                "https://paperless.indiafilings.com/API/ledgers_search_api?gid=120078203&bid=2769761961&bmaster_encode=aHJ1T3pKRGdrQ0szUDNQRCt3THRnUT09";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '600px');

        } else if (type == 'paperless_modal_upload') {
            $('#modal_dialog').addClass('modal-lg');
            mode = encodeURIComponent(mode);
            // url = "https://paperless.indiafilings.com/API/ledgers_search_api_upload?client_gid=" + Ledgers.user.gid +
            //     "&client_bid=" + Ledgers.user.bid + "&bmaster_encode=" + Ledgers.user.bmaster_encode + "&doc_type=" +
            //     name + "&doc_id=" + id + "&doc_no=" + servicetype + "&operation=upload&comments=" + mode;
            url = 'https://paperless.indiafilings.com/ledgers/mapping_upload?client_gid='+ Ledgers.user.gid +'&client_bid='+ Ledgers.user.bid +'&bmaster_encode='+ Ledgers.user.bmaster_encode + '&doc_type='+name+'&doc_id='+id+'&supplier='+mode+'&comments='+display_name;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '460px');

        } else if (type == 'paperless_modal_upload_purchase_invoice') {
            $('#modal_dialog').addClass('modal-lg');
            mode = encodeURIComponent(mode);
            url = "https://paperless.indiafilings.com/API/ledgers_search_api_upload?client_gid=" + Ledgers.user.gid +
                "&client_bid=" + Ledgers.user.bid + "&bmaster_encode=" + Ledgers.user.bmaster_encode + "&doc_id=" +
                name + "&doc_type=Purchase Invoice&doc_no=" + id + "&operation=upload&comments=" + mode;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '460px');

        } else if (type == 'tax_payments') {
            $('#modal_dialog').addClass('modal-md');
            var token = "cTdhSFpESW1MUjNRRlkwK0hoR2dlbEJSQjFZTDNoZm9CVHFIdU11MTk5bW5TYnA3UmRFTzRZTGZ4cDJFcUN0V1hSSDJyeFhEbG5FVzBDOWVzbkd0dG1HM2VrMlE3aThJeXphY3krZ2hNNjVUdTdTQUdhWnJsZTZkUkpVTC9LdzVibFp3YXN4NkZ5QWZOajRuam1KNW5UbWdmR2d5R09OWUFwTktKSFBqVEZBZXZGRVlFWU45OFRNd0VKZUFtbzJ0Z08zRnU2aDI1bFExRWptNFNhMjJ2djM3aFhLaGhiTU5TZlJ1Sm0rOStkVWFHSzk2YkY4RE1OWW1qSXp6YlBOUS9nckdQSlpqcFBPYjVSb0lOZi92SEV0SDB5WWJuQ2w1RmdkRFhKellxNWhGZkx6WGVlbjhyakRuaVB1L3d6ZzY=";
            url = "https://taxpaydev.ledgers.cloud/app.php?token="+token;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '650px');
            $(".modal-content").css('margin', 'auto');
        } else if (type == 'paperless_direct_upload') {
            $('#modal_dialog').addClass('modal-lg');
            var token = "cTdhSFpESW1MUjNRRlkwK0hoR2dlbEJSQjFZTDNoZm9CVHFIdU11MTk5bW5TYnA3UmRFTzRZTGZ4cDJFcUN0V1hSSDJyeFhEbG5FVzBDOWVzbkd0dG1HM2VrMlE3aThJeXphY3krZ2hNNjVUdTdTQUdhWnJsZTZkUkpVTC9LdzVibFp3YXN4NkZ5QWZOajRuam1KNW5UbWdmR2d5R09OWUFwTktKSFBqVEZBZXZGRVlFWU45OFRNd0VKZUFtbzJ0Z08zRnU2aDI1bFExRWptNFNhMjJ2djM3aFhLaGhiTU5TZlJ1Sm0rOStkVWFHSzk2YkY4RE1OWW1qSXp6YlBOUS9nckdQSlpqcFBPYjVSb0lOZi92SEV0SDB5WWJuQ2w1RmdkRFhKellxNWhGZkx6WGVlbjhyakRuaVB1L3d6ZzY=";
            url = "https://paperlessdev.indiafilings.com/ledgers/upload_docs?token="+token;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '500px');
            $(".modal-content").css('width', '350px');
            $(".modal-content").css('margin', 'auto');

        } else if (type == 'gst-table-modal') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "business/gst-table-modal";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '600px');
        } else if (type == 'gst-table-modal-public') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "business/gst-table-modal-public?gstin=" + id;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '600px');
        } else if (type == 'groundforce_add_agent') {
                        $('#modal_dialog').addClass('modal-lg');
            url =
                "https://groundforce.cloud/iframe?bid=c3pDVkRJaWRwTmFZVnFlbnRXMFlSUT09&gid=L2swdlVuV0tpOE5OTkU3MVV3bXJyZz09&token=eyJraWQiOiJLdERRenZsb3JTYWptXC90V3Y4NnlQUjhiaFlvTG5sYU9BZEh6S2JRWFR1TT0iLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI0MTBiOWZjNS0zZDhiLTRmNzAtYTc4NS03ZWQ5ZThiYjVhMTMiLCJnaWQiOiIxMjQ3NDQyNTUyIiwibW9iaWxlIjoiODA3Mjc4NzM4NyIsImlzcyI6Imh0dHBzOlwvXC9jb2duaXRvLWlkcC5hcC1zb3V0aC0xLmFtYXpvbmF3cy5jb21cL2FwLXNvdXRoLTFfSEh2NktBbFlrIiwiY29nbml0bzp1c2VybmFtZSI6IjQxMGI5ZmM1LTNkOGItNGY3MC1hNzg1LTdlZDllOGJiNWExMyIsImF1ZCI6InJtN2M3b29vczU5Mzg0a2trZWE4cmM3aGQiLCJldmVudF9pZCI6IjE3NWE4NGM5LTU3YzAtNGIzNC04NTA5LTRhODk0MGU5ZWY3MiIsInRva2VuX3VzZSI6ImlkIiwiYXV0aF90aW1lIjoxNjQ1NDMzNTIxLCJleHAiOjE2NDU1MTk5MjEsImlhdCI6MTY0NTQzMzUyMSwiZW1haWwiOiJzYWl2aWduZXNoQGluZGlhZmlsaW5ncy5jb20iLCJ1c2VybmFtZSI6IlNhaSBWaWduZXNoIE0ifQ.HbtIDFONmrNr0mNLOvUCxRrMlCzviuxDT07Au8Nq-BxXTOTVZI-SCygIbGOfyPs6YVGnHpj6BBRlh2EQt-lUdsrbNNCT2ISAIBl79v4kv6xH_5MqpWfLZ6bDfhVbx6h44xb3e13K_QZou73W0kfRphXB0YZ48LLm8iruDsZw1d_tP_xCtS4Xi9OWDGKhG4TnM7JwoEwJrtlrBi2uWI8feOYApCuy7RqUATBsBfmq1nNE1drYnHHhclL81U1s7XYW-Pk1T1-0IJyNjOZD9QqJPMStF2kcCLNU7cr0hl4CGW3mlSFH1OZXmgRdWBdbykqqgPNPrSYpCLcys4nZzpXE5A";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '535px');
        } else if (type == 'groundforce_add_trip') {
                        $('#modal_dialog').addClass('modal-lg');
            url =
                "https://groundforce.cloud/iframe/create-task.php?bid=c3pDVkRJaWRwTmFZVnFlbnRXMFlSUT09&gid=L2swdlVuV0tpOE5OTkU3MVV3bXJyZz09&token=eyJraWQiOiJLdERRenZsb3JTYWptXC90V3Y4NnlQUjhiaFlvTG5sYU9BZEh6S2JRWFR1TT0iLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI0MTBiOWZjNS0zZDhiLTRmNzAtYTc4NS03ZWQ5ZThiYjVhMTMiLCJnaWQiOiIxMjQ3NDQyNTUyIiwibW9iaWxlIjoiODA3Mjc4NzM4NyIsImlzcyI6Imh0dHBzOlwvXC9jb2duaXRvLWlkcC5hcC1zb3V0aC0xLmFtYXpvbmF3cy5jb21cL2FwLXNvdXRoLTFfSEh2NktBbFlrIiwiY29nbml0bzp1c2VybmFtZSI6IjQxMGI5ZmM1LTNkOGItNGY3MC1hNzg1LTdlZDllOGJiNWExMyIsImF1ZCI6InJtN2M3b29vczU5Mzg0a2trZWE4cmM3aGQiLCJldmVudF9pZCI6IjE3NWE4NGM5LTU3YzAtNGIzNC04NTA5LTRhODk0MGU5ZWY3MiIsInRva2VuX3VzZSI6ImlkIiwiYXV0aF90aW1lIjoxNjQ1NDMzNTIxLCJleHAiOjE2NDU1MTk5MjEsImlhdCI6MTY0NTQzMzUyMSwiZW1haWwiOiJzYWl2aWduZXNoQGluZGlhZmlsaW5ncy5jb20iLCJ1c2VybmFtZSI6IlNhaSBWaWduZXNoIE0ifQ.HbtIDFONmrNr0mNLOvUCxRrMlCzviuxDT07Au8Nq-BxXTOTVZI-SCygIbGOfyPs6YVGnHpj6BBRlh2EQt-lUdsrbNNCT2ISAIBl79v4kv6xH_5MqpWfLZ6bDfhVbx6h44xb3e13K_QZou73W0kfRphXB0YZ48LLm8iruDsZw1d_tP_xCtS4Xi9OWDGKhG4TnM7JwoEwJrtlrBi2uWI8feOYApCuy7RqUATBsBfmq1nNE1drYnHHhclL81U1s7XYW-Pk1T1-0IJyNjOZD9QqJPMStF2kcCLNU7cr0hl4CGW3mlSFH1OZXmgRdWBdbykqqgPNPrSYpCLcys4nZzpXE5A";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '570px');
        } else if (type == 'ledgers-email') {
                        $('#modal_dialog').addClass('modal-lg');
            url = "https://groundforce.cloud/iframe/ledger-email.html?bid=c3pDVkRJaWRwTmFZVnFlbnRXMFlSUT09&gid=L2swdlVuV0tpOE5OTkU3MVV3bXJyZz09&token=eyJraWQiOiJLdERRenZsb3JTYWptXC90V3Y4NnlQUjhiaFlvTG5sYU9BZEh6S2JRWFR1TT0iLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI0MTBiOWZjNS0zZDhiLTRmNzAtYTc4NS03ZWQ5ZThiYjVhMTMiLCJnaWQiOiIxMjQ3NDQyNTUyIiwibW9iaWxlIjoiODA3Mjc4NzM4NyIsImlzcyI6Imh0dHBzOlwvXC9jb2duaXRvLWlkcC5hcC1zb3V0aC0xLmFtYXpvbmF3cy5jb21cL2FwLXNvdXRoLTFfSEh2NktBbFlrIiwiY29nbml0bzp1c2VybmFtZSI6IjQxMGI5ZmM1LTNkOGItNGY3MC1hNzg1LTdlZDllOGJiNWExMyIsImF1ZCI6InJtN2M3b29vczU5Mzg0a2trZWE4cmM3aGQiLCJldmVudF9pZCI6IjE3NWE4NGM5LTU3YzAtNGIzNC04NTA5LTRhODk0MGU5ZWY3MiIsInRva2VuX3VzZSI6ImlkIiwiYXV0aF90aW1lIjoxNjQ1NDMzNTIxLCJleHAiOjE2NDU1MTk5MjEsImlhdCI6MTY0NTQzMzUyMSwiZW1haWwiOiJzYWl2aWduZXNoQGluZGlhZmlsaW5ncy5jb20iLCJ1c2VybmFtZSI6IlNhaSBWaWduZXNoIE0ifQ.HbtIDFONmrNr0mNLOvUCxRrMlCzviuxDT07Au8Nq-BxXTOTVZI-SCygIbGOfyPs6YVGnHpj6BBRlh2EQt-lUdsrbNNCT2ISAIBl79v4kv6xH_5MqpWfLZ6bDfhVbx6h44xb3e13K_QZou73W0kfRphXB0YZ48LLm8iruDsZw1d_tP_xCtS4Xi9OWDGKhG4TnM7JwoEwJrtlrBi2uWI8feOYApCuy7RqUATBsBfmq1nNE1drYnHHhclL81U1s7XYW-Pk1T1-0IJyNjOZD9QqJPMStF2kcCLNU7cr0hl4CGW3mlSFH1OZXmgRdWBdbykqqgPNPrSYpCLcys4nZzpXE5A";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '419px');
        } else if (type == 'tds') {
                            $('#modal_dialog').addClass('modal-lg');
                url = "https://tds.ledgers.cloud/deductee-iframe.php?customer_id=" + display_name + "&customer_name=" +
                    name + "&pan=" + mode + "&amount_paid=" + servicetype + "&purchase=1&invoice_id=" + id + "&bid=" +
                    Ledgers.user.bid + "&gid=" + Ledgers.user.gid;
                $('iframe.modalif').attr('src', url);
                $('#m_modal_4').modal('show');
                $('#modal_dialog').css('width', '500');
                //$("iframe.modalif").css('height', '520px');   
                        } else if (type == 'tds-iframe') {
            
                $('#modal_dialog').addClass('modal-lg');
                url = "https://tds.ledgers.cloud/deductee-1.php?bid=" + Ledgers.user.bid + "&gid=" + Ledgers.user.gid;
                $('iframe.modalif').attr('src', url);
                $('#m_modal_4').modal('show');
                $('#modal_dialog').css('width', '500');
                //$("iframe.modalif").css('height', '520px');    
                    } else if (type == 'sales-tds') {
            
                $('#modal_dialog').addClass('modal-lg');
                url = "https://tdsdev.ledgers.cloud/deductee-iframe-invoice.php?customer_id=" + display_name + "&customer_name=" +
                    name + "&pan=" + mode + "&amount_paid=" + servicetype + "&sales=1&invoice_id=" + id + "&bid=" +
                    Ledgers.user.bid + "&gid=" + Ledgers.user.gid;
                $('iframe.modalif').attr('src', url);
                $('#m_modal_4').modal('show');
                $('#modal_dialog').css('width', '500');
                $("iframe.modalif").css('height', '520px'); 
                    } else if (type == 'general-iframe') {
            $('#modal_dialog').addClass('modal-lg');
            url = name;
            //   console.log('SIGN',url)
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '600px');
        } else if (type == 'itc-email') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "gstr/email?period=" + name + "&id=" + id + "&month=" + servicetype;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '625px');
        } else if (type == 'email-template') {
            $('#modal_dialog').addClass('modal-lg');

            url = Ledgers.APP + "gstr/email?operation=email-template-docs&from=" + name + "&to=" + id + "&subject=" +
                servicetype + "&doc_link=" + mode;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '625px');
        } else if (type == 'invoice-template') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "invoice/email?operation=email-template-docs&from=" + name + "&to=" + id + "&subject=" +
                servicetype + "&doc_link=" + mode;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '651px');
        } else if (type == 'common-email') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "gstr/email?operation=common-email&from=&to=" + id + "&subject=&message=&ccemail=" +
                mode + "&eng_id=" + display_name;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '625px');
        } else if (type == 'ewaybill-setup') {
            $('#modal_dialog').addClass('modal-lg');

            url = Ledgers.APP + "ewaybill/settings";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '580px');
        } else if (type == 'add-business-std-pan-modal') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "business/add-business-std-pan-modal?data_token=" + name + "&login_token=" + id;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '500px');
        } else if (type == 'cin-update') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "compliance/update-cin?bmaster=" + name + "&cin_number=" + id;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '280px');
        } else if (type == 'pan-update') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "compliance/update-pan?bmaster=" + name + "&pan_number=" + id;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '250px');
        } else if (type == 'quick-invoice') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "invoice/quick-invoice";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '700px;');
            $("iframe.modalif").css('height', '700px');
            //$("iframe.modalif").css('width', '700px'); 
            //$("iframe.modalif").css('width', '500px');     
        } else if (type == 'credit-note') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "note/quick-note?operation=create-credit-note";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("#modal_dialog").removeClass("modal-lg");
            $('.modal-content').css('width', '500px !important;');
            $("iframe.modalif").css('height', '650px').css('width', '500px;');
            //$("iframe.modalif").css('width', '700px'); 
            //$("iframe.modalif").css('width', '500px');     
        } else if (type == 'debit-note') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "note/quick-note?operation=create-debit-note";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("#modal_dialog").removeClass("modal-lg");
            $('.modal-content').css('width', '500px !important;');
            $("iframe.modalif").css('height', '650px').css('width', '500px;');
            //$("iframe.modalif").css('width', '700px'); 
            //$("iframe.modalif").css('width', '500px');     
        } else if (type == 'quick-receipt') {
            $('#modal_dialog').removeClass('modal-lg');
            $('#modal_dialog').addClass('modal-md');
            if (name && id && servicetype && mode) {
                url = Ledgers.APP + "invoice/quick-receipt?cust_id=" + id + "&customer_name=" + name + "&invoice=" +
                    servicetype;
            } else if (name && id) {
                url = Ledgers.APP + "invoice/quick-receipt?cust_id=" + id + "&customer_name=" + name;
            } else {
                url = Ledgers.APP + "invoice/quick-receipt";
            }
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '700px;');
            $("iframe.modalif").css('height', '650px');
            //$("iframe.modalif").css('width', '700px'); 
            //$("iframe.modalif").css('width', '500px');     
        } else if (type == 'wallet') {
            $('#modal_dialog').removeClass('modal-lg');
            $('#modal_dialog').addClass('modal-md');
            url = Ledgers.APP + "wallet/my-wallet";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', '560px');
        } else if (type == 'customer-wallet') {
            $('#modal_dialog').removeClass('modal-lg');
            $('#modal_dialog').addClass('modal-md');
            url = Ledgers.APP + "wallet/customer-wallet?cust_id="+name;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', '560px');
        } else if (type == 'supplier-wallet') {
            $('#modal_dialog').removeClass('modal-lg');
            $('#modal_dialog').addClass('modal-md');
            url = Ledgers.APP + "wallet/supplier-wallet?cust_id="+name;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', '560px');
        } else if (type == 'quick-voucher') {
            $('#modal_dialog').removeClass('modal-lg');
            $('#modal_dialog').addClass('modal-md');
            if (name && id && servicetype && mode) {
                url = Ledgers.APP + "cash/quick-voucher?sup_id=" + id + "&supplier_name=" + name + "&invoice=" +
                    servicetype;
            } else if (name && id) {
                url = Ledgers.APP + "cash/quick-voucher?sup_id=" + id + "&supplier_name=" + name;
            } else {
                url = Ledgers.APP + "cash/quick-voucher";
            }
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '700px;');
            $("iframe.modalif").css('height', '700px');
            //$("iframe.modalif").css('width', '700px'); 
            //$("iframe.modalif").css('width', '500px');     
        } else if(type==="edit-salary-expense") {
            var url=Ledgers.APP + "cash/quick-salary?vou_id=" + id;
            $('#modal_dialog').removeClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('#modal_dialog').css('width', '500');
            $("iframe.modalif").css('height', '578px');
        } else if (type == 'view-journal') {
            $('#modal_dialog').addClass('modal-lg').css('left', '-110px');
            url = Ledgers.APP + "chart-of-accounts/add-journal?journal_id=" + name;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '1028px');
            $("iframe.modalif").css('height', '600px');
        } else if (type == 'ledger-onboard') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "purchase/ledgers-onboarding";
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '800px');
            $("iframe.modalif").css('height', '490px');
        } else if (type == 'copy-journal') {
            $('#modal_dialog').addClass('modal-lg').css('left', '-110px');
            url = Ledgers.APP + "chart-of-accounts/add-journal?mode=copy&journal_id=" + name;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '1028px');
            $("iframe.modalif").css('height', '600px');
        } else if (type == 'quick-invoice-view') {
            $('#modal_dialog').addClass('modal-lg');
            url = Ledgers.APP + "invoice/quick-invoice?operation=view&bill_number=" + name;
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '700px;');
            $("iframe.modalif").css('height', '700px');
            //$("iframe.modalif").css('width', '700px'); 
            //$("iframe.modalif").css('width', '500px');     
        } else if (type == 'ledger-email-popup') {
            $('#modal_dialog').addClass('modal-lg');

                        var url = "https://groundforce.cloud/iframe/ledger-mail.php?email=saivignesh@indiafilings.com&bid=c3pDVkRJaWRwTmFZVnFlbnRXMFlSUT09&gid=L2swdlVuV0tpOE5OTkU3MVV3bXJyZz09&domain=ledgers.email&level=NFJGeHUwSVpsTWZrU1cybGVNUlNOQT09";

            $(".led_email").show();
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $("iframe.modalif").css('height', '370px');
        } else if (type == 'bankstmt-upload-recommendation') {
            url = Ledgers.APP + "business/bankstmt-recommendation";
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', "600px");
        } else if (type == 'accounting-partner') {
            url = Ledgers.APP + "user/accounting";
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', "530px");
        } else if (type == 'leave_ledgers') {
            swal({
                title: "Leave LEDGERS",
                text:  "Are you sure? Once you have left this LEDGER. you can only be added back by the Super Admin",
                type: "warning", 
                showCancelButton: true,
                confirmButtonText: "Yes, Leave",
                cancelButtonText: "No, Continue",
            }).then(function(e) {
                console.log(e.value);
                e.value ? leave_ledgers() : "cancel" === e.dismiss
            })
        } else if (type == 'preview_donation_receipt') {
            url = Ledgers.APP + "public/public-donation-preview";
            $('#modal_dialog').addClass('modal-md');
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', "730px");
            $('iframe.modalif').css('padding', "10px");
        } else if (type == 'preview_normal_receipt') {
            url = Ledgers.APP + "public/public-receipt-preview";
            $('#modal_dialog').addClass('modal-md');
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', "730px");
            $('iframe.modalif').css('padding', "10px");
        } else if (type == 'edit-quick-receipt') { 
            $('#modal_dialog').removeClass('modal-lg'); 
            $('#modal_dialog').addClass('modal-md');   
            url = Ledgers.APP + "cash/quick-receipt?rec_id=" + id;   
            $('iframe.modalif').attr('src', url); 
            $('#m_modal_4').modal('show'); 
            $('.modal-content').css('width', '700px;'); 
            $("iframe.modalif").css('height', '650px');   
        } else if (type == 'gsm'){
            if (id) {
                url = Ledgers.APP + "calldata/add-gsm?id=" + id;
                height = '340px';
            } else {
                url = Ledgers.APP + "calldata/add-gsm";
                height = '340px';
            }
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', height);
        } else if (type == 'edit-quick-voucher') {
            $('#modal_dialog').removeClass('modal-lg');
            $('#modal_dialog').addClass('modal-md');
            $('iframe.modalif').attr('src', Ledgers.APP + "cash/quick-voucher?vou_id=" + id);
            $('#m_modal_4').modal('show');
            $('.modal-content').css('width', '700px;');
            $("iframe.modalif").css('height', '700px');
        } else if (type == 'gsm-emp') {
            if (id) {
                url = Ledgers.APP + "calldata/add-gsm-emp?id=" + id;
                height = '340px';
            } else {
                url = Ledgers.APP + "calldata/add-gsm-emp";
                height = '340px';
            }
            $('#modal_dialog').addClass('modal-lg');
            $('iframe.modalif').attr('src', url);
            $('#m_modal_4').modal('show');
            $('iframe.modalif').css('height', height);
        }
    }

    function iframe_close() {
        $('#m_modal_4').modal('hide');
        setTimeout(function () {
            $("#modal_dialog").addClass("modal-lg");
            $('.modal-content').css('width', '700px;');
            $("iframe.modalif").css('height', '700px').css('width', '700px;');
        }, 500);
        //$("iframe").contents().find(".userEditForm")[0].reset();
    }
    function leave_ledgers() {
        $.ajax({
            type: "POST",
            url: Ledgers.API + "business/helper-service",
            dataType: "json",
            data: {
                'operation': 'leave-ledgers'
            },
            success: function (return_data) {
                if (return_data['status'] == 1) {
                    window.location.replace(Ledgers.APP + "dashboard");
                } else {
                    alert({
                        'type': 'danger',
                        'msg': 'Unable to disable user. Please contact Support team'
                    });
                }
            }
        });
    }

    function iframe_doc_launch(type = 'invoice') {
        if (type == 'estimate') {
            window.open(Ledgers.APP + 'invoice/create-estimate?operation=create-estimate', '_blank');
        } else if (type == 'invoice') {
            window.open(Ledgers.APP + 'invoice/create-estimate?operation=create-estimate', '_blank');
        } else if (type == 'purchase-invoice') {
            window.open(Ledgers.APP + 'invoice/create-estimate?operation=create-estimate', '_blank');
        } else if (type == 'purchase-order') {
            window.open(Ledgers.APP + 'invoice/create-estimate?operation=create-estimate', '_blank');
        } else if (type == 'bill') {
            window.open(Ledgers.APP + 'invoice/create-invoice?operation=create-bill-of-supply', '_blank');
        } else if (type == 'receipt') {
            window.open(Ledgers.APP + 'cash/cash-entry?operation=customer-cash-in', '_blank');
        } else if (type == 'voucher') {
            window.open(Ledgers.APP + 'cash/cash-entry?operation=supplier-cash-out', '_blank');
        } else {
            window.open(Ledgers.APP + 'business/dashboard', '_blank');
        }

    }
</script>            </div>
            <!-- begin:: Footer -->
            <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                <div class="kt-container">
                    <div class="foot_new">
                        <div class="kt-footer__copyright" style="float:left;">
                            LEDGERS Business Platform
                        </div>
                        <div class="kt-footer__menu">
                            <a href="#">
                                <small>
                                    Designed with <i class="fa fa-heart pulse" style="font-size:10px;color:red;animation:pound 0.35s infinite alternate;-webkit-animation:pound 0.35s infinite alternate;"></i> to create growing businesses!
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:: Footer -->
        </div>
    </div>
</div>
<!-- end:: Page -->
<!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
    
    <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active" id="" role="tabpanel">
                <div class="kt-notification p-3">
                    <a href="/m/app/user/sales-dashboard" class="kt-notification__item" target="_blank">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-imac kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Sales Terminal
                            </div>
                        </div>
                    </a>
                    <a href="/m/api/business/change" class="kt-notification__item" target="_blank">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-reply kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Switch Business
                            </div>
                        </div>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=ledgersapp.indiafilings.com.ledgers" class="kt-notification__item" target="_blank">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-download kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Download App
                            </div>
                        </div>
                    </a>
                    <a href="https://epiccrm.app" class="kt-notification__item" target="_blank">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-users kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Customer Central
                            </div>
                        </div>
                    </a>
                    <a href="/m/app/module/?m=eql" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="fa fa-credit-card kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                EQL Cards
                            </div>
                        </div>
                    </a>
                    <a href="https://paperlessdev.ledgers.cloud/ledgers/businesscheck?token=" class="kt-notification__item" target="_blank">
                        <div class="kt-notification__item-icon">
                            <i class="fa fa-cloud kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Cloud Records
                            </div>
                        </div>
                    </a>
                    <a href="/m/app/ledgers-plus/manage-customer-all" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-plus kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                LEDGERS Pro
                            </div>
                        </div>
                    </a>
                   
                    <a href="javascript:;" onclick="popup('wallet')" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-coins kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                LEDGERS Wallet
                            </div>
                        </div>
                    </a>
                    <a href="https://ledgers.cloud/c/training" class="kt-notification__item" target="_blank">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-chat-2 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Training
                            </div>
                        </div>
                    </a>
                    <a href="javascript:;" onclick="HelpCrunch('openChat')" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-support kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Support
                            </div>
                        </div>
                    </a>
                    <a href="/m/api/business/logout" class="kt-notification__item" target="_blank">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-logout kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Logout
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/url.min.js" type="text/javascript"></script>
<script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/moment.min.js" type="text/javascript"></script>
<script src="https://devapp.ledgers.cloud/m/app/assets/custom-js/shortcut.js" type="text/javascript"></script>
<script type="text/javascript">

    (function(w,d){
    w.HelpCrunch=function(){w.HelpCrunch.q.push(arguments)};w.HelpCrunch.q=[];
    function r(){var s=document.createElement('script');s.async=1;s.type='text/javascript';s.src='https://widget.helpcrunch.com/';(d.body||d.head).appendChild(s);}
    if(w.attachEvent){w.attachEvent('onload',r)}else{w.addEventListener('load',r,false)}
    })(window, document)
    HelpCrunch('init', 'ledgers', {
        applicationId: 1,
        applicationSecret: 'F2ILXf82ZpB0BL9I4N7XoCOUdKxSQVNP3OMsCo/jBHClP3jDQgoeZinB4lwXa981EQaWi/qiprOJFWtK10nNiw==',
        user:{
        name:"Sai Vignesh M",
        company:"Demo Ledgers",
        email:"saivignesh@indiafilings.com",
        phone:"8072787387",
        bid:"1538826243457",
        plan:"",
        user_level:"2",
        gstin:"AADCI6142A",
        user_id:"1247442552",
        gid:"1247442552"
        }
    });

    HelpCrunch('showChatWidget');

    // (function() {
    //     window.__insp = window.__insp || [];
    //     __insp.push(['wid', 1450130978]);
    //     var ldinsp = function(){
    //     if(typeof window._inspld != "undefined") return; 
    //     window._inspld = 1; 
    //     var insp = document.createElement('script'); 
    //     insp.type = 'text/javascript'; 
    //     insp.async = true; 
    //     insp.id = "inspsync"; 
    //     insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1450130978&r=' + Math.floor(new Date().getTime()/3600000); 
    //     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
    //     setTimeout(ldinsp, 0);
    // })();
</script>
</div></div>        <script>

          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-46619217-4', 'auto');
          ga('send', 'event', 'pageview', 'ledgers', {nonInteraction: true});
          ga('send', 'pageview',{ 'dimension1': '1247442552', 'dimension2':'13804' ,"dimension3":"Demo Ledgers" });

        </script> 
      </body>
    </html>