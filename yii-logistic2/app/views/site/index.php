<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;

$page = Page::get('page-index');
$base = Yii::$app->getUrlManager()->getBaseUrl();
$this->title = $page->seo('title', $page->model->title);
?>

<div class="btContentWrap btClear">
    <div class="btContentHolder">
        <div class="btContent">
            <section id="slider" class="boldSection btDarkSkin inherit">
                        <div class="port">
                            <div class="boldCell">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="rowItem col-md-12 col-ms-12  btTextLeft inherit">
                                            <div class="rowItemContent">
                                                <div class="slided autoSliderHeight">
                                                    <div class="slidedItem firstItem" data-thumb="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/plane_contrasted_light-320x138.jpg">
                                                        <div class="btSliderPort wBackground cover" style="background-image: url('http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/plane_contrasted_light.jpg')">
                                                            <div class="btSliderCell" data-slick="yes">
                                                                <div class="btSlideGutter">
                                                                    <div class="btSlidePane">
                                                                        <div class="btClear btSeparator topSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <div class="btClear btSeparator topSemiSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <header class="header btClear extralarge btDash bottomDash btNarrowHeader btAccentDash btRegularTitle">
                                                                            <p class="btSuperTitle">Welcome to</p>
                                                                            <div class="dash">
                                                                                <h1><span class="headline">Cargo Transport</span></h1>
                                                                            </div>
                                                                            <p class="btSubTitle">Global turnkey logistics and transportation services via sea, land and air. We will protect you from risk and liability.</p>
                                                                        </header>
                                                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnAccentColor btnSmall btnNormal"><a href="http://cargo.bold-themes.com/transport-company/services/cost-calculators/">Get a full quote</a>
                                                                        </div>
                                                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnNormalColor btnSmall btnNormal"><a href="#">Find out more</a>
                                                                        </div>
                                                                        <div class="btClear btSeparator topSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slidedItem firstItem" data-thumb="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/truck_flipped-320x138.jpg">
                                                        <div class="btSliderPort wBackground cover" style="background-image: url('http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/truck_flipped.jpg')">
                                                            <div class="btSliderCell" data-slick="yes">
                                                                <div class="btSlideGutter">
                                                                    <div class="btSlidePane">
                                                                        <div class="btClear btSeparator topSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <div class="btClear btSeparator topSemiSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <header class="header btClear extralarge btDash bottomDash btNarrowHeader btAccentDash btRegularTitle">
                                                                            <p class="btSuperTitle">Transport your goods</p>
                                                                            <div class="dash">
                                                                                <h1><span class="headline">Around the World</span></h1>
                                                                            </div>
                                                                            <p class="btSubTitle">Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto. Ut wisi enim.</p>
                                                                        </header>
                                                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnAccentColor btnSmall btnNormal"><a href="#">OUR FLEET</a>
                                                                        </div>
                                                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnNormalColor btnSmall btnNormal"><a href="#">PURCHASE NOW</a>
                                                                        </div>
                                                                        <div class="btClear btSeparator topSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slidedItem firstItem" data-thumb="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/train_-320x138.jpg">
                                                        <div class="btSliderPort wBackground cover" style="background-image: url('http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/train_.jpg')">
                                                            <div class="btSliderCell" data-slick="yes">
                                                                <div class="btSlideGutter">
                                                                    <div class="btSlidePane">
                                                                        <div class="btClear btSeparator topSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <div class="btClear btSeparator topSemiSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <header class="header btClear extralarge btDash bottomDash btNarrowHeader btAccentDash btRegularTitle">
                                                                            <p class="btSuperTitle">With help from our fleet</p>
                                                                            <div class="dash">
                                                                                <h1><span class="headline">Send it anywhere</span></h1>
                                                                            </div>
                                                                            <p class="btSubTitle">Ut wisi enim. Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
                                                                        </header>
                                                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                            <hr>
                                                                        </div>
                                                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnAccentColor btnSmall btnNormal"><a href="#">OUR FLEET</a>
                                                                        </div>
                                                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnNormalColor btnSmall btnNormal"><a href="#">PURCHASE NOW</a>
                                                                        </div>
                                                                        <div class="btClear btSeparator topSpaced noBorder">
                                                                            <hr>
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
                                </div>
                            </div>
                        </div>
                    </section>
            <section id="bt_section58a3ff6c08262" data-parallax="0.1" data-parallax-offset="0" class="boldSection topSmallSpaced bottomSmallSpaced btDarkSkin gutter inherit btParallax wBackground cover" style="background-color:#0b60a9;background-image:url('<?=$base?>/images/uploads/sites/2/2015/09/Transparent-background-with-dots.png');">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow ">
                                <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btMiddleVertical">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon colorless borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium colorless borderless">
                                                    <a href="#" data-ico-cs="&#xe60f;" class="btIcoHolder"></a>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">CALL CENTER</span></h4>
                                                    </div>
                                                </header>
                                                <p>Give us a free call
                                                    <br>+1 555-676-1020
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem btLeftBorder col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btMiddleVertical">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon colorless borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium colorless borderless">
                                                    <a href="#" data-ico-cs="&#xe610;" class="btIcoHolder"></a>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">WORKING HOURS</span></h4>
                                                    </div>
                                                </header>
                                                <p>Mon-Sat 7AM-5PM
                                                    <br>Sat 9AM-3PM
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem btLeftBorder col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btMiddleVertical">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon colorless borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium colorless borderless"><span data-ico-cs="&#xe663;" class="btIcoHolder"></span>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">OUR LOCATION</span></h4>
                                                    </div>
                                                </header>
                                                <p>300 Kansas Ave NW
                                                    <br>New Jersey
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein btHighlight btMiddleVertical btNoPadding" style="z-index: 10;">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon colorless borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium colorless borderless"><span data-ico-cs="&#xe618;" class="btIcoHolder"></span>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">GET DETAILED QUOTE</span></h4>
                                                    </div>
                                                </header>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="btDropdown " style="margin-top:-35px; margin-left: 75px; padding-right: 30px;">
                                            <select class="btDropdownSelect">
                                                <option value="">Select service</option>
                                                <option value="trucking-cost-calculator
