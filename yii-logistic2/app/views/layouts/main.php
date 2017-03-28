<?php
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use pjhl\multilanguage\assets\ChangeLanguageAsset; 
use pjhl\multilanguage\LangHelper;
$base = Yii::$app->getUrlManager()->getBaseUrl();
ChangeLanguageAsset::register($this);
$goodsCount = count(Shopcart::goods());
$lang = LangHelper::getLanguage(Yii::$app->language)['id'];
$langs = Yii::$app->params['languages'];

?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<div id="btPreloader" class="btPreloader fullScreenHeight">
        <div class="animation">
            <div><img class="preloaderLogo" src="<?=$base?>/images/uploads/sites/2/2015/09/logo-new.png" alt="Transport Company" data-alt-logo="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/Cargo-logo-white1.png">
            </div>
            <div class="btLoader"></div>
            <p>Loading... Please wait!</p>
        </div>
</div>
<div class="btPageWrap" id="top">
    <header class="mainHeader btClear">
            <div class="topBar btClear">
                <div class="topBarPort btClear">
                    <div class="topTools ttLeft col-ms-6 btTextLeft">
                        <div class="btIco borderless extrasmall">
                            <span>
                                <span><?= 
                                    \modernkernel\flagiconcss\Flag::widget([
                                        'tag' => 'span', // flag tag
                                        'country' => 'us', // where xx is the ISO 3166-1-alpha-2 code of a country,
                                        'squared' => false, // set to true if you want to have a squared version flag
                                        'options' => [] // tag html options
                                    ]); 
                                    ?>
                                </span>
                                <span><a href="#" class="multilanguage-set" data-language="1">English</a></span>
                            </span>
                        </div>
                        <div class="btIco borderless extrasmall">
                            <span>
                                <span><?= 
                                    \modernkernel\flagiconcss\Flag::widget([
                                        'tag' => 'span', // flag tag
                                        'country' => 'vn', // where xx is the ISO 3166-1-alpha-2 code of a country,
                                        'squared' => false, // set to true if you want to have a squared version flag
                                        'options' => [] // tag html options
                                    ]); 
                                    ?>
                                </span>
                                <span><a href="#" class="multilanguage-set" data-language="2">Vietnamese</a></span> 
                            </span>
                        </div>
                    </div>
                    <!-- /ttLeft -->
                    <div class="topTools ttRight col-ms-6 btTextRight">
                        <div class="btIco borderless extrasmall">
                            <a href="https://www.facebook.com/boldthemes/" target="_blank" data-ico-fa="&#xf09a;" class="btIcoHolder"></a>
                        </div>
                        <div class="btIco borderless extrasmall">
                            <a href="https://twitter.com/bold_themes" target="_blank" data-ico-fa="&#xf099;" class="btIcoHolder"></a>
                        </div>
                        <div class="btIco borderless extrasmall">
                            <a href="https://plus.google.com/106260443376081681677" target="_blank" data-ico-fa="&#xf0d5;" class="btIcoHolder"></a>
                        </div>
                        <div class="btIco borderless extrasmall">
                            <a href="https://www.pinterest.com/boldthemes/" target="_blank" data-ico-fa="&#xf231;" class="btIcoHolder"></a>
                        </div>
                        <div class="btTopBox widget_search">
                            <div class="btSearch">
                                <div class="btIco default extrasmall">
                                    <a href="#" data-ico-fa="&#xf002;" class="btIcoHolder"></a>
                                </div>
                                <div class="btSearchInner" role="search">
                                    <div class="btSearchInnerContent">
                                        <form action="http://cargo.bold-themes.com/transport-company/" method="get">
                                            <input type="text" name="s" placeholder="Looking for..." class="untouched">
                                            <button type="submit" data-icon="&#xf105;"></button>
                                        </form>
                                        <div class="btSearchInnerClose">
                                            <div class="btIco borderless small">
                                                <a href="#" data-ico-fa="&#xf00d;" class="btIcoHolder"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btBtn btnFilled btnAccentColor btnExtraSmall btnNormal btnIco">
                            <div class="btIco borderless extrasmall"><a href="index.html" data-ico-fa="&#xf1ec;" class="btIcoHolder"><span>Get a fare rate</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /ttRight -->
                </div>
                <!-- /topBarPort -->
            </div>
            <!-- /topBar -->
            <div class="port">
                <div class="menuHolder btClear">
                    <div class="btVerticalMenuTrigger">&nbsp;
                        <div class="btIco borderless extrasmall">
                            <a href="#" data-ico-fa="&#xf0c9;" class="btIcoHolder"></a>
                        </div>
                    </div>
                    <div class="btHorizontalMenuTrigger">&nbsp;
                        <div class="btIco borderless extrasmall">
                            <a href="#" data-ico-fa="&#xf0c9;" class="btIcoHolder"></a>
                        </div>
                    </div>
                    <div class="logo">
                        <span>
						<a href="http://cargo.bold-themes.com/transport-company/">
                                                    <img class="btMainLogo" src="<?=$base?>/images/uploads/sites/2/2015/09/logo-new-black.png" alt="Transport Company">
                                                    <img class="btAltLogo" src="<?=$base?>/images/uploads/sites/2/2015/09/logo-new.png" alt="Transport Company"></a>					</span>
                    </div>
                    <!-- /logo -->
                    <div class="menuPort">
                        <nav>
                            <ul>
                                <li id="menu-item-1598" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1598"><a href="http://cargo.bold-themes.com/transport-company/">Trang chủ</a>
                                   
                                </li>
                                <li id="menu-item-1136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1136"><a href="http://cargo.bold-themes.com/transport-company/company/">Pages</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158"><a href="http://cargo.bold-themes.com/transport-company/company/">About us</a>
                                        </li>
                                        <li id="menu-item-1138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1138"><a href="http://cargo.bold-themes.com/transport-company/company/contact/">Contact</a>
                                        </li>
                                        <li id="menu-item-1154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1154"><a href="http://cargo.bold-themes.com/transport-company/company/faqs/">FAQs</a>
                                        </li>
                                        <li id="menu-item-1153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1153"><a href="http://cargo.bold-themes.com/transport-company/company/pricing/">Pricing</a>
                                        </li>
                                        <li id="menu-item-1405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1405"><a href="http://cargo.bold-themes.com/transport-company/page-elements/">Shortcodes &#038; Page Elements</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1135" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-has-children menu-item-1135"><a href="http://cargo.bold-themes.com/transport-company/services/">Services</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1406" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-1406"><a href="http://cargo.bold-themes.com/transport-company/services/">Our Services</a>
                                        </li>
                                        <li id="menu-item-1143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1143"><a href="http://cargo.bold-themes.com/transport-company/services/trucking/">Trucking</a>
                                        </li>
                                        <li id="menu-item-1141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1141"><a href="http://cargo.bold-themes.com/transport-company/services/air-cargo/">Air Cargo</a>
                                        </li>
                                        <li id="menu-item-1140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1140"><a href="http://cargo.bold-themes.com/transport-company/services/ocean-cargo/">Ocean Cargo</a>
                                        </li>
                                        <li id="menu-item-1142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1142"><a href="http://cargo.bold-themes.com/transport-company/services/courier/">Courier</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1134"><a href="http://cargo.bold-themes.com/transport-company/vehicle-fleet/">Fleet</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1160"><a href="http://cargo.bold-themes.com/transport-company/vehicle-fleet/">Tiles</a>
                                        </li>
                                        <li id="menu-item-1159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1159"><a href="http://cargo.bold-themes.com/transport-company/vehicle-fleet-version-2/">Tiles with titles</a>
                                        </li>
                                        <li id="menu-item-1161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1161"><a href="http://cargo.bold-themes.com/transport-company/vehicle-fleet-version-3/">Grid</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1454" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1454"><a href="http://cargo.bold-themes.com/transport-company/news-tiles/">News</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1168"><a href="http://cargo.bold-themes.com/transport-company/news-tiles/">Tiles</a>
                                        </li>
                                        <li id="menu-item-1169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1169"><a href="http://cargo.bold-themes.com/transport-company/news-grid/">Grid</a>
                                        </li>
                                        <li id="menu-item-1167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1167"><a href="http://cargo.bold-themes.com/transport-company/news/">Classic list</a>
                                        </li>
                                        <li id="menu-item-1165" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-1165"><a href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/">Single post</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1164" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1164"><a href="http://cargo.bold-themes.com/transport-company/44/">Standard post</a>
                                                </li>
                                                <li id="menu-item-1174" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1174"><a href="http://cargo.bold-themes.com/transport-company/old-warehouse-now-renovated/">Image post</a>
                                                </li>
                                                <li id="menu-item-1166" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1166"><a href="http://cargo.bold-themes.com/transport-company/cargo-wins-euro45m-orders/">With full screen overlay</a>
                                                </li>
                                                <li id="menu-item-1163" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1163"><a href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/">Grid gallery</a>
                                                </li>
                                                <li id="menu-item-1162" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1162"><a href="http://cargo.bold-themes.com/transport-company/amsterdam-harbour-support-contract-signed/">Slider gallery</a>
                                                </li>
                                                <li id="menu-item-1170" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1170"><a href="http://cargo.bold-themes.com/transport-company/the-matt-jo-show-scott-truck-driver/">Audio post</a>
                                                </li>
                                                <li id="menu-item-1171" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1171"><a href="http://cargo.bold-themes.com/transport-company/singaporean-cargo-ship-runs-aground-off-ilocos-sur/">Video post</a>
                                                </li>
                                                <li id="menu-item-1172" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1172"><a href="http://cargo.bold-themes.com/transport-company/go-to-google/">Link post</a>
                                                </li>
                                                <li id="menu-item-1173" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1173"><a href="http://cargo.bold-themes.com/transport-company/truck-drivers-quote/">Quote post</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1175" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-987 current_page_item menu-item-has-children menu-item-1175"><a href="index.html">Calculators</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1179"><a href="trucking-cost-calculator/index.html">Trucking</a>
                                        </li>
                                        <li id="menu-item-1176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1176"><a href="air-cargo-cost-calculator/index.html">Air cargo</a>
                                        </li>
                                        <li id="menu-item-1181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1181"><a href="ocean-cargo-cost-calculator/index.html">Ocean cargo</a>
                                        </li>
                                        <li id="menu-item-1180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1180"><a href="courier-services-cost-calculator/index.html">Courier service</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- .menuPort -->

                </div>
                <!-- /menuHolder -->
            </div>
            <div class="btCurveHeader">
                <div class="btCurveHolder">
                    <div class="btCurveLeftHolder">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="20px" viewBox="0 0 80 20" enable-background="new 0 0 80 20" xml:space="preserve">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M 81 20 c 0 0 -16 0 -30 0 c -30 0 -23 -15 -50 -15 l 0 -5 L 81 0 L 81 20 Z" class="btCurveLeft" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M 81 -1 L 31 -1 c 27 -1 21 15 51 16 C 82 3 82 -1 82 -1 Z" class="btCurveLeftFill" />
                        </svg>
                    </div>
                    <div class="btCurveRightHolder">
                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="20px" viewBox="0 0 80 20" enable-background="new 0 0 80 20" xml:space="preserve">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M 0 20 c 0 0 16 0 30 0 c 30 0 23 -15 50 -15 l 0 -5 L 0 0 L 0 20 Z" class="btCurveRight" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M -1 -1 L 50 -1 C 23 -1 30 15 -1 15 C -1 3 -1 -1 -1 -1 Z" class="btCurveRightFill" />
                        </svg>
                    </div>
                    <div class="btSiteHeaderCurveSleeve"></div>
                </div>
            </div>
            <!-- /port -->

        </header>
   
       
        <?= $content ?>
        

