<?php
/**
 * Configuration file for the "yii asset" console command.
 */

// In the console environment, some path aliases may not exist. Please define these:
// Yii::setAlias('@webroot', __DIR__ . '/../web');
// Yii::setAlias('@web', '/');
//function __autoload($class_name) {
//    require_once('classes/'.$class_name.'.class.php');
//}


require(__DIR__ . '/assets-classes.php');


return [
    // Adjust command/callback for JavaScript files compressing:
    'jsCompressor' => 'java -jar closure-compiler-v20170423.jar --js {from} --js_output_file {to}',
    // Adjust command/callback for CSS files compressing:
    'cssCompressor' => 'java -jar yuicompressor-2.4.8.jar --type css {from} -o {to}',
    // Whether to delete asset source after compression:
    'deleteSource' => false,
    // The list of asset bundles to compress:
    'bundles' => [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'yii\widgets\PjaxAsset',
        'yii\widgets\ActiveFormAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'common\assets\AppAsset',
        'common\assets\GoogleMapPlacesAsset',
        'common\assets\GoogleMapVisualizationAsset',
        'store\assets\DriversAsset',
        'store\assets\AddCreditCardAsset',
        'store\assets\ApplicationsAsset',
        'store\assets\BootstrapAsset',
        'store\assets\ChatAsset',
        'store\assets\DashboardAsset',
        'store\assets\GroupReportAsset',
        'store\assets\NotificationAsset',
        'store\assets\OrdersRunsAsset',
        'store\assets\OrdersRunsJsx',
        'store\assets\RoamingAsset',
        'store\assets\ShiftListAsset',
        'store\assets\ShiftRequestReviewAsset',
        'store\assets\ShiftsCalendarAsset',
        'store\assets\StoreAddAsset',
        'store\assets\StoreInviteDriverAsset',
        'store\assets\StoreSignupStepTwoAsset',
        'store\assets\TopNavigationAsset',
        'store\assets\TrackingAsset',
        'store\assets\TrackingRunsAsset',
        'store\assets\UserAsset',
        'store\widgets\Timepicker\assets\TimepickerAsset',
        'store\widgets\UserInvite\assets\UserInviteAsset',
        'store\widgets\Address\assets\AddressAsset',
        'store\widgets\Dashboard\assets\DonutChartAsset',
        'store\widgets\DriverSearch\assets\DriverSearchAsset',
        'store\widgets\ShiftView\assets\ShiftViewAsset',
        'store\widgets\ShiftViewApplicants\assets\ShiftViewApplicantsAsset',
        'store\widgets\ShiftViewDriverAccepted\assets\ShiftViewDriverAcceptedAsset',
        'store\widgets\StoreInviteDriverSearch\assets\StoreInviteDriverSearchAsset',
        'store\widgets\StoreInviteDriverSelected\assets\StoreInviteDriverSelectedAsset',
        'store\widgets\StoreSwitch\assets\StoreSelectAsset',
        'store\widgets\ShiftForm\assets\ShiftFormAsset',
        'fedemotta\datatables\DataTablesAsset',
        'kartik\base\WidgetAsset',
        'kartik\rating\StarRatingAsset',
        'kartik\base\Html5InputAsset',
        'kartik\base\AnimateAsset',
        'kartik\base\PluginAssetBundle',
//        'store\widgets\Timepicker\assets\BowerTimepickerAsset',
    ],
    // Asset bundle for compression output:
    'targets' => [
        'store' => [
            'class' => 'yii\web\AssetBundle',
            'sourcePath' => '@common/assetFiles/',
            'basePath' => '@store/web/assets',
            'baseUrl' => '@store/web/assets',
//            'js' => 'js/all-store.js', // TODO: No need for one asset file now
//            'css' => 'css/all-store.css', // TODO: No need for one asset file now
            'depends' => [
                'yii\web\YiiAsset',
                'yii\web\JqueryAsset',
                'yii\jui\JuiAsset',
                'yii\widgets\PjaxAsset',
                'yii\widgets\ActiveFormAsset',
                'yii\bootstrap\BootstrapAsset',
                'yii\bootstrap\BootstrapPluginAsset',
                'common\assets\AppAsset',
                'common\assets\GoogleMapPlacesAsset',
                'common\assets\GoogleMapVisualizationAsset',
                'store\assets\DriversAsset',
                'store\assets\AddCreditCardAsset',
                'store\assets\ApplicationsAsset',
                'store\assets\BootstrapAsset',
                'store\assets\ChatAsset',
                'store\assets\DashboardAsset',
                'store\assets\GroupReportAsset',
                'store\assets\NotificationAsset',
                'store\assets\OrdersRunsAsset',
                'store\assets\OrdersRunsJsx',
                'store\assets\RoamingAsset',
                'store\assets\ShiftListAsset',
                'store\assets\ShiftRequestReviewAsset',
                'store\assets\ShiftsCalendarAsset',
                'store\assets\StoreAddAsset',
                'store\assets\StoreInviteDriverAsset',
                'store\assets\StoreSignupStepTwoAsset',
                'store\assets\TopNavigationAsset',
                'store\assets\TrackingAsset',
                'store\assets\TrackingRunsAsset',
                'store\assets\UserAsset',
                'store\widgets\Timepicker\assets\TimepickerAsset',
                'store\widgets\UserInvite\assets\UserInviteAsset',
                'store\widgets\Address\assets\AddressAsset',
                'store\widgets\Dashboard\assets\DonutChartAsset',
                'store\widgets\DriverSearch\assets\DriverSearchAsset',
                'store\widgets\ShiftView\assets\ShiftViewAsset',
                'store\widgets\ShiftViewApplicants\assets\ShiftViewApplicantsAsset',
                'store\widgets\ShiftViewDriverAccepted\assets\ShiftViewDriverAcceptedAsset',
                'store\widgets\StoreInviteDriverSearch\assets\StoreInviteDriverSearchAsset',
                'store\widgets\StoreInviteDriverSelected\assets\StoreInviteDriverSelectedAsset',
                'store\widgets\StoreSwitch\assets\StoreSelectAsset',
                'store\widgets\ShiftForm\assets\ShiftFormAsset',
                'fedemotta\datatables\DataTablesAsset',
                'kartik\base\WidgetAsset',
                'kartik\rating\StarRatingAsset',
                'kartik\base\Html5InputAsset',
                'kartik\base\AnimateAsset',
                'kartik\base\PluginAssetBundle',
//        'store\widgets\Timepicker\assets\BowerTimepickerAsset',
            ],
        ],
    ],
    // Asset manager configuration:
    'assetManager' => [
        'basePath' => '@store/web/assets',
        'baseUrl' => '@store/web/assets',
        'appendTimestamp' => false,
        'hashCallback' => function ($path) {
            return hash('md4', $path) . "-" . \Yii::$app->params['image-build-time'];
        }
    ],
];