<?php
namespace lo\widgets\loading;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class JqueryLoading extends Widget
{
    public $options = [];

    /**
     * Tag Html attributes
     * @var array()
     */
    public $element;

    /**
     * @var array
     */
    private static $default = [
        'stoppable' => true,
        'theme'=> 'light'
    ];

    /**
     * Register jqueryLoading.
     */
    public function run()
    {
        if ($this->element) {
            $this->registerJs();
        }
    }

    /**
     * Register js for ajax notifications
     */
    protected function registerJs()
    {
        $view = $this->getView();
        JqueryLoadingAsset::register($view);
        $options = Json::encode(ArrayHelper::merge(self::$default, $this->options));

        $this->view->registerJs("
            $(document).ajaxStart(function () {
               jQuery('{$this->element}').loading($options);
            });
            $(document).ajaxComplete(function (event, xhr, settings) {
               jQuery('{$this->element}').loading('stop');
            });
        ", $view::POS_END);
    }

}