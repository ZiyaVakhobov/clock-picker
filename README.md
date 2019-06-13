# clock-picker
Yii2 Clock Picker
```
composer require ziya/clock-picker
```
```
<?php
    echo ClockPicker::widget([
        'model' => $model,
        'attribute' => 'time'
    ]);
?>
<?php
    echo ClockPicker::widget([
        'name' => 'time'
    ]);
?>
```
