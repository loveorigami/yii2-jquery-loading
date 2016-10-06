<?php
namespace lo\widgets\loading;

use yii\web\AssetBundle;

class JqueryLoadingAsset extends AssetBundle{

    public $sourcePath = '@bower/jquery-loading/dist';
	
    public $css = [
        'jquery.loading.css'
    ];
	
    public $js = [
        'jquery.loading.js'
    ];
	
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}