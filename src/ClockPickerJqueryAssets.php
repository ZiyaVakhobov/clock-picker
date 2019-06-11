<?php


namespace ziya\ClockPicker;


use yii\web\YiiAsset;

class ClockPickerJqueryAssets extends YiiAsset
{
    public $sourcePath = '@vendor/ziya/clock-picker/src/assets/dist';
    public $js = [
        'jquery-clockpicker.min.js'
    ];
    public $css = [
        'jquery-clockpicker.min.css'
    ];
}