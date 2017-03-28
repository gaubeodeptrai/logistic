<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media/logistic';
    public $css = [
        //'css/styles.css',
    'wp-content/plugins/contact-form-7/includes/css/stylesd7b7.css?ver=4.3',
    'wp-content/plugins/bt_cost_calculator/style.min4698.css?ver=4.6.3',
    'wp-content/plugins/bt_dev/style4698.css?ver=4.6.3',
    'wp-content/themes/cargo/style.cargo.min4698.css?ver=4.6.3',
    'wp-content/plugins/contact-form-7/includes/css/stylesd7b7.css?ver=4.3',
    'wp-content/plugins/bt_cost_calculator/style.min4698.css?ver=4.6.3',
    'wp-content/plugins/bt_dev/style4698.css?ver=4.6.3',
    'wp-content/themes/cargo/style.cargo.min4698.css?ver=4.6.3',  
    'wp-content/themes/cargo/css/viewport-buggyfill4698.css?ver=4.6.3',
    'https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CLato%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CLato%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0',
       
    ];
    public $js = [
        //'js/scripts.js'
    //'wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4',
    'wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1',
    'wp-content/plugins/bt_cost_calculator/jquery.dd4698.js?ver=4.6.3',
    'wp-content/plugins/cargo/bt_elements4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/modernizr.custom4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/viewport-units-buggyfill4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/viewport-units-buggyfill.hacks4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/jquery.magnific-popup.min4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/slick.min4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/fancySelect4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/misc4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/header.misc4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/dir.hover4698.js?ver=4.6.3',
    'wp-content/themes/cargo/js/sliders4698.js?ver=4.6.3',
        
    'wp-includes/js/comment-reply.min4698.js?ver=4.6.3',
   'wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20',
    
   'wp-content/plugins/contact-form-7/includes/js/scriptsd7b7.js?ver=4.3',
   'wp-includes/js/wp-embed.min4698.js?ver=4.6.3',
   'wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4',
   'wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4',
   'wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4',
   'wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4',
   'wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4',
   'wp-content/plugins/bt_cost_calculator/jquery.ui.touch-punch.min4698.js?ver=4.6.3',
   'wp-content/plugins/cargo/bt_parallax4698.js?ver=4.6.3',
   'wp-content/plugins/cargo/instafeed.min4698.js?ver=4.6.3',    
   'https://maps.googleapis.com/maps/api/js?v&#038;sensor=false&#038;ver=4.6.3',
   'http://cargo.bold-themes.com/transport-company/wp-content/plugins/cargo/bt_gmap.js?ver=4.6.3'     
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