</div>
 <section class="boldSection gutter btSiteFooterCurve ">
            <div class="port">
                <div class="btCurveLeftHolder">
                    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="14px" viewBox="0 0 50 14" enable-background="new 0 0 50 14" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M 0 14 C 27 15 20 0 51 0 c 0 13 0 15 0 15 L 0 15 Z" class="btCurveLeft" />
                    </svg>
                </div>
                <div class="btCurveRightHolder">
                    <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="14px" viewBox="0 0 50 14" enable-background="new 0 0 50 14" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M 50 14 c -27 0 -20 -14 -50 -14 c 0 13 0 14 0 145 L 50 14 Z" class="btCurveRight" />
                    </svg>
                </div>
                <div class="btSiteFooterCurveSleeve"></div>
            </div>
        </section>
        <section class="boldSection btSiteFooterWidgets gutter topSemiSpaced topSemiSpaced btDoubleRowPadding ">
            <div class="port">
                <div class="boldRow" id="boldSiteFooterWidgetsRow">
                    <div class="btBox widget_bt_recent_posts">
                        <h4><span>Recent Posts</span></h4>
                        <div class="popularPosts">
                            <ul>
                                <li>
                                    <div class="ppImage">
                                        <a href="http://cargo.bold-themes.com/transport-company/cargo-wins-euro45m-orders/"><img width="160" height="160" src="../wp-content/uploads/sites/2/2015/09/shutterstock_177975590-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="shutterstock_177975590" srcset="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/shutterstock_177975590-160x160.jpg 160w, http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/shutterstock_177975590-540x540.jpg 540w" sizes="(max-width: 160px) 100vw, 160px" />
                                        </a>
                                    </div>
                                    <div class="ppTxt">
                                        <h5><a href="http://cargo.bold-themes.com/transport-company/cargo-wins-euro45m-orders/">Liberalisation of air cargo industry</a></h5>
                                        <p class="posted">October 9, 2015</div>
                                </li>
                                <li>
                                    <div class="ppImage">
                                        <a href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/"><img width="160" height="160" src="../wp-content/uploads/sites/2/2015/09/Three-orange-Scania-trucks-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Three-orange-Scania-trucks" srcset="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/Three-orange-Scania-trucks-160x160.jpg 160w, http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/Three-orange-Scania-trucks-540x540.jpg 540w, http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/Three-orange-Scania-trucks-1080x1080.jpg 1080w" sizes="(max-width: 160px) 100vw, 160px" />
                                        </a>
                                    </div>
                                    <div class="ppTxt">
                                        <h5><a href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/">New trucks arriving</a></h5>
                                        <p class="posted">September 17, 2015</div>
                                </li>
                                <li>
                                    <div class="ppImage">
                                        <a href="http://cargo.bold-themes.com/transport-company/44/"><img width="160" height="160" src="../wp-content/uploads/sites/2/2015/09/White-Truck-single-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="White-Truck-single" srcset="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/White-Truck-single-160x160.jpg 160w, http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/White-Truck-single-540x540.jpg 540w, http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/White-Truck-single-1080x1080.jpg 1080w" sizes="(max-width: 160px) 100vw, 160px" />
                                        </a>
                                    </div>
                                    <div class="ppTxt">
                                        <h5><a href="http://cargo.bold-themes.com/transport-company/44/">New warehouse now operational</a></h5>
                                        <p class="posted">September 16, 2015</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btBox widget_bt_twitter">
                        <h4><span>Twitter</span></h4>
                        <div class="recentTweets"><small><a href="https://twitter.com/envato/status/831625355182108672">@envato - 9 hours</a></small>
                            <p>Make mockups a part of how you do business. <a href="https://t.co/qtLs4tA4r7" class="twitter-link">https://t.co/qtLs4tA4r7</a>
                            </p><small><a href="https://twitter.com/envato/status/831571346027057154">@envato - 13 hours</a></small>
                            <p>Be brave with your font choices. <a href="https://t.co/zfT4E4AW95" class="twitter-link">https://t.co/zfT4E4AW95</a>
                            </p>
                        </div>
                    </div>
                    <div class="btBox widget_bt_instagram">
                        <h4><span>Photo Gallery</span></h4>
                        <div class="btInstaWrap btInstaGridWrap">
                            <div id="instafeed58a3ff6ca3d02" class="btInstaGrid instaGrid"></div>
                        </div>
                    </div>
                    <div class="btBox widget_nav_menu">
                        <h4><span>QUICK LINKS</span></h4>
                        <div class="menu-services-footer-container">
                            <ul id="menu-services-footer" class="menu">
                                <li id="menu-item-1145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1145"><a href="http://cargo.bold-themes.com/transport-company/services/ocean-cargo/">Ocean Cargo</a>
                                </li>
                                <li id="menu-item-1146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1146"><a href="http://cargo.bold-themes.com/transport-company/services/air-cargo/">Air Cargo</a>
                                </li>
                                <li id="menu-item-1147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1147"><a href="http://cargo.bold-themes.com/transport-company/services/courier/">Courier</a>
                                </li>
                                <li id="menu-item-1148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1148"><a href="http://cargo.bold-themes.com/transport-company/services/trucking/">Trucking</a>
                                </li>
                                <li id="menu-item-1526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1526"><a href="http://cargo.bold-themes.com/transport-company/services/cost-calculators/">Cost Calculators</a>
                                </li>
                                <li id="menu-item-1740" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1740"><a href="http://cargo.bold-themes.com/transport-company/services/cost-calculators/trucking-cost-calculator/">Trucking calculator</a>
                                </li>
                                <li id="menu-item-1741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1741"><a href="http://cargo.bold-themes.com/transport-company/services/cost-calculators/courier-services-cost-calculator/">Courier calculator</a>
                                </li>
                                <li id="menu-item-1742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1742"><a href="http://cargo.bold-themes.com/transport-company/services/cost-calculators/ocean-cargo-cost-calculator/">Ocean cargo calc</a>
                                </li>
                                <li id="menu-item-1743" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1743"><a href="http://cargo.bold-themes.com/transport-company/services/cost-calculators/air-cargo-cost-calculator/">Air cargo calculator</a>
                                </li>
                                <li id="menu-item-1745" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1745"><a href="http://cargo.bold-themes.com/transport-company/company/pricing/">Pricing</a>
                                </li>
                                <li id="menu-item-1942" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1942"><a href="http://cargo.bold-themes.com/transport-company/company/faqs/">FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="boldSection gutter btSiteFooter btGutter ">
            <div class="port">
                <div class="boldRow">
                    <div class="rowItem btFooterCopy col-md-6 col-sm-12 btTextLeft">
                        <p class="copyLine">Copyright by Cargo International Inc. All rights reserved</p>
                    </div>
                    <!-- /copy -->
                    <div class="rowItem btFooterMenu col-md-6 col-sm-12 btTextRight">
                        <ul id="menu-footer-menu" class="menu">
                            <li id="menu-item-1940" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1940"><a href="http://cargo.bold-themes.com/transport-company/company/contact/">Contact</a>
                            </li>
                            <li id="menu-item-1941" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1941"><a href="http://cargo.bold-themes.com/transport-company/company/faqs/">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /boldRow -->
            </div>
            <!-- /port -->
        </footer>
<?php $this->endContent(); ?>
