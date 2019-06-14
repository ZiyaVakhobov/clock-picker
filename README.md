# clock-picker
Yii2 Clock Picker
```
composer require ziya/clock-picker
```
###Use with Active Form
```
<?= $form->field($model,'time')->widget(ClockPicker::class,[
    'bootstrap' => false, // with bootstrap assets if true or just jquery is false
    'vibrate' => true, //
    'autoClose' => true,
    'doneText' => false,
    'addon' => [
        'tag'=>'span',
        'content'=>'',
        'options'=> [
            'class'=>'glyphicon glyphicon-time'
        ]
    ],
    'pluginOptions' => [
        'init' => "console.log('init')",
        'beforeShow' => "console.log('beforeShow')",
        'afterShow' => "console.log('afterShow')",
        'beforeHide' => "console.log('beforeHide')",
        'afterHide' => "console.log('afterHide')",
        'beforeHourSelect' => "console.log('beforeHourSelect')",
        'afterHourSelect' => "console.log('afterHourSelect')",
        'beforeDone' => "console.log('beforeDone')",
        'afterDone' => "console.log('afterDone')",
    ],   
    'align' => 'right',
    'placement' => 'bottom'
])?>
```
### Use as single widget
```
<?php
        echo ClockPicker::widget(
            [
                'attribute' => 'username',
                'model' => $model,
                'options' => [
                    'type'=>'time'
                ],
                'bootstrap' => false,
                'vibrate' => true,
                'autoClose' => true,
                'doneText' => false,
                'addon' => [
                    'tag'=>'span',
                    'content'=>'',
                    'options'=> [
                        'class'=>'glyphicon glyphicon-time'
                    ]
                ],
                'pluginOptions' => [
                    'init' => "console.log('init')",
                    'beforeShow' => "console.log('beforeShow')",
                    'afterShow' => "console.log('afterShow')",
                    'beforeHide' => "console.log('beforeHide')",
                    'afterHide' => "console.log('afterHide')",
                    'beforeHourSelect' => "console.log('beforeHourSelect')",
                    'afterHourSelect' => "console.log('afterHourSelect')",
                    'beforeDone' => "console.log('beforeDone')",
                    'afterDone' => "console.log('afterDone')",
                ],

                'align' => 'right',
                'placement' => 'bottom'
            ]
        );
        ?>
```
