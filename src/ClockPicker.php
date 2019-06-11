<?php


namespace ziya\ClockPicker;


use yii\base\Widget;
use yii\web\View;

class ClockPicker extends Widget
{
    public $bootstrap = true;
    public $name;

    public function init()
    {
        parent::init();
        if ($this->bootstrap) {
            $view = $this->getView();
            ClockPickerBootstrapAssets::register($view);
        } else {
            $view = $this->getView();
            ClockPickerJqueryAssets::register($view);
        }
    }

    public function run()
    {
        $this->getView()->registerJs("
         $('.clockpicker').clockpicker();
        ",View::POS_END);
        return <<<HTML
        <div class="input-group clockpicker">
            <input type="text" name="{$this->name}" class="form-control" value="09:30">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-time"></span>
            </span>
        </div>
HTML;
    }
}