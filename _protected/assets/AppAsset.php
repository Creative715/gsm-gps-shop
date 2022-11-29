<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'font-awesome-4.7.0/css/font-awesome.min.css',
		'css/animate.min.css',
		'css/bootstrap.min.css',
		'css/style.css',
    ];
    public $js = [
	    'js/jquery-3.2.1.min.js',
            //'js/bootstrap.min.js',
            'js/parallax.js',
            'js/wow.min.js',
            'js/validator.min.js',
            'js/jquery.cookie.js',
            'js/jquery.accordion.js',
            'js/main.js',

    ];
    public $depends = [
       // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
