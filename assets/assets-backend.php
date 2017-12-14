<?php
/**
 * Configuration file for the "yii asset" console command.
 */

require(__DIR__ . '/assets-classes.php');

Yii::setAlias('@web', '@backend/web');

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
        'backend\assets\AppAsset',
        'backend\assets\BWSStoreCreateAsset',
        'backend\assets\CompanyStoreCreateAsset',
        'backend\assets\CompanyStoreUpdateAsset',
        'backend\assets\CreateStoreAsset',
        'backend\assets\DashboardAssets',
        'backend\assets\DriverExportAsset',
        'backend\assets\ModalAssets',
        'backend\assets\RoamerAssets',
        'backend\assets\RoamingHQAssets',
        'backend\assets\RoamingRegionsAssets',
        'backend\assets\StoreAsset',
        'backend\assets\SupportAssets',
        'backend\assets\VerificationAssets',
        'fedemotta\datatables\DataTablesAsset',
        'fedemotta\datatables\DataTablesBootstrapAsset',
        'fedemotta\datatables\DataTablesTableToolsAsset',
        'kartik\base\WidgetAsset',
        'kartik\rating\StarRatingAsset',
        'kartik\base\Html5InputAsset',
        'kartik\base\AnimateAsset',
        'kartik\base\PluginAssetBundle',
//        'store\widgets\Timepicker\assets\BowerTimepickerAsset',
    ],
    // Asset bundle for compression output:
    'targets' => [
        'backend' => [
            'class' => 'yii\web\AssetBundle',
            'sourcePath' => '@common/assetFiles/',
            'basePath' => '@backend/web/assets',
            'baseUrl' => '@backend/web/assets',
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
                'backend\assets\AppAsset',
                'backend\assets\BWSStoreCreateAsset',
                'backend\assets\CompanyStoreCreateAsset',
                'backend\assets\CompanyStoreUpdateAsset',
                'backend\assets\CreateStoreAsset',
                'backend\assets\DashboardAssets',
                'backend\assets\DriverExportAsset',
                'backend\assets\ModalAssets',
                'backend\assets\RoamerAssets',
                'backend\assets\RoamingHQAssets',
                'backend\assets\RoamingRegionsAssets',
                'backend\assets\StoreAsset',
                'backend\assets\SupportAssets',
                'backend\assets\VerificationAssets',
                'fedemotta\datatables\DataTablesAsset',
                'fedemotta\datatables\DataTablesBootstrapAsset',
                'fedemotta\datatables\DataTablesTableToolsAsset',
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
        'basePath' => '@backend/web/assets',
        'baseUrl' => '@backend/web/assets',
        'appendTimestamp' => false,
        'hashCallback' => function ($path) {
            return hash('md4', $path) . "-" . \Yii::$app->params['image-build-time'];
        }
    ],
];