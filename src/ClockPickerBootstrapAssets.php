<?php


namespace ziya\ClockPicker;


use yii\web\YiiAsset;

class ClockPickerBootstrapAssets extends YiiAsset
{
    public $sourcePath = '@vendor/ziya/clock-picker/src/assets/dist';
    public $js = [
        'bootstrap-clockpicker.min.js'
    ];
    public $css = [
        'bootstrap-clockpicker.min.css'
    ];
}