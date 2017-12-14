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
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'tracking\assets\TrackingTrackingAsset',
        'tracking\assets\TrackingTrackingJsx',
        'common\assets\GoogleMapPlacesAsset'

    ],
    // Asset bundle for compression output:
    'targets' => [
        'tracking' => [
            'class' => 'yii\web\AssetBundle',
            'sourcePath' => '@common/assetFiles/',
            'basePath' => '@tracking/web/assets',
            'baseUrl' => '@tracking/web/assets',
//            'js' => 'js/all-tracking.js', // TODO: No need for one asset file now
//            'css' => 'css/all-tracking.css', // TODO: No need for one asset file now
            'depends' => [
                'common\assets\AppAsset',
                'yii\web\YiiAsset',
                'yii\web\JqueryAsset',
                'yii\jui\JuiAsset',
                'tracking\assets\TrackingTrackingAsset',
                'tracking\assets\TrackingTrackingJsx',
                'common\assets\GoogleMapPlacesAsset'
            ],
        ],
    ],
    // Asset manager configuration:
    'assetManager' => [
        'basePath' => '@tracking/web/assets',
        'baseUrl' => '@tracking/web/assets',
        'appendTimestamp' => false,
        'hashCallback' => function ($path) {
            return hash('md4', $path) . "-" . \Yii::$app->params['image-build-time'];
        }
    ],
];