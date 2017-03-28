<?php
use yii\helpers\Html;
use richardfan\widget\JSRegister;

$asset = \app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        
        <?php JSRegister::begin([
            'position' => \yii\web\View::POS_BEGIN
        ]); ?>
     
          <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/cargo.bold-themes.com\/transport-company\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.6.3"
            }
        };
        ! function(a, b, c) {
            function d(a) {
                var c, d, e, f, g, h = b.createElement("canvas"),
                    i = h.getContext && h.getContext("2d"),
                    j = String.fromCharCode;
                if (!i || !i.fillText) return !1;
                switch (i.textBaseline = "top", i.font = "600 32px Arial", a) {
                    case "flag":
                        return i.fillText(j(55356, 56806, 55356, 56826), 0, 0), !(h.toDataURL().length < 3e3) && (i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), c = h.toDataURL(), i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 55356, 57096), 0, 0), d = h.toDataURL(), c !== d);
                    case "diversity":
                        return i.fillText(j(55356, 57221), 0, 0), e = i.getImageData(16, 16, 1, 1).data, f = e[0] + "," + e[1] + "," + e[2] + "," + e[3], i.fillText(j(55356, 57221, 55356, 57343), 0, 0), e = i.getImageData(16, 16, 1, 1).data, g = e[0] + "," + e[1] + "," + e[2] + "," + e[3], f !== g;
                    case "simple":
                        return i.fillText(j(55357, 56835), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0];
                    case "unicode8":
                        return i.fillText(j(55356, 57135), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0];
                    case "unicode9":
                        return i.fillText(j(55358, 56631), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var f, g, h, i;
            for (i = Array("simple", "flag", "unicode8", "diversity", "unicode9"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
         </script>
     
       <?php JSRegister::end(); ?>
      
       <?php
         $this->registerCss('img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }');
       ?>   
       
      <?php
         $this->registerCss('
        a:hover {
            color: #0B60A9;
        }
        select,
        input {
            font-family: Raleway, Arial, sans-serif;
        }
        body {
            font-family: Raleway, Arial, sans-serif;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Lato, Arial, sans-serif;
        }
        .btLightSkin a:hover,
        .btDarkSkin .btLightSkin a:hover {
            color: #0B60A9;
        }
        .btDarkSkin a:hover,
        .btLightSkin .btDarkSkin a:hover {
            color: #0B60A9;
        }
        .btLightSkin select:hover,
        .btLightSkin textarea:hover,
        .btLightSkin input:hover,
        .btDarkSkin .btLightSkin select:hover,
        .btDarkSkin .btLightSkin textarea:hover,
        .btDarkSkin .btLightSkin input:hover {
            -webkit-box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btLightSkin select:focus,
        .btLightSkin textarea:focus,
        .btLightSkin input:focus,
        .btDarkSkin .btLightSkin select:focus,
        .btDarkSkin .btLightSkin textarea:focus,
        .btDarkSkin .btLightSkin input:focus {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
        }
        .btDarkSkin select:hover,
        .btDarkSkin textarea:hover,
        .btDarkSkin input:hover,
        .btLightSkin .btDarkSkin select:hover,
        .btLightSkin .btDarkSkin textarea:hover,
        .btLightSkin .btDarkSkin input:hover {
            -webkit-box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btDarkSkin select:focus,
        .btDarkSkin textarea:focus,
        .btDarkSkin input:focus,
        .btLightSkin .btDarkSkin select:focus,
        .btLightSkin .btDarkSkin textarea:focus,
        .btLightSkin .btDarkSkin input:focus {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
        }
        .btAccentTitle h1,
        .btAccentTitle h2,
        .btAccentTitle h3,
        .btAccentTitle h4,
        .btAccentTitle h5,
        .btAccentTitle h6 {
            color: #0B60A9!important;
        }
        .btLightAccentTitle h1,
        .btLightAccentTitle h2,
        .btLightAccentTitle h3,
        .btLightAccentTitle h4,
        .btLightAccentTitle h5,
        .btLightAccentTitle h6 {
            color: #2995f1!important;
        }
        .btDarkAccentTitle h1,
        .btDarkAccentTitle h2,
        .btDarkAccentTitle h3,
        .btDarkAccentTitle h4,
        .btDarkAccentTitle h5,
        .btDarkAccentTitle h6 {
            color: #08487e!important;
        }
        .btAlternateTitle h1,
        .btAlternateTitle h2,
        .btAlternateTitle h3,
        .btAlternateTitle h4,
        .btAlternateTitle h5,
        .btAlternateTitle h6 {
            color: #686d7a!important;
        }
        .btLightAlternateTitle h1,
        .btLightAlternateTitle h2,
        .btLightAlternateTitle h3,
        .btLightAlternateTitle h4,
        .btLightAlternateTitle h5,
        .btLightAlternateTitle h6 {
            color: #9da1ab!important;
        }
        .btDarkAlternateTitle h1,
        .btDarkAlternateTitle h2,
        .btDarkAlternateTitle h3,
        .btDarkAlternateTitle h4,
        .btDarkAlternateTitle h5,
        .btDarkAlternateTitle h6 {
            color: #535761!important;
        }
        .btLoader {
            border-top: 5px solid #0B60A9;
        }
        .menuPort {
            font-family: Lato, Arial, sans-serif;
        }
        .btDarkSkin ul li ul li a:hover,
        .btLightSkin .btDarkSkin ul li ul li a:hover {
            -webkit-box-shadow: -5px 0 0 #0B60A9 inset;
            box-shadow: -5px 0 0 #0B60A9 inset;
        }
        .btLightSkin ul li ul li a:hover,
        .btDarkSkin .btLightSkin ul li ul li a:hover {
            -webkit-box-shadow: -5px 0 0 #0B60A9 inset;
            box-shadow: -5px 0 0 #0B60A9 inset;
        }
        .btDarkSkin nav ul li.current-menu-ancestor>a:hover,
        .btDarkSkin nav ul li.current-menu-item>a:hover,
        .btLightSkin .btDarkSkin nav ul li.current-menu-ancestor>a:hover,
        .btLightSkin .btDarkSkin nav ul li.current-menu-item>a:hover {
            color: #686d7a;
        }
        .btLightSkin nav ul li.current-menu-ancestor>a:hover,
        .btLightSkin nav ul li.current-menu-item>a:hover,
        .btDarkSkin .btLightSkin nav ul li.current-menu-ancestor>a:hover,
        .btDarkSkin .btLightSkin nav ul li.current-menu-item>a:hover {
            color: #686d7a;
        }
        .topBar .btIco .btIcoHolder:before,
        .menuPort .topBarInMenu .btIco .btIcoHolder:before {
            color: #08487e;
        }
        .topBar .topTools .widget_search .btSearch .btIco.default .btIcoHolder:before,
        .menuPort .topBarInMenu .widget_search .btSearch .btIco.default .btIcoHolder:before {
            color: #0B60A9;
        }
        .topBar .widget_search h2,
        .topBarInMenu .widget_search h2 {
            font-family: Raleway, Arial, sans-serif;
        }
        .topBar .widget_search button,
        .topBarInMenu .widget_search button {
            background: #0B60A9;
        }
        .topBar .widget_search button:hover,
        .topBarInMenu .widget_search button:hover {
            background: #084579;
        }
        .btSearchInner.btFromTopBox {
            background: #0B60A9;
        }
        .btSearchInner.btFromTopBox input[type="text"] {
            border: 1px solid #08487e;
        }
        .btSearchInner.btFromTopBox button:before {
            color: #686d7a;
        }
        .btSearchInner.btFromTopBox button:hover:before {
            color: #0B60A9;
        }
        .btLightSkin.btMenuLeft ul li ul li a:hover,
        .btDarkSkin .btLightSkin.btMenuLeft ul li ul li a:hover {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset!important;
            box-shadow: 5px 0 0 #0B60A9 inset!important;
        }
        .btDarkSkin.btMenuLeft ul li ul li a:hover,
        .btLightSkin .btDarkSkin.btMenuLeft ul li ul li a:hover {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset!important;
            box-shadow: 5px 0 0 #0B60A9 inset!important;
        }
        .btLightSkin.btMenuCenter .menuPort .leftNav ul li ul li a:hover,
        .btDarkSkin .btLightSkin.btMenuCenter .menuPort .leftNav ul li ul li a:hover {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset!important;
            box-shadow: 5px 0 0 #0B60A9 inset!important;
        }
        .btDarkSkin.btMenuCenter .menuPort .leftNav ul li ul li a:hover,
        .btLightSkin .btDarkSkin.btMenuCenter .menuPort .leftNav ul li ul li a:hover {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset!important;
            box-shadow: 5px 0 0 #0B60A9 inset!important;
        }
        .btMenuVerticalLeft .btCloseVertical:before,
        .btMenuVerticalRight .btCloseVertical:before {
            color: #0B60A9;
        }
        .btMenuVerticalLeft .menuPort ul a:hover,
        .btMenuVerticalRight .menuPort ul a:hover {
            color: #686d7a;
        }
        .btMenuVerticalLeft .menuPort ul li .subToggler .btIcoHolder:before,
        .btMenuVerticalRight .menuPort ul li .subToggler .btIcoHolder:before {
            color: #686d7a;
        }
        .btSiteFooter .menu li a {
            color: #59acf4;
        }
        .btSiteFooter .menu li a:hover {
            color: #0B60A9;
        }
        .btSiteFooterWidgets .btBox h4 {
            color: #2995f1;
        }
        .btSiteFooterWidgets .btBox a:hover {
            color: #59acf4;
        }
        .btSiteFooterWidgets .recentTweets small:before {
            color: #2995f1;
        }
        .btSiteFooterCurve .btSiteFooterCurveSleeve {
            background: #084274;
        }
        .btSiteFooterCurve .btCurveLeft,
        .btSiteFooterCurve .btCurveRight {
            fill: #084274;
        }
        .btLightSkin .btSiteFooterWidgets,
        .btDarkSkin .btLightSkin .btSiteFooterWidgets {
            background: #084274;
        }
        .btLightSkin .btSiteFooter,
        .btDarkSkin .btLightSkin .btSiteFooter {
            background: #084274;
        }
        .btDarkSkin .btSiteFooterWidgets,
        .btLightSkin .btDarkSkin .btSiteFooterWidgets {
            background: #084274;
        }
        .btDarkSkin .btSiteFooter,
        .btLightSkin .btDarkSkin .btSiteFooter {
            background: #084274;
        }
        .sticky .btSubTitle:after {
            background: #686d7a;
        }
        .commentsBox h4,
        h3.comment-reply-title {
            color: #686d7a;
        }
        .btBox h4 {
            color: #0B60A9;
        }
        .btBox h5 {
            color: #686d7a;
        }
        .btLightSkin .btSidebar .btBox a:hover,
        .btDarkSkin .btLightSkin .btSidebar .btBox a:hover {
            color: #0B60A9;
        }
        .btDarkSkin .btSidebar .btBox a:hover,
        .btLightSkin .btDarkSkin .btSidebar .btBox a:hover {
            color: #686d7a;
        }
        .btBox.widget_calendar table caption {
            background: #0B60A9;
            font-family: Lato, Arial, sans-serif;
        }
        .btBox.widget_archive ul li a,
        .btBox.widget_categories ul li a {
            font-family: Lato, Arial, sans-serif;
        }
        .btLightSkin .btBox.widget_archive ul li a:hover,
        .btLightSkin .btBox.widget_categories ul li a:hover,
        .btDarkSkin .btLightSkin .btBox.widget_archive ul li a:hover,
        .btDarkSkin .btLightSkin .btBox.widget_categories ul li a:hover {
            background: #0B60A9;
        }
        .btDarkSkin .btBox.widget_archive ul li a:hover,
        .btDarkSkin .btBox.widget_categories ul li a:hover,
        .btLightSkin .btDarkSkin .btBox.widget_archive ul li a:hover,
        .btLightSkin .btDarkSkin .btBox.widget_categories ul li a:hover {
            background: #0B60A9;
        }
        .btBox.widget_recent_comments .comment-author-link a {
            color: #0B60A9;
        }
        .btBox.widget_recent_comments .comment-author-link a:hover {
            color: #686d7a;
        }
        .btBox.widget_rss li a.rsswidget {
            font-family: Lato, Arial, sans-serif;
        }
        .btBox.widget_rss li cite:before {
            color: #0B60A9;
        }
        .btBox .btSearch button {
            background: #686d7a;
            border: 1px solid #535761;
            -webkit-box-shadow: 0 0 0 2px transparent inset, 0 1px 0 #535761 inset;
            box-shadow: 0 0 0 2px transparent inset, 0 1px 0 #535761 inset;
        }
        .btBox .btSearch button:hover {
            border: 1px solid #686d7a;
            -webkit-box-shadow: 0 0 0 2px #686d7a inset, 0 1px 0 transparent inset;
            box-shadow: 0 0 0 2px #686d7a inset, 0 1px 0 transparent inset;
            color: #686d7a;
        }
        .btBox.widget_tag_cloud .tagcloud a {
            background: #0B60A9;
        }
        .btBox.widget_tag_cloud .tagcloud a:hover {
            background: #686d7a;
        }
        .btTags ul li a {
            background: #0B60A9;
        }
        .btTags ul li a:hover {
            background: #686d7a;
        }
        .btHasGhost .fullScreenHeight.btGhost .btArticleComments:hover:before {
            color: #0B60A9!important;
        }
        .btArticleComments:hover,
        .btArticleComments:hover:before {
            color: #0B60A9!important;
        }
        .btArticleCategories a:hover {
            color: #0B60A9!important;
        }
        .btContent table tr th,
        .btContent table thead tr th {
            background: #0B60A9;
        }
        .btContent table tbody tr:nth-child(even) th {
            background: #08487e;
        }
        .btContent table tbody tr:nth-child(odd) th {
            background: #0B60A9;
        }
        .post-password-form input[type="submit"] {
            background: #0B60A9;
            font-family: Lato, Arial, sans-serif;
        }
        .btPagination .paging a {
            color: #686d7a;
        }
        .btPagination .paging a:after {
            -webkit-box-shadow: 0 0 0 0 #0B60A9 inset;
            box-shadow: 0 0 0 0 #0B60A9 inset;
        }
        .btPagination .paging a:hover:after {
            background: #0B60A9;
            -webkit-box-shadow: 0 0 0 50px #0B60A9 inset;
            box-shadow: 0 0 0 50px #0B60A9 inset;
        }
        .btLinkPages a:hover {
            background: #0B60A9;
        }
        .articleSideGutter {
            background: #686d7a;
        }
        .articleSideGutter .asgItem.avatar a:hover:before {
            -webkit-box-shadow: 0 0 0 3px #0B60A9 inset;
            box-shadow: 0 0 0 3px #0B60A9 inset;
        }
        .btLightSkin .articleSideGutter:before,
        .btDarkSkin .btLightSkin .articleSideGutter:before {
            border-right-color: #9da1ab;
        }
        .btDarkSkin .articleSideGutter:before,
        .btLightSkin .btDarkSkin .articleSideGutter:before {
            border-right-color: #535761;
        }
        .comment-respond .btnOutline.btnNormalColor {
            background: #686d7a;
        }
        .comment-respond .btnOutline.btnNormalColor button[type="submit"] {
            font-family: Lato, Arial, sans-serif;
            color: #686d7a!important;
        }
        .comment-respond .btnOutline.btnNormalColor:hover {
            -webkit-box-shadow: 0 0 0 2px #686d7a inset, 0 1px 0 transparent inset;
            box-shadow: 0 0 0 2px #686d7a inset, 0 1px 0 transparent inset;
        }
        .gridItem .boldPhotoSlide .slick-arrow:hover {
            -webkit-box-shadow: 0 0 0 25px #0B60A9 inset;
            box-shadow: 0 0 0 25px #0B60A9 inset;
        }
        .btSingleLatestPost .btLatestPostsDate {
            background: #0B60A9;
        }
        .btSingleLatestPost .btLatestPostsDate:before {
            border-color: transparent transparent transparent #9da1ab;
        }
        .btLightSkin .btLatestPostsDate:before,
        .btDarkSkin .btLightSkin .btLatestPostsDate:before {
            border-left-color: #9da1ab;
        }
        .btDarkSkin .btLatestPostsDate:before,
        .btLightSkin .btDarkSkin .btLatestPostsDate:before {
            border-left-color: #535761;
        }
        .fancy-select .trigger.open {
            background: #0B60A9;
        }
        .fancy-select .options li.selected {
            background: #686d7a;
        }
        .fancy-select .options li:hover,
        .fancy-select .options li.selected:hover {
            background-color: #686d7a!important;
        }
        .btLightSkin .fancy-select .options li.selected,
        .btDarkSkin .btLightSkin .fancy-select .options li.selected {
            background: #686d7a;
        }
        .btLightSkin .fancy-select .options li:hover,
        .btDarkSkin .btLightSkin .fancy-select .options li:hover,
        .btLightSkin .fancy-select .options li.selected:hover,
        .btDarkSkin .btLightSkin .fancy-select .options li.selected:hover {
            background-color: #686d7a!important;
        }
        .btDarkSkin .fancy-select .options li.selected,
        .btLightSkin .btDarkSkin .fancy-select .options li.selected {
            background: #686d7a;
        }
        .btDarkSkin .fancy-select .options li:hover,
        .btLightSkin .btDarkSkin .fancy-select .options li:hover,
        .btDarkSkin .fancy-select .options li.selected:hover,
        .btLightSkin .btDarkSkin .fancy-select .options li.selected:hover {
            background-color: #686d7a!important;
        }
        .btDropdown .fancy-select .trigger.open {
            border-color: #0B60A9;
        }
        .recentTweets small:before {
            color: #0B60A9;
        }
        .btIco .btIcoHolder:before {
            color: #0B60A9;
            border: 1px solid #0B60A9;
        }
        .btIco.white .btIcoHolder:before {
            color: #0B60A9;
        }
        .btIco.accent .btIcoHolder:before {
            background-color: #0B60A9;
        }
        .btReadMore .btIco.default .btIcoHolder:before {
            background: #686d7a;
            border-color: #686d7a;
        }
        .btReadMore .btIco.default:hover .btIcoHolder:before {
            background: #0B60A9;
            border-color: #08487e;
        }
        .btCounterHolder {
            font-family: Lato, Arial, sans-serif;
        }
        .btLightSkin .btCounterHolder,
        .btDarkSkin .btLightSkin .btCounterHolder {
            color: #0B60A9;
        }
        .btLightSkin .btProgressContent .btProgressAnim,
        .btDarkSkin .btLightSkin .btProgressContent .btProgressAnim {
            background-color: #0B60A9;
        }
        .btDarkSkin .btProgressContent .btProgressAnim,
        .btLightSkin .btDarkSkin .btProgressContent .btProgressAnim {
            background-color: #0B60A9;
        }
        .btPriceTable .btPriceTableHeader {
            background: #0B60A9;
        }
        .btPriceTable .btPriceTableSticker {
            background: #686d7a;
        }
        .header .btSuperTitle {
            font-family: Raleway, Arial, sans-serif;
        }
        .header .btSubTitle {
            font-family: Raleway, Arial, sans-serif;
        }
        .btDash.bottomDash .dash:after,
        .btDash.topDash .dash:before {
            border-bottom: 3px solid #0B60A9;
        }
        .header.large .dash:after,
        .header.large .dash:before {
            border-color: #0B60A9;
        }
        .header.extralarge .dash:after,
        .header.extralarge .dash:before {
            border-color: #0B60A9;
        }
        .header.huge .dash:after,
        .header.huge .dash:before {
            border-color: #0B60A9;
        }
        .header.small.btDarkAccentDash .dash:after,
        .header.medium.btDarkAccentDash .dash:after,
        .header.large.btDarkAccentDash .dash:after,
        .header.extralarge.btDarkAccentDash .dash:after,
        .header.huge.btDarkAccentDash .dash:after,
        .header.small.btDarkAccentDash .dash:before,
        .header.medium.btDarkAccentDash .dash:before,
        .header.large.btDarkAccentDash .dash:before,
        .header.extralarge.btDarkAccentDash .dash:before,
        .header.huge.btDarkAccentDash .dash:before {
            border-color: #08487e;
        }
        .header.small.btLightAccentDash .dash:after,
        .header.medium.btLightAccentDash .dash:after,
        .header.large.btLightAccentDash .dash:after,
        .header.extralarge.btLightAccentDash .dash:after,
        .header.huge.btLightAccentDash .dash:after,
        .header.small.btLightAccentDash .dash:before,
        .header.medium.btLightAccentDash .dash:before,
        .header.large.btLightAccentDash .dash:before,
        .header.extralarge.btLightAccentDash .dash:before,
        .header.huge.btLightAccentDash .dash:before {
            border-color: #2995f1;
        }
        .header.small.btAlternateDash .dash:after,
        .header.medium.btAlternateDash .dash:after,
        .header.large.btAlternateDash .dash:after,
        .header.extralarge.btAlternateDash .dash:after,
        .header.huge.btAlternateDash .dash:after,
        .header.small.btAlternateDash .dash:before,
        .header.medium.btAlternateDash .dash:before,
        .header.large.btAlternateDash .dash:before,
        .header.extralarge.btAlternateDash .dash:before,
        .header.huge.btAlternateDash .dash:before {
            border-color: #686d7a;
        }
        .header.small.btDarkAlternateDash .dash:after,
        .header.medium.btDarkAlternateDash .dash:after,
        .header.large.btDarkAlternateDash .dash:after,
        .header.extralarge.btDarkAlternateDash .dash:after,
        .header.huge.btDarkAlternateDash .dash:after,
        .header.small.btDarkAlternateDash .dash:before,
        .header.medium.btDarkAlternateDash .dash:before,
        .header.large.btDarkAlternateDash .dash:before,
        .header.extralarge.btDarkAlternateDash .dash:before,
        .header.huge.btDarkAlternateDash .dash:before {
            border-color: #535761;
        }
        .header.small.btLightAlternateDash .dash:after,
        .header.medium.btLightAlternateDash .dash:after,
        .header.large.btLightAlternateDash .dash:after,
        .header.extralarge.btLightAlternateDash .dash:after,
        .header.huge.btLightAlternateDash .dash:after,
        .header.small.btLightAlternateDash .dash:before,
        .header.medium.btLightAlternateDash .dash:before,
        .header.large.btLightAlternateDash .dash:before,
        .header.extralarge.btLightAlternateDash .dash:before,
        .header.huge.btLightAlternateDash .dash:before {
            border-color: #9da1ab;
        }
        .btBtn {
            font-family: Raleway, Arial, sans-serif;
        }
        .btBtn.btnBorderless.btBtnAccentLight a,
        .btBtn.btnBorderless.btBtnAccentLight a:before {
            color: #2995f1!important;
        }
        .btLightSkin .btBtn.btnBorderless.btBtnAccentLight a:hover,
        .btLightSkin .btBtn.btnBorderless.btBtnAccentLight a:before,
        .btLightSkin .btBtn.btnBorderless.btBtnAccentLight a:hover:before,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btBtnAccentLight a:hover,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btBtnAccentLight a:before,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btBtnAccentLight a:hover:before {
            color: #0B60A9!important;
        }
        .btLightSkin .btBtn.btnBorderless.btnAccentColor a:hover,
        .btLightSkin .btBtn.btnBorderless.btnAccentColor a:before,
        .btLightSkin .btBtn.btnBorderless.btnAccentColor a:hover:before,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btnAccentColor a:hover,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btnAccentColor a:before,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btnAccentColor a:hover:before {
            color: #08487e!important;
        }
        .btLightSkin .btBtn.btnBorderless.btnNormalColor a:hover,
        .btLightSkin .btBtn.btnBorderless.btnNormalColor a:before,
        .btLightSkin .btBtn.btnBorderless.btnNormalColor a:hover:before,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btnNormalColor a:hover,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btnNormalColor a:before,
        .btDarkSkin .btLightSkin .btBtn.btnBorderless.btnNormalColor a:hover:before {
            color: #535761!important;
        }
        .btLightSkin .btnFilled.btnAccentColor,
        .btLightSkin .btnOutline.btnAccentColor:hover,
        .btDarkSkin .btLightSkin .btnFilled.btnAccentColor,
        .btDarkSkin .btLightSkin .btnOutline.btnAccentColor:hover,
        .btDarkSkin .btnFilled.btnAccentColor,
        .btDarkSkin .btnOutline.btnAccentColor:hover,
        .btLightSkin .btDarkSkin .btnFilled.btnAccentColor,
        .btLightSkin .btDarkSkin .btnOutline.btnAccentColor:hover {
            background: #0B60A9;
        }
        .btLightSkin .btnOutline.btnAccentColor,
        .btDarkSkin .btLightSkin .btnOutline.btnAccentColor,
        .btDarkSkin .btnOutline.btnAccentColor,
        .btLightSkin .btDarkSkin .btnOutline.btnAccentColor {
            border: 2px solid #0B60A9;
            color: #0B60A9;
        }
        .btLightSkin .btnOutline.btnAccentColor a,
        .btDarkSkin .btLightSkin .btnOutline.btnAccentColor a,
        .btDarkSkin .btnOutline.btnAccentColor a,
        .btLightSkin .btDarkSkin .btnOutline.btnAccentColor a,
        .btLightSkin .btnOutline.btnAccentColor a:before,
        .btDarkSkin .btLightSkin .btnOutline.btnAccentColor a:before,
        .btDarkSkin .btnOutline.btnAccentColor a:before,
        .btLightSkin .btDarkSkin .btnOutline.btnAccentColor a:before,
        .btLightSkin .btnOutline.btnAccentColor button,
        .btDarkSkin .btLightSkin .btnOutline.btnAccentColor button,
        .btDarkSkin .btnOutline.btnAccentColor button,
        .btLightSkin .btDarkSkin .btnOutline.btnAccentColor button {
            color: #0B60A9;
        }
        .btLightSkin .btnFilled.btnAccentColor:hover,
        .btDarkSkin .btLightSkin .btnFilled.btnAccentColor:hover,
        .btDarkSkin .btnFilled.btnAccentColor:hover,
        .btLightSkin .btDarkSkin .btnFilled.btnAccentColor:hover {
            background: #08487e;
        }
        .btLightSkin .btnFilled.btnNormalColor,
        .btLightSkin .btnOutline.btnNormalColor:hover,
        .btDarkSkin .btLightSkin .btnFilled.btnNormalColor,
        .btDarkSkin .btLightSkin .btnOutline.btnNormalColor:hover,
        .btDarkSkin .btnFilled.btnNormalColor,
        .btDarkSkin .btnOutline.btnNormalColor:hover,
        .btLightSkin .btDarkSkin .btnFilled.btnNormalColor,
        .btLightSkin .btDarkSkin .btnOutline.btnNormalColor:hover {
            background: #686d7a;
        }
        .btLightSkin .btnOutline.btnNormalColor,
        .btDarkSkin .btLightSkin .btnOutline.btnNormalColor,
        .btDarkSkin .btnOutline.btnNormalColor,
        .btLightSkin .btDarkSkin .btnOutline.btnNormalColor {
            border: 2px solid #686d7a;
            color: #686d7a;
        }
        .btLightSkin .btnOutline.btnNormalColor a,
        .btDarkSkin .btLightSkin .btnOutline.btnNormalColor a,
        .btDarkSkin .btnOutline.btnNormalColor a,
        .btLightSkin .btDarkSkin .btnOutline.btnNormalColor a,
        .btLightSkin .btnOutline.btnNormalColor a:before,
        .btDarkSkin .btLightSkin .btnOutline.btnNormalColor a:before,
        .btDarkSkin .btnOutline.btnNormalColor a:before,
        .btLightSkin .btDarkSkin .btnOutline.btnNormalColor a:before,
        .btLightSkin .btnOutline.btnNormalColor button,
        .btDarkSkin .btLightSkin .btnOutline.btnNormalColor button,
        .btDarkSkin .btnOutline.btnNormalColor button,
        .btLightSkin .btDarkSkin .btnOutline.btnNormalColor button {
            color: #686d7a;
        }
        .btLightSkin .btnFilled.btnNormalColor:hover,
        .btDarkSkin .btLightSkin .btnFilled.btnNormalColor:hover,
        .btDarkSkin .btnFilled.btnNormalColor:hover,
        .btLightSkin .btDarkSkin .btnFilled.btnNormalColor:hover {
            background: #535761;
        }
        .btLightSkin .gridItem .btGridContent .btSuperTitle a:hover,
        .btDarkSkin .btLightSkin .gridItem .btGridContent .btSuperTitle a:hover {
            color: #686d7a;
        }
        .btDarkSkin .gridItem .btGridContent .btSuperTitle a:hover,
        .btLightSkin .btDarkSkin .gridItem .btGridContent .btSuperTitle a:hover {
            color: #686d7a;
        }
        .btCatFilter .btCatFilterItem {
            color: #0B60A9;
        }
        .btCatFilter .btCatFilterItem:hover {
            color: #686d7a;
            border-bottom-color: #686d7a;
        }
        .btCatFilter .btCatFilterItem:hover:after {
            background: #686d7a;
        }
        .btMediaBox blockquote {
            background-color: #0B60A9;
        }
        .btMediaBox.btLink {
            background-color: #0B60A9;
        }
        .btMediaBox blockquote {
            background-color: #0B60A9;
        }
        .nbsImgHolder {
            border: 3px solid #0B60A9;
        }
        span.nbsDir {
            color: #686d7a;
        }
        .btLightSkin span.nbsTitle,
        .btDarkSkin .btLightSkin span.nbsTitle {
            color: #0B60A9;
        }
        .slided .slick-dots li button:hover,
        .slided .slick-dots li.slick-active button:hover {
            border-color: #686d7a;
        }
        .slided .slick-dots li.slick-active button {
            border-color: #0B60A9;
        }
        .btLightSkin .btTestimonialsSlider .slidedItem .btSliderPort .btSliderCell .header .btSubTitle,
        .btDarkSkin .btLightSkin .btTestimonialsSlider .slidedItem .btSliderPort .btSliderCell .header .btSubTitle {
            color: #686d7a;
        }
        .btLightSkin .btTestimonialsSlider .slidedItem .btSliderPort .btSliderCell .btCircleImage,
        .btDarkSkin .btLightSkin .btTestimonialsSlider .slidedItem .btSliderPort .btSliderCell .btCircleImage {
            border-color: #686d7a;
        }
        .btLightSkin .btTestimonialsSlider .slidedItem .btSliderPort .btSliderCell .btSliderPort .btCircleImage .btImage,
        .btDarkSkin .btLightSkin .btTestimonialsSlider .slidedItem .btSliderPort .btSliderCell .btSliderPort .btCircleImage .btImage {
            border-color: #686d7a;
        }
        .btInfoBarMeta p strong {
            color: #0B60A9;
        }
        .tabsHeader li.on {
            color: #0B60A9;
        }
        .btLightSkin .tabsHeader li.on,
        .btDarkSkin .btLightSkin .tabsHeader li.on {
            color: #0B60A9;
        }
        .btDarkSkin .tabsHeader li.on,
        .btLightSkin .btDarkSkin .tabsHeader li.on {
            color: #0B60A9;
        }
        .btLightSkin .tabsHeader li:not(on):hover,
        .btDarkSkin .btLightSkin .tabsHeader li:not(on):hover {
            color: #0B60A9;
            border-bottom-color: #0B60A9;
        }
        .btDarkSkin .tabsHeader li:not(on):hover,
        .btLightSkin .btDarkSkin .tabsHeader li:not(on):hover {
            color: #0B60A9;
            border-bottom-color: #0B60A9;
        }
        .tabsVertical .tabAccordionTitle:hover {
            color: #0B60A9;
        }
        .btLightSkin .tabAccordionTitle.on,
        .btDarkSkin .btLightSkin .tabAccordionTitle.on {
            color: #0B60A9;
        }
        .btDarkSkin .tabAccordionTitle.on,
        .btLightSkin .btDarkSkin .tabAccordionTitle.on {
            color: #0B60A9;
        }
        .btLightSkin .btLatestPostsContainer .btSingleLatestPostContent .header.small h4 a:hover,
        .btDarkSkin .btLightSkin .btLatestPostsContainer .btSingleLatestPostContent .header.small h4 a:hover {
            color: #0B60A9;
        }
        .btDarkSkin .btLatestPostsContainer .btSingleLatestPostContent .header.small h4 a:hover,
        .btLightSkin .btDarkSkin .btLatestPostsContainer .btSingleLatestPostContent .header.small h4 a:hover {
            color: #0B60A9;
        }
        .btCustomMenu {
            font-family: Lato, Arial, sans-serif;
        }
        .btCustomMenu ul li a {
            -webkit-box-shadow: 0 0 0 #0B60A9 inset;
            box-shadow: 0 0 0 #0B60A9 inset;
        }
        .btCustomMenu ul li a:hover {
            -webkit-box-shadow: -5px 0 0 #0B60A9 inset;
            box-shadow: -5px 0 0 #0B60A9 inset;
        }
        .btCustomMenu ul li .customSubToggler a.btIcoHolder:before {
            color: #686d7a;
        }
        .btCustomMenu ul li.current-menu-item>a {
            color: #0B60A9;
        }
        .btLightSkin .wpcf7-submit,
        .btDarkSkin .btLightSkin .wpcf7-submit,
        .btDarkSkin .wpcf7-submit,
        .btLightSkin .btDarkSkin .wpcf7-submit {
            background: #0B60A9;
        }
        .btLightSkin .wpcf7-submit:hover,
        .btDarkSkin .btLightSkin .wpcf7-submit:hover,
        .btDarkSkin .wpcf7-submit:hover,
        .btLightSkin .btDarkSkin .wpcf7-submit:hover {
            color: #0B60A9;
        }
        .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
        .btQuoteBooking .ui-slider .ui-slider-handle,
        .btQuoteBooking .btQuoteBookingForm .btQuoteTotal,
        .btDatePicker .ui-datepicker-header,
        .btQuoteBooking .btContactSubmit {
            background: #0B60A9;
        }
        .btQuoteBooking .btContactNext,
        .btQuoteBooking .btSubmitMessage {
            color: #0B60A9;
        }
        .btQuoteBooking .btContactNext {
            border-color: #0B60A9;
        }
        .btQuoteBooking .btQuoteSwitch:hover {
            -webkit-box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking input[type="text"]:hover,
        .btQuoteBooking input[type="email"]:hover,
        .btQuoteBooking input[type="password"]:hover,
        .btQuoteBooking textarea:hover,
        .btQuoteBooking .fancy-select .trigger:hover {
            -webkit-box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .dd.ddcommon.borderRadius:hover .ddTitleText {
            -webkit-box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking input[type="text"]:focus,
        .btQuoteBooking input[type="email"]:focus,
        .btQuoteBooking textarea:focus,
        .btQuoteBooking .fancy-select .trigger.open {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
        .btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText {
            -webkit-box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 5px 0 0 #0B60A9 inset, 0 2px 10px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory input:hover,
        .btQuoteBooking .btContactFieldMandatory textarea:hover {
            -webkit-box-shadow: 0 0 0 1px #AAA inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #AAA inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory .dd.ddcommon.borderRadius:hover .ddTitleText {
            -webkit-box-shadow: 0 0 0 1px #AAA inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #AAA inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory input:focus,
        .btQuoteBooking .btContactFieldMandatory textarea:focus {
            -webkit-box-shadow: 0 0 0 1px #AAA inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #AAA inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory .dd.ddcommon.borderRadiusTp .ddTitleText {
            -webkit-box-shadow: 0 0 0 1px #AAA inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #AAA inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea {
            border: 1px solid #0B60A9;
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset;
            box-shadow: 0 0 0 1px #0B60A9 inset;
        }
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText {
            border: 1px solid #0B60A9;
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset;
            box-shadow: 0 0 0 1px #0B60A9 inset;
        }
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError input:hover,
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:hover {
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #0B60A9 inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius:hover .ddTitleText {
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #0B60A9 inset, 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError input:focus,
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:focus {
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #0B60A9 inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText {
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #0B60A9 inset, 5px 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btPayPalButton:hover {
            -webkit-box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0B60A9 inset, 0 1px 5px rgba(0, 0, 0, .2);
        }
        .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
        .btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
        .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea,
        .btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea {
            border-color: #0B60A9;
        }
        .btQuoteBooking .btContactNext {
            background: #0B60A9;
            border: 1px solid #0B60A9;
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset, 0 1px 0 transparent inset;
            box-shadow: 0 0 0 1px #0B60A9 inset, 0 1px 0 transparent inset;
        }
        .btQuoteBooking .btContactNext:hover {
            background: #08487e;
            border: 1px solid #08487e;
            -webkit-box-shadow: 0 0 0 1px transparent inset, 0 1px 0 #08487e inset;
            box-shadow: 0 0 0 1px transparent inset, 0 1px 0 #08487e inset;
        }
        .btQuoteBooking .btContactSubmit {
            background: #0B60A9;
            border: 1px solid #0B60A9;
            -webkit-box-shadow: 0 0 0 1px #0B60A9 inset, 0 1px 0 transparent inset;
            box-shadow: 0 0 0 1px #0B60A9 inset, 0 1px 0 transparent inset;
        }
        .btQuoteBooking .btContactSubmit:hover {
            background: #08487e;
            border: 1px solid #08487e;
            -webkit-box-shadow: 0 0 0 1px transparent inset, 0 1px 0 #08487e inset;
            box-shadow: 0 0 0 1px transparent inset, 0 1px 0 #08487e inset;
        }
    ');
      ?>  
      <?php
        $this->registerCss('  .btMenuVerticalLeft .btCloseVertical:before,
        .btMenuVerticalRight .btCloseVertical:before {
            background: none;
        }');
      ?>
       
       <?php JSRegister::begin([
        'key' => 'bootstrap-modal',
        'position' => \yii\web\View::POS_BEGIN
      ]); ?>
         
          <script>
        window.BTURI = "http://cargo.bold-themes.com/transport-company/wp-content/themes/cargo";
        //window.BTAJAXURL = "http://cargo.bold-themes.com/transport-company/wp-admin/admin-ajax.php";
        
         </script>
       <?php JSRegister::end(); ?>  
         
         
         
       <?php JSRegister::begin([
        //'key' => 'bootstrap-modal',
        'position' => \yii\web\View::POS_READY
      ]); ?>
      <script>
        (function($) {

            var css_class = 'c58b3c2826c03d';
            var c = $('.' + css_class);

            $(window).ready(function() {
                setTimeout(function() {
                    c.css('opacity', '1');
                }, 200);
            });

            var accent_color = '';

            var rec_secret_key = '';

            if (accent_color != '') {
                $('head').append('<style>.btQuoteBooking.' + css_class + ' .btContactNext { color: ' + accent_color + ' !important; border: ' + accent_color + ' 2px solid !important; }.btQuoteBooking.' + css_class + '  input[type="text"]:hover, .btQuoteBooking.' + css_class + '  input[type="email"]:hover, .btQuoteBooking.' + css_class + '  input[type="password"]:hover, .btQuoteBooking.' + css_class + '  textarea:hover, .btQuoteBooking.' + css_class + '  .fancy-select .trigger:hover {	box-shadow: 0 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + ' .dd.ddcommon.borderRadius:hover .ddTitleText {	box-shadow: 0 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + '  input[type="text"]:focus, .btQuoteBooking.' + css_class + '  input[type="email"]:focus, .btQuoteBooking.' + css_class + '  textarea:focus, .btQuoteBooking.' + css_class + '  .fancy-select .trigger.open {	box-shadow: 5px 0 0 ' + accent_color + ' inset, 0 2px 10px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + ' .dd.ddcommon.borderRadiusTp .ddTitleText, .btQuoteBooking.' + css_class + ' .dd.ddcommon.borderRadiusBtm .ddTitleText {	box-shadow: 5px 0 0 ' + accent_color + ' inset, 0 2px 10px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + '  .ui-slider .ui-slider-handle {	background: ' + accent_color + ' !important;}.btQuoteBooking.' + css_class + ' .btQuoteBookingForm .btQuoteTotal {	background: ' + accent_color + ' !important;}.btQuoteBooking.' + css_class + '  .btContactFieldMandatory input:hover, .btQuoteBooking.' + css_class + '  .btContactFieldMandatory textarea:hover {	box-shadow: 0 0 0 1px #AAA inset, 0 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + ' .btContactFieldMandatory .dd.ddcommon.borderRadius:hover .ddTitleText {	box-shadow: 0 0 0 1px #AAA inset, 0 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + '  .btContactFieldMandatory input:focus, .btQuoteBooking.' + css_class + '  .btContactFieldMandatory textarea:focus {	box-shadow: 0 0 0 1px #AAA inset, 5px 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + ' .btContactFieldMandatory .dd.ddcommon.borderRadiusTp .ddTitleText {	box-shadow: 0 0 0 1px #AAA inset, 5px 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + '  .btContactFieldMandatory.btContactFieldError input, .btQuoteBooking.' + css_class + '  .btContactFieldMandatory.btContactFieldError textarea {	border: 1px solid ' + accent_color + ' !important;	box-shadow: 0 0 0 1px ' + accent_color + ' inset !important;}.btQuoteBooking.' + css_class + ' .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText {	border: 1px solid ' + accent_color + ' !important;	box-shadow: 0 0 0 1px ' + accent_color + ' inset !important;}.btQuoteBooking.' + css_class + '  .btContactFieldMandatory.btContactFieldError input:hover, .btQuoteBooking.' + css_class + '  .btContactFieldMandatory.btContactFieldError textarea:hover {	box-shadow: 0 0 0 1px ' + accent_color + ' inset, 0 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + ' .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius:hover .ddTitleText {	box-shadow: 0 0 0 1px ' + accent_color + ' inset, 0 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + '  .btContactFieldMandatory.btContactFieldError input:focus, .btQuoteBooking.' + css_class + '  .btContactFieldMandatory.btContactFieldError textarea:focus {	box-shadow: 0 0 0 1px ' + accent_color + ' inset, 5px 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + ' .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText {	box-shadow: 0 0 0 1px ' + accent_color + ' inset, 5px 0 0 ' + accent_color + ' inset, 0 1px 5px rgba(0,0,0,0.2) !important;}.btQuoteBooking.' + css_class + ' .btSubmitMessage {	color: ' + accent_color + ' !important;}.btDatePicker .ui-datepicker-header {	background-color: ' + accent_color + ' !important;}.btQuoteBooking.' + css_class + ' .btContactSubmit {	background-color: ' + accent_color + ' !important;}.btQuoteBooking.' + css_class + ' .btQuoteSwitch.on .btQuoteSwitchInner{background: ' + accent_color + ' !important;}</style>');
            }

            c.find('.btContactDate').datepicker({
                beforeShow: function(input, inst) {
                    $('.ui-datepicker').addClass('btDatePicker');
                }
            });

            c.find('.btQuoteSlider').each(function() {
                $(this).slider({
                    min: $(this).data('min'),
                    max: $(this).data('max'),
                    step: $(this).data('step')
                });
            });

            c.find('.ui-slider-handle').each(function() {
                $(this).append($(this).closest('.btQuoteItemInput').find($('.btQuoteSliderValue')));
            });

            c.find('.btQuoteSwitch').on('click', function() {
                if ($(this).hasClass('on')) {
                    $(this).removeClass('on');
                } else {
                    $(this).addClass('on');
                }
                bt_quote_total(c);
                bt_paypal_items(c);
            });

            c.find('.btPayPalButton').on('click', function() {
                $(this).next().submit();
            });

            var bt_parse_float = function(x) {
                r = parseFloat(x);
                if (isNaN(r)) r = 0;
                return r;
            }

            var total = 0;
            total = total.toFixed(2);

            window.bt_quote_total = function(c) {

                var c = $(c);

                total = 0;

                c.find('.btQuoteText').not('.btQuoteMBlock .btQuoteText').not('.btQuoteGBlock .btQuoteText').each(function() {
                    var unit_price = bt_parse_float($(this).data('price'));
                    var val = bt_parse_float($(this).val());
                    val = val * unit_price;
                    total += val;
                });

                c.find('.btQuoteSelect').not('.btQuoteMBlock .btQuoteSelect').not('.btQuoteGBlock .btQuoteSelect').find('._msddli_.selected').each(function() {
                    var val = bt_parse_float($(this).data('value'));
                    total += val;
                });

                c.find('.btQuoteSlider').not('.btQuoteMBlock .btQuoteSlider').not('.btQuoteGBlock .btQuoteSlider').each(function() {
                    var unit_price = bt_parse_float($(this).data('price'));
                    var offset = bt_parse_float($(this).data('offset'));
                    var val = bt_parse_float($(this).slider('value'));
                    $(this).parent().find('.btQuoteSliderValue').html(val);
                    val = val * unit_price;
                    total += val;
                    if (!$(this).closest('.btQuoteBooking').find('.btPayPalButton').length > 0) {
                        total += offset;
                    }
                });

                c.find('.btQuoteSwitch').not('.btQuoteMBlock .btQuoteSwitch').not('.btQuoteGBlock .btQuoteSwitch').each(function() {
                    if ($(this).hasClass('on')) {
                        total += bt_parse_float($(this).data('on'));
                    } else {
                        total += bt_parse_float($(this).data('off'));
                    }
                });

                // multiply

                c.find('.btQuoteMBlock').each(function() {
                    var m_total = 0;
                    var m_first = true;
                    $(this).find('.btQuoteText').each(function() {
                        var unit_price = bt_parse_float($(this).data('price'));
                        var val = bt_parse_float($(this).val());
                        val = val * unit_price;
                        if (m_first) {
                            m_total = val;
                        } else {
                            m_total *= val;
                        }
                        m_first = false;
                    });

                    $(this).find('.btQuoteSelect').find('._msddli_.selected').each(function() {
                        var val = bt_parse_float($(this).data('value'));
                        if (m_first) {
                            m_total = val;
                        } else {
                            m_total *= val;
                        }
                        m_first = false;
                    });

                    $(this).find('.btQuoteSlider').each(function() {
                        var unit_price = bt_parse_float($(this).data('price'));
                        var offset = bt_parse_float($(this).data('offset'));
                        var val = bt_parse_float($(this).slider('value'));
                        $(this).parent().find('.btQuoteSliderValue').html(val);
                        val = val * unit_price;
                        if (m_first) {
                            m_total = val;
                        } else {
                            m_total *= val;
                        }
                        m_total += offset;
                        m_first = false;
                    });

                    $(this).find('.btQuoteSwitch').each(function() {
                        if ($(this).hasClass('on')) {
                            var val = bt_parse_float($(this).data('on'));
                        } else {
                            var val = bt_parse_float($(this).data('off'));
                        }
                        if (m_first) {
                            m_total = val;
                        } else {
                            m_total *= val;
                        }
                        m_first = false;
                    });

                    total += m_total;

                });

                // group

                c.find('.btQuoteGBlock').each(function() {

                    var eval_code = $(this).data('eval');

                    var group_array = [];

                    $(this).find('.btQuoteItem .btQuoteItemInput').each(function() {

                        var val = 0;

                        $(this).find('.btQuoteText').each(function() {
                            var unit_price = bt_parse_float($(this).data('price'));
                            val = bt_parse_float($(this).val());
                            val = val * unit_price;
                        });

                        $(this).find('.btQuoteSelect').find('._msddli_.selected').each(function() {
                            val = bt_parse_float($(this).data('value'));
                        });

                        $(this).find('.btQuoteSlider').each(function() {
                            var unit_price = bt_parse_float($(this).data('price'));
                            var offset = bt_parse_float($(this).data('offset'));
                            val = bt_parse_float($(this).slider('value'));
                            $(this).parent().find('.btQuoteSliderValue').html(val);
                            val = val * unit_price;
                        });

                        $(this).find('.btQuoteSwitch').each(function() {
                            if ($(this).hasClass('on')) {
                                val = bt_parse_float($(this).data('on'));
                            } else {
                                val = bt_parse_float($(this).data('off'));
                            }
                        });

                        group_array.push(val);

                    });

                    var patt = /\$\d+/igm;
                    var match = eval_code.match(patt);

                    for (var i = 0; i < match.length; i++) {
                        eval_code = eval_code.replace(match[i], group_array[i]);
                    }

                    var g_total = eval('(function() {' + eval_code + '}())');

                    total += g_total;

                });

                total = total.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

                c.find('.btQuoteTotalCalc').html(total);
                c.find('.btQuoteTotalCalc').data('total', total);
            }

            bt_quote_total(c);

            window.bt_paypal_items = function(c) {

                $(c).each(function() {

                    if ($(this).find('.btPayPalButton').length > 0) {

                        var form = $(this).find('.btPayPalButton').next();
                        form.find('.btPayPalItem').remove();

                        var x = 0;

                        $(this).find('.btQuoteBookingForm').children('.btQuoteItem').each(function() {

                            var unit_price = 0;
                            var val = 0;

                            var selected_name = '';

                            $(this).find('.btQuoteText').each(function() {
                                unit_price = bt_parse_float($(this).data('price'));
                                val = bt_parse_float($(this).val());
                            });

                            $(this).find('.btQuoteSelect').find('._msddli_.selected').each(function() {
                                unit_price = bt_parse_float($(this).data('value'));
                                val = 1;
                                selected_name = $(this).find('.ddlabel')[0].innerHTML;
                                if ($(this).is(':first-child')) {
                                    selected_name = '';
                                }
                            });

                            $(this).find('.btQuoteSlider').each(function() {
                                unit_price = bt_parse_float($(this).data('price'));
                                val = bt_parse_float($(this).slider('value'));
                            });

                            $(this).find('.btQuoteSwitch').each(function() {
                                if ($(this).hasClass('on')) {
                                    unit_price = bt_parse_float($(this).data('on'));
                                } else {
                                    unit_price = bt_parse_float($(this).data('off'));
                                }
                                val = 1;
                            });

                            var label = $(this).find('label').html();
                            if (selected_name != '') {
                                selected_name = selected_name.replace('<span class="description">', '/');
                                selected_name = selected_name.replace('</span>', '');
                                if (label.endsWith('?') || label.endsWith(':')) {
                                    label = label + ' ' + selected_name;
                                } else {
                                    label = label + ': ' + selected_name;
                                }

                            }

                            val = val * unit_price;

                            if (label !== undefined && val > 0) {
                                x++;
                                val = val.toFixed(2);
                                form.append('<input type="hidden" name="item_name_' + x + '" value="' + label + '" class="btPayPalItem"><input type="hidden" name="amount_' + x + '" value="' + val + '" class="btPayPalItem">');
                            }
                        });


                        // multiply

                        $(this).find('.btQuoteBookingForm').children('.btQuoteMBlock').each(function() {

                            var m_total = 1;
                            var m_first = true;
                            var m_val = 0;
                            var selected_name = '';
                            var label = '';

                            $(this).find('.btQuoteItem').each(function() {

                                $(this).find('.btQuoteText').each(function() {
                                    var unit_price = bt_parse_float($(this).data('price'));
                                    var val = bt_parse_float($(this).val());
                                    val = val * unit_price;
                                    if (m_first) {
                                        m_val = val;
                                        label = $(this).closest('.btQuoteItem').find('label').html();
                                    } else {
                                        m_total *= val;
                                    }
                                    m_first = false;
                                });

                                $(this).find('.btQuoteSelect').find('._msddli_.selected').each(function() {
                                    var val = bt_parse_float($(this).data('value'));
                                    if (m_first) {
                                        m_val = val;
                                        label = $(this).closest('.btQuoteItem').find('label').html();
                                        selected_name = $(this).find('.ddlabel')[0].innerHTML;
                                        selected_name = selected_name.substring(0, selected_name.indexOf('<span'));
                                        if ($(this).is(':first-child')) {
                                            selected_name = '';
                                        }
                                        if (selected_name != '') label = label + ': ' + selected_name;
                                    } else {
                                        m_total *= val;
                                    }
                                    m_first = false;
                                });

                                $(this).find('.btQuoteSlider').each(function() {
                                    var unit_price = bt_parse_float($(this).data('price'));
                                    var val = bt_parse_float($(this).slider('value'));
                                    $(this).parent().find('.btQuoteSliderValue').html(val);
                                    val = val * unit_price;
                                    if (m_first) {
                                        m_val = val;
                                        label = $(this).closest('.btQuoteItem').find('label').html();
                                    } else {
                                        m_total *= val;
                                    }
                                    m_first = false;
                                });

                                $(this).find('.btQuoteSwitch').each(function() {
                                    if ($(this).hasClass('on')) {
                                        var val = bt_parse_float($(this).data('on'));
                                    } else {
                                        var val = bt_parse_float($(this).data('off'));
                                    }
                                    if (m_first) {
                                        m_val = val;
                                        label = $(this).closest('.btQuoteItem').find('label').html();
                                    } else {
                                        m_total *= val;
                                    }
                                    m_first = false;
                                });


                            });

                            if (m_total > 0 && m_val > 0) {
                                x++;
                                m_val = m_val.toFixed(2);
                                form.append('<input type="hidden" name="item_name_' + x + '" value="' + label + '" class="btPayPalItem"><input type="hidden" name="amount_' + x + '" value="' + m_val + '" class="btPayPalItem"><input type="hidden" name="quantity_' + x + '" value="' + m_total + '" class="btPayPalItem">');
                            }

                        });


                        // group

                        $(this).find('.btQuoteBookingForm').children('.btQuoteGBlock').each(function() {

                            var eval_code = $(this).data('eval');

                            var paypal_label = $(this).data('paypal_label');

                            var group_array = [];

                            $(this).find('.btQuoteItem').each(function() {

                                var val;

                                $(this).find('.btQuoteText').each(function() {
                                    var unit_price = bt_parse_float($(this).data('price'));
                                    val = bt_parse_float($(this).val());
                                    val = val * unit_price;
                                });

                                $(this).find('.btQuoteSelect').find('._msddli_.selected').each(function() {
                                    val = bt_parse_float($(this).data('value'));
                                });

                                $(this).find('.btQuoteSlider').each(function() {
                                    var unit_price = bt_parse_float($(this).data('price'));
                                    val = bt_parse_float($(this).slider('value'));
                                    $(this).parent().find('.btQuoteSliderValue').html(val);
                                    val = val * unit_price;
                                });

                                $(this).find('.btQuoteSwitch').each(function() {
                                    if ($(this).hasClass('on')) {
                                        val = bt_parse_float($(this).data('on'));
                                    } else {
                                        val = bt_parse_float($(this).data('off'));
                                    }
                                });

                                group_array.push(val);

                            });

                            var patt = /\$\d/igm;
                            var match = eval_code.match(patt);

                            for (var i = 0; i < match.length; i++) {
                                eval_code = eval_code.replace(match[i], group_array[i]);
                            }

                            var g_total = eval('(function() {' + eval_code + '}())');

                            if (paypal_label != '' && g_total > 0) {
                                x++;
                                g_total = g_total.toFixed(2);
                                form.append('<input type="hidden" name="item_name_' + x + '" value="' + paypal_label + '" class="btPayPalItem"><input type="hidden" name="amount_' + x + '" value="' + g_total + '" class="btPayPalItem"><input type="hidden" name="quantity_' + x + '" value="1" class="btPayPalItem">');
                            }

                        });
                    }
                });
            }

            bt_paypal_items(c);

            c.find('.btQuoteText').keyup(function() {
                bt_quote_total(c);
                bt_paypal_items(c);
            });

            c.find('.btQuoteSlider').each(function() {
                var this_slider = $(this);
                $(this).slider({
                    slide: function(event, ui) {
                        var val = ui.value;
                        this_slider.slider('value', val);
                        bt_quote_total(c);
                        bt_paypal_items(c);
                    }
                });
            });

            c.find('.btContactNext').click(function() {
                $('html, body').delay(1000).animate({
                    scrollTop: ($(this).closest('.btQuoteBooking').find('.btTotalQuoteContactGroup').offset().top - 30)
                }, 400);

                var contact_group = $(this).closest('.btQuoteBooking').find('.btTotalQuoteContactGroup');

                $(this).closest('.btQuoteBooking').find('.btTotalQuoteContactGroup').addClass('btActive');
                $(this).closest('.btQuoteBooking').find('.btQuoteBookingForm').removeClass('btActive');
            });

            c.find('.btContactSubmit').click(function() {

                c.find('.btContactFieldError').removeClass('btContactFieldError');

                var val = true;

                c.find('.btContactField').each(function() {
                    if ($(this).parent().hasClass('btContactFieldMandatory') && (($(this).val() == '' && !$(this).hasClass('btContactTime')) || ($(this).hasClass('btContactTime') && $(this).hasClass('btNotSelected')))) {
                        $(this).parent().addClass('btContactFieldError');
                        val = false;
                    }
                });

                if (!val) {
                    c.find('.btSubmitMessage').hide().html('Please fill out all required fields.').fadeIn();
                    return false;
                }

                var quote = '';
                var back = 0;
                var bt_is_odd = function(n) {
                    return (n % 2) == 1;
                }

                c.find('.btQuoteItem').each(function() {
                    back++;
                    var item_val = 0;
                    var selected_name = '';

                    $(this).find('.btQuoteText').each(function() {
                        item_val = bt_parse_float($(this).val());
                    });

                    $(this).find('.btQuoteSelect').find('._msddli_.selected').each(function() {
                        selected_name = $(this).find('.ddlabel')[0].innerHTML;
                        if ($(this).is(':first-child')) {
                            selected_name = '';
                        }
                        item_val = bt_parse_float($(this).data('value'));
                    });

                    $(this).find('.btQuoteSlider').each(function() {
                        item_val = bt_parse_float($(this).slider('value'));
                    });

                    $(this).find('.btQuoteSwitch').each(function() {
                        if ($(this).hasClass('on')) {
                            item_val = bt_parse_float($(this).data('on'));
                        } else {
                            item_val = bt_parse_float($(this).data('off'));
                        }
                    });

                    var label = $(this).find('label').html();

                    if (selected_name != '') {
                        selected_name = selected_name.replace('<span class="description">', '/');
                        selected_name = selected_name.replace('</span>', '');
                        label = label + ': ' + selected_name;
                    }

                    var background = '';
                    if (bt_is_odd(back)) background = ' ' + 'style="background:#eee;"';

                    item_val = item_val.toFixed(2);

                    if (label !== undefined) {
                        quote += encodeURI('<tr' + background + '>\r\n<td style="padding:.5em;">' + label + '</td>\r\n<td style="text-align:right;padding:.5em;">' + item_val + '</td>\r\n</tr>') + "\r\n";
                    }
                });

                var recaptcha_response = '';
                if (typeof grecaptcha !== 'undefined') {
                    var recaptcha_response = grecaptcha.getResponse();
                    grecaptcha.reset();
                }

                var email_confirmation = 'no';
                if (c.find('.bt_cc_email_confirmation').length) {
                    if (c.find('.bt_cc_email_confirmation').prop('checked')) {
                        email_confirmation = 'yes';
                    }
                } else {
                    email_confirmation = 'yes';
                }

                var data = {
                    'action': 'bt_cc',
                    'recaptcha_response': recaptcha_response,
                    'recaptcha_secret': rec_secret_key,
                    'admin_email': 'info@bold-themes.com',
                    'email_client': 'yes',
                    'email_confirmation': email_confirmation,
                    'subject': 'Air+Cargo+calculator',
                    'quote': quote,
                    'total': c.find('.btQuoteTotalCalc').data('total'),
                    'name': c.find('.btContactName').val(),
                    'email': c.find('.btContactEmail').val(),
                    'phone': c.find('.btContactPhone').val(),
                    'address': c.find('.btContactAddress').val(),
                    'date': c.find('.btContactDate').val(),
                    'time': c.find('.btContactTime').val(),
                    'message': c.find('.btContactMessage').val()
                };

                c.find('.btSubmitMessage').hide().html('Please wait...').fadeIn();

                $.ajax({
                    type: 'POST',
                    url: 'http://cargo.bold-themes.com/transport-company/wp-admin/admin-ajax.php',
                    data: data,
                    async: true,
                    success: function(response) {
                        response = $.trim(response);
                        if (response == 'ok') {
                            c.find('.btSubmitMessage').hide().html('Thank you, we will contact you soon!').fadeIn();
                        } else {
                            c.find('.btSubmitMessage').hide().html('Error! Please try again later.').fadeIn();
                        }
                    },
                    error: function(xhr, status, error) {
                        c.find('.btSubmitMessage').hide().html('Error! Please try again later.').fadeIn();
                    }
                });

            });

        })(jQuery);
    </script>

    <script>
        (function($) {

            var img_height = '';
            if (img_height != '') {
                $('head').append('<style>.ddImage img {height:' + img_height + 'px !important;}</style>');
            }

            var ddData = [{
                text: 'Select...',
                value: ''
            }, {
                text: '20ft',
                value: '1.3',
                description: '',
                image: ''
            }, {
                text: '40ft',
                value: '2',
                description: '',
                image: ''
            }, {
                text: '45ft',
                value: '2.2',
                description: '',
                image: ''
            }, {
                text: '53ft',
                value: '2.5',
                description: '',
                image: ''
            }, ];

            $('#58b3c2826c51e').msDropDown({
                byJson: {
                    data: ddData
                },
                on: {
                    change: function(data, ui) {
                        var val = data.value;
                        ui.data('value', val);
                        bt_quote_total($(ui).closest('.btQuoteBooking'));
                        bt_paypal_items($(ui).closest('.btQuoteBooking'));
                    }
                }
            });

        })(jQuery);
    </script>
    <script>
        (function($) {

            var img_height = '';
            if (img_height != '') {
                $('head').append('<style>.ddImage img {height:' + img_height + 'px !important;}</style>');
            }

            var ddData = [{
                text: 'Select...',
                value: ''
            }, {
                text: 'General',
                value: '1',
                description: '',
                image: ''
            }, {
                text: 'Fragile Goods',
                value: '1.2',
                description: '',
                image: ''
            }, {
                text: 'Fine Arts',
                value: '1.1',
                description: '',
                image: ''
            }, {
                text: 'Hazardous Goods',
                value: '1.5',
                description: '',
                image: ''
            }, ];

            $('#58b3c2826c665').msDropDown({
                byJson: {
                    data: ddData
                },
                on: {
                    change: function(data, ui) {
                        var val = data.value;
                        ui.data('value', val);
                        bt_quote_total($(ui).closest('.btQuoteBooking'));
                        bt_paypal_items($(ui).closest('.btQuoteBooking'));
                    }
                }
            });

        })(jQuery);
    </script>
      <?php JSRegister::end(); ?>  
         
        <?php $this->head() ?>
    </head>
    <body class="page page-id-1078 page-child parent-pageid-987 page-template-default bodyPreloader btMenuRightEnabled btStickyEnabled btLightSkin btBelowMenu btMenuGutter btNoSidebar" id="btBody">
        <?php $this->beginBody() ?>
        <?= $content ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>