<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;

//$page = Page::get('page-index');
$base = Yii::$app->getUrlManager()->getBaseUrl();
$this->title = 'Tính cước vận chuyển';
$base = Yii::$app->getUrlManager()->getBaseUrl();
?>
<div class="btContentWrap btClear">
            <div class="btContentHolder">
                <div class="btContent">
                    <section id="bt_section58b3c5d9a4eee" data-parallax="0.1" data-parallax-offset="-50" class="boldSection topExtraSpaced bottomMoreSpaced btDarkSkin gutter btMiddleVertical btParallax wBackground cover" style="background-image:url('<?=$base?>/images/uploads/sites/2/2015/09/truck_flipped_bckg.jpg');">
                        <div class="port">
                            <div class="boldCell">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein animate-moveleft inherit">
                                            <div class="rowItemContent">
                                                <header class="header btClear extralarge btDash bottomDash  btAccentDash btRegularTitle" style="max-width: 800px;">
                                                    <p class="btSuperTitle">How much do we charge?</p>
                                                    <div class="dash">
                                                        <h1><span class="headline">CALCULATE YOUR COSTS</span></h1>
                                                    </div>
                                                    <p class="btSubTitle">Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto</p>
                                                </header>
                                                <div class="btClear btSeparator bottomSemiSpaced noBorder">
                                                    <hr>
                                                </div>
                                                <div class="btBtn btBtn btnFilled btnAccentColor btnSmall btnNormal btnIco">
                                                    <div class="btIco borderless extrasmall"><a href="#" data-ico-cs="&#xe606;" class="btIcoHolder"><span>Find out more</span></a>
                                                    </div>
                                                </div>
                                                <div class="btBtn btBtn btnFilled btnNormalColor btnSmall btnNormal btnIco">
                                                    <div class="btIco borderless extrasmall"><a href="#" data-ico-cs="&#xe607;" class="btIcoHolder"><span>Get a quote</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="bt_section58b3c5d9a6b8d" class="boldSection topSpaced bottomSemiSpaced gutter inherit wBackground cover" style="background-image:url('../../wp-content/uploads/sites/2/2015/09/Transparent-background-with-dots.png');">
                        <div class="port">
                            <div class="boldCell">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="rowItem col-sm-4 col-ms-12 btTextRight animate animate-fadein btTextIndent inherit btDoublePadding">
                                            <div class="rowItemContent">
                                                <header class="header btClear medium  btAccentDash btRegularTitle">
                                                    <p class="btSuperTitle">CHECK OUR PRICING</p>
                                                    <div class="dash">
                                                        <h3><span class="headline">CHOOSE ONE OF OUR CALCULATORS</span></h3>
                                                    </div>
                                                </header>
                                            </div>
                                        </div>
                                        <div class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding">
                                            <div class="rowItemContent">
                                                <div class="btIconImageRow">
                                                    <div class="btIco borderless large">
                                                        <a href="trucking-cost-calculator/index.html" target="no_target" data-ico-cs="&#xe633;" class="btIcoHolder"></a>
                                                    </div>
                                                </div>
                                                <header class="header btClear small  btAlternateDash btRegularTitle">
                                                    <div class="dash">
                                                        <h4><span class="headline">TRUCKING</span></h4>
                                                    </div>
                                                </header>
                                                <div class="btText">
                                                    <p>Pellentesque at lacus vel nunc accumsan gravida at a dolor. Donec maximus facilisis felis, nec lobortis nunc.</p>
                                                </div>
                                                <div class="btClear btSeparator bottomSemiSpaced noBorder">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding">
                                            <div class="rowItemContent">
                                                <div class="btIconImageRow">
                                                    <div class="btIco borderless large">
                                                        <a href="ocean-cargo-cost-calculator/index.html" target="no_target" data-ico-cs="&#xe643;" class="btIcoHolder"></a>
                                                    </div>
                                                </div>
                                                <header class="header btClear small  btAlternateDash btRegularTitle">
                                                    <div class="dash">
                                                        <h4><span class="headline">OCEAN CARGO</span></h4>
                                                    </div>
                                                </header>
                                                <div class="btText">
                                                    <div class="sTxt">Nam aliquet finibus blandit. Nullam mauris ante, consequat sed euismod id, hendrerit et odio. Donec auctor ligula in congue ornare.</div>
                                                </div>
                                                <div class="btClear btSeparator bottomSemiSpaced noBorder">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="bt_section58b3c5d9a9a48" class="boldSection gutter">
                        <div class="port">
                            <div class="boldCell">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="rowItem col-sm-4 col-ms-12 btTextCenter inherit btDoublePadding">
                                            <div class="rowItemContent">
                                                <div class="bpgPhoto btTextCenter"  ng-app="">
                                                    <div class="btImage"><img src="../../wp-content/uploads/sites/2/2015/10/mercedes.png" alt="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/mercedes.png">
                                                    </div>
                                                    
                                                   

                                                  


                                                </div>
                                            </div>
                                        </div>
                                        <div class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding">
                                            <div class="rowItemContent">
                                                <div class="btIconImageRow">
                                                    <div class="btIco borderless large">
                                                        <a href="courier-services-cost-calculator/index.html" target="no_target" data-ico-cs="&#xe65a;" class="btIcoHolder"></a>
                                                    </div>
                                                </div>
                                                <header class="header btClear small  btAlternateDash btRegularTitle">
                                                    <div class="dash">
                                                        <h4><span class="headline">COURIER</span></h4>
                                                    </div>
                                                </header>
                                                <div class="btText">
                                                    <p>Donec efficitur elit facilisis eros placerat finibus. Nam suscipit maximus magna, eget accumsan diam porta ac.</p>
                                                </div>
                                                <div class="btClear btSeparator bottomSemiSpaced noBorder">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding">
                                            <div class="rowItemContent">
                                                <div class="btIconImageRow">
                                                    <div class="btIco borderless large">
                                                        <a href="air-cargo-cost-calculator/index.html" target="no_target" data-ico-cs="&#xe605;" class="btIcoHolder"></a>
                                                    </div>
                                                </div>
                                                <header class="header btClear small  btAlternateDash btRegularTitle">
                                                    <div class="dash">
                                                        <h4><span class="headline">AIR CARGO</span></h4>
                                                    </div>
                                                </header>
                                                <div class="btText">
                                                    <div class="sTxt">Nam aliquet finibus blandit. Nullam mauris ante, consequat sed euismod id, hendrerit et odio. Donec auctor ligula in congue ornare.</div>
                                                </div>
                                                <div class="btClear btSeparator bottomSemiSpaced noBorder">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boldRow ">
                                        <div class="rowItem col-md-12 col-ms-12  btTextLeft">
                                            <div class="rowItemContent">
                                                <div class="btClear btSeparator topSpaced noBorder">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </section>
                </div>
                <!-- /bt_content -->

            </div>
            <!-- /contentHolder -->
        </div>

