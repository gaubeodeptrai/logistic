<?php
use yii\easyii\modules\news\api\News;
use yii\helpers\Url;

                                                     $this->registerJsFile('https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js');
                                                
//$this->title = $news->seo('title', $news->model->title);
//$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['news/index']];
//$this->params['breadcrumbs'][] = $news->model->title;
?>
<div class="btContentWrap btClear">
            <div class="btContentHolder">
                <div class="btContent">
                    <section id="bt_section58b3c4a791407" data-parallax="0.1" data-parallax-offset="-50" class="boldSection topExtraSpaced bottomMoreSpaced btDarkSkin gutter btMiddleVertical btParallax wBackground cover" style="background-image:url('../../../wp-content/uploads/sites/2/2015/09/Dark_Plane.jpg');">
                        <div class="port">
                            <div class="boldCell">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein animate-moveleft inherit">
                                            <div class="rowItemContent">
                                                <header class="header btClear extralarge btDash bottomDash  btAccentDash btRegularTitle" style="max-width: 800px;">
                                                    <p class="btSuperTitle">This is the right place</p>
                                                    <div class="dash">
                                                        <h1><span class="headline">Air cargo cost calculator</span></h1>
                                                    </div>
                                                    <p class="btSubTitle">Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto. Ut wisi enim ad minim veniam.</p>
                                                </header>
                                                <div class="btClear btSeparator bottomSemiSpaced noBorder">
                                                    <hr>
                                                </div>
                                                <div class="btBtn btBtn btnFilled btnAccentColor btnSmall btnNormal btnIco">
                                                    <div class="btIco borderless extrasmall"><a href="#" data-ico-fa="&#xf0e5;" class="btIcoHolder"><span>Contact us</span></a>
                                                    </div>
                                                </div>
                                                <div class="btBtn btBtn btnFilled btnNormalColor btnSmall btnNormal btnIco">
                                                    <div class="btIco borderless extrasmall"><a href="#" data-ico-cs="&#xe61d;" class="btIcoHolder"><span>Our services</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="bt_section58b3c4a792115" class="boldSection topSpaced bottomSpaced gutter inherit">
                        <div class="port">
                            <div class="boldCell">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="rowItem col-md-9 col-ms-12  btTextLeft inherit">
                                            <div class="rowItemContent">
                                                <header class="header btClear large  btAccentDash btRegularTitle">
                                                    <p class="btSuperTitle">Check the costs</p>
                                                    <div class="dash">
                                                        <h2><span class="headline">GET YOUR QUOTE INSTANTLY</span></h2>
                                                    </div>
                                                </header>
                                                <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                                    <hr>
                                                </div>
                                                <div class="btText">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, ex suscipit facilisis tincidunt, mauris dolor semper eros, aliquam gravida sapien felis a odio. Integer condimentum libero vel lacus interdum, sit amet hendrerit augue sagittis. Nullam molestie eu neque pharetra porta. Sed commodo magna metus. Nulla mattis diam ipsum, nec vestibulum felis laoreet a.</p>
                                                    </blockquote>
                                                </div>
                                                <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                                    <hr>
                                                </div>
                                                 <div ng-app="">

 Khối lượng vận chuyển : <input type="text" ng-model="kl">
    Quãng đường : <input type="text" ng-model="qd"> 
    Loại Container : 
    <input type="text" ng-model="a">
     Gia thành: {{kl * qd * a}}
</div>
                                            </div>
                                        </div>
                                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft btTextIndent btHighlight inherit">
                                            <div class="rowItemContent">
                                                <div class="bpgPhoto btTextCenter">
                                                    <div class="btImage"><img src="../../../wp-content/uploads/sites/2/2015/09/shutterstock_135659987-320x213.jpg" alt="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/shutterstock_135659987-320x213.jpg">
                                                    </div>
                                                </div>
                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                    <hr>
                                                </div>
                                                <header class="header btClear small  btAccentDash btRegularTitle">
                                                    <div class="dash">
                                                        <h4><span class="headline">Calculators</span></h4>
                                                    </div>
                                                </header>
                                                <div class="btCustomMenu ">
                                                    <div class="menu-calculator-menu-container">
                                                        <ul id="menu-calculator-menu" class="menu">
                                                            <li id="menu-item-1182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1182"><a href="../trucking-cost-calculator/index.html">Trucking</a>
                                                            </li>
                                                            <li id="menu-item-1185" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1016 current_page_item menu-item-1185"><a href="index.html">Air cargo</a>
                                                            </li>
                                                            <li id="menu-item-1184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1184"><a href="../ocean-cargo-cost-calculator/index.html">Ocean cargo</a>
                                                            </li>
                                                            <li id="menu-item-1183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1183"><a href="../courier-services-cost-calculator/index.html">Courier services</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="btClear btSeparator topSemiSpaced noBorder">
                                                    <hr>
                                                </div>
                                                <header class="header btClear small   ">
                                                    <div class="dash">
                                                        <h4><span class="headline">Brochures</span></h4>
                                                    </div>
                                                </header>
                                                <div class="btBtn btBtn btnOutline btnLightColor btnSmall btnFull btnIco">
                                                    <div class="btIco borderless extrasmall"><a href="http://www.google.com/" target="_blank" data-ico-fa="&#xf1c1;" class="btIcoHolder"><span>Service Brochure</span></a>
                                                    </div>
                                                </div>
                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                    <hr>
                                                </div>
                                                <div class="btBtn btBtn btnOutline btnLightColor btnSmall btnFull btnIco">
                                                    <div class="btIco borderless extrasmall"><a href="http://www.google.com/" target="_blank" data-ico-fa="&#xf1ec;" class="btIcoHolder"><span>Country rates</span></a>
                                                    </div>
                                                </div>
                                                <div class="btClear btSeparator topSemiSpaced noBorder">
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