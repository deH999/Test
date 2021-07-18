


//Создать массив из 5 дат. Скриптом определить сколько дней находится в пределах между двумя соседними датами

<!-- date = [ '31-12-2018', '16-01-2019', '20-02-2019', '21-02-2019', '08-03-2019' ];

for ($i = 0; $i + 1 < count($date); $i++) {
    $startDate = new DateTime($date[$i]);
    $endDate = new DateTime($date[$i + 1]);
    $int = $startDate->diff($endDate);
    echo '<h5>' . $date[$i] . ' - ' . $date[$i + 1] . ' - ' . $int->format('%d days') . '</h5>';
}
 -->



//В массиве есть 10 элементов с такими ключами: type, value. Вывести 10 записей с type и value, записанными в каждом элементе.
<!-- $Inputs = [
    ['type' => 'text',
        'value' => 'Text1'
    ],
    [
        'type' => 'radio',
        'value' => 'Radio1'
    ],
    [
        'type' => 'checkbox',
        'value' => 'Checkbox1'
    ],
    [
        'type' => 'button',
        'value' => 'Button1'
    ],
    [
        'type' => 'text',
        'value' => 'Text2'
    ],
        [
        'type' => 'text',
        'value' => 'Text3'
    ],

    [
        'type' => 'radio',
        'value' => 'Radio2'
    ],
    [
        'type' => 'radio',
        'value' => 'Radio3'
    ],
    [
        'type' => 'checkbox',
        'value' => 'Checkbox2'
    ],
    [
        'type' => 'button',
        'value' => 'Button2'
    ]
];

    for($i=0;$i<count($Inputs);$i++){

        foreach ($Inputs[$i] as $type => $value){
            echo '<input '.$type . ' = "' . $value .'" ';
        }
        echo '>';
    }
 
-->


