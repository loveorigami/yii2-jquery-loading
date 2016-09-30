<?php
namespace lo\widgets\loading;

use yii\web\AssetBundle;

class JqueryLoadingAsset extends AssetBundle{

    public $sourcePath = '@vendor/bower/jquery-loading';
	
    public $css = [
        'dist/jquery.loading.css'
    ];
	
    public $js = [
        'dist/jquery.loading.js'
    ];
	
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}