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
        'common\assets\AppAsset',
        'driver\assets\BootstrapAsset',
        'driver\assets\TopNavigationAsset',
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'yii\widgets\ActiveFormAsset',
        'fedemotta\datatables\DataTablesAsset',
        'common\assets\GoogleMapPlacesAsset'

    ],
    // Asset bundle for compression output:
    'targets' => [
        'driver' => [
            'class' => 'yii\web\AssetBundle',
            'sourcePath' => '@common/assetFiles/',
            'basePath' => '@driver/web/assets',
            'baseUrl' => '@driver/web/assets',
//            'js' => 'js/all-driver.js', // TODO: No need for one asset file now
//            'css' => 'css/all-driver.css', // TODO: No need for one asset file now
            'depends' => [
                'common\assets\AppAsset',
                'driver\assets\BootstrapAsset',
                'driver\assets\TopNavigationAsset',
                'yii\web\YiiAsset',
                'yii\web\JqueryAsset',
                'yii\jui\JuiAsset',
                'yii\widgets\ActiveFormAsset',
                'fedemotta\datatables\DataTablesAsset',
                'common\assets\GoogleMapPlacesAsset'
            ],
        ],
    ],
    // Asset manager configuration:
    'assetManager' => [
        'basePath' => '@driver/web/assets',
        'baseUrl' => '@driver/web/assets',
        'appendTimestamp' => false,
        'hashCallback' => function ($path) {
            return hash('md4', $path) . "-" . \Yii::$app->params['image-build-time'];
        }
    ],
];