">Trucking</option>
                                                <option value="air-cargo-cost-calculator
">Air Cargo</option>
                                                <option value="ocean-cargo-cost-calculator
">Ocean Cargo</option>
                                                <option value="courier-services-cost-calculator">Courier Services</option>
                                            </select>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="bt_section58a3ff6c0a2c6" data-parallax="0.1" data-parallax-offset="0" class="boldSection topSpaced bottomSpaced gutter inherit btParallax wBackground cover" style="background-image:url('<?=$base?>/images/uploads/sites/2/2015/09/Transparent-background-with-dots.png');">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow ">
                                <div class="rowItem col-sm-4 col-ms-12 btTextRight animate animate-fadein inherit btDoublePadding">
                                    <div class="rowItemContent">
                                        <header class="header btClear medium  btAccentDash btRegularTitle">
                                            <p class="btSuperTitle">OUR SERVICES</p>
                                            <div class="dash">
                                                <h3><span class="headline">WHAT WE CAN DO FOR YOU</span></h3>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-4 col-ms-12 btTextLeft animate animate-fadein btHighlight inherit">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium borderless"><span data-ico-fa="&#xf21a;" class="btIcoHolder"></span>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">OCEAN CARGO</span></h4>
                                                    </div>
                                                </header>
                                                <p>Praesent eu rhoncus nibh. Quisque tincidunt, nisi in venenatis commodo, neque quam pharetra dolor, nec lacinia urna quam.
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-4 col-ms-12 btTextLeft animate animate-fadein btHighlight inherit">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium borderless"><span data-ico-fa="&#xf072;" class="btIcoHolder"></span>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">FLY ANYWHERE</span></h4>
                                                    </div>
                                                </header>
                                                <p>Pellentesque sollicitudin molestie libero at commodo. Nunc cursus ligula magna, ut imperdiet turpis pellentesque sit amet.
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boldRow ">
                                <div class="rowItem col-md-12 col-ms-12  btTextRight animate animate-fadein animate-moveright inherit">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boldRow ">
                                <div class="rowItem col-sm-4 col-ms-12 btTextLeft inherit btDoublePadding">
                                    <div class="rowItemContent">
                                        <div class="bpgPhoto btTextCenter" style="position: absolute; transform: translateY(50px);">
                                            <div class="btImage"><img src="<?=$base?>/images/uploads/sites/2/2015/10/truck_green.png" alt="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/truck_green.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-4 col-ms-12 btTextLeft animate animate-fadein btHighlight inherit">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium borderless"><span data-ico-fa="&#xf207;" class="btIcoHolder"></span>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">PROFESSIONAL COURIER SERVICES</span></h4>
                                                    </div>
                                                </header>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ante arcu, lacinia dictum ullamcorper vitae, tempor nec quam
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-4 col-ms-12 btTextLeft animate animate-fadein btHighlight inherit">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="servicesItem  mediumIcon borderlessIconType ">
                                            <div class="sIcon">
                                                <div class="btIco medium borderless"><span data-ico-cs="&#xe60b;" class="btIcoHolder"></span>
                                                </div>
                                            </div>
                                            <div class="sTxt">
                                                <header class="header btClear extrasmall">
                                                    <div class="dash">
                                                        <h4><span class="headline">CARGO STORAGE</span></h4>
                                                    </div>
                                                </header>
                                                <p>Quisque tincidunt, nisi in venenatis commodo, neque quam pharetra dolor, nec lacinia urna quam. Praesent eu rhoncus nibh.
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="bt_section58a3ff6c19503" class="boldSection topSpaced bottomMoreSpaced gutter inherit">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow ">
                                <div class="rowItem col-sm-3 col-ms-12 btTextRight animate animate-fadein btTextIndent inherit btDoublePadding">
                                    <div class="rowItemContent">
                                        <header class="header btClear medium  btAccentDash btRegularTitle">
                                          
                                            <div class="dash">
                                                <h3><span class="headline">Các loại Container</span></h3>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-5 col-ms-12 btTextLeft inherit">
                                    <div class="rowItemContent">
                                        <div class="btText">
                                            <blockquote>
                                                <p>Đây là kích thước container thông thường nhất để lưu trữ hoặc vận chuyển hàng hoá khối lượng lớn. Giống như các container khô khác phù hợp với hàng hóa đóng kiện, thùng giấy, hộp, vận chuyển hàng hóa lỏng, nội thất, vv</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-4 col-ms-12 btTextCenter inherit btDoublePadding">
                                    <div class="rowItemContent">
                                        <div class="bpgPhoto btTextCenter hidden-xs hidden-sm" style="margin-top:-144px;">
                                            <div class="btImage"><img src="<?=$base?>/images/uploads/sites/2/2015/10/container.png" alt="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/10/forklift.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boldRow ">
                                <div class="rowItem col-md-12 col-ms-12  btTextLeft">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSemiSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boldRow ">
                                <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextCenter inherit">
                                    <div class="rowItemContent">
                                        <div class="btCounterHolder">
                                            <img src="<?=$base?>/images/containers/CONT-KHO-20-2.jpg">
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <header class="header btClear medium  btAccentDash btRegularTitle">
                                            <p class="btSuperTitle">Container khô 20'</p>
                                        </header>
                                       
                                    </div>
                                </div>
                                <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextCenter inherit">
                                    <div class="rowItemContent">
                                        <div class="btCounterHolder">
                                            <img src="<?=$base?>/images/containers/CONT-KHO-20-2.jpg">
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <header class="header btClear medium  btAccentDash btRegularTitle">
                                            <p class="btSuperTitle">Container khô 20'</p>
                                        </header>
                                       
                                    </div>
                                </div>
                               <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextCenter inherit">
                                    <div class="rowItemContent">
                                        <div class="btCounterHolder">
                                            <img src="<?=$base?>/images/containers/CONT-KHO-20-2.jpg">
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <header class="header btClear medium  btAccentDash btRegularTitle">
                                            <p class="btSuperTitle">Container khô 20'</p>
                                        </header>
                                       
                                    </div>
                                </div>
                                <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextCenter inherit">
                                    <div class="rowItemContent">
                                        <div class="btCounterHolder">
                                            <img src="<?=$base?>/images/containers/CONT-KHO-20-2.jpg">
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <header class="header btClear medium  btAccentDash btRegularTitle">
                                            <p class="btSuperTitle">Container khô 20'</p>
                                        </header>
                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="btBtn btBtn btnFilled  btnAccentColor btnSmall" style="text-align: center; " >
                           <a href="#" >Xem toàn bộ</a>
                            </div>
                    </div>
                </div>
            </section>
           
            <section id="bt_section58a3ff6c20868" data-parallax="0.1" data-parallax-offset="0" class="boldSection topMoreSpaced bottomMoreSpaced gutter inherit btParallax wBackground cover" style="background-color:#ededed;background-image:url('<?=$base?>/images/uploads/sites/2/2015/09/Transparent-background-with-dots.png');">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow ">
                                <div class="rowItem col-sm-4 col-ms-12 btTextRight animate animate-fadein inherit btDoublePadding btDarkAccentDash">
                                    <div class="rowItemContent">
                                        <header class="header btClear medium  btAccentDash btRegularTitle">
                                            <p class="btSuperTitle">WHAT WE DO</p>
                                            <div class="dash">
                                                <h3><span class="headline">LATEST NEWS AND EVENTS</span></h3>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-4 col-ms-12 btTextRight animate animate-fadein btHighlight inherit btDoublePadding btDarkAccentDash">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <header class="header btClear small   ">
                                            <p class="btSubTitle">Interested in finding out more? Click on all news for more information.</p>
                                        </header>
                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnAccentColor btnSmall btnNormal"><a href="#">Read all news</a>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowItem col-sm-4 col-ms-12 btTextRight animate animate-fadein btHighlight inherit btDoublePadding btDarkAccentDash">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <header class="header btClear small  btAccentDash btRegularTitle">
                                            <p class="btSubTitle">Subscribe to our newsletter. Click here for more information.</p>
                                        </header>
                                        <div class="btBtn btBtn btnFilled btnIconLeftPosition btnNormalColor btnSmall btnNormal"><a href="#">Newsletter</a>
                                        </div>
                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boldRow ">
                                <div class="rowItem col-md-12 col-ms-12  btTextCenter inherit">
                                    <div class="rowItemContent">
                                        <div class="btClear btSeparator topSemiSpaced noBorder">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boldRow ">
                                <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein inherit btDarkAccentDash">
                                    <div class="rowItemContent">
                                        <div class="btLatestPostsContainer horizontalPosts ">
                                            <div class="btSingleLatestPost col-sm-4 col-ms-12  inherit">
                                                <div class="btLatestPostsDate">
                                                    <div class="btLatestPostsDay">09</div>
                                                    <div class="btLatestPostsMonth">Oct</div>
                                                </div>
                                                <div class="btSingleLatestPostWrapper">
                                                    <div class="btSingleLatestPostImage btTextCenter">
                                                        <div class="bpgPhoto ">
                                                            <a href="http://cargo.bold-themes.com/transport-company/cargo-wins-euro45m-orders/" target="_self"></a>
                                                            <div class="boldPhotoBox">
                                                                <div class="bpbItem">
                                                                    <div class="btImage"><img src="<?=$base?>/images/uploads/sites/2/2015/09/shutterstock_177975590-640x480.jpg" alt="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/shutterstock_177975590-640x480.jpg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="captionPane">
                                                                <div class="captionTable">
                                                                    <div class="captionCell">
                                                                        <div class="captionTxt">
                                                                            <header class="header btClear small btDash bottomDash"></header>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btSingleLatestPostContent">
                                                        <header class="header btClear small btAccentDash">
                                                            <div class="dash">
                                                                <h4><span class="headline"><a href="http://cargo.bold-themes.com/transport-company/cargo-wins-euro45m-orders/" target="_self">Liberalisation of air cargo industry</a></span></h4>
                                                            </div>
                                                            <p class="btSubTitle"><span class="btArticleCategories"><a href="http://cargo.bold-themes.com/transport-company/category/air-cargo/" class="btArticleCategory">Air Cargo</a><a href="http://cargo.bold-themes.com/transport-company/category/trucking/" class="btArticleCategory">Trucking</a></span> <a class="btArticleComments" href="http://cargo.bold-themes.com/transport-company/cargo-wins-euro45m-orders/#comments">0</a>
                                                            </p>
                                                        </header>
                                                        <p class="btLatestPostContent">Sed vel dolor aliquet, sollicitudin elit eget, egestas arcu. Cras a tristique tellus, nec congue leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                        <div class="btBtn btnBorderless btnNormalColor btnSmall btnNormal btnIconRightPosition btnIco btReadMore">
                                                            <div class="btIco borderless extrasmall"><a href="http://cargo.bold-themes.com/transport-company/cargo-wins-euro45m-orders/" data-ico-fa="&#xf101;" class="btIcoHolder"><span>Find out more</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btSingleLatestPost col-sm-4 col-ms-12  inherit">
                                                <div class="btLatestPostsDate">
                                                    <div class="btLatestPostsDay">17</div>
                                                    <div class="btLatestPostsMonth">Sep</div>
                                                </div>
                                                <div class="btSingleLatestPostWrapper">
                                                    <div class="btSingleLatestPostImage btTextCenter">
                                                        <div class="bpgPhoto ">
                                                            <a href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/" target="_self"></a>
                                                            <div class="boldPhotoBox">
                                                                <div class="bpbItem">
                                                                    <div class="btImage"><img src="<?=$base?>/images/uploads/sites/2/2015/09/Three-orange-Scania-trucks-640x480.jpg" alt="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/Three-orange-Scania-trucks-640x480.jpg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="captionPane">
                                                                <div class="captionTable">
                                                                    <div class="captionCell">
                                                                        <div class="captionTxt">
                                                                            <header class="header btClear small btDash bottomDash"></header>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btSingleLatestPostContent">
                                                        <header class="header btClear small btAccentDash">
                                                            <div class="dash">
                                                                <h4><span class="headline"><a href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/" target="_self">New trucks arriving</a></span></h4>
                                                            </div>
                                                            <p class="btSubTitle"><span class="btArticleCategories"><a href="http://cargo.bold-themes.com/transport-company/category/trucking/" class="btArticleCategory">Trucking</a></span> <a class="btArticleComments" href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/#comments">4</a>
                                                            </p>
                                                        </header>
                                                        <p class="btLatestPostContent">Consectetur adipiscing elit, lorem ipsum dolor sit amet. Sed vel dolor aliquet, sollicitudin elit eget, egestas arcu. Cras a tristique tellus, nec congue leo. </p>
                                                        <div class="btBtn btnBorderless btnNormalColor btnSmall btnNormal btnIconRightPosition btnIco btReadMore">
                                                            <div class="btIco borderless extrasmall"><a href="http://cargo.bold-themes.com/transport-company/new-trucks-arriving-20-new-vehicles-added-to-our-fleet/" data-ico-fa="&#xf101;" class="btIcoHolder"><span>Find out more</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btSingleLatestPost col-sm-4 col-ms-12  inherit">
                                                <div class="btLatestPostsDate">
                                                    <div class="btLatestPostsDay">16</div>
                                                    <div class="btLatestPostsMonth">Sep</div>
                                                </div>
                                                <div class="btSingleLatestPostWrapper">
                                                    <div class="btSingleLatestPostImage btTextCenter">
                                                        <div class="bpgPhoto ">
                                                            <a href="http://cargo.bold-themes.com/transport-company/44/" target="_self"></a>
                                                            <div class="boldPhotoBox">
                                                                <div class="bpbItem">
                                                                    <div class="btImage"><img src="<?=$base?>/images/uploads/sites/2/2015/09/White-Truck-single-640x480.jpg" alt="http://cargo.bold-themes.com/transport-company/wp-content/uploads/sites/2/2015/09/White-Truck-single-640x480.jpg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="captionPane">
                                                                <div class="captionTable">
                                                                    <div class="captionCell">
                                                                        <div class="captionTxt">
                                                                            <header class="header btClear small btDash bottomDash"></header>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btSingleLatestPostContent">
                                                        <header class="header btClear small btAccentDash">
                                                            <div class="dash">
                                                                <h4><span class="headline"><a href="http://cargo.bold-themes.com/transport-company/44/" target="_self">New warehouse now operational</a></span></h4>
                                                            </div>
                                                            <p class="btSubTitle"><span class="btArticleCategories"><a href="http://cargo.bold-themes.com/transport-company/category/courier/" class="btArticleCategory">Courier</a></span> <a class="btArticleComments" href="http://cargo.bold-themes.com/transport-company/44/#comments">0</a>
                                                            </p>
                                                        </header>
                                                        <p class="btLatestPostContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel dolor aliquet, sollicitudin elit eget, egestas arcu. Cras a tristique tellus, nec congue leo. </p>
                                                        <div class="btBtn btnBorderless btnNormalColor btnSmall btnNormal btnIconRightPosition btnIco btReadMore">
                                                            <div class="btIco borderless extrasmall"><a href="http://cargo.bold-themes.com/transport-company/44/" data-ico-fa="&#xf101;" class="btIcoHolder"><span>Find out more</span></a>
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
                    </div>
                </div>
            </section>
            
        </div>
        <!-- /bt_content -->

    </div>
            <!-- /contentHolder -->
</div>
