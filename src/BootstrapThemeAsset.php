<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace yohantoro\yii2\bootstrap3;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap default theme.
 *
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @since 2.0
 */
class BootstrapThemeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $css = [
        'css/bootstrap-theme.css',
    ];
    public $depends = [
        'yohantoro\yii2\bootstrap3\BootstrapAsset',
    ];
}
