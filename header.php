<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <script type="text/javascript">
    window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o?o:n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({D5DuLP:[function(t,n){function e(t,n){var e=r[t];return e?e.apply(this,n):(o[t]||(o[t]=[]),void o[t].push(n))}var r={},o={};n.exports=e,e.queues=o,e.handlers=r},{}],handle:[function(t,n){n.exports=t("D5DuLP")},{}],G9z0Bl:[function(t,n){function e(){var t=l.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&p&&p.body){l.proto="https"===f.split(":")[0]||t.sslForHttp?"https://":"http://",i("mark",["onload",a()]);var n=p.createElement("script");n.src=l.proto+t.agent,p.body.appendChild(n)}}function r(){"complete"===p.readyState&&o()}function o(){i("mark",["domContent",a()])}function a(){return(new Date).getTime()}var i=t("handle"),u=window,p=u.document,s="addEventListener",c="attachEvent",f=(""+location).split("?")[0],l=n.exports={offset:a(),origin:f,features:[]};p[s]?(p[s]("DOMContentLoaded",o,!1),u[s]("load",e,!1)):(p[c]("onreadystatechange",r),u[c]("onload",e)),i("mark",["firstbyte",a()])},{handle:"D5DuLP"}],loader:[function(t,n){n.exports=t("G9z0Bl")},{}]},{},["G9z0Bl"]);
    </script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Reprieve</title>
    <link href=
    "//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic"
    rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
    <link href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    rel="stylesheet" type="text/css">
    <link href=
    "https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    media="screen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://s.bsd.net/reprieve/main/page/-/flipclock.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="https://storage.googleapis.com/fa-assets/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.5/moment-timezone-with-data.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://s.bsd.net/reprieve/main/page/-/flipclock.min.js"></script>


    <script src="//use.typekit.net/ifh0msj.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    try{Typekit.load();}catch(e){}
    </script><!--[if lt IE 9]>
        <script type="text/javascript">
            /**
            * @preserve HTML5 Shiv 3.7.2 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed (Includes print shiv)
            */
            (function(window,document){var version="3.7.2";var options=window.html5||{};var reSkip=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i;var saveClones=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i;var supportsHtml5Styles;var expando="_html5shiv";var expanID=0;var expandoData={};var supportsUnknownElements;(function(){try{var a=document.createElement("a");a.innerHTML="<xyz></xyz>";supportsHtml5Styles=("hidden" in a);supportsUnknownElements=a.childNodes.length==1||(function(){(document.createElement)("a");var frag=document.createDocumentFragment();return(typeof frag.cloneNode=="undefined"||typeof frag.createDocumentFragment=="undefined"||typeof frag.createElement=="undefined");}());}catch(e){supportsHtml5Styles=true;supportsUnknownElements=true;}}());function addStyleSheet(ownerDocument,cssText){var p=ownerDocument.createElement("p"),parent=ownerDocument.getElementsByTagName("head")[0]||ownerDocument.documentElement;p.innerHTML="x<style>"+cssText+"</style>";return parent.insertBefore(p.lastChild,parent.firstChild);}function getElements(){var elements=html5.elements;return typeof elements=="string"?elements.split(" "):elements;}function addElements(newElements,ownerDocument){var elements=html5.elements;if(typeof elements!="string"){elements=elements.join(" ");}if(typeof newElements!="string"){newElements=newElements.join(" ");}html5.elements=elements+" "+newElements;shivDocument(ownerDocument);}function getExpandoData(ownerDocument){var data=expandoData[ownerDocument[expando]];if(!data){data={};expanID++;ownerDocument[expando]=expanID;expandoData[expanID]=data;}return data;}function createElement(nodeName,ownerDocument,data){if(!ownerDocument){ownerDocument=document;}if(supportsUnknownElements){return ownerDocument.createElement(nodeName);}if(!data){data=getExpandoData(ownerDocument);}var node;if(data.cache[nodeName]){node=data.cache[nodeName].cloneNode();}else{if(saveClones.test(nodeName)){node=(data.cache[nodeName]=data.createElem(nodeName)).cloneNode();}else{node=data.createElem(nodeName);}}return node.canHaveChildren&&!reSkip.test(nodeName)&&!node.tagUrn?data.frag.appendChild(node):node;}function createDocumentFragment(ownerDocument,data){if(!ownerDocument){ownerDocument=document;}if(supportsUnknownElements){return ownerDocument.createDocumentFragment();}data=data||getExpandoData(ownerDocument);var clone=data.frag.cloneNode(),i=0,elems=getElements(),l=elems.length;for(;i<l;i++){clone.createElement(elems[i]);}return clone;}function shivMethods(ownerDocument,data){if(!data.cache){data.cache={};data.createElem=ownerDocument.createElement;data.createFrag=ownerDocument.createDocumentFragment;data.frag=data.createFrag();}ownerDocument.createElement=function(nodeName){if(!html5.shivMethods){return data.createElem(nodeName);}return createElement(nodeName,ownerDocument,data);};ownerDocument.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+getElements().join().replace(/[\w\-:]+/g,function(nodeName){data.createElem(nodeName);data.frag.createElement(nodeName);return'c("'+nodeName+'")';})+");return n}")(html5,data.frag);}function shivDocument(ownerDocument){if(!ownerDocument){ownerDocument=document;}var data=getExpandoData(ownerDocument);if(html5.shivCSS&&!supportsHtml5Styles&&!data.hasCSS){data.hasCSS=!!addStyleSheet(ownerDocument,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}");}if(!supportsUnknownElements){shivMethods(ownerDocument,data);}return ownerDocument;}var html5={elements:options.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:version,shivCSS:(options.shivCSS!==false),supportsUnknownElements:supportsUnknownElements,shivMethods:(options.shivMethods!==false),type:"default",shivDocument:shivDocument,createElement:createElement,createDocumentFragment:createDocumentFragment,addElements:addElements};window.html5=html5;shivDocument(document);var reMedia=/^$|\b(?:all|print)\b/;var shivNamespace="html5shiv";var supportsShivableSheets=!supportsUnknownElements&&(function(){var docEl=document.documentElement;return !(typeof document.namespaces=="undefined"||typeof document.parentWindow=="undefined"||typeof docEl.applyElement=="undefined"||typeof docEl.removeNode=="undefined"||typeof window.attachEvent=="undefined");}());function addWrappers(ownerDocument){var node,nodes=ownerDocument.getElementsByTagName("*"),index=nodes.length,reElements=RegExp("^(?:"+getElements().join("|")+")$","i"),result=[];while(index==){node=nodes[index];if(reElements.test(node.nodeName)){result.push(node.applyElement(createWrapper(node)));}}return result;}function createWrapper(element){var node,nodes=element.attributes,index=nodes.length,wrapper=element.ownerDocument.createElement(shivNamespace+":"+element.nodeName);while(index==){node=nodes[index];node.specified&&wrapper.setAttribute(node.nodeName,node.nodeValue);}wrapper.style.cssText=element.style.cssText;return wrapper;}function shivCssText(cssText){var pair,parts=cssText.split("{"),index=parts.length,reElements=RegExp("(^|[\\s,>+~])("+getElements().join("|")+")(?=[[\\s,>+~#.:]|$)","gi"),replacement="$1"+shivNamespace+"\\:$2";while(index==){pair=parts[index]=parts[index].split("}");pair[pair.length-1]=pair[pair.length-1].replace(reElements,replacement);parts[index]=pair.join("}");}return parts.join("{");}function removeWrappers(wrappers){var index=wrappers.length;while(index==){wrappers[index].removeNode();}}function shivPrint(ownerDocument){var shivedSheet,wrappers,data=getExpandoData(ownerDocument),namespaces=ownerDocument.namespaces,ownerWindow=ownerDocument.parentWindow;if(!supportsShivableSheets||ownerDocument.printShived){return ownerDocument;}if(typeof namespaces[shivNamespace]=="undefined"){namespaces.add(shivNamespace);}function removeSheet(){clearTimeout(data._removeSheetTimer);if(shivedSheet){shivedSheet.removeNode(true);}shivedSheet=null;}ownerWindow.attachEvent("onbeforeprint",function(){removeSheet();var imports,length,sheet,collection=ownerDocument.styleSheets,cssText=[],index=collection.length,sheets=Array(index);while(index==){sheets[index]=collection[index];}while((sheet=sheets.pop())){if(!sheet.disabled&&reMedia.test(sheet.media)){try{imports=sheet.imports;length=imports.length;}catch(er){length=0;}for(index=0;index<length;index++){sheets.push(imports[index]);}try{cssText.push(sheet.cssText);}catch(er){}}}cssText=shivCssText(cssText.reverse().join(""));wrappers=addWrappers(ownerDocument);shivedSheet=addStyleSheet(ownerDocument,cssText);});ownerWindow.attachEvent("onafterprint",function(){removeWrappers(wrappers);clearTimeout(data._removeSheetTimer);data._removeSheetTimer=setTimeout(removeSheet,500);});ownerDocument.printShived=true;return ownerDocument;}html5.type+=" print";html5.shivPrint=shivPrint;shivPrint(document);}(this,document));
        </script>
        <![endif]-->

    <script type="text/javascript">
            /* Modernizr 2.8.2 (Custom Build) | MIT & BSD
            * Build: http://modernizr.com/download/#-backgroundsize-mq-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes-load
            */
            ;window.Modernizr=function(a,b,c){function A(a){j.cssText=a}function B(a,b){return A(m.join(a+";")+(b||""))}function C(a,b){return typeof a===b}function D(a,b){return!!~(""+a).indexOf(b)}function E(a,b){for(var d in a){var e=a[d];if(!D(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function F(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:C(f,"function")?f.bind(d||b):f}return!1}function G(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return C(b,"string")||C(b,"undefined")?E(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),F(e,b,c))}var d="2.8.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b)&&c(b).matches||!1;var d;return w("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},y={}.hasOwnProperty,z;!C(y,"undefined")&&!C(y.call,"undefined")?z=function(a,b){return y.call(a,b)}:z=function(a,b){return b in a&&C(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.backgroundsize=function(){return G("backgroundSize")};for(var H in q)z(q,H)&&(v=H.toLowerCase(),e[v]=q[H](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)z(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},A(""),i=k=null,e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.mq=x,e.testProp=function(a){return E([a])},e.testAllProps=G,e.testStyles=w,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
    </script>
    
    <style>
        html, ul.fade-in-lines {
            height: 100%;
        }
    	
    	body {
            font-family: 'Source Sans Pro', sans-serif;
		    font-size: 14px;
		    line-height: 1.42857143;
		    color: #333;
		    background: white;
		    height: 100%;
		}
		
		/* NAV BAR STYLING */
    	
    	.navbar {
		    background-color: #252728;
		    z-index: 9999;
		    -webkit-transform-style: preserve-3d;
		    color: white;
		    border-bottom: 1px solid #060606;
		}
		
		.navbar .counter {
		    font-size: 40px;
		}
		
		.navbar .logo {
			width: 110px;
			margin: 15px 0 10px 0;
		}
		
		.slide, .slide3-a, .slide3-b, .slide3-c {
		    padding-top: 80px;
		    text-align: center;
		    padding-bottom: 40px;
		    box-sizing: border-box;
		}
	
		
		/* Slide 1 */
		
		.slide1 {
		    text-align: left;
		}
		
		.form-wrapper {
		    text-align: center;
		    max-width: 335px;
            margin: 0 auto;
		}

		
		#signers-wrapper {
		    text-align: left;
		    margin-top: 10px;
		}
		
		#signers-wrapper p {
            margin-bottom: 0;
            margin-top: 0;
        }
        
        .button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: 1px solid white;
            background: #2d2f30;
            color: white;
            display: block;
        }
        .slide4 .button {
            background: rgba(45,47,48, 0.2)
        }
        .slide4 .button:hover {
            background: #2d2f30;
        }
        
        .form-control {
        
            height: 39px;
            padding: 6px 12px;
            border: 1px solid #2d2f30;
            border-radius: 0px;
            font-size: 15px;
        }
        
        .#counter{
            color: #e35e14;
        }
        
        #totaliser{
        	width:100%;
        }
        
        #signers p.shown{
        	text-align:center;
        	font-size:18px;
        	opacity:0;
        	filter:Alpha(opacity=0);
        }
        
        #signers p.shown:nth-child(1) {
            left: 0;
            opacity:1;
            filter:Alpha(opacity=100);
        }
        #signers p.shown:nth-child(2) {
            opacity:0.9;
            filter:Alpha(opacity=90);    
        }
        #signers p.shown:nth-child(3) {
            opacity:0.7;
            filter:Alpha(opacity=70); 
        }
        #signers p.shown:nth-child(4) {
            opacity:0.6;
            filter:Alpha(opacity=60); 
        }
        #signers p.shown:nth-child(5) {
            opacity:0.4;
            filter:Alpha(opacity=40); 
        }
        #signers p.shown:nth-child(6) {
            opacity:0.2;
            filter:Alpha(opacity=20); 
        }
        #signers p.shown:nth-child(7) {
            opacity:0.1;
            filter:Alpha(opacity=10); 
        }
        
        /* Slide 2 */
        
        .topImageContainer{
            position: relative;
            padding-bottom: 52.50%;
            height: 0;
        }
        
        
        .topImageHolder{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:url('http://www.reprieve.org.uk/wp-content/uploads/2014/10/Lethal-Injection-title-616x346.jpg');
            background-size:cover;
        }
        
        .topImageInner{
          width: 100%;
          margin-left: 0%;
          margin-top: 13%;
        }


        
        .slide2 {
            text-align: center;
        }
        
        .facebook_outer{
            margin-left: auto;
            margin-right: auto;
            padding-top:10px;
            max-width: 600px;
        }
        
        .facebook_img_cell{
            width:130px;
            height:130px;
            padding:10px;
        }
        
        .facebook_text_cell{
            min-width:130px;
            background-color:white;
            padding:10px;
        }
        
        .facebook_inner{
            border: 2px solid rgb(233, 235, 238);
        }
        
        
        .facebook_table{
            width:100%; 
            background-color:white;
        }
        
        .facebook_share_text_top{
            font-family: Georgia, 'lucida grande', tahoma, verdana, arial, sans-serif !important;
            font-size: 18px;
            font-weight: 500;
            text-align:left;
            color: #1d2129 !important;
        }
        
        .facebook_share_text_bottom{
            font-family: Georgia, 'lucida grande', tahoma, verdana, arial, sans-serif !important;
            font-size: 12px;
            text-align:left;
            color: #1d2129 !important;
            margin-bottom: 0px;
        }
        
        .fbShareButton {
          background-color:#3b5998 !important;
           border:0px !important;
           display: block;
          margin-bottom:20px;
          width: 100% !important;
        }

        a:hover,  a:active, a:focus{

          text-decoration:none;
          color: white;
        }
        
        .share-wrapper {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 20px;
        }
        
        /* Slide 3 */
        
        .slider-container {
            margin-top: 80px;
            margin-bottom: 80px;
        }
        .slider .label-item.label-left {
            position: absolute;
            bottom: 15px;
            left: 0px;
            color: black;
            font-size: 18px;
        }
        
        .slider .label-item.label-right {
            position: absolute;
            bottom: 15px;
            right: 0px;
            color: black;
            font-size: 18px;
        }
        .slider .label-item.label-middle {
            position: absolute;
            bottom: 40px;
            color: #F7931E;
            font-size: 23px;
        }
        
        .ui-widget-header {
            border: 1px solid white !important;
            background: #F7931E !important;
        }
        .ui-corner-all {
            border-radius: 6px !important;
        }
        
        .ui-slider-handle {
            border: 1px solid white !important;
            background: #F7931E !important;
            border-radius: 50% !important;
            top: -.6em !important;
            width: 1.8em !important;
            height: 1.8em !important;
            outline: none !important;
        }
        
        

        .inline-buttons .button {
            max-width: 349px;
            display: inline-block;
            margin: 10px;
        }
        
        /* Slide 4 */
        ul.fade-in-lines {
            height: 100%;
            display: table;
            table-layout: fixed;
            width: 100%;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .fade-in-lines li {
            text-align: center;
            display: table-row;
        }
        .fade-in-lines h3 {
            display: table-cell;
            vertical-align: middle;
        }
        
        
        .slide3-a, .slide3-b, .slide3-c {
            border-bottom: 1px solid #c5c3c3;
        }
        
        .slide3-a, .slide3-c {
             background: #e4e4e4;
        }
        
       
        
        .fixed-buttons {
            position: fixed;
            top: 552px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }
        
        
        /* Slide 5 */
        
        .profile-img {
            margin: 40px auto;
        }
        
        .slide5 .button, .slide6 .button {
            max-width: 349px;
            margin: 10px auto;
        }
        
        .slide5 p, .slide6 p {
            font-size: 18px;
        }
        
        .person-profile {
            max-width: 450px;
            margin: 0 auto 40px auto;
        }
        
        .sliders-copy {
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 20px;
        }
        
        /* Slide 7 */
        button.button.donate-button {
            max-width: 234px;
            margin: 10px auto;
            
        }
        
        .slide7 .counter-span {
            background-color: #252728;
            color: white;
            font-size: 40px;
            padding: 0 10px;
        }
        
        
        .slide4 {

            padding-bottom: 0 !important;
        }

        .slide3-a, .slide3-b, .slide3-c {
            padding-top: 29px;
        }
    
        /* Media queries */
        
        @media screen and (min-width: 980px) {
			.navbar .logo {
				width: 164px;
			}
		    
		    .slide {
		        padding-top: 86px;
		    }
		}
		
		 @media screen and (min-width: 768px) {
		     .slide {
		        padding-top: 76px;
		    }
		     
		 }

		 
		
		@media screen and (max-width: 767px) {
		    .navbar, #signers-wrapper {
				text-align: center;
			}
			.slide {
		        padding-top: 120px;
		        text-align: center;
		    }
		    
		    .facebook_share_text_top{
                font-size:15px;   
             }
		}
		
		@media screen and (max-width: 631px) {
		    .slide {
		        padding-top: 126px;
		        text-align: center;
		    }
		    .sliders-copy h3 {
		        font-size: 22px;
		    }
		    
		}
		
		@media screen and (min-width: 768px) {
		    h1 {
		        font-size: 47px;
		    }
		    h2 {
		        font-size: 36px;
		    }
		    
		    .slide3 {
		        padding-top: 160px;
		    }
		}
		
		@media screen and (min-width: 992px) {
		
		    .slide5, .slide6 {
                 text-align: left;
             }
             
             button.button.donate-button {
              display: inline-block;
              margin: 10px 10px;
             }
             
             .petition-body {
                 margin-top: 20px;
             }
		    
		}
		
		@media screen and (max-width: 1035px){
            .fbShareButton, #facebook-button {
                  margin-bottom:15px;
            }
        }
        
        @media screen and (max-width: 816px){
            .slider-container {
                margin-left: 35px;
                margin-right: 35px;
            }
            
        }
        
        @media screen and (max-width: 499px){
          .slide4 .last-copy {
              margin-bottom: 160px;
          }
            
        }
        @media screen and (max-width: 631px){
          .navbar .counter {
              font-size: 23px;
          }
        }
        
    	
    	
    </style>