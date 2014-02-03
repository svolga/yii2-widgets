<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2013
 * @package yii2-widgets
 * @version 1.0.0
 */

namespace kartik\widgets;

use Yii;
use yii\web\AssetBundle;

/**
 * Asset bundle for Typeahead Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class TypeaheadAsset extends AssetBundle {

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init() {
        $this->sourcePath = __DIR__ . '/../assets';
        $this->css = YII_DEBUG ? ['css/typeahead.css'] : ['css/typeahead.min.css'];
        $this->js = YII_DEBUG ? ['js/typeahead.js', 'js/hogan.js'] : ['js/typeahead.min.js', 'js/hogan.min.js'];
        parent::init();
    }

}
