function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/mwiki/load.php","apiScript":"/mwiki/api.php"}});mw.loader.register([["site","1421100277",[],"site"],["noscript","1378866132",[],"noscript"],["startup","1485491605",[],"startup"],["filepage","1378866132"],["user.groups","1378866132",[],"user"],["user","1378866132",[],"user"],["user.cssprefs","1378866132",["mediawiki.user"],"private"],["user.options","1378866132",[],"private"],["user.tokens","1378866132",[],"private"],["mediawiki.language.data","1485491605",["mediawiki.language.init"]],["skins.chick","1378866132"],["skins.cologneblue","1378866132"],["skins.modern","1378866132"],["skins.monobook","1378866132"],["skins.nostalgia","1378866132"],["skins.simple","1378866132"],["skins.standard","1378866132"],["skins.vector","1378866132"],[
"skins.vector.js","1378866132"],["jquery","1378866132"],["jquery.appear","1378866132"],["jquery.arrowSteps","1378866132"],["jquery.async","1378866132"],["jquery.autoEllipsis","1378866132",["jquery.highlightText"]],["jquery.badge","1378866132",["mediawiki.language"]],["jquery.byteLength","1378866132"],["jquery.byteLimit","1378866132",["jquery.byteLength"]],["jquery.checkboxShiftClick","1378866132"],["jquery.client","1378866132"],["jquery.color","1378866132",["jquery.colorUtil"]],["jquery.colorUtil","1378866132"],["jquery.cookie","1378866132"],["jquery.delayedBind","1378866132"],["jquery.expandableField","1378866132",["jquery.delayedBind"]],["jquery.farbtastic","1378866132",["jquery.colorUtil"]],["jquery.footHovzer","1378866132"],["jquery.form","1378866132"],["jquery.getAttrs","1378866132"],["jquery.hidpi","1378866132"],["jquery.highlightText","1378866132",["jquery.mwExtension"]],["jquery.hoverIntent","1378866132"],["jquery.json","1378866132"],["jquery.localize","1378866132"],[
"jquery.makeCollapsible","1481789919"],["jquery.mockjax","1378866132"],["jquery.mw-jump","1378866132"],["jquery.mwExtension","1378866132"],["jquery.placeholder","1378866132"],["jquery.qunit","1378866132"],["jquery.qunit.completenessTest","1378866132",["jquery.qunit"]],["jquery.spinner","1378866132"],["jquery.jStorage","1378866132",["jquery.json"]],["jquery.suggestions","1378866132",["jquery.autoEllipsis"]],["jquery.tabIndex","1378866132"],["jquery.tablesorter","1482434732",["jquery.mwExtension"]],["jquery.textSelection","1378866132",["jquery.client"]],["jquery.validate","1378866132"],["jquery.xmldom","1378866132"],["jquery.tipsy","1378866132"],["jquery.ui.core","1378866132",["jquery"],"jquery.ui"],["jquery.ui.widget","1378866132",[],"jquery.ui"],["jquery.ui.mouse","1378866132",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1378866132",[],"jquery.ui"],["jquery.ui.draggable","1378866132",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable"
,"1378866132",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1378866132",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1378866132",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1378866132",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1378866132",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1378866132",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1378866132",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1378866132",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1378866132",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1378866132",[
"jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1378866132",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1378866132",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1378866132",["jquery"],"jquery.ui"],["jquery.effects.blind","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale",
"1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1378866132",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1378866132",["jquery.effects.core"],"jquery.ui"],["mediawiki","1378866132"],["mediawiki.api","1378866132",["mediawiki.util"]],["mediawiki.api.category","1378866132",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1378866132",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1378866132",["mediawiki.api"]],["mediawiki.api.watch","1378866132",["mediawiki.api","user.tokens"]],["mediawiki.debug","1378866132",["jquery.footHovzer"]],["mediawiki.debug.init","1378866132",["mediawiki.debug"]],["mediawiki.feedback","1378866132",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1378866132",["jquery.hidpi"]],["mediawiki.htmlform","1378866132"],["mediawiki.notification","1378866132",[
"mediawiki.page.startup"]],["mediawiki.notify","1378866132"],["mediawiki.searchSuggest","1481789919",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1378866132",["mediawiki.util"]],["mediawiki.Uri","1378866132"],["mediawiki.user","1378866132",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1481790029",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1378866132",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1378866132",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1378866132",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1378866132",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1378866132",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1481792607"],["mediawiki.action.view.postEdit","1378866132",["jquery.cookie"]],[
"mediawiki.action.view.rightClickEdit","1378866132"],["mediawiki.action.watch.ajax","1378866132",["mediawiki.page.watch.ajax"]],["mediawiki.language","1378866132",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1378866132",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1378866132"],["mediawiki.language.init","1378866132"],["mediawiki.jqueryMsg","1378866132",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1378866132"],["mediawiki.page.ready","1378866132",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1378866132",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1481809421",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1481790024",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util",
"mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1378866132"],["mediawiki.special.block","1378866132",["mediawiki.util"]],["mediawiki.special.changeemail","1378866132",["mediawiki.util"]],["mediawiki.special.changeslist","1378866132",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1378866132",["jquery.byteLimit"]],["mediawiki.special.preferences","1378866132"],["mediawiki.special.recentchanges","1378866132",["mediawiki.special"]],["mediawiki.special.search","1378866132"],["mediawiki.special.undelete","1378866132"],["mediawiki.special.upload","1378866132",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin.signup","1378866132"],["mediawiki.special.javaScriptTest","1378866132",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1378866132",["jquery.getAttrs","jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1378866132",["mediawiki.util","mediawiki.legacy.wikibits"
]],["mediawiki.legacy.commonPrint","1378866132"],["mediawiki.legacy.config","1378866132",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1378866132",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1378866132",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1378866132"],["mediawiki.legacy.oldshared","1378866132"],["mediawiki.legacy.upload","1378866132",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1378866132",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1378866132"],["ext.gadget.ShowEditLinks","1378866132"],["ext.gadget.ColiruCompiler","1477937807"],["ext.gadget.StandardRevisions","1440554984"],["ext.gadget.ScrollableTable","1453041239",["jquery"]],["ext.cite","1378866132",["jquery.tooltip"]],["jquery.tooltip","1378866132"],["ext.rtlcite","1378866132"],["ext.interwiki.specialpage","1378866132",["jquery.makeCollapsible"]],["mediawiki.api.titleblacklist","1378866132",["mediawiki.api"]],[
"skins.cppreference","1378866132"],["skins.cppreference2","1378866132"],["ext.CppSearch","1378866132"]]);mw.config.set({"wgLoadScript":"/mwiki/load.php","debug":false,"skin":"cppreference2","stylepath":"/mwiki/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/w/$1","wgScriptPath":"/mwiki","wgScriptExtension":".php","wgScript":"/mwiki/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://en.cppreference.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.21.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Cppreference","5":"Cppreference talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":
"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"cppreference":4,"cppreference_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"cppreference.com","wgFileExtensions":["png","gif","jpg","jpeg","pdf","svg","zip","gz","tar.gz","bz2"],"wgDBname":"mwiki1","wgFileCanRotate":true,"wgAvailableSkins":{"modern":"Modern","monobook":"MonoBook","cppreference2":"Cppreference2","vector":"Vector","simple":"Simple","cppreference":"Cppreference","myskin":"MySkin","chick":"Chick","cologneblue":"CologneBlue","standard":"Standard","nostalgia":"Nostalgia"},"wgExtensionAssetsPath":"/mwiki/extensions","wgCookiePrefix":"mwiki1_mwiki_en_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[0,-2,1,4,5,6,7,10,11,12,13
,14,15]});};if(isCompatible()){document.write("\x3cscript src=\"/mwiki/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=cppreference2\x26amp;version=20130903T185640Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: mwiki1-mwiki_en_:resourceloader:filter:minify-js:7:ced7c9118b635300d0c2950403da3d56 */
/* Cached 20170129085937 */